
document.querySelectorAll('.navbar_menu a').forEach(anchor => {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      
      document.querySelector(this.getAttribute('href')).scrollIntoView({
        behavior: 'smooth'
      });
    });
  });
  
  document.querySelector('#buku_tamu form').addEventListener('submit', function(e) {
    const nameInput = this.querySelector('input[type="text"]');
    const messageTextarea = this.querySelector('textarea');
    const attendanceSelect = this.querySelector('select');
  
    if (nameInput.value.trim() === '') {
      alert('Nama tidak boleh kosong.');
      e.preventDefault();
      return;
    }
  
    if (messageTextarea.value.trim() === '') {
      alert('Ucapan & Doa tidak boleh kosong.');
      e.preventDefault();
      return;
    }
  
    if (attendanceSelect.value === '') {
      alert('Pilih kehadiran.');
      e.preventDefault();
      return;
    }
  
    alert('Formulir berhasil dikirim.');
  });
  

  document.addEventListener('DOMContentLoaded', () => {
    const galleryLists = document.querySelectorAll('.gallery_list');
    let currentIndex = 0;
  
    function showNextGallery() {
      galleryLists[currentIndex].style.display = 'none';
      currentIndex = (currentIndex + 1) % galleryLists.length;
      galleryLists[currentIndex].style.display = 'block';
    }
  
    galleryLists.forEach((list, index) => {
      if (index !== 0) {
        list.style.display = 'none';
      }
    });
  
    setInterval(showNextGallery, 3000);
  });
  