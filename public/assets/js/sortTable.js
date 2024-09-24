        document.addEventListener('DOMContentLoaded', function () {
            const table = document.querySelector('table');
            const headers = table.querySelectorAll('th.sortable');

            headers.forEach(header => {
                header.addEventListener('click', function () {
                    const column = this.getAttribute('data-column');
                    const isAscending = !this.classList.contains('asc');

                    sortTable(column, isAscending);

                    headers.forEach(h => h.classList.remove('asc', 'desc'));
                    this.classList.add(isAscending ? 'asc' : 'desc');
                });
            });

            function sortTable(column, isAscending) {
                const rows = Array.from(table.querySelectorAll('tbody tr'));
                const index = Array.from(headers).findIndex(header => header.getAttribute('data-column') === column);

                rows.sort((a, b) => {
                    const aText = a.children[index].textContent.trim();
                    const bText = b.children[index].textContent.trim();

                    if (column === 'date') {
                        return isAscending ? new Date(aText) - new Date(bText) : new Date(bText) - new Date(aText);
                    }

                    if (column === 'status') {
                        return isAscending ? aText.localeCompare(bText) : bText.localeCompare(aText);
                    }

                    return isAscending ? aText.localeCompare(bText) : bText.localeCompare(aText);
                });

                rows.forEach(row => table.querySelector('tbody').appendChild(row));
            }
        });