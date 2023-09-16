<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
            .insert,.delete{
                display: none;
            }
    </style>
</head>
<body>
       <h1>Insertion Deletion in Array</h1>
       <form action="arraydata.php" method="get">
              <label for="array">Enter array (enter space after single element)</label>
              <br>
             <input type="text" name="array" id="array">
               <br/> <br>
              <label for="option">Select Operation</label><br>
              <select name="option" id="option">
                    <option value="beg" >Insert at Beg</option>
                    <option value="end">Insert at End</option>
                    <option value="inIndex" class="inclick">Insert at specific index</option>
                    <option value="delBeg">Delete from beg</option>
                    <option value="delEnd">Delete from end</option>
                    <option value="delIndex" class="delclick">Delete from specific index</option>
                     
              </select> 
              <br/> <br/>
              <div class="element">
                 <label for="element">Enter element</label>
              <br/>
               <input type="text" name="element" id="element"> 
              <br/> <br/>
              </div>
             

               <div class="insert">
                 <label for="insertIndex">Enter Index for Insertion</label> <br/> 
                  <input type="text" name="insertIndex" id="insertIndex">
                  <br/> <br/>
               </div>
              
              <div class="delete">
                <label for="deleteIndex">Enter Index for Deletion</label> <br/> 
               <input type="text" name="deleteIndex" id="deleteIndex">
               <br/><br/>
              </div>
             
              <input type="submit" value="Submit">
       </form>
     
</body>
 <script>
      let select = document.getElementById("option");
      let insertDis = document.querySelector(".insert");
      let delDis = document.querySelector(".delete");
      let element  = document.querySelector(".element");
      select.addEventListener("change",(e)=>{
            v = e.target.value;
              if(v === "inIndex")
              {
                element.style.display = "block";

                delDis.style.display = "none";
                    insertDis.style.display = "block";
              }
              else if(v === "delIndex")
              { 
                    element.style.display = "none";
                    insertDis.style.display = "none";
                   delDis.style.display = "block";
              }
              else if(v==="delBeg" || v === "delEnd")
              {
                insertDis.style.display = "none";
                delDis.style.display = "none";
                    element.style.display = "none";
              }
              else
              {
                insertDis.style.display = "none";
                delDis.style.display = "none";
                element.style.display = "block";
                  
              }
      })
      
 </script>
</html>