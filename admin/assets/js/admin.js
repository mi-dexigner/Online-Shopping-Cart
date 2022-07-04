 $(document).ready(function () {
    $(".menu-dropdown:not(.submenu-active)").hover(function () {
      $(this).toggleClass("submenu-hover");
    });

    tinymce.init({
      selector: '#content',
      plugins: [
        'a11ychecker','advlist','advcode','advtable','autolink','checklist','export',
        'lists','link','image','charmap','preview','anchor','searchreplace','visualblocks',
        'powerpaste','fullscreen','formatpainter','insertdatetime','media','table','wordcount'
      ],
      toolbar: 'casechange blocks | bold italic backcolor | ' +
        'alignleft aligncenter alignright alignjustify | insert ' +
        'bullist numlist checklist outdent indent | removeformat | undo redo table',
      menubar:false,
      branding: false,
      resize: false
    });
   
  });