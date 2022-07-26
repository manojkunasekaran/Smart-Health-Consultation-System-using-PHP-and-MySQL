<html>
    <head>
    <title> First aid | Health Consultancy Service </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script type="text/javascript" src="bootstrap/js/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
        <link type="text/css" rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
    </head>
    <style>
      .center{
        text-align:center;
      }
    </style>
    <div id="grad">
    <body>


    <?php

require 'includes/common.php';
?>

        
<div class="navbar navbar-inverse navbar-fixed-top ">
    <div class="container">
                
        <!--header with name of the website-->
                
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>                        
            </button>
            
            <?php
            if(isset($_SESSION['email']))
            {
            ?>
                <a class="navbar-brand" href="doctor.php">Home</a>
            
            <?php
            }
            else
            {
            ?>
                <a class="navbar-brand" href="index.php">Home</a>
            <?php
            }
            ?>
            
        </div>
                
        <!--links for login and signup page-->
              
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                        
                <?php
                
                if(!isset($_SESSION['email']))
                {
                ?>
                <li><a href="#section1"><span class="glyphicon glyphicon-tag"></span> First aid kit</a></li>
                <li><a href="#section2"><span class="glyphicon glyphicon-tag"></span> Burns</a></li>
                
                <li><a href="#section3"><span class="glyphicon glyphicon-tag"></span> Severe bleeding</a></li>
                
                <li><a href="#section4"><span class="glyphicon glyphicon-tag"></span> Head injury</a></li>
                <li><a href="#section5"><span class="glyphicon glyphicon-tag"></span> Heart attack</a></li>
                <li><a href="#section6"><span class="glyphicon glyphicon-tag"></span> CPR</a></li>
                <li><a href="#section7"><span class="glyphicon glyphicon-tag"></span> Nose bleeding</a></li>
                <li><a href="#section8"><span class="glyphicon glyphicon-tag"></span> Snake bite</a></li>
                <li><a href="#section9"><span class="glyphicon glyphicon-tag"></span> Electric shock</a></li>      
                
                <?php
                }
               
                ?>
            </ul>
        </div>
    </div>
