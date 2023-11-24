function saveToLocalStorage(photoUrl,price){
    const existingData=JSON.parse(localStorage.getItem('uploadedPhotos')) || [];
     const newPhotoData= { photoUrl,price};
     existingData.push(newPhotoData);
     localStorage.setItem('uploadedPhotos',JSON.stringify(existingData));
}