// Sticky Navigation Bar
window.addEventListener("scroll", () =>
{
    let nav = document.querySelector(".nav");
    
    try 
    {
        nav.classList.toggle("sticky-nav", this.window.scrollY > 0);
    } 
    catch (error) 
    {
        console.log(error);
    }
});

window.addEventListener("scroll", () =>
{
    let nav = document.querySelector(".navback");
    
    try 
    {
        nav.classList.toggle("sticky-navback", this.window.scrollY > 0);
    } 
    catch (error) 
    {
        console.log(error);
    }
});
// End

function menuBtn() {
    const menu = document.querySelector("#menuBtn");
    const sidebar = document.querySelector(".sidebar-cntnr")

    sidebar.classList.toggle("-translate-x-full");
}

// Show / Hide Password
function togglepass() {
    const password = document.getElementById("password");
    const icon =  document.getElementById("eyes");

    // console.log(password);

    if (password.type == "password") 
    {
        password.type = "text";

        icon.classList.add("fa-eye-slash");
        icon.classList.remove("fa-eye");
    }
    else 
    {
        password.type = "password";
        
        icon.classList.add("fa-eye");
        icon.classList.remove("fa-eye-slash");
    }
};

function togglecnfrm() {
    const password = document.getElementById("password_confirmation");
    const icon =  document.getElementById("eyescnfrm");

    // console.log(password);

    if (password.type == "password") {
        password.type = "text";

        icon.classList.add("fa-eye-slash");
        icon.classList.remove("fa-eye");
    } else {
        password.type = "password";
        
        icon.classList.add("fa-eye");
        icon.classList.remove("fa-eye-slash");
    }
};
// End

