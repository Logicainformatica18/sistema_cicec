function generateCertication(image_src, student, canvas_id,id,certificado,qr_code) {

    var c = document.getElementById(canvas_id);
    var ctx = c.getContext("2d");
    var image = new Image();


             image.src =image_src;
            image.onload = function() {
            ctx.drawImage(image, 0, 0, canvas1.width, canvas1.height);
                 /* Definimos tamaño de la fuente */
       
        ctx.font = "italic 74px Arial";

          ctx.textAlign = "center";
          ctx.textBaseline = 'middle';
         ctx.fillStyle ="#0a2262";
        
         let x = canvas1.width / 2  ;

        ctx.fillText(student, x -120, 390);
/////////////////////////////////////////////////////////////// 
ctx.font = "italic 24px Arial";

ctx.textAlign = "center";
ctx.textBaseline = 'middle';
ctx.fillStyle ="#0a2262";


ctx.fillText(id, 420, 1290);
////////////////////////////////////////////////////////////
ctx.font = "italic 60px Arial";

ctx.textAlign = "center";
ctx.textBaseline = 'middle';
ctx.fillStyle ="#0a2262";


ctx.fillText(certificado, x +150, 515);

///////////////////////////////////////////////////////

let imagen = document.getElementById("imagen");
  //imagen.value=canvas1.toDataURL('image/jpeg');
///////////////////////////////////////////////////////////////
   //agregar qr encima de certificado
   let image1 = new Image();
   image1.src =qr_code;
                imagen.value=qr_code;

image1.onload = function() {
  ctx.drawImage(image1, 500, 1500, 80, 80);
  
}


}
}
