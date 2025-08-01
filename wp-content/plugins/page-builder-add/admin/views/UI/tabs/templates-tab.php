    <?php if ( ! defined( 'ABSPATH' ) ) exit;
      $pbPP_imgFolderURL = ULPB_PLUGIN_URL.'/images/templates/thumbs/';
      $pbPP_templateScreenshotFolder = 'https://ps.w.org/page-builder-add/assets/';
      $pbPP_customLandingDesignCard = 'display:none !important';

      // https://ps.w.org/page-builder-add/assets/ 

      // https://storage.googleapis.com/imagelibrarystorage.pluginops.com/template-images

      $pbPP_freeSearchTag = '';
      if ( function_exists('ulpb_available_pro_widgets')  ) {
        echo "<style> 
                .free-temps-link{ display:none !important;} 
        </style>";

        $pbPP_customLandingDesignCard = 'display:inline-block !important';
        
      }else{
        echo "
        <style>
                .temp_selectLabel{
                        background: #4CAF50;
                        color: #FFF !important;
                        font-weight: bold;
                }
                .tempPaca label{
                        background: #F44336;
                        color: #FFF;
                        font-weight: bold;
                }
                
            
        </style>
        ";
        $pbPP_freeSearchTag = '<div class="templatesTypeFilterItem">Free</div>';
        
      }
     ?>

    <div id="tab2" class="pluginops-tab">
     
      
      <div  class="abTestNotice" style="display: none !important;"> 
        <i class='fa fa-circle-o-notch'></i> 
        Need a great looking landing page ?  Hire us and we will design great looking landing pages for your business. 
        <a href='https://pluginops.com/landing-page-design/?ref=templatesSection' target='_blank' style="padding: 5px 10px;"> Click here to order</a>
      </div>

      <div  class="free-temps-link abTestNotice" style=""> 
        <i class='fa fa-circle-o-notch'></i> 
        Unlock all Premium templates and design amazing landing pages and websites.
        <a href='https://pluginops.com/page-builder/?ref=templatesSection' target='_blank' style="padding: 5px 10px;">Unlock Templates</a>
      </div>
      
    
      <div style="
        float: left;
        width:100%;
        margin: 10px 30px;
        font-size: 18px;
        color: #f3f6f8;
        display: flex;
        flex-wrap: nowrap;
        justify-content: space-between;
        align-content: center;
        align-items: center;
        flex-direction: row;
        ">
        
        <div class="templatesTypeFilterContainer" style="width:80%;">
          <div class="templatesTypeFilterItem active">All</div>
          <?php echo $pbPP_freeSearchTag; ?>
          <div class="templatesTypeFilterItem">Lead Generation</div>
          <div class="templatesTypeFilterItem">Click Through</div>
          <div class="templatesTypeFilterItem">Sales</div>
          <div class="templatesTypeFilterItem comingsoonfilterbtn">Coming Soon</div>
          <div class="templatesTypeFilterItem maintenancefilterbtn">Maintenance</div>
          <div class="templatesTypeFilterItem">Thank You</div>
          <div class="templatesTypeFilterItem">Webinar</div>
          <div class="templatesTypeFilterItem">Home Page</div>
        </div>
        <div class="templatesSearchContainer" style="width:20%;">
                <div class="templateSearchBar">
                        <input type="text" placeholder="Search Templates" class="templateSearchInput" />
                        <span class="dashicons dashicons-search"></span>
                </div>
        </div>

      </div>

          <div class="pluginops-tabs2">

            <ul class="pluginops-tab2-links">
            </ul>

            <div class="pluginops-tab2-content">
              <div id="landingpages" class="pluginops-tab2 active">

                <!-- <div id="column-1" class="col pluginops-template-container"></div>  94 -->

                <div id="column-1" class="col">

                  
                  <div id="card" class="temp-prev-0 template-card">
                          <div id="temp-prev-0" class="tempPrev "> <p id="temp-prev-0"><b>Preview</b></p></div>
                          <label for="temp-0"> <img src="<?php echo $pbPP_imgFolderURL.'template-0.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-0.png'; ?>" class='card-img temp-prev-0'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-0' name="template_select" value='temp0'>
                          <label for="temp-0" class="temp_selectLabel" >Free</label>
                          <span class="template-title">Blank</span>
                          <span class="temp-cats-displayed">Blank</span>
                  </div>
                
                  <a href="https://pluginops.com/landing-page-design/" target="_blank" id="card" class="temp-prev-custom template-card template-card-custom" style="text-decoration:none; <?php echo $pbPP_customLandingDesignCard; ?>" >
                  <div class="temp-prev-custom">
                          <div id="temp-prev-custom" class="tempPrev temp-prev-custom"> <p id="temp-prev-custom"><b>Preview</b></p></div>
                          <label for="temp-custom"> <img src="<?php echo $pbPP_imgFolderURL.'template-custom.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-custom.png'; ?>" class='card-img temp-prev-custom'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-custom' name="template_select" value='temp0'>
                          <label for="temp-custom" class="temp_selectLabel" >Custom</label>
                          <span class="template-title">Custom Landing Page Design</span>
                          <span class="temp-cats-displayed">Blank</span>
                  </div>
                  </a>
                  

                  <div id="card" class="temp-prev-77 template-card">
                          <div id="temp-prev-77" class="tempPrev"> <p id="temp-prev-77"><b>Preview</b></p></div>
                          <label for="temp-77"> <img src="<?php echo $pbPP_imgFolderURL.'template-77.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-77.png'; ?>" class='card-img temp-prev-77'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-77' name="template_select" value='temp77'>
                          <label for="temp-77" class="temp_selectLabel" > Free </label>
                          <span class="template-title">StartUp Consulting</span>
                          <span class="temp-cats-displayed">Business, Consultation, Startup, Agency</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-68 template-card">
                          <div id="temp-prev-68" class="tempPrev"> <p id="temp-prev-68"><b>Preview</b></p></div>
                          <label for="temp-68"> <img src="<?php echo $pbPP_imgFolderURL.'template-68.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-68.png'; ?>" class='card-img temp-prev-68'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-68' name="template_select" value='temp68'>
                          <label for="temp-68" class="temp_selectLabel" > Free</label>
                          <span class="template-title">Lead Gen Offer #1</span>
                          <span class="temp-cats-displayed">leadGen, download offer, email marketing, free</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-62 template-card">
                          <div id="temp-prev-62" class="tempPrev"> <p id="temp-prev-62"><b>Preview</b></p></div>
                          <label for="temp-62"> <img src="<?php echo $pbPP_imgFolderURL.'template-62.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-62.png'; ?>" class='card-img temp-prev-62'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-62' name="template_select" value='temp62'>
                          <label for="temp-62" class="temp_selectLabel" > Free</label>
                          <span class="template-title">Workout Pro</span>
                          <span class="temp-cats-displayed">leadgen, gym, fitness, workout, sports, active, email marketing, free</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-98 template-card">
                          <div id="temp-prev-98" class="tempPrev"> <p id="temp-prev-98"><b>Preview</b></p></div>
                          <label for="temp-98"> <img src="<?php echo $pbPP_imgFolderURL.'template-98.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-98.png'; ?>" class='card-img temp-prev-98'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-98' name="template_select" value='temp98'>
                          <label for="temp-98" class="temp_selectLabel" > Free</label>
                          <span class="template-title">Sales Pro</span>
                          <span class="temp-cats-displayed">free, sales, sales page, outsourcing, services, web services, business services, subscription </span>
                          <span class="temp-cats-displayed">Lead Generation, Home Page, Landing Page</span>
                  </div>


                  <div id="card" class="temp-prev-118 template-card">
                          <div id="temp-prev-118" class="tempPrev"> <p id="temp-prev-118"><b>Preview</b></p></div>
                          <label for="temp-118"> <img src="<?php echo $pbPP_imgFolderURL.'template-118.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-118.png'; ?>" class='card-img temp-prev-118'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-118' name="template_select" value='temp118'>
                          <label for="temp-118" class="temp_selectLabel" > Free</label>
                          <span class="template-title">BakeShop - Optin Page </span>
                          <span class="temp-cats-displayed">email sign up, subscribe to email, email, email marketing, marketing, bakery, baking, food, shop, optin page, sign up page </span>
                          <span class="temp-cats-displayed">Lead Generation, Landing Page</span>
                  </div>


                  <div id="card" class="temp-prev-34 template-card">
                      <div id="temp-prev-34" class="tempPrev"> <p id="temp-prev-34"><b>Preview</b></p></div>
                      <label for="temp-34"> <img src="<?php echo $pbPP_imgFolderURL.'template-34.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-34.png'; ?>" class='card-img temp-prev-34'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-34' name="template_select" value='temp34'>
                      <label for="temp-34" class="temp_selectLabel" > Free</label>
                      <span class="template-title">E-Book Download</span>
                      <span class="temp-cats-displayed">ebook, E-Book, book, download, click through, free</span>
                      <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-65 template-card">
                          <div id="temp-prev-65" class="tempPrev"> <p id="temp-prev-65"><b>Preview</b></p></div>
                          <label for="temp-65"> <img src="<?php echo $pbPP_imgFolderURL.'template-65.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-65.png'; ?>" class='card-img temp-prev-65'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-65' name="template_select" value='temp65'>
                          <label for="temp-65" class="temp_selectLabel" > Free</label>
                          <span class="template-title">Beauty Secrets</span>
                          <span class="temp-cats-displayed">wellness, fashion, beauty, makeup, modeling, leadgen, wellbeing, email marketing, leads, free</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>
                
                  <!--- Premium Templates starts here -->
                  
                  <div id="card" class="temp-prev-80 template-card tempPaca">
                          <div id="temp-prev-80" class="tempPrev tempPaca"> <p id="temp-prev-80"><b>Preview</b></p></div>
                          <label for="temp-80"> <img src="<?php echo $pbPP_imgFolderURL.'template-80.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-80.png'; ?>" class='card-img temp-prev-80'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-80' name="template_select" value='temp80'>
                          <label for="temp-80" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">E-Book Lead Gen</span>
                          <span class="temp-cats-displayed">homepage, ebook, e-book, download book, download ebook, book, book form, e-book form, sell book, sell e-book, email marketing,</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-119 template-card tempPaca">
                          <div id="temp-prev-119" class="tempPrev tempPaca"> <p id="temp-prev-119"><b>Preview</b></p></div>
                          <label for="temp-119"> <img src="<?php echo $pbPP_imgFolderURL.'template-119.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-119.png'; ?>" class='card-img temp-prev-119'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-119' name="template_select" value='temp119'>
                          <label for="temp-119" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Blooms - Flower Shop</span>
                          <span class="temp-cats-displayed">e commerce, shop, flowers, woocommerce, commerce, sales, landing page, homepage, home, sales page </span>
                          <span class="temp-cats-displayed">Home, Home Page, Website, Sales Page </span>
                  </div>
                  
                  <div id="card" class="temp-prev-114 template-card tempPaca">
                          <div id="temp-prev-114" class="tempPrev tempPaca"> <p id="temp-prev-114"><b>Preview</b></p></div>
                          <label for="temp-114"> <img src="<?php echo $pbPP_imgFolderURL.'template-114.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-114.png'; ?>" class='card-img temp-prev-114'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-114' name="template_select" value='temp114'>
                          <label for="temp-114" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Business Agency - Consultation </span>
                          <span class="temp-cats-displayed">social media marketing, business, b2b, consultation </span>
                          <span class="temp-cats-displayed">Home, Home Page, Website, Sales Page </span>
                  </div>

                  
                  <div id="card" class="temp-prev-113 template-card tempPaca">
                          <div id="temp-prev-113" class="tempPrev tempPaca"> <p id="temp-prev-113"><b>Preview</b></p></div>
                          <label for="temp-113"> <img src="<?php echo $pbPP_imgFolderURL.'template-113.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-113.png'; ?>" class='card-img temp-prev-113'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-113' name="template_select" value='temp113'>
                          <label for="temp-113" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">SMM Mentorship - Sales Page </span>
                          <span class="temp-cats-displayed">social media marketing, smm, content marketing, youtube marketing, content creation, email marketing, online course, social media course, audience growth, sales </span>
                          <span class="temp-cats-displayed">Home, Home Page, Website, Sales Page </span>
                  </div>

                  <div id="card" class="temp-prev-112 template-card tempPaca">
                          <div id="temp-prev-112" class="tempPrev tempPaca"> <p id="temp-prev-112"><b>Preview</b></p></div>
                          <label for="temp-112"> <img src="<?php echo $pbPP_imgFolderURL.'template-112.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-112.png'; ?>" class='card-img temp-prev-112'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-112' name="template_select" value='temp112'>
                          <label for="temp-112" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Premium Book Launch </span>
                          <span class="temp-cats-displayed">Book launch, book sales, book, children book, author, book author, book sales page, sales page,</span>
                          <span class="temp-cats-displayed">Home, Home Page, Website </span>
                  </div>


                  <div id="card" class="temp-prev-99 template-card tempPaca">
                          <div id="temp-prev-99" class="tempPrev tempPaca"> <p id="temp-prev-99"><b>Preview</b></p></div>
                          <label for="temp-99"> <img src="<?php echo $pbPP_imgFolderURL.'template-99.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-99.png'; ?>" class='card-img temp-prev-99'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-99' name="template_select" value='temp99'>
                          <label for="temp-99" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Massage & Spa Studio </span>
                          <span class="temp-cats-displayed">homepage, landingpage, emailmarketing, sales, finance, crypto, bitcoin, nft, eth, coin, </span>
                          <span class="temp-cats-displayed">Lead Generation, Home, Home page, </span>
                  </div>

                  <div id="card" class="temp-prev-115 template-card tempPaca">
                          <div id="temp-prev-115" class="tempPrev tempPaca"> <p id="temp-prev-115"><b>Preview</b></p></div>
                          <label for="temp-115"> <img src="<?php echo $pbPP_imgFolderURL.'template-115.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-115.png'; ?>" class='card-img temp-prev-115'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-115' name="template_select" value='temp115'>
                          <label for="temp-115" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Furnishers - Home Interior Shop </span>
                          <span class="temp-cats-displayed">interior, landing page, homepage, sales, lead gen, furniture, interior design, design agency, furniture design</span>
                          <span class="temp-cats-displayed">Home, Home Page, Website </span>
                  </div>


                  <div id="card" class="temp-prev-96 template-card tempPaca">
                          <div id="temp-prev-96" class="tempPrev tempPaca"> <p id="temp-prev-96"><b>Preview</b></p></div>
                          <label for="temp-96"> <img src="<?php echo $pbPP_imgFolderURL.'template-96.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-96.png'; ?>" class='card-img temp-prev-96'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-96' name="template_select" value='temp96'>
                          <label for="temp-96" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Construction & Roofing Business</span>
                          <span class="temp-cats-displayed">homepage, landingpage, emailmarketing, sales, cleaning, clean, service, construction, developer, local service, local business, roofing, roof, rennovations</span>
                          <span class="temp-cats-displayed">Lead Generation, business, Home, Home Page</span>
                  </div>

                  
                  <div id="card" class="temp-prev-95 template-card tempPaca">
                          <div id="temp-prev-95" class="tempPrev tempPaca"> <p id="temp-prev-95"><b>Preview</b></p></div>
                          <label for="temp-95"> <img src="<?php echo $pbPP_imgFolderURL.'template-95.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-95.png'; ?>" class='card-img temp-prev-95'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-95' name="template_select" value='temp95'>
                          <label for="temp-95" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Pressure Washer Cleaning Service</span>
                          <span class="temp-cats-displayed">homepage, landingpage, emailmarketing, sales, cleaning, clean, service, construction, developer, local service, local business, Pressure Washer, pressue cleaning</span>
                          <span class="temp-cats-displayed">Lead Generation, business</span>
                  </div>


                  <div id="card" class="temp-prev-111 template-card tempPaca">
                          <div id="temp-prev-111" class="tempPrev tempPaca"> <p id="temp-prev-111"><b>Preview</b></p></div>
                          <label for="temp-111"> <img src="<?php echo $pbPP_imgFolderURL.'template-111.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-111.png'; ?>" class='card-img temp-prev-111'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-111' name="template_select" value='temp111'>
                          <label for="temp-111" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Executive Law Firm </span>
                          <span class="temp-cats-displayed">buisness law, injury law, real estate law, law firm, lawfirm, person lawyer, lawyer, judge, court, homepage, home </span>
                          <span class="temp-cats-displayed">Home, Home Page, Website </span>
                  </div>

                  
                  <div id="card" class="temp-prev-110 template-card tempPaca">
                          <div id="temp-prev-110" class="tempPrev tempPaca"> <p id="temp-prev-110"><b>Preview</b></p></div>
                          <label for="temp-110"> <img src="<?php echo $pbPP_imgFolderURL.'template-110.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-110.png'; ?>" class='card-img temp-prev-110'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-110' name="template_select" value='temp110'>
                          <label for="temp-110" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">SunRoof - Solar Panels</span>
                          <span class="temp-cats-displayed">homepage, landingpage, emailmarketing, sales, finance, solar panel, green energy, energy, optin, email, </span>
                          <span class="temp-cats-displayed">Lead Generation, Home, Home page, </span>
                  </div>

                  <div id="card" class="temp-prev-97 template-card tempPaca">
                          <div id="temp-prev-97" class="tempPrev tempPaca"> <p id="temp-prev-97"><b>Preview</b></p></div>
                          <label for="temp-97"> <img src="<?php echo $pbPP_imgFolderURL.'template-97.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-97.png'; ?>" class='card-img temp-prev-97'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-97' name="template_select" value='temp97'>
                          <label for="temp-97" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">NFTify - NFT Marketplace </span>
                          <span class="temp-cats-displayed">homepage, landingpage, emailmarketing, sales, finance, crypto, bitcoin, nft, eth, coin, </span>
                          <span class="temp-cats-displayed">Lead Generation, Home, Home page, </span>
                  </div>

                  <div id="card" class="temp-prev-93 template-card tempPaca">
                          <div id="temp-prev-93" class="tempPrev tempPaca"> <p id="temp-prev-93"><b>Preview</b></p></div>
                          <label for="temp-93"> <img src="<?php echo $pbPP_imgFolderURL.'template-93.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-93.png'; ?>" class='card-img temp-prev-93'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-93' name="template_select" value='temp93'>
                          <label for="temp-93" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Outsourcing Business</span>
                          <span class="temp-cats-displayed">leadgen, click through, homepage, sales, startup, agency, </span>
                          <span class="temp-cats-displayed">Lead Generation , business, startUp </span>
                  </div>

                  <div id="card" class="temp-prev-92 template-card tempPaca">
                          <div id="temp-prev-92" class="tempPrev tempPaca"> <p id="temp-prev-92"><b>Preview</b></p></div>
                          <label for="temp-92"> <img src="<?php echo $pbPP_imgFolderURL.'template-92.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-92.png'; ?>" class='card-img temp-prev-92'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-92' name="template_select" value='temp92'>
                          <label for="temp-92" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Restaurant (Good Food)</span>
                          <span class="temp-cats-displayed">leadgen, restaurant menu, business, order food, fast food, burgers, pizza, food </span>
                          <span class="temp-cats-displayed">Lead Generation , restaurant , Food </span>
                  </div>

                  <div id="card" class="temp-prev-91 template-card tempPaca">
                          <div id="temp-prev-91" class="tempPrev tempPaca"> <p id="temp-prev-91"><b>Preview</b></p></div>
                          <label for="temp-91"> <img src="<?php echo $pbPP_imgFolderURL.'template-91.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-91.png'; ?>" class='card-img temp-prev-91'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-91' name="template_select" value='temp91'>
                          <label for="temp-91" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Pet Care</span>
                          <span class="temp-cats-displayed">homepage, dogs, cats, dog, cat, dog walking, dog care, pet care, animal shelter, dog bath, animals, dog walk, animal show, cat show, dog show  </span>
                          <span class="temp-cats-displayed">Lead Generation , Sales , Pets </span>
                  </div>

                  <div id="card" class="temp-prev-90 template-card tempPaca">
                          <div id="temp-prev-90" class="tempPrev tempPaca"> <p id="temp-prev-90"><b>Preview</b></p></div>
                          <label for="temp-90"> <img src="<?php echo $pbPP_imgFolderURL.'template-90.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-90.png'; ?>" class='card-img temp-prev-90'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-90' name="template_select" value='temp90'>
                          <label for="temp-90" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Selmore Sales Automation</span>
                          <span class="temp-cats-displayed">sales & marketing, marketing agency, sales agency, sales team, sales outsourcing, sales coaching, sales training, crm, CRM, cms </span>
                          <span class="temp-cats-displayed">Lead Generation, Sales, Marketing</span>
                  </div>

                  <div id="card" class="temp-prev-94 template-card tempPaca">
                          <div id="temp-prev-94" class="tempPrev tempPaca"> <p id="temp-prev-94"><b>Preview</b></p></div>
                          <label for="temp-94"> <img src="<?php echo $pbPP_imgFolderURL.'template-94.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-94.png'; ?>" class='card-img temp-prev-94'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-94' name="template_select" value='temp94'>
                          <label for="temp-94" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Design System Sales Page</span>
                          <span class="temp-cats-displayed">sales page, sales funnel, pricing table, </span>
                          <span class="temp-cats-displayed">Lead Generation , Business, Sales </span>
                  </div>

                  <div id="card" class="temp-prev-89 template-card tempPaca">
                          <div id="temp-prev-89" class="tempPrev tempPaca"> <p id="temp-prev-89"><b>Preview</b></p></div>
                          <label for="temp-89"> <img src="<?php echo $pbPP_imgFolderURL.'template-89.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-89.png'; ?>" class='card-img temp-prev-89'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-89' name="template_select" value='temp89'>
                          <label for="temp-89" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Real Estate Agency</span>
                          <span class="temp-cats-displayed">homepage, real estate, property management, listings, real estate listing, sell home, sell houses, sell building,</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-88 template-card tempPaca">
                          <div id="temp-prev-88" class="tempPrev tempPaca"> <p id="temp-prev-88"><b>Preview</b></p></div>
                          <label for="temp-88"> <img src="<?php echo $pbPP_imgFolderURL.'template-88.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-88.png'; ?>" class='card-img temp-prev-88'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-88' name="template_select" value='temp88'>
                          <label for="temp-88" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">WorkPro (CoWorking)</span>
                          <span class="temp-cats-displayed">homepage, coworking, office space, office, realestate, Real Estate, Property Management,office, building, work, cowork, co-work </span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-85 template-card tempPaca">
                          <div id="temp-prev-85" class="tempPrev tempPaca"> <p id="temp-prev-85"><b>Preview</b></p></div>
                          <label for="temp-85"> <img src="<?php echo $pbPP_imgFolderURL.'template-85.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-85.png'; ?>" class='card-img temp-prev-85'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-85' name="template_select" value='temp85'>
                          <label for="temp-85" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Marketing Agency #1</span>
                          <span class="temp-cats-displayed">leadGen, homepage, marketing, digital agency, design agency, analytics, web design, web development, seo, seo agency</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-84 template-card tempPaca">
                          <div id="temp-prev-84" class="tempPrev tempPaca"> <p id="temp-prev-84"><b>Preview</b></p></div>
                          <label for="temp-84"> <img src="<?php echo $pbPP_imgFolderURL.'template-84.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-84.png'; ?>" class='card-img temp-prev-84'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-84' name="template_select" value='temp84'>
                          <label for="temp-84" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">App Pro</span>
                          <span class="temp-cats-displayed">homepage, app, mobile app, apple app, android app, android, apple, phone app, application, mobile application, app store</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-116 template-card tempPaca">
                          <div id="temp-prev-116" class="tempPrev tempPaca"> <p id="temp-prev-116"><b>Preview</b></p></div>
                          <label for="temp-116"> <img src="<?php echo $pbPP_imgFolderURL.'template-116.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-116.png'; ?>" class='card-img temp-prev-116'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-116' name="template_select" value='temp116'>
                          <label for="temp-116" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Professional Photographer Studio</span>
                          <span class="temp-cats-displayed">Photographer, photography, headshots, modeling, event shoots, private photographer, photo, professional photographer, dslr, camera, studio, photo studio</span>
                          <span class="temp-cats-displayed">Homepage, Sales, home</span>
                  </div>

                  <div id="card" class="temp-prev-83 template-card tempPaca">
                          <div id="temp-prev-83" class="tempPrev tempPaca"> <p id="temp-prev-83"><b>Preview</b></p></div>
                          <label for="temp-83"> <img src="<?php echo $pbPP_imgFolderURL.'template-83.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-83.png'; ?>" class='card-img temp-prev-83'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-83' name="template_select" value='temp83'>
                          <label for="temp-83" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Premium Restaurant</span>
                          <span class="temp-cats-displayed">homepage, restaurant, 5 star, restaurant, fast food, food, online order food, food menu, restaurant menu, restaurant reservation</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-78 template-card tempPaca">
                          <div id="temp-prev-78" class="tempPrev tempPaca"> <p id="temp-prev-78"><b>Preview</b></p></div>
                          <label for="temp-78"> <img src="<?php echo $pbPP_imgFolderURL.'template-78.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-78.png'; ?>" class='card-img temp-prev-78'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-78' name="template_select" value='temp78'>
                          <label for="temp-78" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Nutri G (Nutrition)</span>
                          <span class="temp-cats-displayed">homepage, nutrition, healthy life, salad, green, health, healthy living, wellness, personal nutrition</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-82 template-card tempPaca">
                          <div id="temp-prev-82" class="tempPrev tempPaca"> <p id="temp-prev-82"><b>Preview</b></p></div>
                          <label for="temp-82"> <img src="<?php echo $pbPP_imgFolderURL.'template-82.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-82.png'; ?>" class='card-img temp-prev-82'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-82' name="template_select" value='temp82'>
                          <label for="temp-82" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Medio Safe</span>
                          <span class="temp-cats-displayed">homepage, home, medical, doctor, dentist, health, health professional, hospital, medical care, ambulance </span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-86 template-card tempPaca">
                          <div id="temp-prev-86" class="tempPrev tempPaca"> <p id="temp-prev-86"><b>Preview</b></p></div>
                          <label for="temp-86"> <img src="<?php echo $pbPP_imgFolderURL.'template-86.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-86.png'; ?>" class='card-img temp-prev-86'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-86' name="template_select" value='temp86'>
                          <label for="temp-86" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">EDUC Learn</span>
                          <span class="temp-cats-displayed">leads, sales, homepage, school, online course, course, consultation, e course, product design, learn, learning school, learning course </span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-87 template-card tempPaca">
                          <div id="temp-prev-87" class="tempPrev tempPaca"> <p id="temp-prev-87"><b>Preview</b></p></div>
                          <label for="temp-87"> <img src="<?php echo $pbPP_imgFolderURL.'template-87.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-87.png'; ?>" class='card-img temp-prev-87'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-87' name="template_select" value='temp87'>
                          <label for="temp-87" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Environmento</span>
                          <span class="temp-cats-displayed">green earth, homepage, donation, donate, global warming, climate change, clean, clean sea, clean ocean, ocean, plastic waste, environment friendly</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-66 template-card tempPaca">
                          <div id="temp-prev-66" class="tempPrev tempPaca"> <p id="temp-prev-66"><b>Preview</b></p></div>
                          <label for="temp-66"> <img src="<?php echo $pbPP_imgFolderURL.'template-66.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-66.png'; ?>" class='card-img temp-prev-66'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-66' name="template_select" value='temp66'>
                          <label for="temp-66" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Online Course</span>
                          <span class="temp-cats-displayed">leadgen, homepage, education, e-book, online course, online consultation, business, sell course, email marketing, collect leads</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-64 template-card tempPaca">
                          <div id="temp-prev-64" class="tempPrev tempPaca"> <p id="temp-prev-64"><b>Preview</b></p></div>
                          <label for="temp-64"> <img src="<?php echo $pbPP_imgFolderURL.'template-64.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-64.png'; ?>" class='card-img temp-prev-64'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-64' name="template_select" value='temp64'>
                          <label for="temp-64" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Law Firm</span>
                          <span class="temp-cats-displayed">leadgen, lawfirm, law, law firm, lawyer, state, government, find clients, law clients</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-123 template-card">
                          <div id="temp-prev-123" class="tempPrev"> <p id="temp-prev-123"><b>Preview</b></p></div>
                        <label for="temp-123"> <img src="<?php echo $pbPP_imgFolderURL.'template-123.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-123.png'; ?>" class='card-img temp-prev-123'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-123' name="template_select" value='temp123'>
                        <label for="temp-123"  class="temp_selectLabel"> Free</label>
                        <span class="template-title">Maintenance/Under Construction </span>
                        <span class="temp-cats-displayed">coming soon, launching soon, Maintenance, under maintenance, website update</span>
                        <span class="temp-cats-displayed">Maintenance Mode</span>
                        <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-122 template-card">
                          <div id="temp-prev-122" class="tempPrev"> <p id="temp-prev-122"><b>Preview</b></p></div>
                        <label for="temp-122"> <img src="<?php echo $pbPP_imgFolderURL.'template-122.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-122.png'; ?>" class='card-img temp-prev-122'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-122' name="template_select" value='temp122'>
                        <label for="temp-122"  class="temp_selectLabel"> Free</label>
                        <span class="template-title">Amazing - Maintenance/Coming Soon </span>
                        <span class="temp-cats-displayed">coming soon, launching soon, Maintenance, under maintenance, website update</span>
                        <span class="temp-cats-displayed">Maintenance Mode</span>
                        <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-121 template-card">
                          <div id="temp-prev-121" class="tempPrev"> <p id="temp-prev-121"><b>Preview</b></p></div>
                        <label for="temp-121"> <img src="<?php echo $pbPP_imgFolderURL.'template-121.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-121.png'; ?>" class='card-img temp-prev-121'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-121' name="template_select" value='temp121'>
                        <label for="temp-121"  class="temp_selectLabel"> Free</label>
                        <span class="template-title">Maintenance - Under Construction </span>
                        <span class="temp-cats-displayed">coming soon, launching soon, Maintenance, under maintenance, website update</span>
                        <span class="temp-cats-displayed">Maintenance Mode</span>
                  </div>

                  <div id="card" class="temp-prev-120 template-card">
                          <div id="temp-prev-120" class="tempPrev"> <p id="temp-prev-120"><b>Preview</b></p></div>
                        <label for="temp-120"> <img src="<?php echo $pbPP_imgFolderURL.'template-120.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-120.png'; ?>" class='card-img temp-prev-120'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-120' name="template_select" value='temp120'>
                        <label for="temp-120"  class="temp_selectLabel"> Free</label>
                        <span class="template-title">Maintenance - Space Theme </span>
                        <span class="temp-cats-displayed">coming soon, launching soon, Maintenance, under maintenance, website update</span>
                        <span class="temp-cats-displayed">Maintenance Mode</span>
                  </div>

                  <div id="card" class="temp-prev-45 template-card">
                          <div id="temp-prev-45" class="tempPrev"> <p id="temp-prev-45"><b>Preview</b></p></div>
                        <label for="temp-45"> <img src="<?php echo $pbPP_imgFolderURL.'template-45.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-45.png'; ?>" class='card-img temp-prev-45'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-45' name="template_select" value='temp45'>
                        <label for="temp-45"  class="temp_selectLabel"> Free</label>
                        <span class="template-title">Launching Soon - SignUp </span>
                        <span class="temp-cats-displayed">leads, leadpage, optinpage, offer, lead gen, launch page, launching soon</span>
                        <span class="temp-cats-displayed">Coming Soon , Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-70 template-card">
                      <div id="temp-prev-70" class="tempPrev"> <p id="temp-prev-70"><b>Preview</b></p></div>
                      <label for="temp-70"> <img src="<?php echo $pbPP_imgFolderURL.'template-70.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-70.png'; ?>" class='card-img temp-prev-70'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-70' name="template_select" value='temp70'>
                      <label for="temp-70" class="temp_selectLabel" > Free</label>
                      <span class="temp-cats-displayed">Click Through</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-73 template-card">
                      <div id="temp-prev-73" class="tempPrev"> <p id="temp-prev-73"><b>Preview</b></p></div>
                      <label for="temp-73"> <img src="<?php echo $pbPP_imgFolderURL.'template-73.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-73.png'; ?>" class='card-img temp-prev-73'>
                      <p class="card-desc"></p> </label>
                      <input type="radio"class="template_select" id='temp-73' name="template_select" value='temp73'>
                      <label for="temp-73" class="temp_selectLabel" > Free</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>


                  <div id="card" class="temp-prev-71 template-card ">
                      <div id="temp-prev-71" class="tempPrev "> <p id="temp-prev-71"><b>Preview</b></p></div>
                      <label for="temp-71"> <img src="<?php echo $pbPP_imgFolderURL.'template-71.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-71.png'; ?>" class='card-img temp-prev-71'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-71' name="template_select" value='temp71'>
                      <label for="temp-71" class="temp_selectLabel" > Free</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-42 template-card tempPaca">
                          <div id="temp-prev-42" class="tempPrev tempPaca"> <p id="temp-prev-42"><b>Preview</b></p></div>
                          <label for="temp-42"> <img src="<?php echo $pbPP_imgFolderURL.'template-42.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-42.png'; ?>" class='card-img temp-prev-42'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-42' name="template_select" value='temp42'>
                          <label for="temp-42" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Lead Gen - Signup </span>
                          <span class="temp-cats-displayed">comingsoon, leadgen, collect emails, form</span>
                          <span class="temp-cats-displayed">Coming Soon, Lead Generation, Sales</span>
                  </div>

                  <div id="card" class="temp-prev-41 template-card tempPaca">
                          <div id="temp-prev-41" class="tempPrev tempPaca"> <p id="temp-prev-41"><b>Preview</b></p></div>
                          <label for="temp-41"> <img src="<?php echo $pbPP_imgFolderURL.'template-41.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-41.png'; ?>" class='card-img temp-prev-41'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-41' name="template_select" value='temp41'>
                          <label for="temp-41" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">HealthPro Wellness</span>
                          <span class="temp-cats-displayed">homepage, leadgen, sales, health, gym, workout, nutrition, salad, healthy food, yoga, pilates,</span>
                          <span class="temp-cats-displayed">Home Page, Lead Generation, Sales</span>
                  </div>

                  <div id="card" class="temp-prev-40 template-card tempPaca">
                          <div id="temp-prev-40" class="tempPrev tempPaca"> <p id="temp-prev-40"><b>Preview</b></p></div>
                          <label for="temp-40"> <img src="<?php echo $pbPP_imgFolderURL.'template-40.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-40.png'; ?>" class='card-img temp-prev-40'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-40' name="template_select" value='temp40'>
                          <label for="temp-40" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Webinar SignUp</span>
                          <span class="temp-cats-displayed">leadgen, signup, countdown, timer, countdown timer, webinar</span>
                          <span class="temp-cats-displayed">Sales, Lead Generation, Coming Soon, Webinar</span>
                  </div>

                  <div id="card" class="temp-prev-76 template-card tempPaca">
                          <div id="temp-prev-76" class="tempPrev tempPaca"> <p id="temp-prev-76"><b>Preview</b></p></div>
                          <label for="temp-76"> <img src="<?php echo $pbPP_imgFolderURL.'template-76.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-76.png'; ?>" class='card-img temp-prev-76'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-76' name="template_select" value='temp76'>
                          <label for="temp-76" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Wedding Photographer</span>
                          <span class="temp-cats-displayed">homepage, leadgen, photographer, photography, wedding, wedding photography, wedding event, event management, photography portfolio</span>
                          <span class="temp-cats-displayed">Lead Generation, Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-81 template-card tempPaca">
                          <div id="temp-prev-81" class="tempPrev tempPaca"> <p id="temp-prev-81"><b>Preview</b></p></div>
                          <label for="temp-81"> <img src="<?php echo $pbPP_imgFolderURL.'template-81.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-81.png'; ?>" class='card-img temp-prev-81'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-81' name="template_select" value='temp81'>
                          <label for="temp-81" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Woman Power Society</span>
                          <span class="temp-cats-displayed">homepage, woman power, girl power, housewife, homemaker, sales, modern woman, successful women, woman  </span>
                          <span class="temp-cats-displayed">Sales, Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-75 template-card tempPaca">
                          <div id="temp-prev-75" class="tempPrev tempPaca"> <p id="temp-prev-75"><b>Preview</b></p></div>
                          <label for="temp-75"> <img src="<?php echo $pbPP_imgFolderURL.'template-75.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-75.png'; ?>" class='card-img temp-prev-75'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-75' name="template_select" value='temp75'>
                          <label for="temp-75" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Personal Trainer</span>
                          <span class="temp-cats-displayed">sales, homepage, gym, workout, physical activity, personal trainer, private trainer, weight loss, health, healthy</span>
                          <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-79 template-card tempPaca">
                          <div id="temp-prev-79" class="tempPrev tempPaca"> <p id="temp-prev-79"><b>Preview</b></p></div>
                          <label for="temp-79"> <img src="<?php echo $pbPP_imgFolderURL.'template-79.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-79.png'; ?>" class='card-img temp-prev-79'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-79' name="template_select" value='temp79'>
                          <label for="temp-79" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Interior Design</span>
                          <span class="temp-cats-displayed">homepage, interior, design, interior design, furniture, architect</span>
                          <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-63 template-card tempPaca">
                          <div id="temp-prev-63" class="tempPrev tempPaca"> <p id="temp-prev-63"><b>Preview</b></p></div>
                          <label for="temp-63"> <img src="<?php echo $pbPP_imgFolderURL.'template-63.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-63.png'; ?>" class='card-img temp-prev-63'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-63' name="template_select" value='temp63'>
                          <label for="temp-63" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Free Ebook Optin</span>
                          <span class="temp-cats-displayed">email marketing, ebook, book, optin, emails, funnel,</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-61 template-card tempPaca">
                          <div id="temp-prev-61" class="tempPrev tempPaca"> <p id="temp-prev-61"><b>Preview</b></p></div>
                          <label for="temp-61"> <img src="<?php echo $pbPP_imgFolderURL.'template-61.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-61.png'; ?>" class='card-img temp-prev-61'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-61' name="template_select" value='temp61'>
                          <label for="temp-61" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Online Marketing</span>
                          <span class="temp-cats-displayed">email marketing, ebook, book, optin, emails, funnel </span>
                          <span class="temp-cats-displayed">Lead Generation, Click Through, Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-60 template-card tempPaca">
                          <div id="temp-prev-60" class="tempPrev tempPaca"> <p id="temp-prev-60"><b>Preview</b></p></div>
                          <label for="temp-60"> <img src="<?php echo $pbPP_imgFolderURL.'template-60.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-60.png'; ?>" class='card-img temp-prev-60'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-60' name="template_select" value='temp60'>
                          <label for="temp-60" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Specialty Restaurant</span>
                          <span class="temp-cats-displayed">homepage, restaurant, food, book table, restaurant menu, fast food, pizza, burger</span>
                          <span class="temp-cats-displayed">Lead Generation , Home Page , Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-59 template-card tempPaca">
                          <div id="temp-prev-59" class="tempPrev tempPaca"> <p id="temp-prev-59"><b>Preview</b></p></div>
                          <label for="temp-59"> <img src="<?php echo $pbPP_imgFolderURL.'template-59.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-59.png'; ?>" class='card-img temp-prev-59'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-59' name="template_select" value='temp59'>
                          <label for="temp-59" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Salon - Beauty & Health</span>
                          <span class="temp-cats-displayed">wellness, fashion, beauty, makeup, modeling, leadgen, wellbeing, email marketing, leads, free</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Home Page</span>
                          <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-58 template-card tempPaca">
                          <div id="temp-prev-58" class="tempPrev tempPaca"> <p id="temp-prev-58"><b>Preview</b></p></div>
                          <label for="temp-58"> <img src="<?php echo $pbPP_imgFolderURL.'template-58.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-58.png'; ?>" class='card-img temp-prev-58'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-58' name="template_select" value='temp58'>
                          <label for="temp-58" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Nutritional Supplement</span>
                          <span class="temp-cats-displayed">health, medicine, herbal, supplements, gym supplement, homepage, sales page, pills, men health</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Home Page</span>
                          <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-55 template-card tempPaca">
                          <div id="temp-prev-55" class="tempPrev tempPaca"> <p id="temp-prev-55"><b>Preview</b></p></div>
                          <label for="temp-55"> <img src="<?php echo $pbPP_imgFolderURL.'template-55.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-55.png'; ?>" class='card-img temp-prev-55'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-55' name="template_select" value='temp55'>
                          <label for="temp-55" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Business Course</span>
                          <span class="temp-cats-displayed">sales, sales page, online course, web course, e course, online education, online classes, business school, business course, lead gen</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Click Through</span>
                          <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-53 template-card tempPaca">
                          <div id="temp-prev-53" class="tempPrev tempPaca"> <p id="temp-prev-53"><b>Preview</b></p></div>
                          <label for="temp-53"> <img src="<?php echo $pbPP_imgFolderURL.'template-53.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-53.png'; ?>" class='card-img temp-prev-53'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-53' name="template_select" value='temp53'>
                          <label for="temp-53" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Business Consultation - Signup</span>
                          <span class="temp-cats-displayed">sales, sales page, consultation, business help, grow business, grow startup, start up, free ebook, lead gen</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Click Through</span>
                          <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-54 template-card tempPaca">
                          <div id="temp-prev-54" class="tempPrev tempPaca"> <p id="temp-prev-54"><b>Preview</b></p></div>
                          <label for="temp-54"> <img src="<?php echo $pbPP_imgFolderURL.'template-54.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-54.png'; ?>" class='card-img temp-prev-54'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-54' name="template_select" value='temp54'>
                          <label for="temp-54" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Business Consultation - Sales</span>
                          <span class="temp-cats-displayed">sales, sales page, consultation, business help, grow business, grow startup, start up, free ebook, lead gen</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Click Through</span>
                          <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-51 template-card tempPaca">
                          <div id="temp-prev-51" class="tempPrev tempPaca"> <p id="temp-prev-51"><b>Preview</b></p></div>
                          <label for="temp-51"> <img src="<?php echo $pbPP_imgFolderURL.'template-51.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-51.png'; ?>" class='card-img temp-prev-51'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-51' name="template_select" value='temp51'>
                          <label for="temp-51" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Webinar - Signup</span>
                          <span class="temp-cats-displayed">business, webinar, sign up, email marketing, leadpage, leads, </span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Click Through</span>
                          <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-50 template-card tempPaca">
                          <div id="temp-prev-50" class="tempPrev tempPaca"> <p id="temp-prev-50"><b>Preview</b></p></div>
                          <label for="temp-50"> <img src="<?php echo $pbPP_imgFolderURL.'template-50.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-50.png'; ?>" class='card-img temp-prev-50'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-50' name="template_select" value='temp50'>
                          <label for="temp-50" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Digital Product Sales</span>
                          <span class="temp-cats-displayed">digital product, corporate product, sales page, pricing, b2b products</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-49 template-card tempPaca">
                          <div id="temp-prev-49" class="tempPrev tempPaca"> <p id="temp-prev-49"><b>Preview</b></p></div>
                          <label for="temp-49"> <img src="<?php echo $pbPP_imgFolderURL.'template-49.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-49.png'; ?>" class='card-img temp-prev-49'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-49' name="template_select" value='temp49'>
                          <label for="temp-49" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">B2B - SignUp </span>
                          <span class="temp-cats-displayed">leads, leadpage, optinpage, corporate, b2b, product, home page, home</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-48 template-card tempPaca">
                          <div id="temp-prev-48" class="tempPrev tempPaca"> <p id="temp-prev-48"><b>Preview</b></p></div>
                          <label for="temp-48"> <img src="<?php echo $pbPP_imgFolderURL.'template-48.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-48.png'; ?>" class='card-img temp-prev-48'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-48' name="template_select" value='temp48'>
                          <label for="temp-48" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Ebook - SignUp </span>
                          <span class="temp-cats-displayed">leads, leadpage, optinpage, free ebook, lead gen, book, book sign up</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-67 template-card tempPaca">
                          <div id="temp-prev-67" class="tempPrev tempPaca"> <p id="temp-prev-67"><b>Preview</b></p></div>
                          <label for="temp-67"> <img src="<?php echo $pbPP_imgFolderURL.'template-67.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-67.png'; ?>" class='card-img temp-prev-67'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-67' name="template_select" value='temp67'>
                          <label for="temp-67" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="template-title">Free Ebook - Offer </span>
                          <span class="temp-cats-displayed">leads, leadpage, optinpage, free ebook, lead gen, book, book sign up</span>
                          <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-38 template-card tempPaca">
                          <div id="temp-prev-38" class="tempPrev tempPaca"> <p id="temp-prev-38"><b>Preview</b></p></div>
                          <label for="temp-38"> <img src="<?php echo $pbPP_imgFolderURL.'template-38.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-38.png'; ?>" class='card-img temp-prev-38'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-38' name="template_select" value='temp38'>
                          <label for="temp-38" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Home Page</span>
                          <span class="temp-cats-displayed">Sales</span>
                          <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-39 template-card tempPaca">
                          <div id="temp-prev-39" class="tempPrev tempPaca"> <p id="temp-prev-39"><b>Preview</b></p></div>
                          <label for="temp-39"> <img src="<?php echo $pbPP_imgFolderURL.'template-39.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-39.png'; ?>" class='card-img temp-prev-39'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-39' name="template_select" value='temp39'>
                          <label for="temp-39" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="temp-cats-displayed">Thank You</span>
                  </div>

                  <div id="card" class="temp-prev-35 template-card tempPaca">
                          <div id="temp-prev-35" class="tempPrev tempPaca"> <p id="temp-prev-35"><b>Preview</b></p></div>
                          <label for="temp-35"> <img src="<?php echo $pbPP_imgFolderURL.'template-35.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-35.png'; ?>" class='card-img temp-prev-35'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-35' name="template_select" value='temp35'>
                          <label for="temp-35" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Sales</span>
                          <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-36 template-card tempPaca">
                          <div id="temp-prev-36" class="tempPrev tempPaca"> <p id="temp-prev-36"><b>Preview</b></p></div>
                          <label for="temp-36"> <img src="<?php echo $pbPP_imgFolderURL.'template-36.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-36.png'; ?>" class='card-img temp-prev-36'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-36' name="template_select" value='temp36'>
                          <label for="temp-36" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="temp-cats-displayed">Lead Generation</span>
                          <span class="temp-cats-displayed">Sales</span>
                          
                  </div>

                  <div id="card" class="temp-prev-37 template-card tempPaca">
                          <div id="temp-prev-37" class="tempPrev tempPaca"> <p id="temp-prev-37"><b>Preview</b></p></div>
                          <label for="temp-37"> <img src="<?php echo $pbPP_imgFolderURL.'template-37.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-37.png'; ?>" class='card-img temp-prev-37'>
                          <p class="card-desc"></p> </label>
                          <input type="radio" disabled="disabled" class="template_select" id='temp-37' name="template_select" value='temp37'>
                          <label for="temp-37" class="temp_selectLabel tempPaca">Pro</label>
                          <span class="temp-cats-displayed">Thank You</span>
                  </div>

                  <div id="card" class="temp-prev-31 template-card tempPaca">
                    <div id="temp-prev-31" class="tempPrev tempPaca"> <p id="temp-prev-31"><b>Preview</b></p></div>
                      <label for="temp-31"> <img src="<?php echo $pbPP_imgFolderURL.'template-31.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-31.png'; ?>" class='card-img temp-prev-31'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-31' name="template_select" value='temp31'>
                      <label for="temp-31" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-32 template-card tempPaca">
                      <div id="temp-prev-32" class="tempPrev tempPaca"> <p id="temp-prev-32"><b>Preview</b></p></div>
                      <label for="temp-32"> <img src="<?php echo $pbPP_imgFolderURL.'template-32.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-32.png'; ?>" class='card-img temp-prev-32'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-32' name="template_select" value='temp32'>
                      <label for="temp-32" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Home Page</span>
                      <span class="temp-cats-displayed">Sales</span>
                      <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-109 template-card tempPaca">
                      <div id="temp-prev-109" class="tempPrev tempPaca"> <p id="temp-prev-109"><b>Preview</b></p></div>
                      <label for="temp-109"> <img src="<?php echo $pbPP_imgFolderURL.'template-109.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-109.png'; ?>" class='card-img temp-prev-109'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-109' name="template_select" value='temp109'>
                      <label for="temp-109" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-108 template-card tempPaca">
                      <div id="temp-prev-108" class="tempPrev tempPaca"> <p id="temp-prev-108"><b>Preview</b></p></div>
                      <label for="temp-108"> <img src="<?php echo $pbPP_imgFolderURL.'template-108.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-108.png'; ?>" class='card-img temp-prev-108'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-108' name="template_select" value='temp108'>
                      <label for="temp-108" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-107 template-card tempPaca">
                      <div id="temp-prev-107" class="tempPrev tempPaca"> <p id="temp-prev-107"><b>Preview</b></p></div>
                      <label for="temp-107"> <img src="<?php echo $pbPP_imgFolderURL.'template-107.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-107.png'; ?>" class='card-img temp-prev-107'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-107' name="template_select" value='temp107'>
                      <label for="temp-107" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Click Through</span>
                      <span class="temp-cats-displayed">Sales</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-69 template-card tempPaca">
                      <div id="temp-prev-69" class="tempPrev tempPaca"> <p id="temp-prev-69"><b>Preview</b></p></div>
                      <label for="temp-69"> <img src="<?php echo $pbPP_imgFolderURL.'template-69.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-69.png'; ?>" class='card-img temp-prev-69'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-69' name="template_select" value='temp69'>
                      <label for="temp-69" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-72 template-card tempPaca">
                      <div id="temp-prev-72" class="tempPrev tempPaca"> <p id="temp-prev-72"><b>Preview</b></p></div>
                      <label for="temp-72"> <img src="<?php echo $pbPP_imgFolderURL.'template-72.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-72.png'; ?>" class='card-img temp-prev-72'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-72' name="template_select" value='temp72'>
                      <label for="temp-72" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-74 template-card tempPaca">
                      <div id="temp-prev-74" class="tempPrev tempPaca"> <p id="temp-prev-74"><b>Preview</b></p></div>
                      <label for="temp-74"> <img src="<?php echo $pbPP_imgFolderURL.'template-74.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-74.png'; ?>" class='card-img temp-prev-74'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-74' name="template_select" value='temp74'>
                      <label for="temp-74" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-105 template-card tempPaca">
                      <div id="temp-prev-105" class="tempPrev tempPaca"> <p id="temp-prev-105"><b>Preview</b></p></div>
                      <label for="temp-105"> <img src="<?php echo $pbPP_imgFolderURL.'template-105.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-105.png'; ?>" class='card-img temp-prev-105'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-105' name="template_select" value='temp105'>
                      <label for="temp-105" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Click Through</span>
                      <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-52 template-card tempPaca">
                    <div id="temp-prev-52" class="tempPrev tempPaca"> <p id="temp-prev-52"><b>Preview</b></p></div>
                    <label for="temp-52"> <img src="<?php echo $pbPP_imgFolderURL.'template-52.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-52.png'; ?>" class='card-img temp-prev-52'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-52' name="template_select" value='temp52'>
                    <label for="temp-52" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-33 template-card tempPaca">
                      <div id="temp-prev-33" class="tempPrev tempPaca"> <p id="temp-prev-33"><b>Preview</b></p></div>
                      <label for="temp-33"> <img src="<?php echo $pbPP_imgFolderURL.'template-33.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-33.png'; ?>" class='card-img temp-prev-33'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-33' name="template_select" value='temp33'>
                      <label for="temp-33" class="temp_selectLabel tempPaca">Pro</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Thank You</span>
                  </div>

                  <div id="card" class="temp-prev-30 template-card tempPaca">
                    <div id="temp-prev-30" class="tempPrev tempPaca"> <p id="temp-prev-30"><b>Preview</b></p></div>
                    <label for="temp-30"> <img src="<?php echo $pbPP_imgFolderURL.'template-30.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-30.png'; ?>" class='card-img temp-prev-30'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-30' name="template_select" value='temp30'>
                    <label for="temp-30" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Sales</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-29 template-card tempPaca">
                    <div id="temp-prev-29" class="tempPrev tempPaca"> <p id="temp-prev-29"><b>Preview</b></p></div>
                    <label for="temp-29"> <img src="<?php echo $pbPP_imgFolderURL.'template-29.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-29.png'; ?>" class='card-img temp-prev-29'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-29' name="template_select" value='temp29'>
                    <label for="temp-29" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                    <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-28 template-card tempPaca">
                    <div id="temp-prev-28" class="tempPrev tempPaca"> <p id="temp-prev-28"><b>Preview</b></p></div>
                    <label for="temp-28"> <img src="<?php echo $pbPP_imgFolderURL.'template-28.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-28.png'; ?>" class='card-img temp-prev-28'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-28' name="template_select" value='temp28'>
                    <label for="temp-28" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                    <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-27 template-card tempPaca">
                    <div id="temp-prev-27" class="tempPrev tempPaca"> <p id="temp-prev-27"><b>Preview</b></p></div>
                    <label for="temp-27"> <img src="<?php echo $pbPP_imgFolderURL.'template-27.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-27.png'; ?>" class='card-img temp-prev-27'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-27' name="template_select" value='temp27'>
                    <label for="temp-27" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="template-title">Dog Walking Service</span>
                    <span class="temp-cats-displayed">Pets, dog walking, pet care, cats, personal dog walking, dog walking service</span>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Sales</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-24 template-card tempPaca">
                    <div id="temp-prev-24" class="tempPrev tempPaca"> <p id="temp-prev-24"><b>Preview</b></p></div>
                    <label for="temp-24"> <img src="<?php echo $pbPP_imgFolderURL.'template-24.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-24.png'; ?>" class='card-img temp-prev-24'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-24' name="template_select" value='temp24'>
                    <label for="temp-24" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Sales</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-25 template-card tempPaca">
                    <div id="temp-prev-25" class="tempPrev tempPaca"> <p id="temp-prev-25"><b>Preview</b></p></div>
                    <label for="temp-25"> <img src="<?php echo $pbPP_imgFolderURL.'template-25.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-25.png'; ?>" class='card-img temp-prev-25'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-25' name="template_select" value='temp25'>
                    <label for="temp-25" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-26 template-card tempPaca">
                    <div id="temp-prev-26" class="tempPrev tempPaca"> <p id="temp-prev-26"><b>Preview</b></p></div>
                    <label for="temp-26"> <img src="<?php echo $pbPP_imgFolderURL.'template-26.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-26.png'; ?>" class='card-img temp-prev-26'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-26' name="template_select" value='temp26'>
                    <label for="temp-26" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-10 template-card tempPaca">
                    <div id="temp-prev-10" class="tempPrev tempPaca"> <p id="temp-prev-10"><b>Preview</b></p></div>
                    <label for="temp-10"> <img src="<?php echo $pbPP_imgFolderURL.'template-11.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-11.png'; ?>" class='card-img temp-prev-10'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-10' name="template_select" value='temp10'>
                    <label for="temp-10" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-11 template-card tempPaca">
                    <div id="temp-prev-11" class="tempPrev tempPaca"> <p id="temp-prev-11"><b>Preview</b></p></div>
                    <label for="temp-11"> <img src="<?php echo $pbPP_imgFolderURL.'template-12.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-12.png'; ?>" class='card-img temp-prev-11'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-11' name="template_select" value='temp11'>
                    <label for="temp-11" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-13 template-card tempPaca">
                    <div id="temp-prev-13" class="tempPrev tempPaca"> <p id="temp-prev-13"><b>Preview</b></p></div>
                    <label for="temp-13"> <img src="<?php echo $pbPP_imgFolderURL.'template-14.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-14.png'; ?>" class='card-img temp-prev-13'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-13' name="template_select" value='temp13'>
                    <label for="temp-13" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Webinar</span>
                  </div>

                  <div id="card" class="temp-prev-57 template-card tempPaca">
                    <div id="temp-prev-57" class="tempPrev tempPaca"> <p id="temp-prev-57"><b>Preview</b></p></div>
                    <label for="temp-57"> <img src="<?php echo $pbPP_imgFolderURL.'template-57.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-57.png'; ?>" class='card-img temp-prev-57'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-57' name="template_select" value='temp57'>
                    <label for="temp-57" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-56 template-card tempPaca">
                    <div id="temp-prev-56" class="tempPrev tempPaca"> <p id="temp-prev-56"><b>Preview</b></p></div>
                    <label for="temp-56"> <img src="<?php echo $pbPP_imgFolderURL.'template-56.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-56.png'; ?>" class='card-img temp-prev-56'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-56' name="template_select" value='temp56'>
                    <label for="temp-56" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-18 template-card tempPaca">
                    <div id="temp-prev-18" class="tempPrev tempPaca"> <p id="temp-prev-18"><b>Preview</b></p></div>
                    <label for="temp-18"> <img src="<?php echo $pbPP_imgFolderURL.'template-18.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-18.png'; ?>" class='card-img temp-prev-18'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-18' name="template_select" value='temp18'>
                    <label for="temp-18" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-19 template-card tempPaca">
                    <div id="temp-prev-19" class="tempPrev tempPaca"> <p id="temp-prev-19"><b>Preview</b></p></div>
                    <label for="temp-19"> <img src="<?php echo $pbPP_imgFolderURL.'template-19.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-19.png'; ?>" class='card-img temp-prev-19'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-19' name="template_select" value='temp19'>
                    <label for="temp-19" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-20 template-card tempPaca">
                    <div id="temp-prev-20" class="tempPrev tempPaca"> <p id="temp-prev-20"><b>Preview</b></p></div>
                    <label for="temp-20"> <img src="<?php echo $pbPP_imgFolderURL.'template-20.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-20.png'; ?>" class='card-img temp-prev-20'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-20' name="template_select" value='temp20'>
                    <label for="temp-20" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                    <span class="temp-cats-displayed">Click Through</span>
                  </div>

                  <div id="card" class="temp-prev-22 template-card tempPaca">
                    <div id="temp-prev-22" class="tempPrev tempPaca"> <p id="temp-prev-22"><b>Preview</b></p></div>
                    <label for="temp-22"> <img src="<?php echo $pbPP_imgFolderURL.'template-22.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-22.png'; ?>" class='card-img temp-prev-22'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-22' name="template_select" value='temp22'>
                    <label for="temp-22" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                    <span class="temp-cats-displayed">Sales</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-23 template-card tempPaca">
                    <div id="temp-prev-23" class="tempPrev tempPaca"> <p id="temp-prev-23"><b>Preview</b></p></div>
                    <label for="temp-23"> <img src="<?php echo $pbPP_imgFolderURL.'template-23.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-23.png'; ?>" class='card-img temp-prev-23'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-23' name="template_select" value='temp23'>
                    <label for="temp-23" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-1 template-card tempPaca">
                    <div id="temp-prev-1" class="tempPrev tempPaca"> <p id="temp-prev-1"><b>Preview</b></p></div>
                    <label for="temp-1"> <img src="<?php echo $pbPP_imgFolderURL.'template-5.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-5.png'; ?>" class='card-img temp-prev-1'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-1' name="template_select" value='temp1'>
                    <label for="temp-1" class="temp_selectLabel tempPaca">Pro</label>

                  </div>
                  <div id="card" class="temp-prev-5 template-card tempPaca">
                    <div id="temp-prev-5" class="tempPrev tempPaca"> <p id="temp-prev-5"><b>Preview</b></p></div>
                    <label for="temp-5"> <img src="<?php echo $pbPP_imgFolderURL.'template-3.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-3.png'; ?>" class='card-img temp-prev-5'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-5' name="template_select" value='temp5'>
                    <label for="temp-5" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-6 template-card tempPaca">
                    <div id="temp-prev-6" class="tempPrev tempPaca"> <p id="temp-prev-6"><b>Preview</b></p></div>
                    <label for="temp-6"> <img src="<?php echo $pbPP_imgFolderURL.'template-10.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-10.png'; ?>" class='card-img temp-prev-6'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-6' name="template_select" value='temp6'>
                    <label for="temp-6" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-7 template-card tempPaca">
                    <div id="temp-prev-7" class="tempPrev tempPaca"> <p id="temp-prev-7"><b>Preview</b></p></div>
                    <label for="temp-7"> <img src="<?php echo $pbPP_imgFolderURL.'template-6.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-6.png'; ?>" class='card-img temp-prev-7'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-7' name="template_select" value='temp7'>
                    <label for="temp-7" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Sales</span>
                  </div>

                  <div id="card" class="temp-prev-8 template-card tempPaca">
                    <div id="temp-prev-8" class="tempPrev tempPaca"> <p id="temp-prev-8"><b>Preview</b></p></div>
                    <label for="temp-8"> <img src="<?php echo $pbPP_imgFolderURL.'template-8.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-8.png'; ?>" class='card-img temp-prev-8'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-8' name="template_select" value='temp8'>
                    <label for="temp-8" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-12 template-card tempPaca">
                    <div id="temp-prev-12" class="tempPrev tempPaca"> <p id="temp-prev-12"><b>Preview</b></p></div>
                    <label for="temp-12"> <img src="<?php echo $pbPP_imgFolderURL.'template-13.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-13.png'; ?>" class='card-img temp-prev-12'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-12' name="template_select" value='temp12'>
                    <label for="temp-12" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Click Through</span>
                    <span class="temp-cats-displayed">Lead Generation</span>
                  </div>

                  <div id="card" class="temp-prev-14 template-card tempPaca">
                    <div id="temp-prev-14" class="tempPrev tempPaca"> <p id="temp-prev-14"><b>Preview</b></p></div>
                    <label for="temp-14"> <img src="<?php echo $pbPP_imgFolderURL.'template-15.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-15.png'; ?>" class='card-img temp-prev-14'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-14' name="template_select" value='temp14'>
                    <label for="temp-14" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-15 template-card tempPaca">
                    <div id="temp-prev-15" class="tempPrev tempPaca"> <p id="temp-prev-15"><b>Preview</b></p></div>
                    <label for="temp-15"> <img src="<?php echo $pbPP_imgFolderURL.'template-16.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-16.png'; ?>" class='card-img temp-prev-15'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-15' name="template_select" value='temp15'>
                    <label for="temp-15" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Thank You</span>
                  </div>

                  <div id="card" class="temp-prev-21 template-card tempPaca">
                    <div id="temp-prev-21" class="tempPrev tempPaca"> <p id="temp-prev-21"><b>Preview</b></p></div>
                    <label for="temp-21"> <img src="<?php echo $pbPP_imgFolderURL.'template-21.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-21.png'; ?>" class='card-img temp-prev-21'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" disabled="disabled" class="template_select" id='temp-21' name="template_select" value='temp21'>
                    <label for="temp-21" class="temp_selectLabel tempPaca">Pro</label>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-106 template-card">
                      <div id="temp-prev-106" class="tempPrev"> <p id="temp-prev-106"><b>Preview</b></p></div>
                      <label for="temp-106"> <img src="<?php echo $pbPP_imgFolderURL.'template-106.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-106.png'; ?>" class='card-img temp-prev-106'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" disabled="disabled" class="template_select" id='temp-106' name="template_select" value='temp106'>
                      <label for="temp-106" class="temp_selectLabel" > Free</label>
                      <span class="temp-cats-displayed">Lead Generation</span>
                      <span class="temp-cats-displayed">Coming Soon</span>
                  </div>

                  <div id="card" class="temp-prev-47 template-card">
                          <div id="temp-prev-47" class="tempPrev"> <p id="temp-prev-47"><b>Preview</b></p></div>
                        <label for="temp-47"> <img src="<?php echo $pbPP_imgFolderURL.'template-47.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-47.png'; ?>" class='card-img temp-prev-47'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-47' name="template_select" value='temp47'>
                        <label for="temp-47"> Free </label>
                        <span class="temp-cats-displayed">Coming Soon , Lead Generation</span>
                  </div>

                <div id="card" class="temp-prev-46 template-card">
                          <div id="temp-prev-46" class="tempPrev"> <p id="temp-prev-46"><b>Preview</b></p></div>
                        <label for="temp-46"> <img src="<?php echo $pbPP_imgFolderURL.'template-46.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-46.png'; ?>" class='card-img temp-prev-46'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-46' name="template_select" value='temp46'>
                        <label for="temp-46"> Free </label>
                        <span class="temp-cats-displayed">Coming Soon , Lead Generation</span>
                </div>

                <div id="card" class="temp-prev-44 template-card">
                          <div id="temp-prev-44" class="tempPrev"> <p id="temp-prev-44"><b>Preview</b></p></div>
                        <label for="temp-44"> <img src="<?php echo $pbPP_imgFolderURL.'template-44.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-44.png'; ?>" class='card-img temp-prev-44'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-44' name="template_select" value='temp44'>
                        <label for="temp-44"> Free </label>
                        <span class="temp-cats-displayed">Lead Generation</span>
                </div>

                  <div id="card" class="temp-prev-43 template-card">
                          <div id="temp-prev-43" class="tempPrev"> <p id="temp-prev-43"><b>Preview</b></p></div>
                        <label for="temp-43"> <img src="<?php echo $pbPP_imgFolderURL.'template-43.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-43.png'; ?>" class='card-img temp-prev-43'>
                        <p class="card-desc"></p> </label>
                        <input type="radio"  class="template_select" id='temp-43' name="template_select" value='temp43'>
                        <label for="temp-43"> Free </label>
                        <span class="temp-cats-displayed">Lead Generation</span>
                </div>

                  <div id="card" class="temp-prev-101 template-card">
                      <div id="temp-prev-101" class="tempPrev"> <p id="temp-prev-101"><b>Preview</b></p></div>
                      <label for="temp-101"> <img src="<?php echo $pbPP_imgFolderURL.'template-101.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-101.png'; ?>" class='card-img temp-prev-101'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-101' name="template_select" value='tempftp1'>
                      <label for="temp-101"> Free</label>
                      <span class="temp-cats-displayed">Home Page</span>
                  </div>
                  
                  <div id="card" class="temp-prev-102 template-card">
                      <div id="temp-prev-102" class="tempPrev"> <p id="temp-prev-102"><b>Preview</b></p></div>
                      <label for="temp-102"> <img src="<?php echo $pbPP_imgFolderURL.'template-102.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-102.png'; ?>" class='card-img temp-prev-102'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-102' name="template_select" value='tempftp2'>
                      <label for="temp-102"> Free</label>
                      <span class="temp-cats-displayed">Gallery Page</span>
                  </div>

                  <div id="card" class="temp-prev-103 template-card">
                      <div id="temp-prev-103" class="tempPrev"> <p id="temp-prev-103"><b>Preview</b></p></div>
                      <label for="temp-103"> <img src="<?php echo $pbPP_imgFolderURL.'template-103.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-103.png'; ?>" class='card-img temp-prev-103'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-103' name="template_select" value='tempftp3'>
                      <label for="temp-103"> Free</label>
                      <span class="temp-cats-displayed">Contact Us</span>
                  </div>

                  <div id="card" class="temp-prev-104 template-card">
                      <div id="temp-prev-104" class="tempPrev"> <p id="temp-prev-104"><b>Preview</b></p></div>
                      <label for="temp-104"> <img src="<?php echo $pbPP_imgFolderURL.'template-104.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-104.png'; ?>" class='card-img temp-prev-104'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-104' name="template_select" value='tempftp4'>
                      <label for="temp-104"> Free</label>
                      <span class="temp-cats-displayed">About Us</span>
                  </div>


                  <div id="card" class="temp-prev-3 template-card">
                      <div id="temp-prev-3" class="tempPrev"> <p id="temp-prev-3"><b>Preview</b></p></div>
                      <label for="temp-3"> <img src="<?php echo $pbPP_imgFolderURL.'template-2.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-2.png'; ?>" class='card-img temp-prev-3'>
                      <p class="card-desc"></p> </label>
                      <input type="radio" class="template_select" id='temp-3' name="template_select" value='temp3'>
                      <label for="temp-3"> Free</label>
                      <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-2 template-card">
                    <div id="temp-prev-2" class="tempPrev"> <p id="temp-prev-2"><b>Preview</b></p></div>
                    <label for="temp-2"> <img src="<?php echo $pbPP_imgFolderURL.'template-1.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-1.png'; ?>" class='card-img temp-prev-2'>
                    <p class="card-desc"></p> </label>
                    <input type="radio"  class="template_select" id='temp-2' name="template_select" value='temp2'>
                    <label for="temp-2"> Free</label>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-4 template-card">
                    <div id="temp-prev-4" class="tempPrev"> <p id="temp-prev-4"><b>Preview</b></p></div>
                    <label for="temp-4"> <img src="<?php echo $pbPP_imgFolderURL.'template-4.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-4.png'; ?>" class='card-img temp-prev-4'>
                    <p class="card-desc"></p> </label>
                    <input type="radio"  class="template_select" id='temp-4' name="template_select" value='temp4'>
                    <label for="temp-4"> Free</label>
                    <span class="temp-cats-displayed">Home Page</span>
                  </div>

                  <div id="card" class="temp-prev-9 template-card">
                    <div id="temp-prev-9" class="tempPrev"> <p id="temp-prev-9"><b>Preview</b></p></div>
                    <label for="temp-9"> <img src="<?php echo $pbPP_imgFolderURL.'template-7.png'; ?>" loading="lazy" data-img_src="<?php echo $pbPP_templateScreenshotFolder.'screenshot-7.png'; ?>" class='card-img temp-prev-9'>
                    <p class="card-desc"></p> </label>
                    <input type="radio" class="template_select" id='temp-9' name="template_select" value='temp9'>
                    <label for="temp-9"> Free</label>
                    <span class="temp-cats-displayed">Click Through</span>
                  </div>

                </div>
                
                <br><br><br>
              </div>

              <div> <div></div> </div>
              
              <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
              <div class="popup-tutorialNotice" style="display: none;">
                <div class="popb_tutorialpopup_close closeTutorialNotice" style=""></div>
                <div class="tutorialContent">
                  <a href="https://pluginops.com/how-to-build-coming-soon-page-in-wordpress/" target="_blank">
                  <div class="video-card">
                    <img src="<?php echo ULPB_PLUGIN_URL.'/images/tutorial-thumbs/coming-soon-landing-page.jpg'; ?>" >
                    <h3>Learn how to setup Coming Soon Mode with PluginOps Landing Page Builder</h3>
                  </div>
                  </a>
                </div>
              </div>
            
            </div>

          </div>
      
    </div>

    <span class="temp-cats-displayed">Lead Generation</span>
    <span class="temp-cats-displayed">Click Through</span>
    <span class="temp-cats-displayed">Sales</span>
    <span class="temp-cats-displayed">Thank You</span>
    <span class="temp-cats-displayed">Webinar</span>
    <span class="temp-cats-displayed">Coming Soon</span>
    <span class="temp-cats-displayed">Home Page</span>

    <!-- <script type="text/javascript">
      jQuery('.templatesFilterSelector').on('change', function(){
        var WidgetSearchQuery =  jQuery(this).val();
        jQuery('.template-card').hide();
        
        jQuery('.template-card:contains("'+WidgetSearchQuery+'")').show();

        if (WidgetSearchQuery == 'All') {
          jQuery('.template-card').show();
        }

      });
    </script> -->