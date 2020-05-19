let userContainer;
let inps = document.getElementsByClassName("form-control");


if(localStorage.getItem("userData") == null)
{
   
    userContainer=[];
   
}
else
{
    userContainer=JSON.parse(localStorage.getItem("userData"));
    

}
let x = document.getElementById("login");
x.addEventListener("click",function x()
{
    
    checkUser();
})
function checkUser()
{
    
    let userName = document.getElementById("userNameInp").value;
    let password = document.getElementById("passwordInp").value;
    
    if(userName === "admin.com" && password === "123123")
    {
        
        let temp2=`<a class="navbar-brand" href="#">E-contract</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ">
            <li class="nav-item active">
                <button class="btn btn-primary mx-4" onclick="addUserForm()" >Add user</button>
            </li>
            <li class="nav-item">
                <button class="btn btn-primary mx-4" onclick="carForm()" >Add car</button>
            </li>
            <li class="nav-item">
            <button class="btn btn-primary mx-4" onclick="searchUserForm()" >Search user</button>
            </li>
            </li>
            <li class="nav-item">
            
            <a class="btn btn-primary mx-4 float-right" onclick="loginForm()"  >logout</a>
            </li>
            
          </ul>
         
        </div>`;
        document.getElementById("vari").innerHTML = "";
        document.getElementById("navBar").innerHTML=temp2;
         //addUserForm();
    }
    else
    {
        let temp=`
        <a class="navbar-brand" href="#">E-contract</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> 
        <ul class="navbar-nav ">
        
        <li class="nav-item">
            <button class="btn btn-primary mx-4 " onclick="loginForm()" >logout</button>
        </li>
      </ul>`;
        if(nameValidation(userName)==true)
        {
          
        console.log("name valid");
        for(var i=0;i<userContainer.length;i++)
        {
            if(userContainer[i].Name == userName && userContainer[i].Password == password)
            {
                document.getElementById("navBar").innerHTML=temp;
                //console.log("showing data");
                showUserData(userName);
                clearForm();
                document.getElementById("vari").style.display="none";

            }
        }
        }
     
    }
}
function loginForm()
{
    document.getElementById("navBar").innerHTML="";
    let temp=` <div class="form-group mt-5">
    <label>User Name</label>
    <input type="text" class="form-control" id="userNameInp">
</div>
<div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" id="passwordInp">
</div>
<button class="btn btn-primary mb-4" onclick="checkUser()" id="login">login</button> `;
    document.getElementById("vari").innerHTML=temp;
}
function showUserData(username)
{
    //console.log("in show function");
     for(let i=0;i<userContainer.length;i++)
     {
         if(userContainer[i].Name ==username)
         {
            //console.log(userContainer[i].Name);
            //console.log(userContainer[i].Id);
            //console.log(userContainer[i].Address); 
            let temp=`
            <h1>${userContainer[i].Name}</h1>
            <h2>${userContainer[i].Id}</h2>`;
            document.getElementById("Data").innerHTML=temp;        
         }
     }
}
function addUserForm()
{
    document.getElementById("title").innerHTML="Add user";
    let temp =`
        <div class="form-group">
          <label > User Name</label>
          <input type="text" id="userName" class="form-control" >
        </div>
        <div class="form-group">
          <label > User Password</label>
          <input type="password" id="userPassword" class="form-control" >
        </div>
        <div class="form-group">
            <label > User Address</label>
            <input type="text" id="userAddress" class="form-control" >  
        </div>
        <div class="form-group">
            <label > National Id</label>
            <input type="text" id="nationalId" class="form-control" >
          </div>
          <div class="form-group">
            <label > No.cars</label>
            <input type="text" id="carsNO" class="form-control" >
          </div>
          <button class="btn btn-primary mb-4" onclick="addUser()" id="user">Add user</button> 
          `;
          document.getElementById("vari").innerHTML = temp;
          
}
function checkExist(id)
{
    console.log("in check function");
    console.log(id);
    console.log("###################");
    
    for(let i=0;i<userContainer.length;i++)
    {
        console.log(userContainer[i].Id);
        if(userContainer[i].Id == id)
        {
            return false;
        }
    }
    return true;
}
class User 
{
    constructor(name,address,id,password)
    {
        this.Name=name;
        this.Address=address;
        this.Id=id;
        this.Password=password;

    }
    nameValidation()
    {
        
    }
    //idValidation(Id)
    

