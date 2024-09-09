<?php
/*
Template Name: Investor Center
*/
?>
<?php get_header(); ?>

<div class="container md:flex md:space-x-8 pt-14 md:pt-16 pb-100">
    <aside class="investorSidebar">
        <h2 class="subheading1">Table of content</h2>
        <ul class="flex flex-col space-y-4">
            <li><a href="#" class="active">Overview</a></li>
            <li><a href="#">ASX announcements</a></li>
            <li><a href="#">SWF performance graph</a></li>
            <li><a href="#">Historical share price</a></li>
            <li><a href="#">Investor services</a></li>
            <li><a href="#">Corporate governance</a></li>
        </ul>
    </aside>

    <div class="investorCenterMain">
        <h1 class="h1">Investor centre</h1>

        <div class="shareprice">
            <h3>SWF share price</h3>
            <p>AUS Price at 4:300 PM Sydney Time, 14 Jan 2021</p>
            
            <div class="upDownPrice">
                <div>$0.495</div>
                <div>0.005 <span></span></div>
                <div>(1.00%)</div>
            </div>
            
            <div class="highLowPrice">
                <div>
                    <span>Open</span>
                    <span>0.500</span>
                </div>

                <div>
                    <span>Open</span>
                    <span>0.500</span>
                </div>

                <div>
                    <span>Open</span>
                    <span>0.500</span>
                </div>

                <div>
                    <span>Open</span>
                    <span>0.500</span>
                </div>
            </div>

            <a href="#" class="button">Buy now!</a>
        </div>

        <div class="linkLists">
            <h2 class="subheading1">Table of content</h2>
            <ul>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
                <li><a href="#">Lorem</a></li>
            </ul>
        </div>

        <div class="content">
            <h2>Overview</h2>
            <p>SelfWealth Ltd is an Australian owned and operated company which offers a brand new solution to an age-old investment problem – how to empower investors to make informed decisions without paying exorbitant brokerage fees.</p>
            <p>Established in 2012, we’re an online community for investors, partnering to achieve a common purpose of better returns. For the first time in Australia, investors can now access an online tool which compares their portfolio’s performance against other investors.</p>
            <p>At SelfWealth, we call a trade a trade. That’s why in early 2016 we launched Australia’s flat fee brokerage solution, SelfWealth. Our members can now trade shares for $9.50 per trade with no commissions - regardless of the size of the trade.</p>
        </div>

        <div class="asxAnnouncements">
            <h2>ASX announcements</h2>

            <form action="#" class="searchform">
                <input type="text" placeholder="Search in articles">
                <button><svg class="fill-current" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M13.2923 13.9994C11.882 15.2445 10.0292 16 8 16C3.58172 16 0 12.4183 0 8C0 3.58172 3.58172 0 8 0C12.4183 0 16 3.58172 16 8C16 10.0292 15.2445 11.882 13.9994 13.2923L20.3536 19.6464C20.5488 19.8417 20.5488 20.1583 20.3536 20.3536C20.1583 20.5488 19.8417 20.5488 19.6464 20.3536L13.2923 13.9994ZM15 8C15 11.866 11.866 15 8 15C4.13401 15 1 11.866 1 8C1 4.13401 4.13401 1 8 1C11.866 1 15 4.13401 15 8Z"></path>
                </svg></button>
            </form>

            <div class="bluetags">
                <a href="#" class="tag active">More recent</a>
                <a href="#" class="tag">More recent</a>
                <a href="#" class="tag">More recent</a>
                <a href="#" class="tag">More recent</a>
                <a href="#" class="tag">More recent</a>
                <a href="#" class="tag">More recent</a>
            </div>

            <div class="tableListCon">
                <table class="tableList">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Column</td>
                            <td>Volume</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="asxAnnouncements">
            <h2>Historical share price</h2>

            <div class="tableListCon">
                <table class="tableList">
                    <thead>
                        <tr>
                            <td>Date</td>
                            <td>Open($)</td>
                            <td>High($)</td>
                            <td>Low($)</td>
                            <td>Close($)</td>
                            <td>Volume</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td>30/12/2016</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>49.68</td>
                            <td>145,344</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="buttonLine">
                <a href="#" class="button-blue wide">Load next 6 announcements</a>
            </div>
        </div>

        <div class="content">
            <h2>Investor services</h2>

            <h3>My shareholding</h3>

            <p>The SelfWealth share register is maintained by Link Market Services Limited. By visiting the Link Investor Centre, shareholders can:</p>

            <ul>
                <li>View their holding details</li>
                <li>Register to receive Annual Reports electronically</li>
                <li>Access and update information held by our Share Registry</li>
                <li>View information relating to dividend and transaction history</li>
                <li>Provide their Tax File Number or ABN</li>
                <li>Download forms, change address details, update communication preferences and add or amend direct credit details.</li>
            </ul>

            <p>When you visit the Link Investor Centre, you will need your Security Reference Number (SRN) or Holder Identification Number (HIN) to verify your identity. Your SRN/HIN is available on your holding/transaction and distribution statements.</p>

            <p>For all other questions, please contact the Registry:</p>

            <p>Link Market Services<br />
            Locked Bag A14<br />
            Sydney South NSW 1235<br />
            P: +61 1300 554 474<br />
            F: +61 2 9287 0303</p>

            <p>
                <a href="#">registrars@linkmarketservices.com.au</a> <br />
                <a href="#">www.linkmarketservices.com.au</a>
            </p>
        </div>

        <div class="content">
            <h3>Email alerts</h3>
            <p>Enter your email address, then select the types of alert you’d like to subscribe to. Click ‘Submit’ to save your preferences.</p>
            <p>If this is your first time subscribing, a confirmation email will be sent soon after you submit your preferences. Please open this email, and click the link listed inside to finalise your subscription to this service. You may return to this page at any time to modify your preferences.</p>

            <form action="#">
                <div class="singleline">
                    <label>Email</label>
                    <input class="error" type="text" placeholder="Enter your email" />
                    <span class="error">Error COde</span>
                </div>

                <div class="singleline">
                    <label>Alerts (at least one should be selected)</label>
                    
                    <div class="subline">
                        <div>
                            <input type="checkbox" /> Announcements alert
                        </div>
                        <div>
                            <input type="checkbox" /> Announcements alert
                        </div>
                    </div>
                    
                    <span class="error">Error COde</span>
                </div>

                <div class="singleline">
                    <button type="submit" class="button-blue">Submit</button>
                </div>
            </form>
        </div>

        <div class="content">
            <h2>Corporate governance</h2>
            <p>To download and view our corporate governance policies and charters, simply click on the links below:</p>

            <div class="tableListCon">
                <table class="tableList">
                    <thead>
                        <tr>
                            <td>Title</td>
                            <td>Column</td>
                            <td>Volume</td>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                        <tr>
                            <td><a href="#"><img src="<?php bloginfo('template_directory'); ?>/images/svgs/PDF.svg" alt="" class="w-8"> 2020 Financial Year Annual Report</a></td>
                            <td>29/09/2022</td>
                            <td>145,344</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="buttonLine">
                <a href="#" class="button-blue">Load next 6 announcements</a>
            </div>
        </div>

        <div class="team">
            <h2>Board of directors</h2>

            <div class="teamColumns fourColumn">
                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Team-member-Yulia.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Team-member-Yulia.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Team-member-Yulia@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Team-member-Yulia@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Yulia</h5>
                        <span>Frontend Developer</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Yulia</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Tania.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Tania.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Tania@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Tania@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Tania De Vincentis</h5>
                        <span>Head of Compliance</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Vincentis</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Rob.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Rob.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Rob@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Rob@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Rob Edgley</h5>
                        <span>Managing Director</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Edgley</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Matt.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Matt.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Matt@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Matt@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Matt</h5>
                        <span>Head of Client Services</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Matt</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Rob.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Rob.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Rob@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Rob@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Rob Edgley</h5>
                        <span>Managing Director</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Edgley</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Matt.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Matt.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Matt@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Matt@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Matt</h5>
                        <span>Head of Client Services</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Matt</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="team">
            <h2>Board of directors</h2>

            <div class="teamColumns fourColumn">
                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Team-member-Yulia.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Team-member-Yulia.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Team-member-Yulia@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Team-member-Yulia@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Yulia</h5>
                        <span>Frontend Developer</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Yulia</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Tania.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Tania.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Tania@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Tania@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Tania De Vincentis</h5>
                        <span>Head of Compliance</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Vincentis</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Rob.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Rob.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Rob@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Rob@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Rob Edgley</h5>
                        <span>Managing Director</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Edgley</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Matt.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Matt.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Matt@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Matt@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Matt</h5>
                        <span>Head of Client Services</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Matt</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Rob.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Rob.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Rob@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Rob@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Rob Edgley</h5>
                        <span>Managing Director</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Edgley</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column teamcolumn">
                    <div class="imgCon">
                        <img src="<?php bloginfo('template_directory'); ?>/images/Matt.jpg" srcset="<?php bloginfo('template_directory'); ?>/images/Matt.jpg 1x, <?php bloginfo('template_directory'); ?>/images/Matt@2x.jpg 2x, <?php bloginfo('template_directory'); ?>/images/Matt@3x.jpg 3x" alt="">
                        <a href="#" class="poplink"><img src="<?php bloginfo('template_directory'); ?>/images/i-icon.svg" alt=""></a>
                    </div>

                    <div class="details">
                        <h5 class="article-title-small">Matt</h5>
                        <span>Head of Client Services</span>
                    </div>

                    <div class="popcontent hidden">
                        <div class="popupInside">
                            <div class="left">
                                <img src="https://picsum.photos/186/200" alt="">
                                <div class="bottom">
                                    <h4 class="article-title-small">Matt</h4>
                                    <span class="body2light">Managing Director</span>
                                </div>
                            </div>
                            
                            <div class="right">
                                <div class="content">
                                    <p>Mr Edgley holds a bachelors degree in Economics from Monash University together with a second degree in Japanese language. Mr Edgley’s career has been predominantly focused on International Finance and Investment Banking in Australia, the UK and throughout Asia.</p>
                                    <p>Mr Edgley has significant experience and skills in strategic planning, performance management and marketing and has proven abilities in building businesses.</p>
                                    <p>Mr Edgley is a member of both the Audit Risk and Compliance Committee and the Remuneration Committee.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="investorContact">
            <h2>Investor Contact</h2>

            <div class="columns">
                <div class="column">
                    <h3>Registered Office</h3>

                    <p>SelfWealth Ltd<br />
                    Level 2, 613 Canterbury Road<br />
                    Surrey Hills VIC 3127</p>

                    <p><a href="#">shareholders@selfwealth.com.au</a><br />
                    <a href="#">www.selfwealth.com.au</a></p>
                </div>

                <div class="column">
                    <h3>Share Registry</h3>

                    <p>Link Market Services</p>
                    
                    <p>Locked Bag A14<br />
                    Sydney South NSW 1235</p>

                    <p>P: +61 1300 554 474 <br />
                    F: +61 2 9287 0303</p>

                    <p><a href="#">registrars@linkmarketservices.com.au</a><br />
                    <a href="#">www.linkmarketservices.com.au</a></p>
                </div>

                <div class="column">
                    <h3>Auditor</h3>

                    <p>Crowe Horwath Melbourne<br />
                    Level 17<br />
                    181 William Street<br />
                    Melbourne VIC 3000</p>
                </div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>