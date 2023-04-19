const menu = document.querySelector(".menu")
const dropDown = document.querySelector(".drop-down")

dropDown.addEventListener("mouseenter", () => {
    menu.classList.remove("hidden")
})

menu.addEventListener("mouseleave", () => {
    menu.classList.add("hidden")
})

let video = document.querySelectorAll("video")
video.forEach(video => {
    let playPromise = video.play()
    if(playPromise !== undefined) {
        playPromise.then(() => {
            let observer = new IntersectionObserver(entries => {
                entries.forEach(entry => {
                    video.muted = false
                    if(entry.intersectionRatio !== 1 && !video.paused){
                        video.pause()
                    } else if (entry.intersectionRatio > 0.5 && video.paused) {
                        video.play()
                    }
                })
            }, {threshold: 0.5})
            observer.observe(video)
        })
    }
})




function calculateCalorie(obj)
{
    const age = obj.form.age.value;
    const gender = obj.form.gender.value;
    // const bodyFat = obj.form.bodyFat.value;
    const height = obj.form.height.value;
    const weight = obj.form.weight.value;
    const activity = obj.form.activity.value;
    const unit = obj.form.unit.value;
    const formula = obj.form.formula.value;

    let BMR = '';
    if(formula == 0) // Mifflin
    {
        BMR = Mifflin(gender, age, height, weight);
    }
    else if(formula == 1) // Harris
    {
        BMR = Harris(gender, age, height, weight);
    }
    else if(formula == 2) // Katch
    {
        BMR = Katch(bodyFat, weight);
    }

    let ret = parseFloat(BMR)*parseFloat(activity);
    if(unit == 'kilojoules')
    {
        ret = (ret*4.1868);
    }
    calories = '<div class="container"><h4 class="text-center form-control my-3 text-danger fs-4">You should consume <span class="text-white">'+Math.ceil(ret)+' '+unit+'/day </span> of calorie to maintain your weight.</h4></div>';
    document.querySelector(".ans_calculate").innerHTML = calories ;
    window.localStorage.setItem('answer', calories);

    // location.replace("index09.html")
  }

function Mifflin(gender, age, height, weight)
{
    let BMR = (10*weight) + (6.25*height) - (5*age) + 5;
    if(gender == 1) // Female
    {
        BMR = (10*weight) + (6.25*height) - (5*age) - 161;
    }

    return BMR;
}

function Harris(gender, age, height, weight)
{
    let BMR = (13.397*weight) + (4.799*height) - (5.677*age) + 88.362;
    if(gender == 1) // Female
    {
        BMR = (9.247*weight) + (3.098*height) - (4.330*age) + 447.593;
    }

    return BMR;
}

// function Katch(bodyFat, weight)
// {
//     let BMR = 370 + 21.6*(1 - (bodyFat/100))*weight;

//     return BMR;

// <button onclick="myFunction()">Replace document</button>




// }
