function uploadPhoto(){
    const photoInput=document.getElementById('photo');
    const priceInput=document.getElementById('price');
    const photoUrl=URL.createObjectURL(photoInput.files[0]);
    const price=priceInput.value;
    
    const uploadedData = {
      photoUrl:photoUrl,
      price:price,
    };

    saveToLocalStorage(uploadedData);

    window.location.href='art.php';
  }

  function saveToLocalStorage(data){
    let allPhotos=JSON.parse(localStorage.getItem('allPhotos')) || [];
    allPhotos.push(data);
    localStorage.setItem('allPhotos',JSON.stringify(allPhotos));

  }
  if(window.location.pathname.endsWith('art.php')){
    const allPhotosContainer=document.getElementById('all-photos-container');
    const allPhotos=JSON.parse(localStorage.getItem('allPhotos')) || [];
    allPhotos.forEach(photoData =>{
      displayPhoto(photoData,allPhotosContainer);
    });
  }
  function displayPhoto(photoData,container){
    const photoCard=document.createElement('div');
    photoCard.classList.add('grid');
    const img=document.createElement('img');
    img.src=photoData.photoUrl;
    img.alt='Uploaded Photo';
    const buyButton=document.createElement('div');
    buyButton.classList.add('buy');
    buyButton.textContent='Buy';
    const amount=document.createElement('div');
    amount.classList.add('amount');
    amount.textContent='Price:Rs${photoData.pice}';
    photoCard.appendChild(img);
    photoCard.appendChild(buyButton);
    photoCard.appendChild(amount);
    container.appendChild(photoCard);
  }