// for next questions
console.log('this is file');
let back=document.getElementById('bBtn');
let next=document.getElementById('nxBtn');
let nBtn=document.getElementById('nextQuest');
let quest=document.getElementById('quest');
let html='';
let i=0;
let bqBtn=document.getElementById('bqBtn');
nBtn.onclick=()=>{
    console.log("clekc");
    ++i;
    
    if(i==1){
        back.style.display="none";
        next.style.display="none";
        bqBtn.style.display="block";
        html=` <div class="">
        <div class="input-div">
                            <label class="labelaa" class="tb" for="squarefeet">3) <span></span>Covered Area square feet?</label>

                            <input class="inputa" type="text" placeholder="Type Here.....">
                            <div class=" ">

                                
                            </div>


                            </div>
        <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">4)<span></span> Do you currently own land or rent?</label>
            <input  class="inputa" type="text">
        </div>
        <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">5) <span></span> Age of Building</label>
            
            <input  class="inputa" type="text">
        </div>
        <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">6) <span></span>What do you antcipate starting execution or construction?</label>
            
             <input  class="inputa" type="text"  ; >
        </div>
      
      </div>`;
      quest.innerHTML=html;
    }
    if(i==2){
        back.style.display="none";
        next.style.display="none";
        html=`<div class="">
        <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">7) <span></span>What is your total construction budget(excluding site Development)?</label>
                           
            <input  class="inputa" type="text" placeholder="Type Here.....">
            </div>
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">8) Is your financing in place?if not will you able to prequalify?</label>
                         
                           <input  class="inputa" type="text" placeholder="Type Here....." >
                           </div>
                           <div class="input-div">
                           <label class="labelaa" class="tb" for="squarefeet">9) <span></span> will you need full constructions drawings to secure financing?</label>
                     
                        <input  class="inputa" type="text" placeholder="Type Here.....">
                        </div>
      
    </div>
    `;
        quest.innerHTML=html;
        }
    //     if(i==3){
            
    // //         html=`<div class="">
    // //         <div class="input-div">
    // //         <label class="labelaa" class="tb" for="squarefeet">7 <span></span>)What is your total construction budget(excluding site Development)?</label>
                               
    // //             <input  class="inputa" type="text">
    // //             </div>
    // //             <div class="input-div">
    // //             <label class="labelaa" class="tb" for="squarefeet">8) <span></span>Is your financing in place?if not will you able to prequalify?</label>
                             
    // //                            <input  class="inputa" type="text"  placeholder="Type Here....." >
    // //                            </div>
    // //                            <div class="input-div">
    // //                            <label class="labelaa" class="tb" for="squarefeet">9)<span></span> will you need full constructions drawings to secure financing?</label>
                         
    // //                         <input  class="inputa" type="text"  placeholder="Type Here.....">
    // //                         </div>
          
    // //     </div>
    // //    `;
    //     quest.innerHTML=html;
    //     }
        if(i==3){
            back.style.display="none";
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">10) <span></span>Do you have skectches/plans of your project?</label>
            
            <input  class="inputa" type="text"  placeholder="Type Here.....">
            </div>
            <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">11) <span></span>Occupation of client?</label>
                           
             <input  class="inputa" type="text"  style=""  placeholder="Type Here....." >
             </div>
             <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">12) <span></span>The fixed number of People who will use this space?</label>
                           
                            <input  class="inputa" type="text"  style=" ;"  placeholder="Type Here....." >
                            </div>
          
        </div>
       `;
        quest.innerHTML=html;
        }
        if(i==4){
            back.style.display="none";
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">13) <span></span>Any Extra People who may use this space in future?</label>
            
             <input  class="inputa" type="text"  style=" "  placeholder="Type Here.....">
             </div>
             <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">14) <span></span>Please tell us if there are any illegal features in this space that you know of?</label>
                           
                            <input  class="inputa" type="text"  placeholder="Type Here....."  >
                            </div>
                            <div class="input-div">
                            <label class="labelaa" class="tb" for="squarefeet">15)<span></span>Colors you like?</label>
                          
                            <input  class="inputa" type="text"  style=" ;"  placeholder="Type Here....." >
                            </div>
          
        </div>
       `;
        quest.innerHTML=html;
        }
        if(i==5){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">16) <span></span>Colors you dont like ?</label>
           
             <input  class="inputa" type="text"  style="width: ;"  placeholder="Type Here....." >
             </div>
             <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">17) <span></span>Do you have a color Theme in mind?</label>
              <input  class="inputa" type="text"  style="width:;"  placeholder="Type Here.....">
              </div>
              <div class="input-div">
              <label class="labelaa" class="tb" for="squarefeet">18) <span></span>Do you like the daker tone or lighter?</label>
                           
                            <input  class="inputa" type="text"   placeholder="Type Here.....">
                            </div>
          
        </div>`;
        quest.innerHTML=html;
        }
        if(i==6){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">19) <span></span>What's your favorite material?</label>
            <input  class="inputa" type="text"  placeholder="Type Here.....">
            </div>
            <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">20) <span></span>What material do you dislike?</label>
            
              <input  class="inputa" type="text"  placeholder="Type Here.....">
              </div>
              <div class="input-div">
              <label class="labelaa" class="tb" for="squarefeet">21) <span></span>please tell us if you want to change the size of windows, or any door?</label>
              
               <input  class="inputa" type="text"  placeholder="Type Here....."   >
               </div>
          
        </div>`;
        quest.innerHTML=html;
        }
        if(i==7){
            html=`
            <div class="input-div">
            <div class="">
            <label class="labelaa" class="tb" for="squarefeet">22) <span></span>Are any collections on displays?</label>
             
             <div class="">
                 <div class="">
                     <input class="" type="radio" value="" name="r"  required >
                     <label class="labelaa" class="" for="colonial">
                       Yes
                     </label>
             </div>
          </div>
          <div class="">
             <div class="">
                 <input class="" type="radio"  name="r"  value=""  required>
                 <label class="labelaa" class="" for="mordern">
                   No
                 </label>
         </div>
        </div>
        </div>
        <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">23) <span></span>if you circled yes ,would you like to display your collections? where and what?</label>
        
         <input  class="inputa" type="text"  placeholder="Type Here....." >
         </div>
         <div class="input-div">
         <label class="labelaa" class="tb" for="squarefeet">24) <span></span>please tell us if you want to change the size of windows, or any door?</label>
                         
                            <input  class="inputa" type="text"  placeholder="Type Here.....">
                               </div>        
                            </div>
        `;
        quest.innerHTML=html;
        }
        if(i==8){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">25) <span></span>Do you cook a lot?(if you circled yes,requirements)specify</label>
            <div class="">
                <div class="">
                    <input class="" type="radio" value=""  name="r1"  required>
                    <label class="labelaa" class="" for="colonial">
                      Yes
                    </label>
            </div>
         </div>
         <div class="">
            <div class="">
                <input class="" type="radio" value=""  name="r1"  required>
                <label class="labelaa" class="" for="mordern">
                  No
                </label>
        </div>
        </div>

        </div>
        <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">26) <span></span>What are your requirements for toilet?</label>
        
         <input  class="inputa" type="text" placeholder="Type Here....."  >
         </div>
         <div class="input-div">
         <label class="labelaa" class="tb" for="squarefeet">27) <span></span>Do you like false cellings?</label>
          
          <input  class="inputa" type="text" placeholder="Type Here....." >
          </div>
          
        </div>`;
        quest.innerHTML=html;
        }
        if(i==9){
            html=`<div class="">
            <div class="input-div">
          <label class="labelaa" class="tb" for="squarefeet">28) <span></span>if you have a patio,or terrace, or rooftop, please let us know your ideas for them?</label>
            
             <input  class="inputa" type="text"  placeholder="Type Here.....">
             </div>
             <div class="input-div">
             <label class="labelaa" for="design">29) <span></span>What is your favorite design style?  (Please check the appropriate styles)</label>
             <div class="">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="Modern-mini">
                            Modern minimalist style
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for=" Elegant-Style">
                        Elegant Style
                    </label>
            </div>
         </div>
         <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for=" Modern-Orient">
                    Modern Oriental Style 
                </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for=" European-classi">
                European classical style
            </label>
        </div>
        </div>
        
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for="American">
            American country style
        </label>
        </div>
        </div>
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for="avant-garde">
            Modern avant-garde style 
        </label>
        </div>
        </div>
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for=" Mediterranean">
            Mediterranean style
        </label>
        </div>
        </div>
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for="Chinese">
            Chinese Style
        </label>
        </div>
        </div>
        
        
        </div>
        </div>
        </div>`;
        quest.innerHTML=html;
        }
        if(i==10){
            html=` <label class="labelaa" for="requirements">30) <span></span> What are stronge Requirements?</label>
            <div class="">
                                   
               <div class="">
                   <div class="">
                       <input class="" type="checkbox" value=""  required>
                       <label class="labelaa" class="" for="Multipurpose ">
                        Multipurpose Furniture
                       </label>
               </div>
            </div>
            <div class="">
               <div class="">
                   <input class="" type="checkbox" value=""  required>
                   <label class="labelaa" class="" for="Hidden">
                    Hidden Storage 
                   </label>
            </div>
            </div>
            <div class="">
            <div class="">
               <input class="" type="checkbox" value=""  required>
               <label class="labelaa" class="" for="other">
                Other (specify) 
               </label>
               
            </div>
            
            </div>
            
            
            </div>
            <label class="labelaa" for="other"><span></span> if other</label>
            <input type="text" class="inputa"  placeholder="Type Here.....">`;
            quest.innerHTML=html;
        }
        if(i==11){
            html=`<div class="">
            <div class="input-div">
           
 
            <label class="labelaa" for="">31) <span></span>Are there any pieces of furniture, window, wall or floor coverings that must stay, and be worked into the new plan? Please explain:</label> 
            <br>
            <textarea name="" id="" cols="40" rows="10"></textarea>
            </div>
            <div class="input-div">
              <label class="labelaa" for="">32) <span></span>For how many vehicles will you need parking?</label>
              <input type="text" class="inputa"  placeholder="Type Here.....">
              </div>
            </div>`;
        quest.innerHTML=html;
        }
        if(i==12){
            html=`           
            <label class="labelaa" for="">33) <span></span>How involved do you wish to be in this project:	(Please check)</label>
            <div class="">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="very">
                            Very involved (Call you with details and updates daily or weekly
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="pmanager">
                        Involved –project manager Keep you updated with install dates, deliveries, work schedule etc
                    </label>
            </div>
         </div>
         <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for=" ready">
                    Minimally involved – don’t call until everything is ready to install 
                </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for=" othr">
                Other
            </label>
        </div>
        </div>
        
        <div class="input-div">
           
          <label class="labelaa" for="timeline">34) <span></span>What is your “ideal” timeline for your project? </label>
          <input type="text" class="inputa"  placeholder="Type Here.....">
          </div>
          <div class="input-div">
          
        
        </div>`;
            quest.innerHTML=html;
        }
        if(i==13){
            html=`<div class="">
            <label class="labelaa" for="">35) <span></span>Would you like to include “green products” when possible?</label>
          <div class="">
            <div class="">
                <input class="" type="radio" name="green" value=""  required>
                <label class="labelaa" class="" for="colonial">
                  Yes
                </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="radio"  name="green" value=""  required>
            <label class="labelaa" class="" for="mordern">
              No
            </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="radio"  name="green" value=""  required>
            <label class="labelaa" class="" for="mordern">
              What do you mean?
            </label>
        </div>
        </div>
        </div>
        <div class="input-div">
        <label class="labelaa" for="feelings">36) <span></span>What “feeling” are you seeking to achieve?
            </label>
            <div class=" ">
                                        
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="casual">
                            Casual
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="Formal">
                        Formal
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="Spacious ">
                    Spacious 
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="clean">
                Clean line
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="wc">
                Warm/ cozy 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="la">
                Light/airy 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="Contemporary ">
                Contemporary 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="se">
                Sophisticated/Elegant
            </label>
            </div>
            </div>
            
            
            </div>
            </div>
        </div>`;
        quest.innerHTML=html;
        }
        if(i==14){
            html=`<div>
            
            <label class="labelaa" for="segmants">37) <span></span>Which segments are already done?
            
            </label>
            <div class="">
                                        
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="gs">
                            Grey Structure  
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="paint">
                        paint
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="ceilings ">
                    Ceilings  
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="lighting ">
                Lighting 
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="furniture ">
                Furniture 
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="branding ">
                Branding 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="flooring ">
                Flooring 
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="ew">
                Electric Work
            </label>
            </div>
            </div>
            
            
            </div>
            </div>`;
            quest.innerHTML=html;
        }
        if(i==15){
            html=`<div class="">
           
            
            <label class="labelaa">38) <span></span> there types of flooring you prefer? (Please check all that apply)</label>
            <div class=" ">
                                        
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="tiles">
                            Tiles 
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="marbel">
                        Marbel
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="garanite">
                    Garanite 
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="lighting ">
                Carpet
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="lw ">
                laminated Wood
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="swd">
               Solid Wood 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="flooring ">
                Vinyl
            
            </label>
            </div>
            </div>
            
            
            </div>
            </div>`;
        quest.innerHTML=html;
        }
        if(i==16){
            html=`
            <div class=""input-div>
            <div class="">
    
            <label class="labelaa">39) <span></span>Are there types of window treatment you prefer? (Please check all that apply)</label>
            <div class=" ">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="blinds">
                            Blinds  
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="sheer">
                        Sheers
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="shutter">
                    Shutters
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="rd">
                Room Darkening
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="curtains">
                Curtains  
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
             </div>
             <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="af">
                All Fabrics 
            </label>
            </div>
            </div>
            
            
            
            
            </div>
            <div class=" ">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="nm">
                            Natural Materials
        
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="metals">
                        Metals
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="shade">
                   shades
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="comb">
                Combination
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="oth ">
                other 
            
            </label>
            </div>
            </div>
            
            
            
            </div>
            </div>
        
            `;
        quest.innerHTML=html;
        }
        if(i==17){
            html=`<div>
            <div class="input-div">
            <label class="labelaa">40) <span></span>Do you need sun control or privacy with your window treatments?</label>
            <div class="">
                <div class="k">
                    <input class="" type="radio" name="green" value=""  required>
                    <label class="labelaa" class="form-check-label" for="colonial">
                      Yes
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="radio"  name="green" value=""  required>
                <label class="labelaa" class="" for="mordern">
                  No
                </label>
            </div>
            </div>
            </div>
            <div class="input-div">
            <label class="labelaa" for="addi">41) Additional information regarding preferences:</label>
            <input type="text" class="inputa"  placeholder="Type Here.....">
            </div>
            <div class="input-div">
            <label class="labelaa" for="primary">42) <span></span>What is the primary exposure?
            <input type="text" class="inputa"  placeholder="Type Here.....">
            </div>
        </div>
            </div>`;
            quest.innerHTML=html;
        }
        if(i==18){
            html=`<div class="">
            <label class="labelaa">43) <span></span> Please list the name of all the basic rooms you want, (example, master bed room, study room, drawing room, dining and living room)</label>
            <br>
            <textarea name="" id="" cols="40" rows="15"></textarea>
         
           
         </div>`;
        quest.innerHTML=html;
        }
        if(i==19){
            html=`<div class="">
            <label class="labelaa">44) Please list your requirements for each room (you may tell us at our meeting, or please ignore this question if you have already told us)
            </label>
            <br>
            <textarea name="" id="" cols="40" rows="15""></textarea>
         
           
         </div>`;
        quest.innerHTML=html;
        }
        if(i==20){
            next.style.display="block";
            next.style.backgroundColor="green";
            next.innerText="Finish";
           nBtn.style.display="none";
        
 
            html=`<div class="">
            <label class="labelaa">45) <span></span> Any more things about yourself that you would like to share with your designer that might help us to better understand you</label>
            <br>
            <textarea name="" id="" cols="40" rows="15"></textarea>
         
           
         </div>`;
        quest.innerHTML=html;
        }
        
        if(i>20){
            i=20
        }
        if(i<20){
            nBtn.style.display="block";
            next.style.display="none";
        }
}
bqBtn.onclick=()=>{
    console.log("clekc");
    i--;
    if(i<20){
        nBtn.style.display="block";
        next.style.display="none";
    }
    if(i<0){
        i=0;
        bqBtn.style.display="none";
        html=` <div class="input-div" id="quest">
        <div class="input-div">
        <label class="labelaa">1) <span></span> What architectural style is your home? (Please indicate one.) </label>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="tudor">
                    tudor
                </label>
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="cradtsman">
                    Craftsman
                </label>
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="ranch">
                    Ranch
                </label>
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="medit">
                    Mediterranean
                </label>
            </div>
        </div>

        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="colonial">
                    Colinial
                </label>
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="mordern">
                    Modern
                </label>
            </div>
        </div>
        <div class="">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" required>
                <label class="labelaa" class="form-check-label" for="capecod">
                    Cape Cod
                </label>
            </div>
        </div>
    </div>
    <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">2) <span></span>Total area square Feet?</label>

        <input class="" type="text" placeholder="Type Here.....">
    </div>
    
    </div>
    <div class="buttons button_space">
        <button class="back_button" id="bBtn">Back</button>
        <button class="next_button" id="nxBtn" style="display:none ;">Next Step</button>
        <!-- <button class="nextQuest" id="nextQuest">Next Questions</button> -->
        <button class="nextQuest " id="nextQuest">Next Questions</button>
        <button style="" id="bqBtn">previous Questions</button>`;
        quest.innerHTML=html;
    }
    if(i==1){
        back.style.display="none";
        next.style.display="none";
        bqBtn.style.display="block";
        html=` <div class="">
        <div class="input-div">
                            <label class="labelaa" class="tb" for="squarefeet">3) <span></span>Covered Area square feet?</label>

                            <input class="" type="text" placeholder="Type Here.....">
                            <div class=" ">

                                
                            </div>


                            </div>
        <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">4)<span></span> Do you currently own land or rent?</label>
            <input  class="inputa" type="text">
        </div>
        <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">5) <span></span> Age of Building</label>
            
            <input  class="inputa" type="text">
        </div>
        <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">6)<span></span>What do you antcipate starting execution or construction?</label>
            
             <input  class="inputa" type="text"  ; >
        </div>
      
      </div>`;
      quest.innerHTML=html;
    }
    if(i==2){
        back.style.display="none";
        next.style.display="none";
        html=`<div class="">
        <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">7) <span></span>What is your total construction budget(excluding site Development)?</label>
                           
            <input  class="inputa" type="text" placeholder="Type Here.....">
            </div>
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">8) Is your financing in place?if not will you able to prequalify?</label>
                         
                           <input  class="inputa" type="text" placeholder="Type Here....." >
                           </div>
                           <div class="input-div">
                           <label class="labelaa" class="tb" for="squarefeet">9) <span></span> will you need full constructions drawings to secure financing?</label>
                     
                        <input  class="inputa" type="text" placeholder="Type Here.....">
                        </div>
      
    </div>
    `;
        quest.innerHTML=html;
        }
    //     if(i==3){
            
    // //         html=`<div class="">
    // //         <div class="input-div">
    // //         <label class="labelaa" class="tb" for="squarefeet">7 <span></span>)What is your total construction budget(excluding site Development)?</label>
                               
    // //             <input  class="inputa" type="text">
    // //             </div>
    // //             <div class="input-div">
    // //             <label class="labelaa" class="tb" for="squarefeet">8) <span></span>Is your financing in place?if not will you able to prequalify?</label>
                             
    // //                            <input  class="inputa" type="text"  placeholder="Type Here....." >
    // //                            </div>
    // //                            <div class="input-div">
    // //                            <label class="labelaa" class="tb" for="squarefeet">9)<span></span> will you need full constructions drawings to secure financing?</label>
                         
    // //                         <input  class="inputa" type="text"  placeholder="Type Here.....">
    // //                         </div>
          
    // //     </div>
    // //    `;
    //     quest.innerHTML=html;
    //     }
        if(i==3){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">10) <span></span>Do you have skectches/plans of your project?</label>
            
            <input  class="inputa" type="text"  placeholder="Type Here.....">
            </div>
            <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">11) <span></span>Occupation of client?</label>
                           
             <input  class="inputa" type="text"  style=""  placeholder="Type Here....." >
             </div>
             <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">12) <span></span>The fixed number of People who will use this space?</label>
                           
                            <input  class="inputa" type="text"  style=" ;"  placeholder="Type Here....." >
                            </div>
          
        </div>
       `;
        quest.innerHTML=html;
        }
        if(i==4){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">13) <span></span>Any Extra People who may use this space in future?</label>
            
             <input  class="inputa" type="text"  style=" "  placeholder="Type Here.....">
             </div>
             <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">14) <span></span>Please tell us if there are any illegal features in this space that you know of?</label>
                           
                            <input  class="inputa" type="text"  placeholder="Type Here....."  >
                            </div>
                            <div class="input-div">
                            <label class="labelaa" class="tb" for="squarefeet">15)<span></span>Colors you like?</label>
                          
                            <input  class="inputa" type="text"  style=" ;"  placeholder="Type Here....." >
                            </div>
          
        </div>
       `;
        quest.innerHTML=html;
        }
        if(i==5){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">16) <span></span>Colors you dont like ?</label>
           
             <input  class="inputa" type="text"  style="width: ;"  placeholder="Type Here....." >
             </div>
             <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">17) <span></span>Do you have a color Theme in mind?</label>
              <input  class="inputa" type="text"  style="width:;"  placeholder="Type Here.....">
              </div>
              <div class="input-div">
              <label class="labelaa" class="tb" for="squarefeet">18) <span></span>Do you like the daker tone or lighter?</label>
                           
                            <input  class="inputa" type="text"   placeholder="Type Here.....">
                            </div>
          
        </div>`;
        quest.innerHTML=html;
        }
        if(i==6){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">19) <span></span>What's your favorite material?</label>
            <input  class="inputa" type="text"  placeholder="Type Here.....">
            </div>
            <div class="input-div">
             <label class="labelaa" class="tb" for="squarefeet">20) <span></span>What material do you dislike?</label>
            
              <input  class="inputa" type="text"  placeholder="Type Here.....">
              </div>
              <div class="input-div">
              <label class="labelaa" class="tb" for="squarefeet">21) <span></span>please tell us if you want to change the size of windows, or any door?</label>
              
               <input  class="inputa" type="text"  placeholder="Type Here....."   >
               </div>
          
        </div>`;
        quest.innerHTML=html;
        }
        if(i==7){
            html=`
            <div class="input-div">
            <div class="">
            <label class="labelaa" class="tb" for="squarefeet">22) <span></span>Are any collections on displays?</label>
             
             <div class="">
                 <div class="">
                     <input class="" type="radio" value="" name="r"  required >
                     <label class="labelaa" class="" for="colonial">
                       Yes
                     </label>
             </div>
          </div>
          <div class="">
             <div class="">
                 <input class="" type="radio"  name="r"  value=""  required>
                 <label class="labelaa" class="" for="mordern">
                   No
                 </label>
         </div>
        </div>
        </div>
        <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">23) <span></span>if you circled yes ,would you like to display your collections? where and what?</label>
        
         <input  class="inputa" type="text"  placeholder="Type Here....." >
         </div>
         <div class="input-div">
         <label class="labelaa" class="tb" for="squarefeet">24) <span></span>please tell us if you want to change the size of windows, or any door?</label>
                         
                            <input  class="inputa" type="text"  placeholder="Type Here.....">
                               </div>        
                            </div>
        `;
        quest.innerHTML=html;
        }
        if(i==8){
            html=`<div class="">
            <div class="input-div">
            <label class="labelaa" class="tb" for="squarefeet">25) <span></span>Do you cook a lot?(if you circled yes,requirements)specify</label>
            <div class="">
                <div class="">
                    <input class="" type="radio" value=""  name="r1"  required>
                    <label class="labelaa" class="" for="colonial">
                      Yes
                    </label>
            </div>
         </div>
         <div class="">
            <div class="">
                <input class="" type="radio" value=""  name="r1"  required>
                <label class="labelaa" class="" for="mordern">
                  No
                </label>
        </div>
        </div>

        </div>
        <div class="input-div">
        <label class="labelaa" class="tb" for="squarefeet">26) <span></span>What are your requirements for toilet?</label>
        
         <input  class="inputa" type="text" placeholder="Type Here....."  >
         </div>
         <div class="input-div">
         <label class="labelaa" class="tb" for="squarefeet">27) <span></span>Do you like false cellings?</label>
          
          <input  class="inputa" type="text" placeholder="Type Here....." >
          </div>
          
        </div>`;
        quest.innerHTML=html;
        }
        if(i==9){
            html=`<div class="">
            <div class="input-div">
          <label class="labelaa" class="tb" for="squarefeet">28) <span></span>if you have a patio,or terrace, or rooftop, please let us know your ideas for them?</label>
            
             <input  class="inputa" type="text"  placeholder="Type Here.....">
             </div>
             <div class="input-div">
             <label class="labelaa" for="design">29) <span></span>What is your favorite design style?  (Please check the appropriate styles)</label>
             <div class="">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="Modern-mini">
                            Modern minimalist style
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for=" Elegant-Style">
                        Elegant Style
                    </label>
            </div>
         </div>
         <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for=" Modern-Orient">
                    Modern Oriental Style 
                </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for=" European-classi">
                European classical style
            </label>
        </div>
        </div>
        
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for="American">
            American country style
        </label>
        </div>
        </div>
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for="avant-garde">
            Modern avant-garde style 
        </label>
        </div>
        </div>
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for=" Mediterranean">
            Mediterranean style
        </label>
        </div>
        </div>
        <div class="">
        <div class="">
        <input class="" type="checkbox" value=""  required>
        <label class="labelaa" class="" for="Chinese">
            Chinese Style
        </label>
        </div>
        </div>
        
        
        </div>
        </div>
        </div>`;
        quest.innerHTML=html;
        }
        if(i==10){
            html=` <label class="labelaa" for="requirements">30) <span></span> What are stronge Requirements?</label>
            <div class="">
                                   
               <div class="">
                   <div class="">
                       <input class="" type="checkbox" value=""  required>
                       <label class="labelaa" class="" for="Multipurpose ">
                        Multipurpose Furniture
                       </label>
               </div>
            </div>
            <div class="">
               <div class="">
                   <input class="" type="checkbox" value=""  required>
                   <label class="labelaa" class="" for="Hidden">
                    Hidden Storage 
                   </label>
            </div>
            </div>
            <div class="">
            <div class="">
               <input class="" type="checkbox" value=""  required>
               <label class="labelaa" class="" for="other">
                Other (specify) 
               </label>
               
            </div>
            
            </div>
            
            
            </div>
            <label class="labelaa" for="other"><span></span> if other</label>
            <input type="text" class="inputa"  placeholder="Type Here.....">`;
            quest.innerHTML=html;
        }
        if(i==11){
            html=`<div class="">
            <div class="input-div">
           
 
            <label class="labelaa" for="">31) <span></span>Are there any pieces of furniture, window, wall or floor coverings that must stay, and be worked into the new plan? Please explain:</label> 
            <br>
            <textarea name="" id=""cols="40" rows="15"></textarea>
            </div>
            <div class="input-div">
              <label class="labelaa" for="">32) <span></span>For how many vehicles will you need parking?</label>
              <input type="text" class="inputa"  placeholder="Type Here.....">
              </div>
            </div>`;
        quest.innerHTML=html;
        }
        if(i==12){
            html=`           
            <label class="labelaa" for="">33) <span></span>How involved do you wish to be in this project:	(Please check)</label>
            <div class="">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="very">
                            Very involved (Call you with details and updates daily or weekly
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="pmanager">
                        Involved –project manager Keep you updated with install dates, deliveries, work schedule etc
                    </label>
            </div>
         </div>
         <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for=" ready">
                    Minimally involved – don’t call until everything is ready to install 
                </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for=" othr">
                Other
            </label>
        </div>
        </div>
        
        <div class="input-div">
           
          <label class="labelaa" for="timeline">34) <span></span>What is your “ideal” timeline for your project? </label>
          <input type="text" class="inputa"  placeholder="Type Here.....">
          </div>
          <div class="input-div">
          
        
        </div>`;
            quest.innerHTML=html;
        }
        if(i==13){
            html=`<div class="">
            <label class="labelaa" for="">35) <span></span>Would you like to include “green products” when possible?</label>
          <div class="">
            <div class="">
                <input class="" type="radio" name="green" value=""  required>
                <label class="labelaa" class="" for="colonial">
                  Yes
                </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="radio"  name="green" value=""  required>
            <label class="labelaa" class="" for="mordern">
              No
            </label>
        </div>
        </div>
        <div class="">
        <div class="">
            <input class="" type="radio"  name="green" value=""  required>
            <label class="labelaa" class="" for="mordern">
              What do you mean?
            </label>
        </div>
        </div>
        </div>
        <div class="input-div">
        <label class="labelaa" for="feelings">36) <span></span>What “feeling” are you seeking to achieve?
            </label>
            <div class=" ">
                                        
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="casual">
                            Casual
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="Formal">
                        Formal
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="Spacious ">
                    Spacious 
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="clean">
                Clean line
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="wc">
                Warm/ cozy 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="la">
                Light/airy 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="Contemporary ">
                Contemporary 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="se">
                Sophisticated/Elegant
            </label>
            </div>
            </div>
            
            
            </div>
            </div>
        </div>`;
        quest.innerHTML=html;
        }
        if(i==14){
            html=`<div>
            
            <label class="labelaa" for="segmants">37) <span></span>Which segments are already done?
            
            </label>
            <div class="">
                                        
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="gs">
                            Grey Structure  
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="paint">
                        paint
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="ceilings ">
                    Ceilings  
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="lighting ">
                Lighting 
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="furniture ">
                Furniture 
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="branding ">
                Branding 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="flooring ">
                Flooring 
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="ew">
                Electric Work
            </label>
            </div>
            </div>
            
            
            </div>
            </div>`;
            quest.innerHTML=html;
        }
        if(i==15){
            html=`<div class="">
           
            
            <label class="labelaa">38) <span></span> there types of flooring you prefer? (Please check all that apply)</label>
            <div class=" ">
                                        
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="tiles">
                            Tiles 
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="marbel">
                        Marbel
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="garanite">
                    Garanite 
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="lighting ">
                Carpet
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="lw ">
                laminated Wood
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="swd">
               Solid Wood 
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="flooring ">
                Vinyl
            
            </label>
            </div>
            </div>
            
            
            </div>
            </div>`;
        quest.innerHTML=html;
        }
        if(i==16){
            html=`
            <div class=""input-div>
            <div class="">
    
            <label class="labelaa">39) <span></span>Are there types of window treatment you prefer? (Please check all that apply)</label>
            <div class=" ">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="blinds">
                            Blinds  
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="sheer">
                        Sheers
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="shutter">
                    Shutters
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="rd">
                Room Darkening
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="curtains">
                Curtains  
            
            </label>
            </div>
            </div>
            <div class="">
            <div class="">
             </div>
             <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="af">
                All Fabrics 
            </label>
            </div>
            </div>
            
            
            
            
            </div>
            <div class=" ">
                                    
                <div class="">
                    <div class="">
                        <input class="" type="checkbox" value=""  required>
                        <label class="labelaa" class="" for="nm">
                            Natural Materials
        
                        </label>
                </div>
             </div>
             <div class="">
                <div class="">
                    <input class="" type="checkbox" value=""  required>
                    <label class="labelaa" class="" for="metals">
                        Metals
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="checkbox" value=""  required>
                <label class="labelaa" class="" for="shade">
                   shades
                </label>
            </div>
            </div>
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="comb">
                Combination
            </label>
            </div>
            </div>
            
            <div class="">
            <div class="">
            <input class="" type="checkbox" value=""  required>
            <label class="labelaa" class="" for="oth ">
                other 
            
            </label>
            </div>
            </div>
            
            
            
            </div>
            </div>
        
            `;
        quest.innerHTML=html;
        }
        if(i==17){
            html=`<div>
            <div class="input-div">
            <label class="labelaa">40) <span></span>Do you need sun control or privacy with your window treatments?</label>
            <div class="">
                <div class="k">
                    <input class="" type="radio" name="green" value=""  required>
                    <label class="labelaa" class="form-check-label" for="colonial">
                      Yes
                    </label>
            </div>
            </div>
            <div class="">
            <div class="">
                <input class="" type="radio"  name="green" value=""  required>
                <label class="labelaa" class="" for="mordern">
                  No
                </label>
            </div>
            </div>
            </div>
            <div class="input-div">
            <label class="labelaa" for="addi">41) Additional information regarding preferences:</label>
            <input type="text" class="inputa"  placeholder="Type Here.....">
            </div>
            <div class="input-div">
            <label class="labelaa" for="primary">42) <span></span>What is the primary exposure?
            <input type="text" class="inputa"  placeholder="Type Here.....">
            </div>
        </div>
            </div>`;
            quest.innerHTML=html;
        }
        if(i==18){
            html=`<div class="">
            <label class="labelaa">43) <span></span> Please list the name of all the basic rooms you want, (example, master bed room, study room, drawing room, dining and living room)</label>
            <br>
            <textarea name="" id="" cols="40" rows="15"></textarea>
         
           
         </div>`;
        quest.innerHTML=html;
        }
        if(i==19){
            html=`<div class="">
            <label class="labelaa">44) Please list your requirements for each room (you may tell us at our meeting, or please ignore this question if you have already told us)
            </label>
            <br>
            <textarea name="" id=""cols="40" rows="15"></textarea>
         
           
         </div>`;
        quest.innerHTML=html;
        }
        if(i==20){
            next.style.display="block";
            next.style.backgroundColor="green";
            next.innerText="Finish";
           nBtn.style.display="none";
        
 
            html=`<div class="">
            <label class="labelaa">45) <span></span> Any more things about yourself that you would like to share with your designer that might help us to better understand you</label>
            <br>
            <textarea name="" id="" cols="50" rows="20"></textarea>
         
           
         </div>`;
        quest.innerHTML=html;
        }
        
       
        
}
