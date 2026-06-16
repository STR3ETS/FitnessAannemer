import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';
import Lenis from 'lenis';

gsap.registerPlugin(ScrollTrigger);

// ===== UTM Tracking (sitebreed) =====
(function () {
    const utmParams = ['utm_source', 'utm_medium', 'utm_campaign', 'utm_term', 'utm_content'];
    const url = new URL(window.location.href);
    const hasUtm = utmParams.some(p => url.searchParams.has(p));

    if (hasUtm) {
        utmParams.forEach(p => {
            const val = url.searchParams.get(p);
            if (val) {
                document.cookie = `${p}=${encodeURIComponent(val)};path=/;max-age=${60 * 60 * 24 * 30};SameSite=Lax`;
            }
        });
    }

    // Fill hidden UTM fields if present on page
    function fillUtmFields() {
        utmParams.forEach(p => {
            const field = document.querySelector(`input[name="${p}"]`);
            if (field) {
                const match = document.cookie.match(new RegExp('(?:^|; )' + p + '=([^;]*)'));
                if (match) field.value = decodeURIComponent(match[1]);
            }
        });
    }

    if (document.readyState === 'loading') {
        document.addEventListener('DOMContentLoaded', fillUtmFields);
    } else {
        fillUtmFields();
    }
})();

// ===== Lenis smooth scroll =====
const lenis = new Lenis({
    duration: 1.2,
    easing: (t) => Math.min(1, 1.001 - Math.pow(2, -10 * t)),
    smoothWheel: true,
});

lenis.on('scroll', ScrollTrigger.update);

gsap.ticker.add((time) => {
    lenis.raf(time * 1000);
});
gsap.ticker.lagSmoothing(0);