// Realtime Validations
function validate(indx, type, req, min, max)
{
    const inputs = document.querySelectorAll(".input input");
    const message = document.querySelectorAll(".message");
    // const upmessage = document.querySelectorAll("p.text-red-600.text-sm.mt-2.font-sans");

    // console.log(inputs);
    // console.log(upmessage);

    // message[indx].classList.remove("hidden");

    // for (let index = 0; index < upmessage.length; index++) 
    // {
    //     upmessage[index].remove();
    // // }

    // try 
    // {
    //     upmessage[indx].classList.add("hidden");
    // } 
    // catch (error) 
    // {
    //     console.log(error);
    // }

    if(type == "input")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^[a-zA-Z ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Letters and Spaces Only.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^[a-zA-Z ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Letters and Spaces Only.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "addrss")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "email")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
            {
                message[indx].innerHTML = "Invalid Email.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {   
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/))
            {
                message[indx].innerHTML = "Invalid Email.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "num")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^[\d+\+ ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Numbers Only";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {   
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^[\d+\+ ]*$/))
            {
                message[indx].innerHTML = "This Field Should have Numbers Only";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field Should have Atleast "+ min +" Characters Long.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "pass")
    {
        if(req == "true") 
        {
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "This Field is Required.";
            }
            else if(!inputs[indx].value.match(/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/))
            {
                message[indx].innerHTML = "Password Requires Atleast: <br> 1 Lowercase Letter <br> 1 Uppercase Letter <br> 1 Number <br> 1 Symbol <br> And Should have Atleast 8 Characters Long.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field should have Atleast "+ min +" Characters Only.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        } 
        else
        {   
            if(inputs[indx].value == "")
            {
                message[indx].innerHTML = "";
            }
            else if(!inputs[indx].value.match(/^(?=.*[A-Z]{1,})(?=.*[a-z]{1,})(?=.*[0-9]{1,})(?=.*[~!@#$%^&*()\-_=+{};:,<.>]{1,}).{8,}$/))
            {
                message[indx].innerHTML = "Password Requires Atleast: <br> 1 Lowercase Letter <br> 1 Uppercase Letter <br> 1 Number <br> 1 Symbol <br> And Should have Atleast 8 Characters Long.";
            }
            else if(inputs[indx].value.length < min)
            {
                message[indx].innerHTML = "This Field should have Atleast "+ min +" Characters Only.";
            }
            else if(inputs[indx].value.length > max)
            {
                message[indx].innerHTML = "This Field is Maximum of "+ max +" Characters Only.";
            }
            else {
                message[indx].innerHTML = "";
            }
        }
    }
    else if(type == "cnfrm")
    {
        if(inputs[indx-1].value != inputs[indx].value) {
            message[indx].innerHTML = "Password Mismatch.";
        }
        else {
            message[indx].innerHTML = "";
        }
    }
    else {
        message[indx].innerHTML = "";
    }
};

// function showBtn() {
//     let dropBtn = document.querySelector(".drop-btn");
//     let btnDrop = document.querySelector(".btn-drop");

//     btnDrop.classList.remove("hidden");

//     document.addEventListener("click", (e) => {
//         if(!btnDrop.classList.contains("hidden"))
//         {
//             btnDrop.classList.add("hidden");
//         }
//     });
// }

// End

// function removeMessage()
// {
//     const message = document.querySelectorAll(".message");
//     const upmessage = document.querySelectorAll("p.text-red-600.text-sm.mt-2.font-sans");

//     console.log(message)

//     for (let index = 0; index < message.length; index++) 
//     {
//         try 
//         {
//             if (upmessage[index].classList.contains("hidden")) {
//                 upmessage[index].classList.remove("hidden");
//             }
//         } 
//         catch (error) 
//         {
//            console.log(error); 
//         }
        
        
//         message[index].classList.add("hidden");
//     }
// }

// Reload JS
let startReload;
let startSet;
let incr = 0;
let cls = 0;
let indx = 0;

function start() 
{
    incr = 0;
    indx = 0;

    clearInterval(startReload);
    startReload = setInterval(reload, 1000);
}

// function setTitles() 
// {
//     indx = 0;

//     clearInterval(startSet);
//     startSet = setInterval(titles, 1000);
// }

// function titles() 
// {
//     try 
//     {
//         let tblbody = document.querySelectorAll("tbody tr");
//         let tbltitle = document.querySelectorAll(".uppercase");

//         console.log(tblbody[0].childNodes)

//         for (indx; indx < tblbody.length; indx++) 
//         {
//             for (let jndx = 0; jndx < tbltitle.length; jndx++) {
//                 tblbody[indx].childNodes[jndx].setAttribute("data-title", tbltitle[jndx].innerHTML);
//             }

//             // tbldata[indx].setAttribute("data-title", tbltitle[indx].innerHTML);

//             console.log(tbltitle[indx].innerHTML + " " + indx + " " + tblbody.length);
//         }

//         if(indx == tblbody.length)
//         {
//             console.log("End " + tblbody.length);
//             clearInterval(startSet);
//         }
//     } 
//     catch (error) 
//     {
//         console.log(error);
//     }
// }

function reload() 
{
    // try 
    // {
    //     let tblbody = document.querySelectorAll("tbody tr");
    //     let tbltitle = document.querySelectorAll(".uppercase");

    //     for (indx; indx < tblbody.length; indx++) 
    //     {
    //         for (let jndx = 0; jndx < tbltitle.length; jndx++) {
    //             tblbody[indx].childNodes[jndx].setAttribute("data-title", tbltitle[jndx].innerHTML);
    //         }

    //         // tbldata[indx].setAttribute("data-title", tbltitle[indx].innerHTML);

    //         // console.log(tbldata[indx].innerHTML + " " + indx + " " + tblbody.length);
    //     }

    //     if(indx == tblbody.length)
    //     {
    //         console.log("End " + tblbody.length);
    //         clearInterval(startSet);
    //     }
    // } 
    // catch (error) 
    // {
    //     console.log(error);
    // }

    // Custom Drop Down Select
    document.querySelectorAll(".drop-down .relative div").forEach(setupSelector);
    const drop_down_cntnr = document.querySelector(".drop-down .relative div");

    let lists = 0;
    let ulLists = 0;
    let openclose = 1;

    function setupSelector(selector) 
    {
        selector.addEventListener("mousedown", e => 
        {
            ulLists++;

            const select = selector.children[0];
            const drop_down = document.createElement("ul");   
            drop_down.className = "optn"; 

            if(window.innerWidth >= 0) 
            {
                e.preventDefault();
                
                [...select.children].forEach(option => {
                    lists++;
                });

                [...select.children].forEach(option => {
                    const drop_down_option = document.createElement("li");
                    drop_down_option.className = "optn-lists";
                    drop_down_option.textContent = option.textContent;
                    
                    drop_down_option.addEventListener("mousedown", (e) => {
                        e.stopPropagation();

                        select.value = option.value;
                        selector.value = option.value;

                        select.dispatchEvent(new Event("change"));
                        selector.dispatchEvent(new Event("change"));
                        
                        ulLists = 0;
                        drop_down.remove()
                        lists = 0;
                    });

                    drop_down.appendChild(drop_down_option);
                });

                selector.appendChild(drop_down);

                // console.log(openclose);

                // if (openclose == 1) 
                // {
                //     selector.appendChild(drop_down);
                //     openclose = 0;
                // } 
                // else 
                // {
                //     drop_down.classList.toggle("open-close");
                //     console.log(drop_down);
                //     openclose = 1;
                // }

                // if(lists <= 1)
                // {
                //     lists = 0;
                // }
                // else
                // {
                //     dropSelect.classList.toggle("open-close");
                //     lists = 0;
                // }
            }

            try 
            {
                const div = document.querySelector(".modal");

                div.addEventListener("click", (e) => {
                    if(!selector.contains(e.target)) {
                        e.stopPropagation();
                        drop_down.remove();
                    }
                });
            } 
            catch (error) 
            {
                console.log(error);
            }

            document.addEventListener("click", (e) => {
                if(!selector.contains(e.target)) {
                    e.stopPropagation();
                    drop_down.remove();
                }
            });
        });
    }
    // End

    try 
    {
        let x, i, j, l, ll, selElmnt, a, b, c;

        /*look for any elements with the class "custom-select":*/
        x = document.querySelector(".drop-down .relative div");
        l = x.length;

        for (i = 0; i < l; i++) 
        {
            selElmnt = x[i].getElementsByTagName("select")[0];
            ll = selElmnt.length;

            /*for each element, create a new DIV that will act as the selected item:*/
            a = document.createElement("DIV");
            a.setAttribute("class", "select-selected");
            a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
            x[i].appendChild(a);

            /*for each element, create a new DIV that will contain the option list:*/
            b = document.createElement("DIV");
            b.setAttribute("class", "select-items select-hide");

            for (j = 1; j < ll; j++) 
            {
                /*for each option in the original select element,
                create a new DIV that will act as an option item:*/
                c = document.createElement("DIV");
                c.innerHTML = selElmnt.options[j].innerHTML;
                c.addEventListener("click", function(e) 
                {
                    /*when an item is clicked, update the original select box,
                    and the selected item:*/
                    var y, i, k, s, h, sl, yl;
                    s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                    sl = s.length;
                    h = this.parentNode.previousSibling;

                    for (i = 0; i < sl; i++) 
                    {
                        if (s.options[i].innerHTML == this.innerHTML) 
                        {
                            s.selectedIndex = i;
                            h.innerHTML = this.innerHTML;
                            y = this.parentNode.getElementsByClassName("same-as-selected");
                            yl = y.length;
                            for (k = 0; k < yl; k++) {
                            y[k].removeAttribute("class");
                            }
                            this.setAttribute("class", "same-as-selected");
                            break;
                        }
                    }
                    h.click();
                });

                b.appendChild(c);
            }

            x[i].appendChild(b);

            a.addEventListener("click", function(e) 
            {
                /*when the select box is clicked, close any other select boxes,
                and open/close the current select box:*/
                e.stopPropagation();
                closeAllSelect(this);
                this.nextSibling.classList.toggle("select-hide");
                this.classList.toggle("select-arrow-active");
            });
        }

        function closeAllSelect(elmnt) 
        {
            /*a function that will close all select boxes in the document,
            except the current select box:*/
            var x, y, i, xl, yl, arrNo = [];
            x = document.getElementsByClassName("select-items");
            y = document.getElementsByClassName("select-selected");
            xl = x.length;
            yl = y.length;

            for (i = 0; i < yl; i++) 
            {
                if (elmnt == y[i]) 
                {
                    arrNo.push(i)
                } 
                else 
                {
                    y[i].classList.remove("select-arrow-active");
                }
            }
            for (i = 0; i < xl; i++) 
            {
                if (arrNo.indexOf(i)) 
                {
                    x[i].classList.add("select-hide");
                }
            }
        }

        /*if the user clicks anywhere outside the select box,
        then close all select boxes:*/
        document.addEventListener("click", closeAllSelect);
    } 
    catch (error) 
    {
        console.log(error)
    }

    incr++;

    // Country Code Selection
    try 
    {
        var phoneInput = $("#contactNumber");

        phoneInput.intlTelInput({
            initialCountry: "PH",
            formatOnDisplay: true,

            geoIpLookup: function(callback) {
                $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                    var countryCode = (resp && resp.country) ? resp.country : "";
                    callback(countryCode);
                });
            },

            nationalMode: false,
            autoPlaceholder: true,
            utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
        });

        // var telInput = $("#contactNumber");

        // telInput.intlTelInput({
        //     allowExtensions: true,
        //     formatOnDisplay: true,
        //     autoFormat: true,
        //     autoHideDialCode: true,
        //     autoPlaceholder: false,
        //     defaultCountry: "auto",
        //     ipinfoToken: "yolo",
            
        //     nationalMode: false,
        //     numberType: "MOBILE",
        //     //onlyCountries: ["us", "gb", "ch", "ca", "do"],
        //     preferredCountries: ["sa", "ae", "qa","om","bh","kw","ma"],
        //     preventInvalidNumbers: true,
        //     separateDialCode: true,
        //     initialCountry: "PH",
            
        //     geoIpLookup: function(callback) {
        //         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
        //             var countryCode = (resp && resp.country) ? resp.country : "";
        //             callback(countryCode);
        //         });
        //     },

        //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
        // });

        if(incr >= 1)
        {
            clearInterval(startReload);
        }
    } 
    catch (error) 
    {
        console.log(error);
    }
    // End

    // Checking if the Link is /register
    const active_page = window.location.pathname;

    console.log(active_page);
    console.log(incr);

    try 
    {
        const div = document.querySelector(".modal");

        if (div != null) 
        {
            console.log(div);

            var closed = document.querySelector(".close-btn");

            closed.classList.add("close-btn-show"); 
        }
    } 
    catch (error) 
    {
        console.log(error);
    }

    if(active_page == "/register")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else if(active_page == "/login")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else if(active_page == "/")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else if(active_page == "/setup-school")
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }
    else
    {
        if(incr >= 10)
        {
            clearInterval(startReload);
        }
    }

    // if(active_page == "/")
    // {
    //     clearInterval(startReload);
    // }
    //End
}
// End

try 
    {
    var x, i, j, l, ll, selElmnt, a, b, c;

    /*look for any elements with the class "custom-select":*/
    x = document.getElementById("custom-select");
    l = x.length;

    for (i = 0; i < l; i++) 
    {
        selElmnt = x[i].getElementsByTagName("select")[0];
        ll = selElmnt.length;

        /*for each element, create a new DIV that will act as the selected item:*/
        a = document.createElement("DIV");
        a.setAttribute("class", "select-selected");
        a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
        x[i].appendChild(a);

        /*for each element, create a new DIV that will contain the option list:*/
        b = document.createElement("DIV");
        b.setAttribute("class", "select-items select-hide");

        for (j = 1; j < ll; j++) 
        {
            /*for each option in the original select element,
            create a new DIV that will act as an option item:*/
            c = document.createElement("DIV");
            c.innerHTML = selElmnt.options[j].innerHTML;
            c.addEventListener("click", function(e) 
            {
                /*when an item is clicked, update the original select box,
                and the selected item:*/
                var y, i, k, s, h, sl, yl;
                s = this.parentNode.parentNode.getElementsByTagName("select")[0];
                sl = s.length;
                h = this.parentNode.previousSibling;

                for (i = 0; i < sl; i++) 
                {
                    if (s.options[i].innerHTML == this.innerHTML) 
                    {
                        s.selectedIndex = i;
                        h.innerHTML = this.innerHTML;
                        y = this.parentNode.getElementsByClassName("same-as-selected");
                        yl = y.length;
                        for (k = 0; k < yl; k++) {
                        y[k].removeAttribute("class");
                        }
                        this.setAttribute("class", "same-as-selected");
                        break;
                    }
                }
                h.click();
            });

            b.appendChild(c);
        }

        x[i].appendChild(b);

        a.addEventListener("click", function(e) 
        {
            /*when the select box is clicked, close any other select boxes,
            and open/close the current select box:*/
            e.stopPropagation();
            closeAllSelect(this);
            this.nextSibling.classList.toggle("select-hide");
            this.classList.toggle("select-arrow-active");
        });
    }

    function closeAllSelect(elmnt) 
    {
        /*a function that will close all select boxes in the document,
        except the current select box:*/
        var x, y, i, xl, yl, arrNo = [];
        x = document.getElementsByClassName("select-items");
        y = document.getElementsByClassName("select-selected");
        xl = x.length;
        yl = y.length;

        for (i = 0; i < yl; i++) 
        {
            if (elmnt == y[i]) 
            {
                arrNo.push(i)
            } 
            else 
            {
                y[i].classList.remove("select-arrow-active");
            }
        }
        for (i = 0; i < xl; i++) 
        {
            if (arrNo.indexOf(i)) 
            {
                x[i].classList.add("select-hide");
            }
        }
    }

    /*if the user clicks anywhere outside the select box,
    then close all select boxes:*/
    document.addEventListener("click", closeAllSelect);
} 
catch (error) 
{
    console.log(error);
}

// Country Code Selection
try 
{
    var phoneInput = $("#contactNumber");

    phoneInput.intlTelInput({
        initialCountry: "PH",
        formatOnDisplay: true,

        geoIpLookup: function(callback) {
            $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
                var countryCode = (resp && resp.country) ? resp.country : "";
                callback(countryCode);
            });
        },

        nationalMode: false,
        autoPlaceholder: true,
        utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/8.4.6/js/utils.js"
    });

    // var telInput = $("#contactNumber");

    // telInput.intlTelInput({
    //     allowExtensions: true,
    //     formatOnDisplay: true,
    //     autoFormat: true,
    //     autoHideDialCode: true,
    //     autoPlaceholder: false,
    //     defaultCountry: "auto",
    //     ipinfoToken: "yolo",
        
    //     nationalMode: false,
    //     numberType: "MOBILE",
    //     //onlyCountries: ["us", "gb", "ch", "ca", "do"],
    //     preferredCountries: ["sa", "ae", "qa","om","bh","kw","ma"],
    //     preventInvalidNumbers: true,
    //     separateDialCode: true,
    //     initialCountry: "PH",
        
    //     geoIpLookup: function(callback) {
    //         $.get("http://ipinfo.io", function() {}, "jsonp").always(function(resp) {
    //             var countryCode = (resp && resp.country) ? resp.country : "";
    //             callback(countryCode);
    //         });
    //     },

    //     utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/11.0.9/js/utils.js"
    // });

    if(incr >= 1)
    {
        clearInterval(startReload);
    }
} 
catch (error) 
{
    console.log(error);
}
// End

