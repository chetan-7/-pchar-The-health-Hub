<!DOCTYPE html>
<html lang="en">

    <head>
        <title>उpchar The Health Hub</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="blog.css">
        <style type="text/css">
        </style>
    </head>

    <body>
        <header class="main_header">
            <div class="d-flex justify-content-center align-items-center flex-column py-5">
                <h1 class="text-uppercase main_heading">उpchar The Health Hub</h1>
                <p class="main_heading__para">to help you stay <span class="text-capitalize bg-dark text-white py-2 px-3">Happy and Healthy</span> </p>
            </div>
            <!-- //the main image -->
            <div class="main_header__div d-flex align-items-start
        justify-content-center  flex-column shadow pl-5">
                <p>Health Awareness</p>
                <!-- <h2 class="text-uppercase">the Progammer guy</h2> -->
                <h2 class="animateWord">
                    <span>How to</span>
                    <div>
                        <!--        Use classes 2,3, or 4 to match the number of words -->
                        <ul class="flip4">
                            <li>Boost Your Immune System</li>
                            <li>Stay Hydrated</li>
                            <li>Maintain Your Fitness Routine</li>
                            <li>have Healthy Food and Nutrition</li>
                        </ul>
                    </div>
                </h2>
                <input class="text-uppercase" onclick="change()" type="button" value="SUBSCRIBE" id="myButton1">
            </div>
        </header>
        <!-- header ends -->
        <!-- two sided blog part starts -->
        <div class="container-fluid ">
            <div class="row ">
                <!-- to get the space form left and right -->
                <div class="col-xl-10  col-lg-10 col-md-12 col-11 mx-auto my-5">
                    <div class="row gx-5 mx-sm-auto">
                        <!-- left side of the blog  -->
                        <div class="col-lg-8 col-md-11 col-11 mx-auto">
                            <div class="row gy-5 ">
                            	
                            	<div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">COVID UPDATE</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> Covid-appropriate behaviour boost for vaccination</p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://blog-images.pharmeasy.in/2021/04/06162220/BLOG01.jpg">
                                    </figure>
                                    <p><span class="font-weight-bold">Covid-19 vaccination </span> may not be the silver bullet to defeat the novel coronavirus, but as of now, it is the most important weapon in the arsenal to prevent, manage and overcome the pandemic.  Emphasises Israeli ambassador Dr Malka, “The people of India should get vaccinated as soon as they can, and until then to do whatever they can to avoid infection.”</p>
                                    <p>
                                        And if vaccination is supported by Covid-appropriate behaviour, it increases the chances of scoring over the novel coronavirus. Since India is also facing vaccine shortage at the moment, it makes the case stronger for following the practice of hand hygiene, wearing masks and maintaining social distancing in public places in the meantime. The two-pronged approach of vaccination and Covid-appropriate behaviour would go a long way in fighting not only this wave but also future waves of the pandemic.
                                    </p>
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <button class="left_div__like" id="like_btn"><i class="fa fa-thumbs-up"></i>Like</button>
                                        </div>
                                        <div>
                                            <button class="left_div__reply" onclick="reply('reply2')">Replies <badge class="bg-white text-dark p-2">2</badge></button>
                                        </div>
                                    </div>
                                    <div class="replies" id="reply2">
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold">User1 </span> Mar 11, 2021, 1:20 PM </p>
                                                <p>I really like the way you teach. Subscribed :)</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold"> User2 </span> Mar 30, 2021, 7:25 PM </p>
                                                <p>Awesome</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Ayurveda goes global in 2020 amid Covid-19 pandemic</h1>
                                        <p class="blog_title"> <span class="font-weight-bold">The potential role of Ayurveda in the management of the Covid-19 pandemic</span></p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://etimg.etb2bimg.com/photo/79202494.cms" class="img-fluid shadow">
                                    </figure>
                                    <p>Globally, the standard treatment modality has been struggling for almost a year to find the vaccine to curb the lengthening curve of the unprecedented COVID-19 pandemic with no final outcome yet. In the absence of deterring the Covid-19 scourge therapeutically, it has been acclaimed globally that strengthening the immune system will work wonders in combating the pandemic – an all-time well tested mantra to stay safe and healthy. </p>
                                    <p>Having recognised the significance of the holistic approach of Ayurveda, the Union Health Minister Harsh Vardhan has backed the role of Ayurvedic remedies in the prevention and treatment of the coronavirus disease (Covid-19) and hailed their immunity-boosting properties.
                                    </p>
                                    <p><span class="font-weight-bold">Ayurveda’s Recognition: </span>Considering the recognition of Ayurveda’s immunity-boosting characteristics across the world, celebrating Ayurveda Day globally amid the Covid-19 pandemic is really a welcome step to promote good health and well-being. The initiatives and events being organised will establish Ayurveda as contemporary health science. India's natural system of healing — Ayurveda — has spread worldwide as an innovative and comprehensive system of mind-body medicine.</p>
                                    <p><span class="font-weight-bold">This modern global Ayurveda</span> is rooted in traditional Ayurveda with its embracing of Vedic knowledge on all levels from diet and herbs to meditation. It turns out a differentiator as it seeks to extend the boundaries of medicine beyond chemical drugs and physical concerns to a higher awareness within us connected to the universe as a whole. It is squarely proven that Ayurveda is ecologically harmonious and works with nature's abundance, attuning us to the transformative movement of life.</p>
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <button class="left_div__like" id="like_btn"><i class="fa fa-thumbs-up"></i>Like</button>
                                        </div>
                                        <div>
                                            <button class="left_div__reply" onclick="reply('reply1')">Replies <badge class="bg-white text-dark p-2">1</badge></button>
                                        </div>
                                    </div>
                                    <div class="replies" id="reply1">
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold">User </span> Mar 3, 2021, 12:00 PM</p>
                                                <p>The article was really helpful.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Mental health and wellness</h1>
                                        <p class="blog_title"> <span class="font-weight-bold">A step towards self care</span></p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://townsquare.media/site/385/files/2019/10/socialmediakid.jpg?w=980&q=75" class="img-fluid shadow">
                                    </figure>
                                    <p>In the midst of managing a situation like the COVID-19 outbreak, it’s easy to feel overwhelmed and worried. Focusing on how to slow the spread of the virus is important for our physical health, however, identifying ways to manage our mental health is also crucial.We may experience increased feelings of anxiety, powerlessness, impatience, irritability or frustration. We might also experience a sense of scarcity, or be concerned about increased stigmatization or xenophobia. We may feel uncertainty about the future or worry about isolation amidst rapidly changing schedules and social plans.</p>
                                    <p><span class="font-weight-bold">Good nutrition</span> helps our mood. Stress makes us seek comfort foods, and in turn high carbs and sugars impact our mood.Try to fill your home with fresh produce, frozen vegetables, and whole foods when possible. 
                                    </p>
                                    <p><span class="font-weight-bold">Working from home</span> may be new to you and can have its own challenges, especially in a small home with children. Don't expect to have the same type of productivity as usual. We are all distracted and needing to cope with a different daily life now, while helping others. Reduce your goals for typical work that is not urgent, if possible.</p>
                                    <p><span class="font-weight-bold">Routine and Ritual</span> are restorative to us. Our brain wants predictable activity so we can relax our vigilant nervous system. Go to bed early and go outside each day to be active. Remember that our activities, thoughts, and mood are closely linked. If you want to change your mood, change your activities and/or your thoughts.</p>
                                    <p><span class="font-weight-bold">Reducing stress arousal through breath practices</span> Practices that manage stress reactions in the moment are critical, particularly for front line providers. Taking time out during the day, frequently, to self regulate, can be very helpful. Find a breathing technique that works for calming you.The most basic thing to know is that taking a longer exhale than inhale can help calm your body. Easy techniques include slow diaphragmatic belly breathing (vs. chest breathing), a 2:1 ratio for the exhale (i.e., inhale to the count of 4, exhale to the count of 8); 4-7-8 count breathing, and a common yogic alternate nostril breathing (pranayama).  </p>
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <button class="left_div__like" id="like_btn"><i class="fa fa-thumbs-up"></i>Like</button>
                                        </div>
                                        <div>
                                            <button class="left_div__reply" onclick="reply('reply1')">Replies <badge class="bg-white text-dark p-2">1</badge></button>
                                        </div>
                                    </div>
                                    <div class="replies" id="reply1">
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold">User </span> Mar 3, 2021, 12:00 PM</p>
                                                <p>The article was really helpful.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 2nd topic  -->
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Nutrition</h1>
                                        <p class="blog_title"> <span class="font-weight-bold"> How To Superchange Your Health with a Balanced Nutritious Diet</p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://wallpapercave.com/wp/wp2067583.jpg" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold">Increasing Energy Levels: </span> Do you ever feel lethargic or sluggish even when you’ve slept for 8 hours the night before? If you’re tired all the time or your energy levels are low, your diet may be to blame. Aim to eat foods that will fill you up for long periods and ensure your body has sufficient fuel. You need energy to get through the day. Avoid foods that are packed full of sugars and make time to enjoy main meals. Sticking to three main meals per day is usually much better for you than grazing, particularly if you snack on cakes, chips, chocolate and candy or fast food you can eat on the go. </p>
                                    <p><span class="font-weight-bold">Tackling Underlying Health Problems And Alleviating Symptoms:</span> 
                                        Your diet can play an influential role in controlling symptoms and helping to prevent existing issues from getting worse. Once you know what causes heartburn or exacerbates symptoms, for example, you can adjust and modify your diet to eliminate triggers and ease discomfort. It’s always beneficial to seek advice from your doctor if you have concerns about your diet or you have been diagnosed with a condition that is associated with digestive health.
                                    </p>
                                    <p><span class="font-weight-bold">Maintaining A Healthy, Stable Weight:</span> 
                                        Losing weight is a subject that provokes ardent discussions. When we think about dieting, we often concentrate on cutting foods out. The key to healthy, sustainable weight loss is adjusting the way you see food and prioritizing nutrition.
                                    </p>
                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <button class="left_div__like" id="like_btn"><i class="fa fa-thumbs-up"></i>Like</button>
                                        </div>
                                        <div>
                                            <button class="left_div__reply" onclick="reply('reply2')">Replies <badge class="bg-white text-dark p-2">2</badge></button>
                                        </div>
                                    </div>
                                    <div class="replies" id="reply2">
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold">User1 </span> Mar 11, 2021, 1:20 PM </p>
                                                <p>I really like the way you teach. Subscribed :)</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold"> User2 </span> Mar 30, 2021, 7:25 PM </p>
                                                <p>Awesome</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- 3rd topic -->
                                <div class="col-12 card p-4 shadow blog_left__div">
                                    <div class="d-flex justify-content-center align-items-center flex-column pt-3 pb-5 ">
                                        <h1 class="text-uppercase">Metabolism Check</h1>
                                        <p class="blog_title"> <span class="font-weight-bold">12 Bad Habits That Kill Your Metabolism</span></p>
                                    </div>
                                    <figure class="right_side_img mb-5">
                                        <img src="https://acewebcontent.azureedge.net/blogs/2021-AI_HIITBrain_Header.png" class="img-fluid shadow">
                                    </figure>
                                    <p><span class="font-weight-bold">Cardio is great </span> and it can quickly burn calories, but once you’re done running or cycling, your calorie burn quickly returns to normal. When you do HIIT and resistance-based workouts, however, your calorie burn stays elevated for longer as your muscles repair themselves. Per the American Council on Exercise (ACE): “Strength training is a key component of metabolism because it is directly linked to muscle mass. The more active muscle tissue you have, the higher your metabolic rate.” And, according to ACE, a pound of muscle burns an additional 4–6 calories daily compared to a pound of fat.</p>
                                    <p>
                                        <span class="font-weight-bold">Protein </span>feeds your muscles, promotes satiety, and is an important component to sustain a healthy weight. Eat too little, and you may have trouble building or maintaining muscle mass — and per the above, we know muscle’s importance to metabolism. Also, protein requires more energy to break down than carbs or fat, so you’ll burn more calories during digestion.
                                    </p>
                                    <p>
                                        <span class="font-weight-bold">When stress levels increase </span>your body produces a hormone called cortisol. Cortisol leads to increased appetite, cravings for comfort foods, decreased desire to exercise and reduced sleep quality — all things that negatively impact metabolism. So, while you can’t always control your stress levels, managing stress can go a long way toward protecting your body’s internal fire.
                                    </p>

                                    <div class="d-flex justify-content-between left_div_btns">
                                        <div>
                                            <button class="left_div__like" id="like_btn"><i class="fa fa-thumbs-up"></i>Like</button>
                                        </div>
                                        <div>
                                            <button class="left_div__reply" onclick="reply('reply3')">Replies <badge class="bg-white text-dark p-2">4</badge></button>
                                        </div>
                                    </div>
                                    <div class="replies" id="reply3">
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold"> User4 </span> Apr 12, 2021, 5:20 PM </p>
                                                <p>Nice content.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold"> User1 </span> Apr 15, 2021, 3:00 PM </p>
                                                <p>Awesome,I appreciate the content.</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold"> User5 </span> May 2, 2021, 4:40 PM </p>
                                                <p>The page provides productive information, thank you:).</p>
                                            </div>
                                        </div>
                                        <div class="d-flex justify-content-start flex-row align-items-center card reply_card py-3 ">
                                            <div class=" reply_img mx-2 align-self-center ">
                                                <img src="https://img.icons8.com/doodle/48/000000/user-male-skin-type-5.png" />
                                            </div>
                                            <div class="reply_text__left">
                                                <p class="blog_title "> <span class="font-weight-bold"> User6 </span> May 6, 2021, 5:18 PM </p>
                                                <p>Really beneficial</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--  *******************************************************
            **********************************************************.
            right side of the div
            *******************************************************
            **********************************************************
            -->
                        <div class="col-lg-3 col-md-7 col-11  justify-content-end m-lg-0 m-auto ">
                            <div class="row gy-5 left_div__blog">
                                <!-- about me -->
                                <div class="col-12  about_me_div shadow">
                                    <p><img src="data:image/jpeg;base64,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"></p>
                                    <p><span class="font-weight-bold">Upchar - The Health Hub</span></p>
                                    <p>We are here to benefit all sections of the society healthwise, our agenda is basically focusing on the Blood Donations and Health support through an online platform.</p>
                                </div>
                                <!-- popular post -->
                                <div class=" popular_post ">
                                    <div class="right_div__title py-4 pl-2 ">
                                        <h2>Popular Posts</h2>
                                    </div>
                                    <div class="right_sub__div shadow">
                                        <div class="row ">
                                            <div class="col-3  popular_post__img1 py-2 pl-2">
                                            </div>
                                            <div class="col-9">
                                                <h3><a href="https://www.acefitness.org/education-and-resources/professional/expert-articles/7840/6-ways-high-intensity-exercise-makes-your-brain-stronger/">6 Ways High Intensity Exercise Makes Your Brain Stronger</a></h3>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-3  popular_post__img2 py-2 pl-2">
                                            </div>
                                            <div class="col-9">
                                                <h3><a href="https://www.sciencedaily.com/releases/2021/04/210413194036.htm">Physical Inactivity Linked to More Adverse COVID-19 Outcomes</a></h3>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-3  popular_post__img3 py-2 pl-2">
                                            </div>
                                            <div class="col-9">
                                                <h3><a href="https://brightfireliving.com/10-tips-to-reduce-stress-for-stress-awareness-month/">Stress Awareness Month: Stress Reduction Tips</a></h3>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col-3  popular_post__img4 py-2 pl-2">
                                            </div>
                                            <div class="col-9">
                                                <h3><a href="https://www.verywellfit.com/best-fitness-apps-4173707">The Best Fitness Apps and Tech for Fitness Pros in 2021</a></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- advertise -->
                                <div class=" right_div_post">
                                    <div class="right_div__title py-4 pl-2 ">
                                        <h2>Advertise</h2>
                                    </div>
                                    <div class="right_sub__div ">
                                        <div class="adevetise_img bg-light shadow">
                                            <p>Ads goes here</p>
                                        </div>
                                    </div>
                                </div>
                                <!-- tags -->
                                <div class=" right_div_post">
                                    <div class="right_div__title py-4 pl-2 ">
                                        <h2>Tags</h2>
                                    </div>
                                    <div class="tags_main right_sub__div">
                                        <a href="https://youtu.be/5p8e2ZkbOFU" target="_thapa" class="badge shadow text-capitalize"> health </a>
                                        <a href="#" class="badge shadow text-capitalize"> fitness </a>
                                        <a href="#" class="badge shadow text-capitalize"> wellness </a>
                                        <a href="#" class="badge shadow text-capitalize"> happy </a>
                                        <a href="#" class="badge shadow text-capitalize"> gym </a>
                                        <a href="#" class="badge shadow text-capitalize"> workout </a>
                                        <a href="#" class="badge shadow text-capitalize"> nutrition </a>
                                        <a href="#" class="badge shadow text-capitalize"> eatclean </a>
                                        <a href="#" class="badge shadow text-capitalize"> Calm </a>
                                        <a href="#" class="badge shadow text-capitalize"> training </a>
                                    </div>
                                </div>
                                <!-- Inspiration -->
                                <div class=" right_div_post">
                                    <div class="right_div__title py-4 pl-2 ">
                                        <h2>Inspiration</h2>
                                    </div>
                                    <div class="right_sub__div">
                                        <div class="row gx-3">
                                            <div class="col-6">
                                                <figure>
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTEig-hhL4xtALdPl93TWKmZN8SkWCLqnFoxQ&usqp=CAU" class="img-fluid shadow">
                                                </figure>
                                            </div>
                                            <div class="col-6">
                                                <figure>
                                                    <img src="https://images.saymedia-content.com/.image/c_limit%2Ccs_srgb%2Cq_auto:good%2Cw_672/MTc1MDEyODMwMDc5MTAwNzE1/best-funny-famous-quotes-and-sayings-about-health.webp" class="img-fluid shadow">
                                                </figure>
                                            </div>
                                            <div class="col-6">
                                                <figure>
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShQQBXh1lr0M92ji2H7dNKDwlwJkW9A2vxHFs5vaTr2t-S-kUscy133wp2tOQdKjbOYN8&usqp=CAU" class="img-fluid shadow">
                                                </figure>
                                            </div>
                                            <div class="col-6">
                                                <figure>
                                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6g-4ahB_4b0r9b5AkIxLlQgzGhUL3xwEtCyiY6QFftasTJQOB55hyuRis1vLUe06Z5-M&usqp=CAU" class="img-fluid shadow">
                                                </figure>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Follow Me -->
                                <div class=" right_div_post">
                                    <div class="right_div__title py-4 pl-2 ">
                                        <h2>Follow Me</h2>
                                    </div>
                                    <div class="right_sub__div d-flex justify-content-around">
                                        <a href="#"> <i class="fab fa-facebook-square fa-3x"></i></a>
                                        <a href="https://www.instagram.com/vinodthapa55/" target="_thapa"> <i class="fab fa-3x fa-instagram"></i></a>
                                        <a href="#"> <i class="fab fa-3x fa-github-square"></i> </a>
                                        <a href="#"> <i class="fab fa-3x fa-twitter-square"></i></a>
                                        <a href="#"> <i class="fab fa-3x fa-youtube-square"></i> </a>
                                        <a href="#"> <i class="fab fa-3x fa-linkedin"></i></a>
                                    </div>
                                </div>
                                <!-- Subscribe -->
                                <div class=" right_div_post">
                                    <div class="right_div__title py-4 pl-2 ">
                                        <h2>Subscribe</h2>
                                    </div>
                                    <div class="right_sub__div">
                                        <form>
                                            <div class="mb-3">
                                                <label for="exampleFormControlInput1" class="form-label">Enter your e-mail below and get notified on the latest blog posts.</label>
                                                <input type="email" class="form-control mt-2" id="exampleFormControlInput1" placeholder="name@example.com">
                                            </div>
                                            <div class="col-12">
                                                <button class="subs_btn d-block" type="submit">Subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <p class="text-center py-5 bg-light">Live Happy, Live Healthy</p>
        </footer>
        <!-- Optional JavaScript -->
        <!-- Popper.js first, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
        <script type="text/javascript">
        const like = document.getElementById('like_btn');
        const singleClick = () => {
            like.style.fontWeight = 'bold';
            like.style.background = '#bbe1fa';
            like.style.color = '#1b262c';
            like.innerHTML = "✓ Liked";
        }
        const doubleClick = () => {
            like.style.fontWeight = 'normal';
            like.style.background = '#3282b8';
            like.style.color = '#fff';
            like.innerHTML = "Like";
        }
        var clickCount = 0;
        like.addEventListener('click', function() {
            clickCount++;
            if (clickCount === 1) {
                singleClickTimer = setTimeout(function() {
                    clickCount = 0;
                    singleClick();
                }, 400);
            } else if (clickCount === 2) {
                clearTimeout(singleClickTimer);
                clickCount = 0;
                doubleClick();
            }
        }, false);
        // show and hide the replies
        const reply = (rep) => {
            console.log('hi');
            // debugger;
            var res = document.getElementById(rep);
            console.log(res);
            if (res.className == "replies") {
                res.className = "thapa_show";
                res.style.WebkitTransition = 'all 0.3s ease';
                // res.style.transition = 'all 0.3s ease';
                // console.log(thapa_show);
            } else if (res.className == 'thapa_show') {
                // res.className = " ";
                console.log('thapa show');
                res.className = "replies";
            }
        }
		function change()
		{
			document.getElementById("myButton1").value="SUBSCRIBED";
		}
        </script>
    </body>

</html>