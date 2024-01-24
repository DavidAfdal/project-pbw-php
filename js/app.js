const panduan = document.getElementById("panduan")
const infoButton = document.querySelector(".info")


infoButton.onclick = () =>{
  panduan.classList.add('panduan-active')
}


// const close = document.querySelector("#panduan")
window.onclick = (e) =>{
  if(e.target === panduan){
    panduan.classList.remove('panduan-active')
    console.log("heloo dias");
  }
}


function showForm( element,formType) {
  // Hide all forms
  var elements = document.querySelectorAll('.switch');
  elements.forEach(function (el) {
      el.classList.remove('active');
  });

  // Add the 'active' class to the clicked element
  element.classList.add('active');
  document.getElementById('formDosen').style.display = 'none';
  document.getElementById('formMahasiswa').style.display = 'none';
  document.getElementById('formMitra').style.display = 'none';

  // Show the selected form
  document.getElementById('form' + formType.charAt(0).toUpperCase() + formType.slice(1)).style.display = 'flex';
}