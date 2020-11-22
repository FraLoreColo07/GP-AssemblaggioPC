var immV = ["340347","340348","340349"]

function change(i){

   var dati = document.getElementById("immIn").src;
   var pos = dati.lastIndexOf("/");
   var end = dati.length;
   var file = dati.slice(pos+1,end);
   pos = file.indexOf(".");
   end = file.length;
   var imm = file.slice(0,pos);

   if(i=="-")
        immM(imm);
    else if(i="+")
        immP(imm); 
}
function immM(imm){

    var f ="";
    for(var i = 0;i<immV.length;i++){

        if(imm == immV[i]){
           
            if(i == 0){
                f = immV[immV.length-1];
            }
            else
                f = immV[i-1];
        }
    }
      f+=".jpg";
      document.getElementById("immIn").src="_imm/"+f;

}

function immP(imm){

    var f ="";
    for(var i = 0;i<immV.length;i++){

        if(imm == immV[i]){
           
            if(i == immV.length-1){
                f = immV[0];

            }
            else
                f = immV[i+1];
        }
    }
      f+=".jpg";
      document.getElementById("immIn").src="_imm/"+f;

}