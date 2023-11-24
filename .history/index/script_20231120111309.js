function openPage(clickedElement){
    const amount=clickedElement.nextElementSibling.innerHTML;
    window.location.href='../index/confirmation.html?amount=' +encodeURIComponent(amount);

  }
function uploadPhoto() {
    const photoInput = document.getElementById('photo');
    const priceInput = document.getElementById('price');

    const photoUrl = URL.createObjectURL(photoInput.files[0]);
    const price = priceInput.value;

    // Save data to localStorage for simplicity, in a real scenario use a server
    const uploadedData = {
        photoUrl: photoUrl,
        price: price,
    };

    // Save the uploaded data in localStorage
    saveToLocalStorage(uploadedData);

    // Redirect to page2.html
    window.location.href = 'art.php';
}

function saveToLocalStorage(data) {
    let allPhotos = JSON.parse(localStorage.getItem('allPhotos')) || [];
    allPhotos.push(data);
    localStorage.setItem('allPhotos', JSON.stringify(allPhotos));
}

// Check if on page2.html and load photos
if (window.location.pathname.endsWith('art.php')) {
    const allPhotosContainer = document.getElementById('all-photos-container');
    const allPhotos = JSON.parse(localStorage.getItem('allPhotos')) || [];

    allPhotos.forEach(photoData => {
        displayPhoto(photoData, allPhotosContainer);
    });
}

function displayPhoto(photoData, allPhotosContainer) {

    allPhotosContainer.innerHTML+=`<section class="grid" id="grid1">
    <img src="${photoData.photoUrl}" alt="">
    <div class="buy" onclick="openPage(this)">Buy</div>
    <div class="amount">Rs${photoData.price}</div></section>`;
    console.log(allPhotosContainer); 
}
