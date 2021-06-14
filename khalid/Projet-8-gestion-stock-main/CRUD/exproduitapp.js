    $(document).ready(function(){
        var exproduitList,
            std = document.querySelector('.exproduitList');
        
        function getall() {
            std.innerHTML="";
        $.ajax({
            url:"api/getExtincteur.php",
            method:"GET",
            success:function(data) {
            std.innerHTML = `<tr>
            <th>ID</th>
            <th>Titre</th>
            <th>Type</th>
            <th>Prix</th>
            <th>Editing</th>
            </tr>`
            console.log(data);
            exproduitList = JSON.parse(data);
            for (var i = 0; i < exproduitList.length; i++) {
                std.innerHTML +=`<tr idoftr='${exproduitList[i]["id"]}'>
                <td>${exproduitList[i]["id"]}</td>
                <td>${exproduitList[i]["titre"]}</td>
                <td>${exproduitList[i]["type"]}</td>
                <td>${exproduitList[i]["prix"]}</td>
                <td><span class="btn bg-info edit" >update</span><span class="btn bg-danger delete">delete</span></td>
                </tr>`;
                
            }

            delet()
            edit()
            }
        })
    }
    getall();

document.querySelector('.submit-exproduit').onclick = ()=>{

    let name,
        type,
        prix;

   name = document.querySelector('.exproduitName').value;
   type = document.querySelector('.exproduitType').value;
   prix = document.querySelector('.exproduitPrix').value;

   $.ajax({
       url : 'api/addExtincteur.php',
       type : 'post',
       data : {
        titre : name,
        type : type,
        prix : prix
       },
       datatype: JSON,
       success: (data)=>{
        document.querySelector('.exproduitName').value = ""
        document.querySelector('.exproduitType').value = ""
        document.querySelector('.exproduitPrix').value = ""
        getall()
       }

   })

}


function delet(){

    document.querySelectorAll('.delete').forEach(element => {
        element.onclick = (e)=>{


            let deletedE = e.target;
            deletedE = deletedE.closest('tr')
            let deletedEID = deletedE.getAttribute("idoftr")
        
        console.log(deletedEID)
         
            $.ajax({
                url : 'api/delete.php',
                type : 'post',
                data : {
                 id : deletedEID
                },
                datatype: JSON,
                success: (data)=>{
                    console.log(data)
                 getall()
                }
         
            })
         
         }
    });

}

function edit(){
    document.querySelectorAll('.edit').forEach(element => {
        element.onclick = (e)=>{
            let deletedE
            let deletedEID
            let editBtn
            let cancelEditBtn
            let name
            let type
            let prix


            deletedE = e.target;
            deletedE = deletedE.closest('tr')
            deletedEID = deletedE.getAttribute("idoftr")
            console.log(deletedEID)
            editBtn = document.querySelector('.edit-exproduit')
            cancelEditBtn = document.querySelector('.cancel-exproduit')

            editBtn.style = 'display:block';
            cancelEditBtn.style = 'display:block';
            document.querySelector('.submit-exproduit').style = 'display:none';


            editBtn.addEventListener('click',()=>{


                    name = document.querySelector('.exproduitName').value;
                    type = document.querySelector('.exproduitType').value;
                    prix = document.querySelector('.exproduitPrix').value;

                $.ajax({
                    url : 'api/edit.php',
                    type : 'post',
                    data : {
                     id : deletedEID,
                     titre : name,
                     type : type,
                     prix : prix
                    },
                    datatype: JSON,
                    success: (data)=>{
                     console.log(data)

                     document.querySelector('.exproduitName').value = ""
                     document.querySelector('.exproduitType').value = ""
                     document.querySelector('.exproduitPrix').value = ""

                     editBtn.style = 'display:none';
                     cancelEditBtn.style = 'display:none';
                     document.querySelector('.submit-exproduit').style = 'display:block';

                     name = undefined;
                     type = undefined
                     prix = undefined
                     deletedE = undefined
                     deletedEID = undefined
                     editBtn = undefined
                     cancelEditBtn = undefined

                     getall()
                    }
             
                })
                
            }
            )

            cancelEditBtn.onclick = ()=>{

       
                     document.querySelector('.exproduitName').value = ""
                     document.querySelector('.exproduitType').value = ""
                     document.querySelector('.exproduitPrix').value = ""
                     editBtn.style = 'display:none';
                     cancelEditBtn.style = 'display:none';
                     document.querySelector('.submit-exproduit').style = 'display:block';

                     name = undefined;
                     type = undefined
                     prix = undefined
                     deletedE = undefined
                     deletedEID = undefined
                     editBtn = undefined
                     cancelEditBtn = undefined
            }

         
         }
    });

}



    })