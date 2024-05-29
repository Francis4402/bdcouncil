/**
 * 
 * @param {HTMLTableElement} table 
 * @param {number} column 
 * @param {boolean} asc 
 */
function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];

    const rows = Array.from(tBody.querySelectorAll('tr'));

    const sortedRows = rows.sort((a, b) => {
        const aColText = a.querySelector(`td:nth-child(${column})`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${column})`).textContent.trim();

        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    tBody.append(...sortedRows);

    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    if (column !== 0) {
        table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-asc", asc);
        table.querySelector(`th:nth-child(${column + 1})`).classList.toggle("th-sort-desc", !asc);
    }
}

document.querySelectorAll(".table-sortable th").forEach(headerCell => {
    headerCell.addEventListener("click", (event) => {
        if (event.target.tagName.toLowerCase() === 'th') {
            const tableElement = headerCell.closest('table');
            const headerIndex = Array.from(headerCell.parentElement.children).indexOf(headerCell);
            const currentIsAscending = headerCell.classList.contains("th-sort-asc");

            if (headerCell.textContent.trim() === 'No') {
                sortTableByColumn(tableElement, 0, true); // Reset sorting by calling the function with the No column
                return;
            }

            sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
        }
    })
});
