function loadExternalHTML(url, elementId, callback) {
    fetch(url)
        .then(response => response.text())
        .then(data => {
            document.getElementById(elementId).innerHTML = data;
            if (callback) callback();
        })
        .catch(error => console.error('Error loading external HTML:', error));
}

document.addEventListener("DOMContentLoaded", function() {
  
        loadExternalHTML('inc/footer.html', 'external-footer');

});