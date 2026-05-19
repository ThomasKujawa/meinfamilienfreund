/**
 * @typedef {Object} CardItem
 * @property {string} titel
 * @property {string} beschreibung
 * @property {string} link
 * @property {string} screenshot
 */

/**
 * @typedef {Object} DataJson
 * @property {CardItem[]} webseiten
 * @property {CardItem[]} tools
 */
async function loadData() {
        try {
        const response = await fetch('data.json');
        if (!response.ok) {
        console.error('Konnte data.json nicht laden');
        return;
    }
    const data = await response.json();
    renderCards('webseiten-grid', data.webseiten, 'titel');
    renderCards('tools-grid', data.tools, 'name');
} catch (error) {
    console.error('Fehler beim Laden der Daten:', error);
}
}
    function renderCards(containerId, items, titleKey) {
    const container = document.getElementById(containerId);
    if (!container || !Array.isArray(items)) return;

    const fragment = document.createDocumentFragment();

    items.forEach((item) => {
    const card = document.createElement('article');
    card.className = 'card';

    const img = document.createElement('img');
    img.src = item.screenshot;
    img.alt = item[titleKey] + ' – Screenshot';
    img.loading = 'lazy';

    const body = document.createElement('div');
    body.className = 'card-body';

    const h3 = document.createElement('h3');
    h3.textContent = item[titleKey];

    const p = document.createElement('p');
    p.textContent = item.beschreibung;

    const link = document.createElement('a');
    link.href = item.link;
    link.target = '_blank';
    link.rel = 'noopener noreferrer';
    link.className = 'card-link';
    link.textContent = 'Zur Webseite';

    body.appendChild(h3);
    body.appendChild(p);
    body.appendChild(link);

    card.appendChild(img);
    card.appendChild(body);

    fragment.appendChild(card);
});

    container.appendChild(fragment);
}

    document.addEventListener('DOMContentLoaded', loadData);