document.addEventListener('DOMContentLoaded', () => {
    // ===== Fixed header: glass on scroll, hide down / show up =====
    const header = document.getElementById('main-header');
    if (header) {
        let lastScrollY = 0;
        let ticking = false;

        // Collect light-background sections for header color swap
        const lightSections = document.querySelectorAll('.horizontal-section, [data-header-light]');

        function updateHeader() {
            const scrollY = window.scrollY;

            // Glass effect after scrolling past 50px
            if (scrollY > 50) {
                header.classList.add('is-scrolled');
            } else {
                header.classList.remove('is-scrolled');
            }

            // Detect if header overlaps a light section
            const headerBottom = header.getBoundingClientRect().bottom;
            let onLight = false;
            lightSections.forEach(sec => {
                const rect = sec.getBoundingClientRect();
                if (rect.top < headerBottom && rect.bottom > 0) {
                    onLight = true;
                }
            });
            if (onLight) {
                header.classList.add('is-light');
            } else {
                header.classList.remove('is-light');
            }

            // Hide on scroll down, show on scroll up (only after 200px)
            if (scrollY > 200) {
                if (scrollY > lastScrollY) {
                    header.classList.add('is-hidden');
                } else {
                    header.classList.remove('is-hidden');
                }
            } else {
                header.classList.remove('is-hidden');
            }

            lastScrollY = scrollY;
            ticking = false;
        }

        window.addEventListener('scroll', () => {
            if (!ticking) {
                requestAnimationFrame(updateHeader);
                ticking = true;
            }
        }, { passive: true });
    }

    // (reviews marquee removed - now using cinematic testimonial carousel)

    // ===== Fullscreen mobile menu =====
    const mobileToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');
    const iconOpen = document.getElementById('menu-icon-open');
    const iconClose = document.getElementById('menu-icon-close');
    let menuOpen = false;

    if (mobileToggle && mobileMenu) {
        mobileToggle.addEventListener('click', () => {
            menuOpen = !menuOpen;
            if (menuOpen) {
                mobileMenu.classList.remove('invisible', 'pointer-events-none');
                mobileMenu.classList.add('opacity-100');
                document.body.style.overflow = 'hidden';
                iconOpen.classList.add('opacity-0', 'scale-75');
                iconClose.classList.remove('opacity-0', 'scale-75');
                iconClose.classList.add('opacity-100', 'scale-100');
                // Stagger animate nav links
                mobileMenu.querySelectorAll('.mobile-nav-link').forEach((el, i) => {
                    el.style.opacity = '0';
                    el.style.transform = 'translateY(20px)';
                    setTimeout(() => {
                        el.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
                        el.style.opacity = '1';
                        el.style.transform = 'translateY(0)';
                    }, 80 + i * 50);
                });
            } else {
                mobileMenu.classList.remove('opacity-100');
                mobileMenu.classList.add('invisible', 'pointer-events-none');
                document.body.style.overflow = '';
                iconOpen.classList.remove('opacity-0', 'scale-75');
                iconClose.classList.add('opacity-0', 'scale-75');
                iconClose.classList.remove('opacity-100', 'scale-100');
            }
        });

        // Close menu on link click
        mobileMenu.querySelectorAll('a').forEach(link => {
            link.addEventListener('click', () => {
                if (menuOpen) mobileToggle.click();
            });
        });
    }

    // ===== Hero fade-in (subtitle, buttons, stats) =====
    const heroFades = document.querySelectorAll('.hero-fade');
    if (heroFades.length) {
        gsap.set(heroFades, { y: 25, opacity: 0 });
        gsap.to(heroFades, {
            y: 0,
            opacity: 1,
            stagger: 0.15,
            duration: 0.8,
            ease: 'power3.out',
            delay: 1.8, // after typewriter finishes
        });
    }

    const heading = document.getElementById('hero-heading');
    if (heading) {
        const segments = [
            { text: 'Concept, design, ', primary: false },
            { text: 'realisatie', primary: true },
            { text: '.', primary: false },
            { text: '\n', primary: false },
            { text: 'Wij bouwen jouw ', primary: false },
            { text: 'droom-gym', primary: true },
            { text: '.', primary: false },
        ];

        let segmentIndex = 0;
        let charIndex = 0;
        let currentSpan = null;

        function type() {
            if (segmentIndex >= segments.length) return;

            const segment = segments[segmentIndex];

            if (segment.text === '\n') {
                heading.appendChild(document.createElement('br'));
                segmentIndex++;
                setTimeout(type, 80);
                return;
            }

            if (charIndex === 0) {
                currentSpan = document.createElement('span');
                if (segment.primary) {
                    currentSpan.className = 'text-primary';
                }
                heading.appendChild(currentSpan);
            }

            currentSpan.textContent += segment.text[charIndex];
            charIndex++;

            if (charIndex >= segment.text.length) {
                segmentIndex++;
                charIndex = 0;
            }

            setTimeout(type, 45);
        }

        setTimeout(type, 400);
    }

    // Video carousel auto-slide (infinite loop, 9 cards)
    const videoCards = document.querySelectorAll('.video-card');
    if (videoCards.length) {
        const total = videoCards.length; // 9
        let activeIndex = 0;
        const half = Math.floor(total / 2); // 4
        const cardStep = 190;

        // offset 0=active, 1/2/3=visible, 4=off-screen (overlay=1 = invisible)
        const overlayOpacities = [0, 0.25, 0.50, 0.75, 1];
        const zIndexes = [10, 9, 8, 7, 0];

        const prevOffsets = [];

        function getOffset(i) {
            let offset = ((i - activeIndex) % total + total) % total;
            if (offset > half) offset -= total;
            return offset;
        }

        function applyCard(card, offset) {
            const absOffset = Math.abs(offset);
            const overlay = card.querySelector('.video-overlay');
            const video = card.querySelector('video');

            card.style.transform = `translate(calc(-50% + ${offset * cardStep}px), -50%)`;

            if (absOffset === 0) {
                card.classList.add('is-active');
                video.currentTime = 0;
                video.play();
            } else {
                card.classList.remove('is-active');
                video.pause();
            }

            overlay.style.opacity = absOffset < overlayOpacities.length
                ? overlayOpacities[absOffset]
                : 1;

            card.style.zIndex = absOffset < zIndexes.length
                ? zIndexes[absOffset]
                : 0;
        }

        function updateCarousel() {
            videoCards.forEach((card, i) => {
                const offset = getOffset(i);
                const prev = prevOffsets[i];

                // Wrap: card jumps from ±4 to ∓4 (both off-screen, invisible)
                if (prev !== undefined && Math.abs(offset - prev) > half) {
                    card.style.transition = 'none';
                    applyCard(card, offset);
                    card.offsetHeight;
                    card.style.transition = '';
                } else {
                    applyCard(card, offset);
                }

                prevOffsets[i] = offset;
            });
        }

        // Initial position without transition
        videoCards.forEach((card, i) => {
            card.style.transition = 'none';
            const offset = getOffset(i);
            applyCard(card, offset);
            prevOffsets[i] = offset;
        });
        videoCards[0].offsetHeight;
        videoCards.forEach(card => card.style.transition = '');

        setInterval(() => {
            activeIndex = (activeIndex + 1) % total;
            updateCarousel();
        }, 5000);
    }

    // ===== Social/video section fade-in =====
    const socialFades = document.querySelectorAll('.social-fade');
    if (socialFades.length) {
        gsap.set(socialFades, { y: 40, opacity: 0 });
        ScrollTrigger.create({
            trigger: '#social-section',
            start: 'top 75%',
            onEnter: () => {
                gsap.to(socialFades, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.12,
                    duration: 0.8,
                    ease: 'power3.out',
                });
            },
            once: true,
        });
    }

    // Horizontal scroll section
    const track = document.querySelector('.horizontal-track');
    if (track && window.innerWidth >= 1024) {
        // Desktop: GSAP horizontal pinned scroll
        const getScrollDistance = () => track.scrollWidth - window.innerWidth;

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: '.horizontal-section',
                pin: true,
                scrub: 1,
                end: () => '+=' + getScrollDistance(),
                invalidateOnRefresh: true,
            },
        });

        tl.to(track, {
            x: () => -getScrollDistance(),
            ease: 'none',
        }, 0);

        // "Black hole" reveal: content gets pulled into place from the right
        const panels = gsap.utils.toArray('.horizontal-panel');
        panels.forEach((panel, i) => {
            if (i === 0) return; // intro is already in view

            const inner = panel.querySelector('.max-w-7xl');
            if (!inner) return;

            // Main content blocks (text side + video side)
            gsap.from(gsap.utils.toArray(inner.children), {
                x: 400,
                opacity: 0,
                scale: 0.7,
                rotation: 4,
                stagger: 0.15,
                scrollTrigger: {
                    trigger: panel,
                    containerAnimation: tl,
                    start: 'left 85%',
                    end: 'left 25%',
                    scrub: 1,
                },
            });

            // Background step number - parallax, slides in faster
            const bgNumber = panel.querySelector(':scope > span');
            if (bgNumber) {
                gsap.from(bgNumber, {
                    x: 600,
                    opacity: 0,
                    scrollTrigger: {
                        trigger: panel,
                        containerAnimation: tl,
                        start: 'left 95%',
                        end: 'left 40%',
                        scrub: 1,
                    },
                });
            }
        });

        // SVG sketch progressive draw - per panel
        panels.forEach((panel, i) => {
            const drawLines = gsap.utils.toArray(panel.querySelectorAll('.draw-line'));
            if (!drawLines.length) return;

            drawLines.forEach(el => {
                const len = el.getTotalLength();
                gsap.set(el, { strokeDasharray: len, strokeDashoffset: len });
            });

            gsap.to(drawLines, {
                strokeDashoffset: 0,
                stagger: 0.015,
                scrollTrigger: {
                    trigger: panel,
                    containerAnimation: tl,
                    start: i === 0 ? 'center 60%' : 'left 75%',
                    end: i === 0 ? 'center -20%' : 'left 10%',
                    scrub: 1,
                },
            });
        });
    } else if (track) {
        // Mobile: simple fade-in for each panel as it scrolls into view
        const panels = gsap.utils.toArray('.horizontal-panel');
        panels.forEach((panel) => {
            const inner = panel.querySelector('.max-w-7xl');
            if (!inner) return;

            gsap.from(gsap.utils.toArray(inner.children), {
                y: 40,
                opacity: 0,
                stagger: 0.1,
                duration: 0.8,
                ease: 'power2.out',
                scrollTrigger: {
                    trigger: panel,
                    start: 'top 80%',
                    once: true,
                },
            });
        });
    }

    // ===== Brands Section =====
    const brandsSection = document.querySelector('.brands-section');
    if (brandsSection) {
        // Heading + misc fade-ups
        const brandsFades = document.querySelectorAll('.brands-fade');
        gsap.set(brandsFades, { y: 60, opacity: 0 });
        ScrollTrigger.create({
            trigger: '.brands-section',
            start: 'top 75%',
            onEnter: () => {
                gsap.to(brandsFades, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.12,
                    duration: 1,
                    ease: 'power3.out',
                });
            },
            once: true,
        });

        // Stats counter animation
        document.querySelectorAll('.brand-counter').forEach(counter => {
            const target = parseInt(counter.dataset.target, 10);

            gsap.to(counter, {
                innerText: target,
                duration: 2,
                ease: 'power2.out',
                snap: { innerText: 1 },
                scrollTrigger: {
                    trigger: counter,
                    start: 'top 85%',
                },
                modifiers: {
                    innerText: v => {
                        const n = Math.round(parseFloat(v));
                        return n >= 1000 ? n.toLocaleString('nl-NL') : n;
                    },
                },
            });
        });

    }

    // ===== Diensten Section =====
    const dienstCards = document.querySelectorAll('.dienst-card');
    if (dienstCards.length) {
        const dienstenFades = document.querySelectorAll('.diensten-fade');
        gsap.set(dienstenFades, { y: 40, opacity: 0 });
        gsap.set(dienstCards, { y: 40, opacity: 0 });

        ScrollTrigger.create({
            trigger: '.diensten-section',
            start: 'top 75%',
            onEnter: () => {
                gsap.to(dienstenFades, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.1,
                    duration: 0.8,
                    ease: 'power3.out',
                });
                gsap.to(dienstCards, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.08,
                    duration: 0.6,
                    ease: 'power3.out',
                    delay: 0.2,
                });
            },
            once: true,
        });
    }

    // ===== Projects Section - Sticky Scroll Showcase =====
    const projectsSection = document.querySelector('.projects-section');
    if (projectsSection) {
        const items = document.querySelectorAll('.project-item');

        // Heading entrance (both mobile & desktop)
        const projectHeadings = document.querySelectorAll('.project-heading');
        gsap.set(projectHeadings, { y: 40, opacity: 0 });
        ScrollTrigger.create({
            trigger: '.projects-section',
            start: 'top 80%',
            onEnter: () => {
                gsap.to(projectHeadings, {
                    y: 0,
                    opacity: 1,
                    stagger: 0.12,
                    duration: 1,
                    ease: 'power3.out',
                });
            },
            once: true,
        });

        if (window.innerWidth >= 1024) {
            // Desktop: Sticky video showcase with crossfade
            const projectShowcase = document.querySelector('.project-showcase');
            const vids = document.querySelectorAll('.project-vid');
            const dots = document.querySelectorAll('.project-dot');
            const counter = document.querySelector('.project-counter');
            let activeProject = -1;

            // Showcase fade-in (no scale/transform - that breaks sticky)
            gsap.set('.project-showcase', { opacity: 0 });
            ScrollTrigger.create({
                trigger: '.project-showcase',
                start: 'top 85%',
                onEnter: () => {
                    gsap.to('.project-showcase', {
                        opacity: 1,
                        duration: 1,
                        ease: 'power2.out',
                    });
                },
                once: true,
            });

            function switchProject(idx) {
                if (idx === activeProject) return;

                vids.forEach((vid, v) => {
                    if (v === idx) {
                        gsap.to(vid, { opacity: 1, duration: 0.7, ease: 'power2.inOut' });
                        vid.currentTime = 0;
                        vid.play();
                    } else {
                        gsap.to(vid, { opacity: 0, duration: 0.7, ease: 'power2.inOut' });
                    }
                });

                dots.forEach((dot, d) => {
                    if (d === idx) {
                        gsap.to(dot, { height: 32, duration: 0.4, ease: 'power2.out' });
                        dot.classList.add('bg-primary');
                        dot.classList.remove('bg-white/20');
                    } else {
                        gsap.to(dot, { height: 8, duration: 0.4, ease: 'power2.out' });
                        dot.classList.remove('bg-primary');
                        dot.classList.add('bg-white/20');
                    }
                });

                if (counter) {
                    gsap.to(counter, {
                        opacity: 0, y: -20, duration: 0.2, ease: 'power2.in',
                        onComplete: () => {
                            counter.textContent = String(idx + 1).padStart(2, '0');
                            gsap.fromTo(counter,
                                { opacity: 0, y: 20 },
                                { opacity: 0.2, y: 0, duration: 0.3, ease: 'power2.out' }
                            );
                        },
                    });
                }

                activeProject = idx;
            }

            items.forEach((item, i) => {
                ScrollTrigger.create({
                    trigger: item,
                    start: 'top 60%',
                    end: 'bottom 40%',
                    onToggle: ({ isActive }) => {
                        if (isActive) switchProject(i);
                    },
                });
            });

            if (vids.length) {
                vids[0].play();
                switchProject(0);
            }
        } else {
            // Mobile: simple fade-in for each project item
            items.forEach((item) => {
                gsap.from(item, {
                    y: 40,
                    opacity: 0,
                    duration: 0.8,
                    ease: 'power2.out',
                    scrollTrigger: {
                        trigger: item,
                        start: 'top 85%',
                        once: true,
                    },
                });
            });
        }
    }

    // ===== Reviews Section - Split Editorial =====
    const reviewShowcase = document.querySelector('.review-showcase');
    if (reviewShowcase) {
        const slides = document.querySelectorAll('.review-slide');
        const fills = document.querySelectorAll('.review-progress-fill');
        const bars = document.querySelectorAll('.review-progress-bar');
        const cards = document.querySelectorAll('.review-card-sm');
        const total = slides.length;
        let currentReview = 0;
        let reviewInterval = null;
        const reviewDuration = 6;

        // Heading + stars entrance
        gsap.from('.reviews-fade', {
            y: 50,
            opacity: 0,
            stagger: 0.12,
            duration: 0.8,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.reviews-section',
                start: 'top 70%',
            },
        });

        // Showcase entrance
        gsap.from('.review-showcase', {
            y: 60,
            opacity: 0,
            duration: 1,
            ease: 'power3.out',
            scrollTrigger: {
                trigger: '.reviews-section',
                start: 'top 60%',
            },
        });


        function updateCards(idx) {
            const prev = (idx - 1 + total) % total;
            const next = (idx + 1) % total;
            const visible = [prev, idx, next];

            cards.forEach((card, i) => {
                if (!visible.includes(i)) {
                    card.style.display = 'none';
                } else {
                    card.style.display = '';
                    if (i === idx) {
                        card.classList.remove('bg-white/[0.03]', 'border-white/[0.06]');
                        card.classList.add('bg-white/[0.07]', 'border-primary/40');
                    } else {
                        card.classList.remove('bg-white/[0.07]', 'border-primary/40');
                        card.classList.add('bg-white/[0.03]', 'border-white/[0.06]');
                    }
                }
            });
        }

        // Set initial card visibility (only show 3)
        updateCards(0);

        function showReview(idx) {
            if (idx === currentReview) return;

            // Kill all running tweens on slides to prevent overlap
            slides.forEach(s => gsap.killTweensOf(s));
            fills.forEach(f => gsap.killTweensOf(f));

            // Hide all slides immediately
            slides.forEach((s, i) => {
                if (i !== idx) gsap.set(s, { opacity: 0, y: 0 });
            });

            // Reset all fills
            fills.forEach(f => gsap.set(f, { scaleX: 0 }));

            currentReview = idx;

            // Fade in the target slide
            gsap.fromTo(slides[currentReview],
                { opacity: 0, y: 30 },
                { opacity: 1, y: 0, duration: 0.6, ease: 'power2.out' }
            );

            // Animate progress bar fill
            gsap.fromTo(fills[currentReview],
                { scaleX: 0 },
                { scaleX: 1, duration: reviewDuration, ease: 'none' }
            );

            // Highlight active card
            updateCards(idx);
        }

        function startAutoplay() {
            reviewInterval = setInterval(() => {
                const next = (currentReview + 1) % total;
                showReview(next);
            }, reviewDuration * 1000);
        }

        // Initial state: first fill animates
        gsap.fromTo(fills[0], { scaleX: 0 }, { scaleX: 1, duration: reviewDuration, ease: 'none' });
        startAutoplay();

        // Click progress bars to jump
        bars.forEach((bar, i) => {
            bar.addEventListener('click', () => {
                if (i === currentReview) return;
                clearInterval(reviewInterval);
                showReview(i);
                startAutoplay();
            });
        });

        // Click review cards to jump
        cards.forEach((card, i) => {
            card.addEventListener('click', () => {
                if (i === currentReview) return;
                clearInterval(reviewInterval);
                showReview(i);
                startAutoplay();
            });
        });
    }

    // ===== Project arc carousel =====
    const arcCards = document.querySelectorAll('.project-arc-card');
    if (arcCards.length) {
        const arcTotal = arcCards.length; // 9
        const arcStep = 12; // degrees between each card
        const arcHalf = Math.floor(arcTotal / 2); // 4
        let arcActive = 0;
        const arcPrevOffsets = [];

        function getArcOffset(i) {
            let offset = ((i - arcActive) % arcTotal + arcTotal) % arcTotal;
            if (offset > arcHalf) offset -= arcTotal;
            return offset;
        }

        function applyArcCard(card, offset) {
            const absOffset = Math.abs(offset);
            const overlay = card.querySelector('.project-arc-overlay');
            const video = card.querySelector('video');

            card.style.transform = `rotate(${offset * arcStep}deg)`;
            card.style.zIndex = arcTotal - absOffset;

            if (absOffset === 0) {
                card.classList.add('is-active');
                overlay.style.opacity = 0;
                video.currentTime = 0;
                video.play();
            } else {
                card.classList.remove('is-active');
                overlay.style.opacity = Math.min(0.15 + absOffset * 0.18, 0.85);
                video.pause();
            }
        }

        function updateArc() {
            arcCards.forEach((card, i) => {
                const offset = getArcOffset(i);
                const prev = arcPrevOffsets[i];

                // Wrap: card jumps from ±4 to ∓4 (both far edges, hidden)
                if (prev !== undefined && Math.abs(offset - prev) > arcHalf) {
                    card.style.transition = 'none';
                    applyArcCard(card, offset);
                    card.offsetHeight;
                    card.style.transition = '';
                } else {
                    applyArcCard(card, offset);
                }

                arcPrevOffsets[i] = offset;
            });
        }

        // Initial position without transition
        arcCards.forEach((card, i) => {
            card.style.transition = 'none';
            const offset = getArcOffset(i);
            applyArcCard(card, offset);
            arcPrevOffsets[i] = offset;
        });
        arcCards[0].offsetHeight;
        arcCards.forEach(card => card.style.transition = '');

        setInterval(() => {
            arcActive = (arcActive + 1) % arcTotal;
            updateArc();
        }, 4000);
    }

    // ===== Scroll-velocity marquee boost =====
    const marqueeTweens = [];

    // Breaking news ticker (2 copies → translate -50%)
    const newsTicker = document.querySelector('.marquee');
    if (newsTicker) {
        newsTicker.style.animation = 'none';
        const dist = newsTicker.scrollWidth / 2;
        marqueeTweens.push(gsap.to(newsTicker, {
            x: -dist,
            duration: 20,
            ease: 'none',
            repeat: -1,
        }));
    }

    // Brand logo marquees (3 copies → translate -33.33%)
    document.querySelectorAll('.brands-marquee').forEach(el => {
        const isReverse = el.classList.contains('brands-marquee--reverse');
        el.style.animation = 'none';
        const dist = el.scrollWidth / 3;

        if (isReverse) {
            gsap.set(el, { x: -dist });
            marqueeTweens.push(gsap.to(el, {
                x: 0,
                duration: 40,
                ease: 'none',
                repeat: -1,
            }));
        } else {
            marqueeTweens.push(gsap.to(el, {
                x: -dist,
                duration: 35,
                ease: 'none',
                repeat: -1,
            }));
        }
    });

    // ===== Inrichting & Planning: hero =====
    const ipHeroEls = document.querySelectorAll('.ip-hero-el');
    if (ipHeroEls.length) {
        gsap.set(ipHeroEls, { y: 30, opacity: 0 });
        gsap.to(ipHeroEls, {
            y: 0,
            opacity: 1,
            stagger: 0.12,
            duration: 0.8,
            ease: 'power3.out',
            delay: 0.2,
        });
    }

    // ===== Diensten pages: content blocks =====
    document.querySelectorAll('#ip-zonering, #ip-apparatuur, #li-section1, #li-section2, #or-section1, #or-section2, #lf-section1, #lf-section2, #opl-section1, #opl-section2, #opl-section3, #app-section1, #app-section2, #app-section3, #fw-section1, #fw-section2, #fw-section3, #vm-section1, #vm-section2, #vm-section3, #ti-section1, #ti-section2, #ti-section3, #gr-section1, #gr-section2, #gr-section3, #om-section1, #om-section2, #om-section3, #pj-section1, #pj-section2, #pj-section3, #pd-section1, #pd-section2, #pd-section3, #vd-section1, #vd-section2, #vd-section3, #td-section1, #td-section2, #td-section3, #gd-section1, #gd-section2, #gd-section3, #oo-section1, #oo-section2, #oo-section3').forEach((section) => {
        const text = section.querySelector('.ip-block-text');
        const media = section.querySelector('.ip-block-media');
        if (!text && !media) return;

        // Determine direction: text first in DOM = text-left, otherwise text-right
        const textFirst = text && media && text.compareDocumentPosition(media) & Node.DOCUMENT_POSITION_FOLLOWING;

        if (text) gsap.set(text, { x: textFirst ? -50 : 50, opacity: 0 });
        if (media) gsap.set(media, { x: textFirst ? 50 : -50, opacity: 0 });

        ScrollTrigger.create({
            trigger: section,
            start: 'top 75%',
            onEnter: () => {
                if (text) gsap.to(text, { x: 0, opacity: 1, duration: 0.8, ease: 'power3.out' });
                if (media) gsap.to(media, { x: 0, opacity: 1, duration: 0.8, ease: 'power3.out', delay: 0.15 });
            },
            once: true,
        });
    });

    // ===== Diensten pages: process timeline =====
    const ipSteps = document.querySelectorAll('.ip-step');
    if (ipSteps.length) {
        // Heading fade-in
        const ipFades = document.querySelectorAll('.ip-fade');
        const processSection = ipFades.length ? ipFades[0].closest('section') : null;
        gsap.set(ipFades, { y: 30, opacity: 0 });
        if (processSection) {
            ScrollTrigger.create({
                trigger: processSection,
                start: 'top 75%',
                onEnter: () => {
                    gsap.to(ipFades, {
                        y: 0,
                        opacity: 1,
                        stagger: 0.15,
                        duration: 0.8,
                        ease: 'power3.out',
                    });
                },
                once: true,
            });
        }

        // Timeline fill on scroll
        const timelineFill = document.querySelector('.ip-timeline-fill');
        if (timelineFill) {
            const fillSection = timelineFill.closest('section');
            gsap.to(timelineFill, {
                height: '100%',
                ease: 'none',
                scrollTrigger: {
                    trigger: fillSection,
                    start: 'top 60%',
                    end: 'bottom 40%',
                    scrub: 1,
                },
            });
        }

        // Each step: set initial hidden state, then animate on scroll
        ipSteps.forEach((step, i) => {
            const fromLeft = i % 2 === 0;
            const dot = step.querySelector('.ip-dot');
            const content = step.children[0];
            const media = step.querySelector('[class*="lg:pl-16"], [class*="lg:pr-16"]');

            // Set initial state immediately so elements are hidden from the start
            if (dot) gsap.set(dot, { scale: 0, opacity: 0 });
            if (content) gsap.set(content, { x: fromLeft ? -60 : 60, opacity: 0 });
            if (media) gsap.set(media, { x: fromLeft ? 60 : -60, opacity: 0 });

            ScrollTrigger.create({
                trigger: step,
                start: 'top 80%',
                onEnter: () => {
                    if (dot) {
                        gsap.to(dot, { scale: 1, opacity: 1, duration: 0.5, ease: 'back.out(2)' });
                    }
                    if (content) {
                        gsap.to(content, { x: 0, opacity: 1, duration: 0.7, ease: 'power3.out', delay: 0.15 });
                    }
                    if (media) {
                        gsap.to(media, { x: 0, opacity: 1, duration: 0.7, ease: 'power3.out', delay: 0.25 });
                    }
                },
                once: true,
            });
        });
    }

    // ===== Inrichting & Planning: USP cards =====
    const ipUspCards = document.querySelectorAll('.ip-usp-card');
    if (ipUspCards.length) {
        gsap.from('.ip-usp-fade', {
            y: 30,
            opacity: 0,
            stagger: 0.12,
            duration: 0.8,
            ease: 'power3.out',
            scrollTrigger: { trigger: '#ip-usps', start: 'top 75%' },
        });

        ipUspCards.forEach((card, i) => {
            ScrollTrigger.create({
                trigger: card,
                start: 'top 85%',
                onEnter: () => {
                    gsap.fromTo(card,
                        { opacity: 0, y: 50, scale: 0.95 },
                        { opacity: 1, y: 0, scale: 1, duration: 0.6, ease: 'power3.out', delay: (i % 3) * 0.1 }
                    );
                },
                once: true,
            });
        });
    }

    // Boost timeScale based on scroll velocity
    if (marqueeTweens.length) {
        let scrollVelocity = 0;

        ScrollTrigger.create({
            onUpdate: (self) => {
                scrollVelocity = Math.abs(self.getVelocity());
            },
        });

        gsap.ticker.add(() => {
            const target = gsap.utils.clamp(1, 8, 1 + scrollVelocity / 400);
            marqueeTweens.forEach(tw => {
                const cur = tw.timeScale();
                tw.timeScale(cur + (target - cur) * 0.018);
            });
            scrollVelocity *= 0.97;
        });
    }
});
