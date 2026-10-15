<section class="py-12 bg-white border-t border-gray-100">
    <div class="w-full px-4 md:px-8">
        <h3 class="text-center text-sm font-bold text-gray-400 uppercase tracking-widest mb-8">We are available in</h3>
 
        <div id="city-tabs-section" class="mb-10 bg-white rounded-2xl border border-gray-100 shadow-sm overflow-hidden">
            {{-- Tab bar — populated by JS --}}
            <div class="flex overflow-x-auto border-b border-gray-100 bg-gray-50/60 p-4" id="city-tab-bar">
                <div class="text-xs text-gray-400 px-4 py-2">Loading cities...</div>
            </div>
            {{-- Links panel --}}
            <div class="px-5 py-4" id="city-tab-content">
                <p class="text-xs text-gray-400">Loading...</p>
            </div>
        </div>
    </div>
</section>

<script>

(async function () {
    const tabBar     = document.getElementById('city-tab-bar');
    const tabContent = document.getElementById('city-tab-content');
    let allKeywords  = [];
    let cities       = [];

    
    const ACTIVE_CLASSES   = 'border-blue-600 text-blue-600 bg-white';
    const INACTIVE_CLASSES = 'border-transparent text-gray-500 hover:text-gray-800 hover:bg-white/60';
    const BASE_CLASSES     = 'shrink-0 px-4 py-2.5 text-xs font-semibold whitespace-nowrap transition-colors border-b-2 cursor-pointer';

    try {
        const res  = await fetch('https://api.quickdials.com/api/website/cityTabsFooter');
        const data = await res.json();
        cities     = data?.data?.cities   || [];
        allKeywords = data?.data?.keywords || [];

        if (!cities.length) {
            tabBar.innerHTML = '<p class="text-xs text-gray-400 px-4 py-2">No cities available</p>';
            return;
        }

        
        tabBar.innerHTML = cities.map((city, i) => `
            <button type="button"
                    data-idx="${i}"
                    data-slug="${city.city_slug}"
                    id="city-tab-${i}"
                    class="${BASE_CLASSES} ${INACTIVE_CLASSES}">
                ${city.city}
            </button>
        `).join('');
       
        tabBar.addEventListener('click', (e) => {
            const btn = e.target.closest('button[data-idx]');
            if (!btn) return;
            setActiveTab(Number(btn.dataset.idx), btn.dataset.slug);
        });
       
        setActiveTab(0, cities[0].city);

    } catch (e) {
        tabBar.innerHTML     = '<p class="text-xs text-gray-400 px-4 py-2">Failed to load cities</p>';
        tabContent.innerHTML = '<p class="text-xs text-red-400">Connection error</p>';
    }

    function setActiveTab(idx, citySlug) {
        const buttons = tabBar.querySelectorAll('button[data-idx]');
        buttons.forEach((btn, i) => {
            btn.className = `${BASE_CLASSES} ${i === idx ? ACTIVE_CLASSES : INACTIVE_CLASSES}`;
        });
        renderCityKeywords(citySlug);
    }

    function renderCityKeywords(citySlug) {
        if (!allKeywords.length) {
            tabContent.innerHTML = '<p class="text-xs text-gray-400">No keywords available</p>';
            return;
        }
        const slug = citySlug.toLowerCase().trim();
        tabContent.innerHTML = '<p class="text-xs text-gray-500 leading-relaxed">' +
            allKeywords.map((kw, i) =>
                `<span><a href="/${slug}/${kw.slug}" class="hover:text-blue-600 transition-colors">${kw.keyword}</a>${i < allKeywords.length - 1 ? '<span class="mx-1.5 text-gray-300">|</span>' : ''}</span>`
            ).join('') + '</p>';
    }
})();
</script>
 