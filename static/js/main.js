$('#i_submit1').click( function() {
    //check whether browser fully supports all File API
    if (window.File && window.FileReader && window.FileList && window.Blob)
    {
      //get the file size and file type from file input field
      var fsize = $('#uploadImage1')[0].files[0].size;
      var ftype = $('#uploadImage1')[0].files[0].type;
      var fname = $('#uploadImage1')[0].files[0].name;

      switch(ftype)
      {
        case 'image/png':
        case 'image/gif':
        case 'image/jpeg':
        case 'image/pjpeg':
          break;
        default:
          alert('Unsupported File!');
      }

      if(fsize>1048576) //do something if file size more than 1 mb (1048576)
      {
        alert(fsize +" bites is too big!"+"\nMaximum file size is 1MB");
      }else{
        //
      }
    }else{
      alert("Please upgrade your browser, because your current browser lacks some new features we need!");
    }
  });