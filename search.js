const search = () => {
     const searchbox = document.getElementById("search-items").value.toUpperCase();
    const storeitems = document.getElementById("td");
    const tr = storeitems.getElementsByTagName("tr");
    for (var i = 0; i < tr.length; i++) {
        let match = tr[i].getElementsByTagName('td')[1];

        if (match) {
            let textvalue = match.textContent || match.innerHTML
            if (textvalue.toUpperCase().indexOf(searchbox) > -1) {
                tr[i].style.display = "";
            } else {
                tr[i].style.display = "none";   
            }
        }
    }
}

