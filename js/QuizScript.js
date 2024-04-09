function result(){
  var score=0;
  if(document.getElementbyId('correct1').checked){
    score++;
  }
  
  if(document.getElementbyId('correct2').checked){
    score++;
  }


  if(document.getElementbyId('correct3').checked){
    score++;
  }

  if(document.getElementbyId('correct4').checked){
    score++;
  }


  if(document.getElementbyId('correct5').checked){
    score++;
  }

alert("Your score is:" +score);
document.write("Your score is:"+score)

};


function redirectToReadingpage() {
    window.location.href = "ReadingPage.html";
}