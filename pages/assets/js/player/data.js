const myArray = document.querySelectorAll('.play-pause-link');

let json = [];
myArray.forEach(element => {     
    json.push({
      file: element.dataset.file
    });
    
  });

export default json;