    show_user()
    {
        console.log(this.Name);
        console.log(this.Id);
    }
    u_code(Name,Address,Id) 
    {
        //hash function
    }
    u_decode(hash)
    {
       //decode hash function
    }   
}

class Car extends User
{
   constructor(name,address,id,model,cid,ctype,cowner,cdetails)
   {
       super(name,address,id);
       this.Model=model;
       this.cId=cid;
       this.cType=ctype;
       this.cOwner=cowner;
       this.cDetails=cdetails;
   }
   c_code(Model,cId,cType,name,id,cDetails)
   {
       //hash of car details
   }
   c_decode(hash)
   {
      //decoded data
   }
}
function idValidation(id) {
    let regex=/[0-9]{14}/;
     if(regex.test(id)==true)
     {
         return true;
     }
     else
     {
         return false;
     }
    
}

function nameValidation(name) {
    let regex=/^[a-zA-Z]+(([a-zA-Z ])?[a-zA-Z]){1,10}$/;
    if(regex.test(name)==true)
    {
        return true;
    }
    else
    {
        return false;
    }
}

function addUser()
{
    let username = document.getElementById("userName").value;
    let userpass = document.getElementById("userPassword").value;
    let address = document.getElementById("userAddress").value;
    let nationalid = document.getElementById("nationalId").value;
    let cars = document.getElementById("carsNO").value;
    if(checkExist(nationalid)==true)
    {
        if(idValidation(nationalid)==true && nameValidation(username)==true)
        {
            let user = new User(username,address,nationalid,userpass);
      //  user.show_user();
        //console.log("###############");
            userContainer.push(user);
            localStorage.setItem("userData",JSON.stringify(userContainer));
            clearForm();
            console.log("added");
       // console.log(userContainer.length);
        if(cars>0)
        {
            carForm();
        }
       
      
     }

        else
        {
            if(idValidation(nationalid)==false)
            {
            window.alert("invalid id");
            }
            else
            {
                window.alert("invalid name");
            }
        }
    }
    else{
        window.alert("this user is exist ");
    }
    //clearForm();

}
function carForm()
{
    document.getElementById("title").innerHTML="Add Car";
    let temp=`<div class="form-group">
        <label >car model</label>
        <input type="text" id="model" class="form-control" >
      </div>
      <div class="form-group">
          <label >car Id</label>
          <input type="text" id="carId" class="form-control" >  
      </div>
      <div class="form-group">
          <label >Type</label>
          <input type="text" id="carType" class="form-control" >
        </div>
        <div class="form-group">
          <label >owner</label>
          <input type="text" id="carOwner" class="form-control" >
        </div>
        <div class="form-group">
        <label >Details</label>
        <textarea  id="carDetails" class="form-control" ></textarea>
      </div>
        <button class="btn btn-primary mb-4" onclick="addCar()" id="user">Add Car</button> 
        `;
        document.getElementById("vari").innerHTML = temp;
    
         
}
function addCar()
{
    console.log("add car");
    let cModel=document.getElementById("model").value;
    let cId = document.getElementById("carId").value;
    let cType = document.getElementById("carType").value;
    let cOwner = document.getElementById("carOwner").value;
    let cDetails = document.getElementById("carDetails").value;
    
    user.car.model =cModel;
    user.car.Id = cId;
    user.car.Type=cType;
    user.car.Details=cDetails;
    user.car.Owner=cOwner;
    clearForm();
    
}
function clearForm()
{
    for(var i=0;i<inps.length;i++)
    {
        inps[i].value="";
    }
}
function searchUserForm(){
    
  
    let temp=` <div class="form-group">
    <label class="" >Search user</label>
    <input type="text" id="searchUser" class="form-control" >
    <button class="btn btn-primary m-4" onclick="search()" id="user">search</button> 
  </div>`;
  document.getElementById("vari").innerHTML=temp;
}
function search() {
    let name =document.getElementById("searchUser").value;
    for(let i=0; i<userContainer.length;i++)
    {
        if(userContainer[i].Name == name)
        {
            console.log(userContainer[i].Id);
        }
    }
    
}