<!DOCTYPE html>
<html lang="en">
<x-head title="Nusa Techno Indonesia | Jasa Pembuatan Website, Aplikasi Web, Mobile,IOT " />

<body>

    {{-- Header from component --}}
    <x-header />

    <div id="loaderscreen">
        <div class="spinner"></div>
    </div>
    {{-- Main for a Content --}}
    <main>
        @yield('content')
    </main>

    <x-footer />

    {{-- Library --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/scrollreveal"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src={{ asset('js/manipulation.js') }}></script>
    <script>
        (() => {
            const tabs = document.querySelectorAll('#filterTabs button');
            const items = document.querySelectorAll('#portfolioGrid article');

            function setActiveTab(selectedTab) {
                tabs.forEach(tab => {
                    const isSelected = tab === selectedTab;
                    tab.setAttribute('aria-selected', isSelected);
                    tab.classList.toggle('border-blue-600', isSelected);
                    tab.classList.toggle('text-blue-600', isSelected);
                    tab.classList.toggle('border-gray-300', !isSelected);
                    tab.classList.toggle('text-gray-700', !isSelected);
                    tab.classList.toggle('hover:border-gray-400', !isSelected);
                    tab.setAttribute('tabindex', isSelected ? '0' : '-1');
                });
            }

            function filterItems(category) {
                items.forEach(item => {
                    if (category === 'all' || item.dataset.category === category) {
                        item.classList.remove('hidden');
                    } else {
                        item.classList.add('hidden');
                    }
                });
            }

            tabs.forEach(tab => {
                tab.addEventListener('click', () => {
                    const filter = tab.dataset.filter;
                    setActiveTab(tab);
                    filterItems(filter);
                });
                tab.addEventListener('keydown', e => {
                    let index = Array.from(tabs).indexOf(document.activeElement);
                    if (e.key === 'ArrowRight') {
                        e.preventDefault();
                        const nextIndex = (index + 1) % tabs.length;
                        tabs[nextIndex].focus();
                    } else if (e.key === 'ArrowLeft') {
                        e.preventDefault();
                        const prevIndex = (index - 1 + tabs.length) % tabs.length;
                        tabs[prevIndex].focus();
                    }
                });
            });

            // Initialize
            setActiveTab(tabs[0]);
            filterItems('all');
        })();
    </script>
</body>

</html>
