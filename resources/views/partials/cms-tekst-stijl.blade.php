{{-- Opmaak van tekst uit EazyDash (InSpace). Eigen stijl: de gebouwde css staat in git en hoeft zo niet opnieuw gebouwd. --}}
<style>
    .cms-tekst { color: rgba(6, 9, 15, 0.7); font-size: 1rem; line-height: 1.8; }
    .cms-tekst > :first-child { margin-top: 0; }
    .cms-tekst h2 { font-size: 1.875rem; font-weight: 700; line-height: 1.15; color: #06090f; margin: 3rem 0 1rem; }
    .cms-tekst h3 { font-size: 1.25rem; font-weight: 700; line-height: 1.3; color: #06090f; margin: 2rem 0 0.75rem; }
    .cms-tekst h4 { font-size: 1rem; font-weight: 700; color: #06090f; margin: 1.5rem 0 0.5rem; }
    .cms-tekst p { margin-bottom: 1.25rem; }
    .cms-tekst ul, .cms-tekst ol { margin: 0 0 1.5rem; padding-left: 1.5rem; }
    .cms-tekst ul { list-style: disc; }
    .cms-tekst ol { list-style: decimal; }
    .cms-tekst li { margin-bottom: 0.4rem; }
    .cms-tekst li::marker { color: #52abe2; }
    .cms-tekst a { color: #52abe2; text-decoration: underline; text-underline-offset: 2px; transition: opacity 0.2s; }
    .cms-tekst a:hover { opacity: 0.7; }
    .cms-tekst strong { color: #06090f; font-weight: 600; }
    .cms-tekst img { max-width: 100%; height: auto; border-radius: 1rem; margin: 1.5rem 0; }
    .cms-tekst blockquote { margin: 2rem 0; padding: 1rem 1.5rem; border-left: 4px solid #52abe2; background: rgba(82, 171, 226, 0.08); border-radius: 0 1rem 1rem 0; }
    .cms-tekst blockquote p:last-child { margin-bottom: 0; }
    .cms-tekst table { display: block; width: 100%; overflow-x: auto; border-collapse: collapse; margin: 2rem 0; font-size: 0.875rem; }
    .cms-tekst th, .cms-tekst td { padding: 0.75rem 1rem; border: 1px solid rgba(6, 9, 15, 0.1); text-align: left; vertical-align: top; }
    .cms-tekst th { background: #06090f; color: #fff; font-weight: 600; }
    .cms-tekst tr:nth-child(even) td { background: rgba(6, 9, 15, 0.02); }
    @media (max-width: 640px) { .cms-tekst h2 { font-size: 1.5rem; } }
</style>
