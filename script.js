$(".option").on("click", function() {
    $(".option").removeClass("active");
    $(this).addClass("active");
    var type = $(this).data("option");
    setTimeout(function() {
      if (type === "day") {
        $(".time").attr('class', 'time day');
      } else if (type === "night") {
        $(".time").attr('class', 'time night');
      } else if (type === "dusk") {
        $(".time").attr('class', 'time dusk');
      } else if (type === "sunset") {
        $(".time").attr('class', 'time sunset');
      } 
    }, 500);
  });

var title = document.getElementById("title");
var subhead = document.getElementById("subhead");
var details =document.getElementById("details");

function concepts(){
    title.innerHTML = `Diet for an Infant`;
    subhead.innerHTML = `New born to 5 years   `;
    details.innerHTML = ` If you have an infant or kid at your place, make sure that they get enough nutrition in their growing years of age. Babies should be exclusively breastfed for the first six months of life. Breast feeding should be started within
    an hour after delivery and do not discard first milk (colostrum), as it boosts the immunity of the baby and protects baby from several infections. Exclusive breast-feeding ensures safe nutrition to the infant thereby reducing the
     risk of infections and also helps in the overall development of the baby   Breast-milk is the most natural and wholesome food for growth and healthy development of infants.  Breast –fed infants do not need additional water.  After six months, 
     you can feed your baby with complementary foods while continuing to breastfeed. Complementary food should be rich in nutrients. These complementary foods can be prepared at home from commonly used food materials such as cereals (wheat, rice, jowar, bajra, etc.);
      pulses (grams/dals), nuts and oilseeds (groundnut, sesame, etc.), oils (groundnut oil, sesame oil etc.), sugar and jaggery. You can feed your baby to variety of soft foods like potatoes, porridge, cereals, or even eggs. 
     <br><br><b>According to WHO</b><br>
     <ul>
       <li>Infants should be breastfed exclusively during the first 6 months of life.</li><br>
       <li>Infants should be breastfed continuously until 2 years of age and beyond.</li><br>
       <li>From 6 months of age, breast milk should be complemented with a variety of adequate, safe and nutrient dense complementary foods.</li><br>
     </ul>
     Infants cannot eat large quantities of food at a single time so they should be fed small quantities at frequent intervals (3-4 times a day). Also, the food should be of semi-solid consistency so that the infants can swallow it easily.  A balanced diet is the key to protect your child against nutritional deficiencies. Protein Energy Malnutrition more commonly affects children between the ages of 6 months and 5 years. Malnutrition is defined as <b>"a state of poor nutrition caused by insufficient or unbalanced diet".</b>`;
}
function pradnya(){
    title.innerHTML = `Diet for a Growing Child`;
    subhead.innerHTML = `5 to 17 years`;
    details.innerHTML = `Children who eat a balanced diet lay the foundation for a healthy and active lifestyle and this further lowers the risk of long term health issues. Childhood is the most critical time for growth as well as for development of the mind and to fight infections. So, it is very essential that the children get a good dose of energy, proteins, vitamins and minerals. It is very important to follow that hygienic practices are followed while preparing and feeding the complementary food to the child; otherwise, it might lead to diarrhoea. A well formulated balanced diet is necessary for children and adolescents to achieve optimum growth and boost their immunity. Balanced Diet, playing outdoors, physical activities of child are essential for optimum body composition and to reduce the risk of diet related chronic conditions later in life and to prevent any sort of vitamin deficiency.  Adolescence has various other factors attached to it: rapid increase in height and weight, hormonal changes and mood swings.
<br><br>
    Development of bone mass is going on during this period so inclusion of dairy products (milk, cheese, yoghurt) and vegetables like spinach, broccoli and celery which are rich in calcium is a must.
    <br><br>    
    Children require good amount of carbohydrates and fats for energy. Therefore, it is very essential to give them a daily intake of energy rich foods as whole grains (wheat, brown rice), nuts, vegetable oils, vegetables like potatoes, sweet potatoes, fruits like banana.
    <br><br>   
    In case of children, proteins are essentials for muscle building, repair and growth and building antibodies. So give them diet which has meat, eggs, fish and dairy products.
    <br><br>   
    A child needs vitamins for the body to function properly and to boost the immune system. A variety of fruits and vegetables of different colours should be added in child’s food. Vitamin A is essential for vision and a deficiency of the same can lead to night blindness (difficulty in seeing in night). Dark green leafy vegetables, yellow, orange coloured vegetables and fruits (such as carrots, papaya, mangoes) are good sources of Vitamin A.
    <br><br> 
    Vitamin D helps in bone growth and development and it is essential for absorption of calcium. Children get most of their Vitamin D from sunlight and a small amount from some food items like (fish oils, fatty fish, mushrooms, cheese and egg yolks).
    <br><br> 
    Teenage girls experience more physiological changes and psychological stress than boys because of onset of menarche (onset of menstruation) .Therefore, teenage girls should eat diet which is rich in both vitamins as well as minerals to prevent anemia.
    <br><br> 
    Now a days, children are more inclined towards junk food but it is very important to motivate your kids in teenage to eat nutrition rich foods. Many children have poor eating habits, which can lead to various long-term health complications, such as obesity, heart disease, type 2 diabetes and osteoporosis. As a parent, keep making frequent changes in their menu to avoid boredom of eating the same food every day.  Adolescence is the most vulnerable stage for developing bad food habits as well as bad habits like smoking, chewing tobacco or drinking alcohol. These should be avoided. In addition to consumption of a nutritious well balanced diet, appropriate lifestyle practices and involvement in outdoor activities such as games/sports should be encouraged among children as well as adolescents. Regular physical exercises increase strength and stamina, and are necessary for good health and well being.`;
   
}