// Custom Drop Down Select
document.querySelectorAll(".drop-down .relative div").forEach(setupSelector);
const drop_down_cntnr = document.querySelector(".drop-down .relative div");

let lists = 0;
let ulLists = 0;
let openclose = 1;

function setupSelector(selector) 
{
    selector.addEventListener("mousedown", e => 
    {
        ulLists++;

        const select = selector.children[0];
        const drop_down = document.createElement("ul");   
        drop_down.className = "optn"; 

        if(window.innerWidth >= 0) 
        {
            e.preventDefault();
            
            [...select.children].forEach(option => {
                lists++;
            });

            [...select.children].forEach(option => {
                const drop_down_option = document.createElement("li");
                drop_down_option.className = "optn-lists";
                drop_down_option.textContent = option.textContent;
                
                drop_down_option.addEventListener("mousedown", (e) => {
                    e.stopPropagation();

                    select.value = option.value;
                    selector.value = option.value;

                    select.dispatchEvent(new Event("change"));
                    selector.dispatchEvent(new Event("change"));
                    
                    ulLists = 0;
                    drop_down.remove()
                    lists = 0;
                });

                drop_down.appendChild(drop_down_option);
            });

            selector.appendChild(drop_down);

            // console.log(openclose);

            // if (openclose == 1) 
            // {
            //     selector.appendChild(drop_down);
            //     openclose = 0;
            // } 
            // else 
            // {
            //     drop_down.classList.toggle("open-close");
            //     console.log(drop_down);
            //     openclose = 1;
            // }

            // if(lists <= 1)
            // {
            //     lists = 0;
            // }
            // else
            // {
            //     dropSelect.classList.toggle("open-close");
            //     lists = 0;
            // }
        }

        try 
        {
            const div = document.querySelector(".modal");

            div.addEventListener("click", (e) => {
                if(!selector.contains(e.target)) {
                    e.stopPropagation();
                    drop_down.remove();
                }
            });
        } 
        catch (error) 
        {
            console.log(error);
        }

        document.addEventListener("click", (e) => {
            if(!selector.contains(e.target)) {
                e.stopPropagation();
                drop_down.remove();
            }
        });
    });
}
// End

// try 
// {
//     let tblbody = document.querySelectorAll("tbody tr");
//     let tbltitle = document.querySelectorAll(".uppercase");

//     for (indx; indx < tblbody.length; indx++) 
//     {
//         for (let jndx = 0; jndx < tbltitle.length; jndx++) {
//             tblbody[indx].childNodes[jndx].setAttribute("data-title", tbltitle[jndx].innerHTML);
//         }

//         // tbldata[indx].setAttribute("data-title", tbltitle[indx].innerHTML);

//         // console.log(tbldata[indx].innerHTML + " " + indx + " " + tblbody.length);
//     }

//     if(indx == tblbody.length)
//     {
//         console.log("End " + tblbody.length);
//         clearInterval(startSet);
//     }
// } 
// catch (error) 
// {
//     console.log(error);
// }