</div>

   

  
<div class="container">
<div class="panel_class">
  
      <div id="section1">
      <br>
  <br>
  <br>
  <br>
      <div class="header">
        <h1>FIRST AID KIT AND ITS CONTENTS</h1> 
     </div>
       <div class="center">
         <iframe width="560" height="315" src="https://www.youtube.com/embed/aK9xrsK7vPg" title="YouTube video player" frameborder="0" allow="accelerometer;
          autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
       </div>
       <br>
     <p>Almost everyone will need to use a first aid kit at some time. Make time to prepare home and travel kits for your family’s 
         safety. First aid kits may be basic or comprehensive. What you need depends on your medical training and your distance from
         professional medical help. Ready-made first aid kits are commercially available from chain stores or outdoor retailers, 
         but it’s easy to make smart, inexpensive first aid kits yourself.</p>
  <h3 style="text-align:left">Make Your Own First Aid Kit</h3>     
     <p>Try to keep your kit small and simple. Stock it with multi-use items. Almost anything that provides good visibility of 
         contents can be used for a household first aid kit.
     </p><ul>
     <li>If your kit will be on the move, a water-resistant, drop-proof container is best. </li>
     <li>Inexpensive nylon bags, personal kits, fanny packs, or makeup cases serve very well.</li>
     <li>You do not need to spend a lot of money on a fancy "medical bag." Use re-sealable sandwich or oven bags to group and 
         compartmentalize items.
     </li>
     <li>Put wound supplies in one bag and medications in another.</li></ul>
 <h3 style="text-align:left">How to Use a First Aid Kit</h3>   
     <p>Make sure you know how to properly use all of the items in your kit, especially the medications. Train others in your family 
        to use the kit. You may be the one who needs first aid.Pack and use barrier items such as latex gloves to protect yourself 
        from the bodily fluids of others. Check the kit twice a year and replace expired drugs. Find out the phone number of your 
        regional poison control center at the American Association of Poison Control Centers Web site and keep the number with your
        kit.
     </p>   
     <h3 style="text-align:left">Where to keep your first aid kit:</h3>   
     <ul>
         <li>The best place to keep your first aid kit is in the kitchen. Most family activities take place here. The bathroom has 
             too much humidity, which shortens the shelf life of items.
         </li>
         <li>The travel kit is for true trips away from home. Keep it in a suitcase, backpack, or dry bag, depending on the activity.</li>
         <li>A first aid kit for everyday use in the car should be just like the home first aid kit. For that matter, you could keep 
             similar kits in your boat (inside a waterproof bag), travel trailer, mobile home, camper, cabin, vacation home, and wherever you 
             spend time.
         </li>
     </ul>
 <h3 style="text-align:left">Must-Have First Aid Kit Essentials</h3>   
     <p>You can buy all items for your first aid kits at a well-stocked drug store. Ask the pharmacist for help in selecting items.</p>
     <h3 style="text-align:left">Home kit:</h3> 
     <h4 style="text-align:left"><b>A household first aid kit should include these items:</b></h4>
     <ul>
     <li>Adhesive tape</li>  
     <li>Anesthetic spray (Bactine) or lotion (Calamine, Campho-Phenique) -- for itching rashes and insect bites</li>  
     <li>4" x 4" sterile gauze pads -- for covering and cleaning wounds, as a soft eye patch</li>  
     <li>2", 3", and 4" Ace bandages -- for wrapping sprained or strained joints, for wrapping gauze on to wounds, for wrapping on 
         splints
     </li>  
     <li>Adhesive bandages (all sizes)</li>  
     <li>Oral antihistamines -- diphenhydramine (Benadryl causes drowsiness) or loratadine (Claritin doesn't cause drowsiness) -- 
         for allergic reactions, itching rashes (Avoid topical antihistamine creams because they may worsen the rash in some people.)
     </li>  
     <li>Topical corticosteroids, such as over the counter Hydrocortisone 1% for rashes</li>  
     <li>Aloe vera topical gel or cream for burn relief </li>  
     <li>Exam gloves -- for infection protection, also to make into ice packs when filled with water and frozen</li>  
     <li>Polysporin antibiotic cream -- to apply to simple wounds</li>  
     <li>Nonadhesive pads (Telfa) -- for covering wounds and burns</li>  
     <li>Pocket mask for CPR</li>
     <li>Resealable oven bag -- as a container for contaminated articles, can become an ice pack</li>  
     <li>Safety pins (large and small) -- for splinter removal and for securing triangular bandage sling</li>  
     <li>Scissors</li>  
     <li>Triangular bandage -- as a sling, towel, tourniquet </li>  
     <li>Tweezers -- for splinter or stinger or tick removal</li>
     </ul>
 <h3 style="text-align:left">Travel First Aid Kit:</h3>   
     <h4 style="text-align:left;"><b>A travel first aid kit may contain these items: </b></h4>
     <ul>
     <li>Adhesive tape
     </li>
     <li>4" x 4" sterile gauze pads
     </li>
     <li>Antacid -- for indigestion
     </li>
     <li>Antidiarrheal (Imodium, Pepto-Bismol, for example)
     </li>
     <li>Antihistamine cream
     </li>
     <li>Antiseptic agent (small bottle liquid soap) -- for cleaning wounds and hands
     </li>
     <li>Aspirin -- for mild pain, heart attack
     </li>
     <li>Adhesive bandages (all sizes)
     </li>
     <li>Diphenhydramine (Benadryl) or loratadine (Claritin) -- oral antihistamine
     </li>
     <li>Topical corticosteroids, such as over the counter Hydrocortisone 1% for rashes
     </li>
     <li>Aloe vera topical gel or cream for burn relief
     </li>
     <li>Book on first aid
     </li>
     <li>Cigarette lighter -- to sterilize instruments and to be able to start a fire in the wilderness (to keep warm and to make 
         smoke to signal for help, for examples)
     </li>
     <li>Cough medication
     </li>
     <li>Dental kit -- for broken teeth, loss of crown or filling
     </li>
     <li>Exam gloves
     </li>
     <li>Small flashlight
     </li>
     <li>Ibuprofen (Advil is one brand name)
     </li>
     <li>Insect repellant</li>
     <li>Knife (small Swiss Army-type)
     </li>
     <li>Moleskin -- to apply to blisters or hot spots
     </li>
     <li>Nasal spray decongestant -- for nasal congestion from colds or allergies
     </li>
     <li>Nonadhesive wound pads (Telfa)
     </li>
     <li>Polysporin antibiotic ointment
     </li>
     <li>Oral decongestant
     </li>
     <li>Personal medications and items
     </li>
     <li>Phone card with at least 60 minutes of time (and not a close expiration date) plus at least 10 quarters for pay phones and 
         a list of important people to reach in an emergency
     </li>
     <li>Plastic resealable bags (oven and sandwich)
     </li>
     <li>Safety pins (large and small)
     </li>
     <li>Scissors
     </li>
     <li>Sunscreen with an SPF of 30 or more
     </li>
     <li>Thermometer
     </li>
     <li>Tweezers
     </li>
     </ul>
         </div>


         <div id="section2">
         <br>
  <br>
  <br>
  <br>
  
        <div class="header">
           <h1>Treating Major and Minor Burns</h1> 
        </div>
          <div class="center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/lGD-Hw1_rEs" title="YouTube video player" 
            frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                allowfullscreen></iframe>
          </div>
          <h3>Burns</h3>
          <p>A burn is tissue damage that results from scalding, overexposure to the sun or other radiation, contact with flames, 
            chemicals or electricity, or smoke inhalation.</p>
          <h3>Major Burns(seek immediate care)</h3>
          <ul>
            <li>Are deep </li>
            <li>Cause the skin to be dry and leathery </li>
            <li>May appear charred or have patches of white, brown or black</li>
            <li>Are larger than 3 inches (about 8 centimeters) in diameter or cover the hands, feet, face, groin, buttocks or a major
               joint</li>
          </ul>
          <h3>Minor Burns(which doesn't need emergency care)</h3>
          <ul>
            <li>Superficial redness similar to a sunburn</li>
            <li> Pain</li>
            <li>Blisters</li>
            <li> An area no larger than 3 inches (about 8 centimeters) in diameter</li>
          </ul>
          <h3>Treating Major Burns</h3>
          <h4><b>Until emergency help arrives:</b></h4>
          <ul>
            <li><b>Protect the burned person from further harm.</b>If you can do so safely, make sure the person you're helping is not
               in contact with the source of the burn. For electrical burns, make sure the power source is off before you approach
                the burned person.
            </li>
            <li><b> Make certain that the person burned is breathing.</b> If needed, begin rescue breathing if you know how.</li> 
            <li><b> Remove jewelry, belts and other restrictive items,</b>especially from around burned areas and the neck. Burned areas
               swell rapidly.</li>
            <li><b> Cover the area of the burn.</b> Use a cool, moist bandage or a clean cloth.</li>
            <li><b> Don't immerse large severe burns in water.</b>Doing so could cause a serious loss of body heat (hypothermia).</li>
            <li><b>Elevate the burned area.</b>Raise the wound above heart level, if possible.</li>
            <li><b>Watch for signs of shock.</b> Signs and symptoms include fainting, pale complexion or breathing in a notably
               shallow fashion.</li>
          </ul>
          <h3>Treating Minor Burns</h3>
          <h4><b>For Minor Burns:</b></h4>
          <ul>
          <li><b>Cool the burn.</b> Hold the burned area under cool (not cold) running water or apply a cool, wet compress until the
             pain eases.</li>
          <li><b>Remove rings or other tight items from the burned area.</b> Try to do this quickly and gently, before the area 
            swells.</li>
          <li><b>Don't break blisters.</b>Fluid-filled blisters protect against infection. If a blister breaks, clean the area 
            with water (mild soap is optional). Apply an antibiotic ointment. But if a rash appears, stop using the ointment.</li>
          <li><b>Apply lotion.</b> Once a burn is completely cooled, apply a lotion, such as one that contains aloe vera or a 
            moisturizer. This helps prevent drying and provides relief. </li>
            <li><b>Bandage the burn.</b> Cover the burn with a sterile gauze bandage (not fluffy cotton). Wrap it loosely to avoid 
              putting pressure on burned skin. Bandaging keeps air off the area, reduces pain and protects blistered skin. </li>
              <li><b>If needed, take an over-the-counter pain reliever,</b> such as ibuprofen (Advil, Motrin IB, others), naproxen sodium (Aleve) or acetaminophen (Tylenol, others).
              </li>
            </ul>
            </div>


            <div id="section3">
            <br>
  <br>
  <br>
  <br>
              <div class="header">
                <h1>Treatinig Severe Bleeding</h1> 
             </div>
             <div class="center">
              <iframe width="560" height="315" src="https://www.youtube.com/embed/NxO5LvgqZe0" title="YouTube video player" 
              frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
              allowfullscreen></iframe>
             </div>
             <h3>Severe Bleeding</h3>
             <h4><b>For severe bleeding, take these first-aid steps and reassure the injured person.</b></h4>
             <ul>
             <li><b> Remove any clothing or debris on the wound.</b> Don't remove large or deeply embedded objects. Don't probe the
               wound or attempt to clean it yet. Your first job is to stop the bleeding. Wear disposable protective gloves if available.
             </li>
             <li><b>Stop the bleeding.</b> Place a sterile bandage or clean cloth on the wound. Press the bandage firmly with your
               palm to control bleeding. Apply constant pressure until the bleeding stops. Maintain pressure by binding the wound 
               with a thick bandage or a piece of clean cloth. Don't put direct pressure on an eye injury or embedded object.
             </li>
             <li><b>Secure the bandage with adhesive tape or continue to maintain pressure with your hands.</b> If possible, raise 
              an injured limb above the level of the heart.
            </li>
             <li><b>Help the injured person lie down.</b> If possible, place the person on a rug or blanket to prevent loss of
               body heat. Calmly reassure the injured person.
             </li>
             <li><b>Don't remove the gauze or bandage.</b> If the bleeding seeps through the gauze or other cloth on the wound,
               add another bandage on top of it. And keep pressing firmly on the area.
             </li>
             <li><b>Tourniquets:</b> A tourniquet is effective in controlling life-threatening bleeding from a limb. Apply a 
              tourniquet if you're trained in how to do so. When emergency help arrives, explain how long the tourniquet has 
              been in place.
             </li>
             <li><b>Immobilize the injured body part</b> as much as possible. Leave the bandages in place and get the injured person to an emergency room as soon as possible.
             </li>
             </ul>
              </div>


              <div id="section4">
              <br>
  <br>
  <br>
  <br>
             <div class="header">
              <h1>Treating Head Injury</h1> 
           </div>
           <div class ="center">
            <iframe width="560" height="315" src="https://www.youtube.com/embed/a4cIFZx1f2E" title="YouTube video player"
             frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
             allowfullscreen></iframe>
           </div>
           <h3>Head Injury</h3>
           <h4> <b>Any of the following signs or symptoms may indicate a serious head injury:</b></h4>
           <h3>Adults</h3>
           <ul>
           <li>Severe head or facial bleeding</li>
           <li>Vomiting</li>
           <li>Severe headache</li>
           <li>Change in consciousness for more than a few seconds</li>
           <li>Black-and-blue discoloration below the eyes or behind the ears</li>
           <li>Not breathing</li>
           <li>Confusion</li>
           <li>Agitation</li>
           <li>Loss of balance</li>
           <li>Weakness or an inability to use an arm or leg
          </li>
           <li>Unequal pupil size
          </li>
           <li>Slurred speech
          </li>
           <li>Seizures
          </li>
        </ul>
        <h3>Children</h3>
        <ul>
           <li>Any of the signs or symptoms for adults
          </li>
           <li>Persistent crying
          </li>
           <li>Refusal to eat
          </li>
           <li>Bulging in the soft spot on the front of the head (infants)
          </li>
           <li>Repeated vomiting
          </li>
           </ul>
           <h4> <b>Administer the following first-aid steps while waiting for emergency medical help to arrive:</b>
          </h4>
          <li><b> Keep the person still.</b>The injured person should lie down with the head and shoulders slightly elevated. Don't move the person unless necessary,
             and avoid moving the person's neck. If the person is wearing a helmet, don't remove it.
          </li>
          <li><b>Stop any bleeding.</b>Apply firm pressure to the wound with sterile gauze or a clean cloth. But don't apply direct pressure to the wound if you 
            suspect a skull fracture.
          </li>
          <li><b>Watch for changes in breathing and alertness.</b>If the person shows no signs of circulation — no breathing, coughing or movement — begin CPR.
          </li>
          <p>Head trauma that results in concussion symptoms, such as nausea, unsteadiness, headaches or difficulty concentrating, should be evaluated by a medical professional.
          </p>
           </div>


           <div id="section5">
           <br>
  <br>
  <br>
  <br>
          <div class="header">
            <h1>Treating Heart Attacks</h1> 
         </div>
         <div class="center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/5x0fVTwsrrQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay;
           clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <h3>Heart Attacks</h3>
        <h4><b>Symptoms: </b></h4>
        <ul>
          <li>Chest pain, pressure or tightness, or a squeezing or aching sensation in the center of the chest</li>
          <li>Pain or discomfort that spreads to the shoulder, arm, back, neck, jaw, teeth or occasionally upper abdomen
          </li>
          <li>Nausea, indigestion, heartburn or abdominal pain
          </li>
          <li>Shortness of breath</li>
          <li>Lightheadedness, dizziness, fainting,Sweating</li>
        </ul>
        <p>A heart attack generally causes chest pain for more than 15 minutes. Some people have mild chest pain, while others have more-severe pain. The discomfort
           is commonly described as a pressure or chest heaviness, although some people have no chest pain or pressure at all. Women tend to have more-vague symptoms, 
           such as nausea or back or jaw pain.
        </p>
        <p>Some heart attacks strike suddenly, but many people have warning signs hours or days in advance.</p>
        <h4><b>What to do if you or someone else may be having a heart attack</b></h4>
        <ul>
          <li>Call 108 or your local emergency number.</li>
          <li>Chew and swallow an aspirin</li>
          <li>Take nitroglycerin, if prescribed</li>
          <li>Begin CPR if the person is unconscious.</li>
          <li>If an automated external defibrillator (AED) is immediately available and the person is unconscious, follow the device instructions for using it.</li>
        </ul>
          </div>


          <div id="section6">
          <br>
  <br>
  <br>
  <br>
        <div class ="header">
         <h1>CPR(Cardiopulmonary Resuscitation)</h1>
        </div>
        <div class= "center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/8YREVVM2n7g" title="YouTube video player" frameborder="0" allow="accelerometer;
           autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
        <h3>CPR(Cardiopulmonary Resuscitation)</h3>
        <p>It is an emergency lifesaving procedure. It is a combination of:</p>
        <ul>
          <li>Chest compressions that keeps patient's blood circulating.</li>
          <li>Rescue breathing that provides oxygen to patient's lungs.Chest compressions:
          </li>
        </ul>
        <h3>Chest Compressions</h3>
        <ul>
          <li> Place the heel of one hand on the lower half of the person’s breastbone</li>
          <li>Place the other hand on top of the first hand and interlock your fingers.</li>
          <li>Press down firmly and smoothly (compressing to 1/3 of chest depth) 30 times.</li>
          <li>Administer 2 breaths as described below in mouth-to-mouth,</li>
          <li>The ratio of 30 chest compressions followed by 2 breaths is the same, whether CPR is being performed alone or with the assistance of a second 
            person.</li>
          <li>Aim for a compression rate of 100 per minute.</li>
        </ul>
        <h3>Mouth-to-mouth Respiration:</h3>
        <ul>
          <li> If the patient is not breathing normally, make sure he is lying on his back on a firm surface</li>
          <li>Open the airway by tilting the head back and lifting his chin.</li>
          <li>Close his nostrils with your finger and thumb.</li>
          <li>Put your mouth over the patient’s mouth and blow into his mouth.</li>
          <li>Give 2 full breaths to the patient (this is called ‘rescue breathing’). Make sure there is no air leak and the chest is rising and falling. If his chest
             does not rise and fall, check that you’re pinching his nostrils tightly and sealing your mouth to his. If still no breathing, check airway again for any
              obstruction.</li>       
          <li>Continue CPR, repeating the cycle of 30 compressions then 2 breaths until professional help arrives. </li>
        </ul>
        <h3>CPR for children aged 1-8 years:</h3>
        <ul>
        <li>Use the heel of one hand only for compressions, compressing to one third of chest depth.</li>
        <li>Follow the basic steps for performing CPR described above.</li>
        </ul>
        <h3>CPR for infant (up to 12 months of age):</h3>
        <ul>
          <li>Place the infant on his back. Do not tilt his head back or lift his chin (this is not necessary as their heads are still large in comparison to their 
            bodies).</li>
          <li>Perform mouth-to-mouth by covering the infant’s nose and mouth with your mouth – remember to use only a small breath.</li>
          <li>Do chest compressions, using two fingers of one hand, to about one third of chest depth.</li>
          <li>
            Follow the basic steps for performing CPR described above.</li>
        </ul>
        <h3>When to stop CPR?</h3>
        <ul>
          <li>
            The patient&#39;s revives and starts breathing on its own</li>
          <li>
            When medical help arrives</li>
          <li>
            When the person giving CPR is exhausted</li>
        </ul>
          </div>


          <div id="section7">
          <br>
  <br>
  <br>
  <br>
        <div class ="header">
          <h1>Treating Nose Bleeding</h1>
         </div>
         <div class ="center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/iuri98TjKKU" title="YouTube video player" frameborder="0" allow="accelerometer; 
          autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <h3>Node Bleeding</h3>
        <ul>
          <li>
            Bleeding from either or both nostrils</li>
          <li>
            Sometimes bleeding from ears/ mouth too.</li>
        </ul>
        <h4><b>Causes of nose bleeding:</b></h4>
        <ul>
          <li>
            Dryness&nbsp;</li>
          <li>
            Blowing nose with force&nbsp;</li>
          <li>
            Use of medications, like aspirin&nbsp;</li>
          <li>
            Nose picking</li>
          <li>
            Pushing objects into nose&nbsp;</li>
          <li>
            Injuries&nbsp;/ blow to the nose</li>
          <li>
            Infections&nbsp;of the nose</li>
          <li>
            Atherosclerosis&nbsp;</li>
          <li>
            Blood-clotting disorders&nbsp;</li>
        </ul>
        <h3>Treatment</h3>
        <ul>
          <li>
            One should not panic and should&nbsp; make the patient sit in upright position with his head slightly forward.</li>
          <li>
            With thumb and index finger, one should&nbsp; apply pressure on soft part of nostrils below the nose bridge.</li>
          <li>
            Continue applying pressure until the bleeding stops.</li>
          <li>
            Ask the patient to breathe through the mouth while nostrils are pinched</li>
          <li>
            Loosen the tight clothing around the neck</li>
          <li>
            After 10 minutes, release the pressure on the nostrils and check to see if the bleeding has stopped</li>
          <li>
            If bleeding persists, seek medical aid</li>
        </ul>
          </div>


          <div id="section8">
          <br>
  <br>
  <br>
  <br>
        <div class ="header">
          <h1>Treating Snake Bite</h1>
         </div>
         <div class ="center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/nH8o-bgwo_g" title="YouTube video player" frameborder="0" allow="accelerometer;
           autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <h3>Snake Bites</h3>
        <p>
          Snake bite is prevalent in our community for generations, and we are not able to prevent it. Education of the common man is required from snake bite,
           as well as measures to be taken after the bite. Snake bite may occur at any time during lifetime. WHO (2004) provided recommendations to reduce death due 
           to snake bite as per international norms. A primary recommendation, based on evidence based procedures, was to establish a single protocol for both first-aid
            and treatment, and is relevant in Indian context as well.</p>
        <p>
          Remember, traditional therapy have no proven benefit in the treatment of snake bite. Do not waste time and send the patient to hospital at the earliest.</p>
        <p>
          <h3>First- Aid treatment protocol:</h3></p>
        <p>
          First-aid currently recommended may be remembered by mnemonic CARRY NO R.I.G.H.T.</p>
        <p>
          CARRY: Do not let victim to walk even for short distance.Transport by conveyance, especially when bite is in legs.</p>
        <p>
          <h3>NO:</h3></p>
        <p>
          NO- Tourniquet.</p>
        <p>
          NO- Cutting.</p>
        <p>
          NO- Electrotherapy.</p>
        <p>
          NO- Pressure immobilisation, nitric oxide donor (nitrogesic ointment/nitrate spray)</p>
        <p>
          <strong>R.I.G.H.T:</strong></p>
        <p>
          <strong>R:</strong> Reassure patient, since 70% of all snake bites are from non-venomous species.Only 50% of bites by venomous type of snakes actually envenomate (poison with venom) victims.</p>
        <p>
          <strong>I:</strong> Immobilise limb in a fashion similar to a fractured limb, in case of bites on the limb. A bandage or cloth is used to hold the splints. Do not apply pressure and ensure that blood supply is not blocked. Compression in the form of tight ligatures does not work and may be dangerous even.</p>
        <p>
          <strong>GH:</strong> Get to Hospital immediately.</p>
        <p>
          <strong>T:</strong> Tell any systemic symptoms that manifest on way to hospital.</p>
        <p>
          Do not waste time in first aid management by traditional methods which may dangerously delay effective treatment.</p>
          </div>


          <div id="section9">
          <br>
  <br>
  <br>
  <br>
          <div class="header">
            <h1>Treating Electric Shocks</h1> 
         </div>
         <div class ="center">
          <iframe width="560" height="315" src="https://www.youtube.com/embed/ZY-WdRC_orU" title="YouTube video player" frameborder="0" allow="accelerometer;
           autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <h3>Electric Shocks</h3>
         <p>The danger from an electrical shock depends on the type of current, how high the voltage is, how the current traveled through the body, the person's 
           overall health and how quickly the person is treated.
        </p>
         <p>An electrical shock may cause burns, or it may leave no visible mark on the skin. In either case, an electrical current passing through the body can 
           cause internal damage, cardiac arrest or other injury. Under certain circumstances, even a small amount of electricity can be fatal.
        </p>
        <h3>Take these actions immediately :</h3>
        <ul>
        <li>Turn off the source of electricity, if possible. If not, move the source away from you and the person, using a dry, nonconducting object made of 
          cardboard, plastic or wood.
        </li>
        <li>Begin CPR if the person shows no signs of circulation, such as breathing, coughing or movement.
        </li>
        <li>Try to prevent the injured person from becoming chilled.
        </li>
        <li>Apply a bandage. Cover any burned areas with a sterile gauze bandage, if available, or a clean cloth. Don't use a blanket or towel, because loose fibers can stick to the burns. 
        </li>
       </ul>
       <h3> When to seek emergency care</h3>
       <p> Call 911 or your local emergency number if the injured person experiences:</p>
       <ul>
         <li>Severe burns</li>
         <li>Confusion</li>
         <li>Difficulty breathing</li>
         <li>Heart rhythm problems (arrhythmias)</li>
         <li>Cardiac arrest</li>
         <li>Muscle pain and contractions</li>
         <li>Seizures</li>
         <li>Loss of consciousness</li>
       </ul>
          </div>
       </div>
  </div>
             </body>
         </div>
</html>
          
         
          
          
          