function pratibha(){
  title.innerHTML = `Diet for Pregnant and Lactating Mother`;
  subhead.innerHTML = ``;
  details.innerHTML = `Motherhood is a testing phase in every women’s life may it be physiologically, mentally as well as nutritionally. If you are pregnant or someone in your family is expecting a baby, make sure that they eat well. Additional food and extra attention is required during pregnancy as well as lactation. Extra food is required to meet the nutritional requirement of the baby in your womb. Additional foods are required to improve the weight gain in pregnancy (generally 10-12 kgs) and birth weight of infants (about 2.5kgs-3kgs). The nutritional requirement of a pregnant woman keeps changing depending upon the various trimesters of pregnancy. In some cases, micronutrients (like folic acid/ iron tablets) are specially required in extra amounts to reduce the risk of malformations in baby and increase birth weight of baby and to prevent anaemia in expecting mothers.
  <br><br>
  Extra intake of Calcium is required, during pregnancy and lactation phase, for proper formation of bones and teeth of the baby, for secretion of breast-milk which is rich in calcium and to prevent osteoporosis in the expecting and lactating mothers. Therefore, their diet should contain calcium rich foods such as milk, yogurt, cheese, green leafy vegetables, legumes and seafood.  Vitamin A is required during lactation to improve child survival. Apart from these, nutrients like Vitamin B12 and C are also needed to be taken by lactating mother.   
  <br><br>
  Iron is needed for hemoglobin synthesis, and to provide immunity against diseases. Deficiency of iron leads to anaemia. Iron deficiency is common particularly in women of reproductive age and children. Iron deficiency during pregnancy increases maternal mortality and low birth weight infants. Plant foods like green leafy vegetables, legumes and dry fruits contain iron. Iron can also obtained through sources like meat, fish and poultry products. Consume vitamin C- rich fruits like gooseberries (amla), guava, oranges and citrus rich fruits for better absorption of iron from your diet.
  <br><br>
  Iodine deficiency during pregnancy results in still births, abortions and cretinism therefore use iodized salt in your food.
  <br><br>
  So, now you know why good nutrition is essential. Well, it’s important for a pregnant mother to maintain fetus as well as her own health, to provide strength required during labor; and for successful lactation. Make sure that the diet taken during pregnancy is light, nutritious, easy to digest and rich in all essential nutrients.`;
}
function naipunya(){
  title.innerHTML = `Diet for an Adult Male & Female`;
  subhead.innerHTML = `18 to 59 years`;
  details.innerHTML = `As an adult male and female, you must take care of your diet. Adults generally complain of time crunch and with sedentary lifestyle, it becomes even more difficult to follow a strict diet. Adults should use salt in moderation as high intake of salt might lead to high blood pressure. One should avoid preserved foods such as pickles/ papads and also canned foods as it contributes to higher intake of salt. An adult female should take a diet which is rich in calcium (Milk & dairy products) as well as iron (green leafy vegetables-spinach, broccoli etc.) Limit use of saturated fats and trans fats such as ghee, butter, cheese, vanaspati ghee and add more fibrous food in diet in the form of whole grains, vegetables and fruits.
  <br><br>
  <b>According to WHO, a healthy diet for adults contains:</b> <br>
  <ul>
  <li>Fruits, vegetables, legumes (e.g. lentils, beans), nuts and whole grains (e.g. unprocessed maize, millet, oats, wheat, brown rice).</li>
  <li>At least 400grams (5 portions) of fruits and vegetables a day. Potatoes, sweet potatoes, cassava and other starchy roots are not classified as fruits or vegetables.</li>
  <li>Unsaturated fats (e.g. found in fish, avocado, nuts, sunflower, canola and olive oils) are preferable to saturated fats (e.g. found in fatty meat, butter, palm and coconut oil, cream, cheese, ghee and lard). Industrial trans fats (found in processed food, fast food, snack food, fried food, frozen pizza, pies, cookies, margarines and spreads) are not a part of a healthy diet.</li>
  <li>Less than 5 g of salt (equivalent to approximately 1 teaspoon) per day and use iodized salt.</li>
  </ul>
  `;
}


