<?php
// Shared inline SVG icon set for room details page.
if (!function_exists('render_icon')) {
    function render_icon($key) {
        $paths = [
            'bed' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 9V5m0 4v6m0-6h20v6M2 15h20v4M2 19h20"/><path d="M6 11V9h5v2M14 11V9h4v2"/></svg>',
            'users' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="9" cy="8" r="3.2"/><path d="M2.5 19c.6-3 3-5 6.5-5s5.9 2 6.5 5"/><circle cx="17" cy="9" r="2.4"/><path d="M16 14.2c2.6.3 4.4 2 5 4.8"/></svg>',
            'shower' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M4 12h16v2a6 6 0 0 1-6 6h-4a6 6 0 0 1-6-6v-2Z"/><path d="M8 12V9a4 4 0 0 1 8 0v3"/><path d="M12 18v2"/></svg>',
            'coffee' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M3 8h14v6a4 4 0 0 1-4 4H7a4 4 0 0 1-4-4V8Z"/><path d="M17 9h1.5a2.5 2.5 0 0 1 0 5H17"/><path d="M7 3c0 1 1 1.4 1 2.4S7 7 7 7M11 3c0 1 1 1.4 1 2.4S11 7 11 7"/></svg>',
            'wifi' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2.5 8.5a14 14 0 0 1 19 0"/><path d="M5.5 12a9 9 0 0 1 13 0"/><path d="M8.5 15.5a4.5 4.5 0 0 1 7 0"/><circle cx="12" cy="19" r="1"/></svg>',
            'tv' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="2.5" y="5" width="19" height="13" rx="2"/><path d="M8 21h8M12 18v3"/></svg>',
            'ac' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="9" rx="2"/><path d="M7 13v7M17 13v7M12 13v7"/><path d="M7 16h.01M17 7h.01"/></svg>',
            'dumbbell' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M6.5 6.5v11M17.5 6.5v11M3 9v6M21 9v6M6.5 12h11"/></svg>',
            'shirt' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M9 3 4 6l2 4 2-1v12h8V9l2 1 2-4-5-3a3 3 0 0 1-6 0Z"/></svg>',
        ];
        return isset($paths[$key]) ? $paths[$key] : '';
    }
}
