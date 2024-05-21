const bibleApiUrl = 'https://labs.bible.org/api/?passage=votd&type=json';

fetch(bibleApiUrl)
  .then(response => response.json())
  .then(data => {
    const displayVerse = (containerId, verseData) => {
      const container = document.getElementById(containerId);

      // Check if verseData is not empty and contains necessary properties
      if (verseData && verseData[0] && verseData[0].text && verseData[0].bookname && verseData[0].chapter && verseData[0].verse) {
        container.innerHTML = `<p style="color:#eb6033">${verseData[0].text}</p><span class="button-text-1">${verseData[0].bookname} ${verseData[0].chapter}:${verseData[0].verse} - NIV</span>`;
      } else {
        console.error('Invalid or incomplete verse data.');
      }
    };

    displayVerse('youth', data);

    // displayVerse('verse-day', data);
  })
  .catch(error => {
    console.error('Error fetching Bible API:', error);
  });