function capture(){
  title.innerHTML = `Diet for Elderly People`;
  subhead.innerHTML = `60 years and above`;
  details.innerHTML = `Individuals of 60 years and above constitute the elderly .The diet for elderly people should include nutrient rich foods to enable them to be fit and active. Senior citizens need more of vitamins and minerals to be healthy and active.
  <br><br>
  The body composition changes with the advancing age and all these changes affect nutritional needs of the elderly.  Elderly or aged people require reduce amount of calories as their lean muscle mass and physical activity decreases with ageing.  Elderly need more calcium, iron, zinc, vitamin A and antioxidants to prevent age-related degenerative diseases and for healthy ageing. It is very essential to maintain your health as ageing process starts and it increases the life expectancy. It is very important for elderly people to exercise as it helps to regulate body weight and flexibility in the joints. The risk of degenerative diseases also considerably decreases with regular exercise session.  
  <br><br>
 Elders generally complain of loss of appetite or sometimes difficulty in chewing. A soft diet should be given to elders, with inclusion of fruits and vegetables in their diet. Calcium rich foods like dairy products (low fat), milk (toned) and green leafy vegetables should be included in the daily diet to maintain bone health, so as to prevent osteoporosis and bone fractures. Consume pulses, toned milk, egg-white etc. in good quantities as they are rich in proteins. Elderly people should cut down on their saturated fats, sweets, oily food, salt and sugar level. Use of ghee, oil, butter should be completely avoided. Also, avoid eating spicy food.
 <br><br>
 The diet for elderly people needs to be well cooked, soft and should be less salty and spicy. Ensure to eat small quantities of food at more frequent intervals and drink water at frequent intervals to avoid dehydration and constipation. Consult a doctor for an individualized diet depending upon the medical condition in the case of persons suffering from chronic diseases and bed ridden patients.`;
}


function typeEffect(element, speed) {
var text = element.innerHTML;
element.innerHTML = "";

var i = 0;
var timer = setInterval(function() {
  if (i < text.length) {
    element.append(text.charAt(i));
    i++;
  } else {
    clearInterval(timer);
  }
}, speed);
}


// application
var speed = 175;
var h1 = document.querySelector('.main-content #head');
var p = document.querySelector('p');
var delay = h1.innerHTML.length * speed + speed;

// type affect to header
typeEffect(h1, speed);


// type affect to body
setTimeout(function(){
p.style.display = "inline-block";
typeEffect(p, speed);
}, delay);