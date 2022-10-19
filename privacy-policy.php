<?php
/**
 * The template for displaying the privacy policy
 *
 * This is the template that displays the privacy policy.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Urbana_Creative_Theme
 */

if(is_page("privacy-policy")) {
    get_header('2');
   }
   else {
    get_header();
   }
    wp_head();
   
?>
    <!-- Privacy Policy -->
    <main>

        <section class="privacy__policy__section">

            <h4 class="privacy__policy__header">Privacy Policy</h4>

            <div class="privacy__policy__content">

            <!-- Old privacy policy -->
                <!-- <small>

                    <p class="privacy__policy__text">
                        Urbana Creative Group, Inc. has created this privacy policy statement in order to demonstrate our firm commitment to your privacy. The following discloses our information gathering, use and dissemination practices solely for the Web site located at www.urbanacreative.com (the “Site”).
                    </p>

                    <p class="privacy__policy__text">
                        By using or accessing the Site, you signify your assent to our Privacy Policy. IF YOU DO NOT AGREE TO THIS PRIVACY POLICY YOU MAY NOT ACCESS OR OTHERWISE USE THE SITE. Personal and Non-Personal Information: When using the Site, you may be asked to provide, or you may choose to upload, certain personally identifiable information about yourself (“Personal Information”). This may include information that you submit to be considered for a position with Urbana Creative Group, Inc. Personal Information can include your name, e-mail address, physical address and telephone number.
                    </p>
                    
                    <p class="privacy__policy__text">
                        In addition, we may also collect non-personally identifiable information, such as IP host address, pages viewed, browser type and other data, and may aggregate any information collected in a manner which does not identify any individual (“Aggregate Information”).
                    </p>

                    <p class="privacy__policy__text">
                        Personal Information Usage: Unless disclosed otherwise at the time of collection, we do not share any Personal Information you submit through our Site with any unaffiliated third party, unless it is necessary to respond to your inquiry, or to comply with applicable law. If you submit Personal Information to Urbana Creative Group, Inc. in connection with seeking a position with Urbana Creative Group, Inc., then we may share this information with third parties as necessary to evaluate your application and consider your appropriateness for work with Urbana Creative Group, Inc.
                    </p>

                    <p class="privacy__policy__text">
                        We will never sell your Personal Information to any third party not affiliated with Urbana Creative Group, Inc. without your consent except in connection with the sale or merger of Urbana Creative Group, Inc. or the division responsible for such services
                    </p>

                    <p class="privacy__policy__text">
                        Please note that we reserve the right to access and/or disclose Personal Information as required by courts or administrative agencies and to the extent required to permit us to investigate suspected fraud, harassment or other violations of any law, rule or regulation, the Site rules or policies, or the rights of third parties or to investigate any suspected conduct which we deem improper.
                    </p>

                    <p class="privacy__policy__text">
                        Aggregate Information Usage: We may use Aggregate Information to improve and enhance your experience on the Site and for our market research activities. For example, we may share Aggregate Information with unaffiliated third parties, such as business partners and clients, in an aggregate, anonymous form, which means that the shared information will not contain nor be linked to any Personal Information.
                    </p>
                    
                    <p class="privacy__policy__text">
                        Clickstream: As you use the Internet, a trail of electronic information is left at each Web site you visit. This information, which is sometimes referred to as “clickstream data,” can be collected and stored by a Web site’s server. Clickstream data can tell us the type of computer and browsing software you use and the address of the Web site from which you linked to the Site. We may collect and use clickstream data as a form of Aggregate Information to anonymously determine how much time visitors spend on each page of our Site, how visitors navigate throughout the Site and how we may tailor our Web pages to better meet the needs of visitors. This information will be used to improve our Site and our services. Any collection or use of clickstream data will be anonymous and aggregate, and will not intentionally contain any Personal Information.
                    </p>

                    <p class="privacy__policy__text">
                        Security: The security of your Personal Information is very important to us. We attempt to provide for the secure transmission of your information from your computer to our servers by utilizing encryption software. However, due to the inherent open nature of the Internet, we cannot guarantee that communications between you and Urbana Creative Group, Inc., or information stored on the Site or our servers, will be free from unauthorized access by third parties such as hackers and your use of the Site demonstrates your assumption of this risk. We have put in place reasonable physical, electronic, and managerial procedures to safeguard the information we collect. Only those employees who need access to your information in order to perform their duties are authorized to have access to your Personal Information.
                    </p>

                    <p class="privacy__policy__text">
                        Protection for Children: We have no intention of collecting personal information from children under the age of 13. When we become aware that personal information from a child under 13 has been collected without such child’s parent or guardian’s consent, we will use all reasonable efforts to delete such information from our database.
                    </p>

                    <p class="privacy__policy__text">
                        Other Web Sites: Our Site may contain links to other Web sites not maintained by Urbana Creative Group, Inc. Other Web sites may also reference or link to our Site. We encourage you to be aware when you leave our Site, or surf the Internet, and to read the privacy statements of each and every Web site that you visit. We are not responsible for the privacy practices or the content of such other Web sites.
                    </p>

                    <p class="privacy__policy__text">
                        Changes to policy; Opt-out Process: We reserve the right, at our discretion, to change, modify, add, or remove portions from this policy at any time. However, if at any time in the future we plan to use Personal Information in a way that differs from this policy, we will post such changes here and provide you the opportunity to opt-out of such differing uses. Your continued use of the Site following the posting of any changes to this policy means you accept such changes.
                    </p>
                    
                    <p class="privacy__policy__text">
                        If you receive an unwanted e-mail from us, you can simply reply and ask not to receive future emails. We also give you the option to remove your personal information from our list of active users completely. All unsubscribe or opt-out requests should be sent to us at info@urbanacreative.com and we will process your request within a reasonable time after receipt. We are not responsible for removing your personal information from the lists of any third party who has been provided your information in accordance with this policy, such as a business partner.
                    </p>

                    <p class="privacy__policy__text">
                        Communications with Urbana Creative Group, Inc: By providing your e-mail address to Urbana Creative Group, Inc., you expressly consent to receive e-mails from us. We may use e-mail to communicate with you, to send information that you have requested or to send information about other products or services developed or provided by us, provided that, we will not give your e-mail address to another party to promote their products or services directly to you.
                    </p>

                    <p class="privacy__policy__text">
                        Any communication or material you transmit to us by e-mail or otherwise, including any data, questions, comments, suggestions, or the like is, and will be treated as, non-confidential and nonproprietary. Except to the extent expressly covered by this policy, anything you transmit or post may be used by us for any purpose, including but not limited to, reproduction, disclosure, transmission, publication, broadcast and posting. Furthermore, you expressly agree that we are free to use any ideas, concepts, know-how, or techniques contained in any communication you send to us without compensation and for any purpose whatsoever, including but not limited to, developing, manufacturing and marketing products and services using such information.
                    </p>

                    <p class="privacy__policy__text">
                        Web Site Content: All pages and content within this Site, including but not limited to, text, graphics, audio, video, photographs, logos or other materials are the intellectual property of, or are authorized for use by, Urbana Creative Group, Inc. and its licensors, business partners, clients and affiliates, including all trademarks, service marks, copyrights, patents and trade secrets contained therein.
                    </p>

                    <p class="privacy__policy__text">
                        EXCEPT AS EXPRESSLY PERMITTED HEREIN, YOU MAY NOT MODIFY, COPY, REPRODUCE, CREATE DERIVATIVE WORKS, REPUBLISH, DISPLAY, UPLOAD, POST, TRANSMIT, OR DISTRIBUTE IN ANY WAY CONTENT AVAILABLE ON THIS SITE WITHOUT THE PRIOR WRITTEN CONSENT OF URBANA CREATIVE GROUP, INC.
                    </p>
                    
                    <p class="privacy__policy__text">
                        Contact: For questions or concerns relating to privacy, we can be contacted at <a href="mailto:info@urbanacreative.com" class="privacy__policy__email__link">info@urbanacreative.com</a> United States of America: Our Site is maintained in the United States of America. By using the Site, you authorize the export of Personal Information to the USA and its storage and use as specified in this policy.
                    </p>

                    <p class="privacy__policy__text">
                        Effective Date: This privacy policy is effective and was last updated on January 1, 2022.
                    </p>

                </small> -->

            <!-- Update text October 12, 2022 -->

            <small>

                <p class="privacy__policy__text__small">Last updated: October 12, 2022</p>
                <p class="privacy__policy__text">This Privacy Policy describes Our policies and procedures on the collection, use and disclosure of Your information when You use the Service and tells You about Your privacy rights and how the law protects You.</p>
                <p class="privacy__policy__text">We use Your Personal data to provide and improve the Service. By using the Service, You agree to the collection and use of information in accordance with this Privacy Policy. This Privacy Policy has been created with the help of the TermsFeed Privacy Policy Generator.</p>
                <br>

                <h4 class="privacy__policy__header">Interpretation and Definitions</h4>                
                <h4 class="privacy__policy__header__small">Interpretation</h4>
                <p class="privacy__policy__text">The words of which the initial letter is capitalized have meanings defined under the following conditions. The following definitions shall have the same meaning regardless of whether they appear in singular or in plural.</p>
                <br>

                <h4 class="privacy__policy__header__small">Definitions</h4>
                <p class="privacy__policy__text">For the purposes of this Privacy Policy:</p>
                <ul>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Account</span> means a unique account created for You to access our Service or parts of our Service.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Company</span> (referred to as either "the Company", "We", "Us" or "Our" in this Agreement) refers to Urbana Creative Group Inc., 5307 NW 113 Place.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Cookies</span> are small files that are placed on Your computer, mobile device or any other device by a website, containing the details of Your browsing history on that website among its many uses.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Country</span> refers to: Florida, United States.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Device</span> means any device that can access the Service such as a computer, a cellphone or a digital tablet.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Personal Data</span> is any information that relates to an identified or identifiable individual.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Service</span> refers to the Website.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Service Provider</span> means any natural or legal person who processes the data on behalf of the Company. It refers to third-party companies or individuals employed by the Company to facilitate the Service, to provide the Service on behalf of the Company, to perform services related to the Service or to assist the Company in analyzing how the Service is used.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Usage Data</span> refers to data collected automatically, either generated by the use of the Service or from the Service infrastructure itself (for example, the duration of a page visit).</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Website</span> refers to urbana creativ, accessible from <a href="https://urbanacreative.com/"> www.urbanacreative.com</a></li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">You</span> means the individual accessing or using the Service, or the company, or other legal entity on behalf of which such individual is accessing or using the Service, as applicable.</li>
                </ul>
                <br>

                <h4 class="privacy__policy__header">Collecting and Using Your Personal Data</h4>
                <h5 class="privacy__policy__header__small">Types of Data Collected</h5>
                <h6 class="privacy__policy__header__x-small">Personal Data</h6>
                <br>
                <p class="privacy__policy__text">While using Our Service, We may ask You to provide Us with certain personally identifiable information that can be used to contact or identify You. Personally identifiable information may include, but is not limited to:</p>
                <ul class="privacy__policy__text">
                    <li class="privacy__policy__text">Email address</li>
                    <li class="privacy__policy__text">First name and last name</li>
                    <li class="privacy__policy__text">Usage Data</li>
                </ul>
                <br>
                <h6 class="privacy__policy__header__x-small">Usage Data</h6>
                <br>
                <p class="privacy__policy__text">Usage Data is collected automatically when using the Service.</p>
                <p class="privacy__policy__text">Usage Data may include information such as Your Device's Internet Protocol address (e.g. IP address), browser type, browser version, the pages of our Service that You visit, the time and date of Your visit, the time spent on those pages, unique device identifiers and other diagnostic data.</p>
                <p class="privacy__policy__text">When You access the Service by or through a mobile device, We may collect certain information automatically, including, but not limited to, the type of mobile device You use, Your mobile device unique ID, the IP address of Your mobile device, Your mobile operating system, the type of mobile Internet browser You use, unique device identifiers and other diagnostic data.</p>
                <p class="privacy__policy__text">We may also collect information that Your browser sends whenever You visit our Service or when You access the Service by or through a mobile device.</p>
                <br>
                <h6 class="privacy__policy__header__x-small">Tracking Technologies and Cookies</h6>
                <br>
                <p class="privacy__policy__text">We use Cookies and similar tracking technologies to track the activity on Our Service and store certain information. Tracking technologies used are beacons, tags, and scripts to collect and track information and to improve and analyze Our Service. The technologies We use may include:</p>
                <ul>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Cookies or Browser Cookies.</span> A cookie is a small file placed on Your Device. You can instruct Your browser to refuse all Cookies or to indicate when a Cookie is being sent. However, if You do not accept Cookies, You may not be able to use some parts of our Service. Unless you have adjusted Your browser setting so that it will refuse Cookies, our Service may use Cookies.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">Web Beacons.</span> Certain sections of our Service and our emails may contain small electronic files known as web beacons (also referred to as clear gifs, pixel tags, and single-pixel gifs) that permit the Company, for example, to count users who have visited those pages or opened an email and for other related website statistics (for example, recording the popularity of a certain section and verifying system and server integrity).</li>
                </ul>
                <p class="privacy__policy__text">Cookies can be "Persistent" or "Session" Cookies. Persistent Cookies remain on Your personal computer or mobile device when You go offline, while Session Cookies are deleted as soon as You close Your web browser. You can learn more about cookies on TermsFeed website article.</p>
                <p class="privacy__policy__text">We use both Session and Persistent Cookies for the purposes set out below:</p>
                <ul>
                    <li class="privacy__policy__text">
                        <span class="privacy__policy__text__bold">Necessary / Essential Cookies</span> 
                        <p class="privacy__policy__text"> <br> Type: Session Cookies</p>
                        <p class="privacy__policy__text">Administered by: Us</p>
                        <p class="privacy__policy__text">Purpose: These Cookies are essential to provide You with services available through the Website and to enable You to use some of its features. They help to authenticate users and prevent fraudulent use of user accounts. Without these Cookies, the services that You have asked for cannot be provided, and We only use these Cookies to provide You with those services.</p>
                    </li>
                    <li class="privacy__policy__text">
                        <span class="privacy__policy__text__bold">Necessary / Essential Cookies</span>
                        <p class="privacy__policy__text"> <br> Type: Persistent Cookies</p>
                        <p class="privacy__policy__text">Administered by: Us</p>
                        <p class="privacy__policy__text">Purpose: These Cookies identify if users have accepted the use of cookies on the Website.</p>
                    </li>
                    <li class="privacy__policy__text">
                        <span class="privacy__policy__text__bold">Necessary / Essential Cookies</span>
                        <p class="privacy__policy__text"> <br> Type: Persistent Cookies</p>
                        <p class="privacy__policy__text">Administered by: Us</p>
                        <p class="privacy__policy__text">Purpose: These Cookies allow us to remember choices You make when You use the Website, such as remembering your login details or language preference. The purpose of these Cookies is to provide You with a more personal experience and to avoid You having to re-enter your preferences every time You use the Website.</p>
                    </li>
                </ul>
                <p class="privacy__policy__text">For more information about the cookies we use and your choices regarding cookies, please visit our Cookies Policy or the Cookies section of our Privacy Policy.</p>
                <br>

                <h5 class="privacy__policy__header__small">Use of Your Personal Data</h5>
                <p class="privacy__policy__text">The Company may use Personal Data for the following purposes:</p>
                <ul>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">To provide and maintain our Service,</span>including to monitor the usage of our Service.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">To manage Your Account:</span> to manage Your registration as a user of the Service. The Personal Data You provide can give You access to different functionalities of the Service that are available to You as a registered user.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">For the performance of a contract:</span> the development, compliance and undertaking of the purchase contract for the products, items or services You have purchased or of any other contract with Us through the Service.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">To contact You:</span> To contact You by email, telephone calls, SMS, or other equivalent forms of electronic communication, such as a mobile application's push notifications regarding updates or informative communications related to the functionalities, products or contracted services, including the security updates, when necessary or reasonable for their implementation.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">To provide You</span> with news, special offers and general information about other goods, services and events which we offer that are similar to those that you have already purchased or enquired about unless You have opted not to receive such information.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">To manage Your requests:</span> To attend and manage Your requests to Us.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">For business transfers:</span> We may use Your information to evaluate or conduct a merger, divestiture, restructuring, reorganization, dissolution, or other sale or transfer of some or all of Our assets, whether as a going concern or as part of bankruptcy, liquidation, or similar proceeding, in which Personal Data held by Us about our Service users is among the assets transferred.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">For other purposes:</span> We may use Your information for other purposes, such as data analysis, identifying usage trends, determining the effectiveness of our promotional campaigns and to evaluate and improve our Service, products, services, marketing and your experience.</li>
                </ul>
                <p class="privacy__policy__text">We may share Your personal information in the following situations:</p>
                <ul>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">With Service Providers:</span> We may share Your personal information with Service Providers to monitor and analyze the use of our Service, to contact You.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">For business transfers:</span> We may share or transfer Your personal information in connection with, or during negotiations of, any merger, sale of Company assets, financing, or acquisition of all or a portion of Our business to another company.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">With Affiliates:</span> We may share Your information with Our affiliates, in which case we will require those affiliates to honor this Privacy Policy. Affiliates include Our parent company and any other subsidiaries, joint venture partners or other companies that We control or that are under common control with Us.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">With business partners:</span> We may share Your information with Our business partners to offer You certain products, services or promotions.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">With other users:</span> when You share personal information or otherwise interact in the public areas with other users, such information may be viewed by all users and may be publicly distributed outside.</li>
                    <li class="privacy__policy__text"><span class="privacy__policy__text__bold">With Your consent:</span> We may disclose Your personal information for any other purpose with Your consent.</li>
                </ul>
                <br>

                <h5 class="privacy__policy__header__small">Retention of Your Personal Data</h5>
                <p class="privacy__policy__text">The Company will retain Your Personal Data only for as long as is necessary for the purposes set out in this Privacy Policy. We will retain and use Your Personal Data to the extent necessary to comply with our legal obligations (for example, if we are required to retain your data to comply with applicable laws), resolve disputes, and enforce our legal agreements and policies.</p>
                <p class="privacy__policy__text">The Company will also retain Usage Data for internal analysis purposes. Usage Data is generally retained for a shorter period of time, except when this data is used to strengthen the security or to improve the functionality of Our Service, or We are legally obligated to retain this data for longer time periods.</p>
                <br>

                <h5 class="privacy__policy__header__small">Transfer of Your Personal Data</h5>
                <p class="privacy__policy__text">Your information, including Personal Data, is processed at the Company's operating offices and in any other places where the parties involved in the processing are located. It means that this information may be transferred to — and maintained on — computers located outside of Your state, province, country or other governmental jurisdiction where the data protection laws may differ than those from Your jurisdiction.</p>
                <p class="privacy__policy__text">Your consent to this Privacy Policy followed by Your submission of such information represents Your agreement to that transfer.</p>
                <p class="privacy__policy__text">The Company will take all steps reasonably necessary to ensure that Your data is treated securely and in accordance with this Privacy Policy and no transfer of Your Personal Data will take place to an organization or a country unless there are adequate controls in place including the security of Your data and other personal information.</p>
                <br>

                <h5 class="privacy__policy__header__small">Delete Your Personal Data</h5>
                <p class="privacy__policy__text">You have the right to delete or request that We assist in deleting the Personal Data that We have collected about You.</p>
                <p class="privacy__policy__text">Our Service may give You the ability to delete certain information about You from within the Service.</p>
                <p class="privacy__policy__text">You may update, amend, or delete Your information at any time by signing in to Your Account, if you have one, and visiting the account settings section that allows you to manage Your personal information. You may also contact Us to request access to, correct, or delete any personal information that You have provided to Us.</p>
                <p class="privacy__policy__text">Please note, however, that We may need to retain certain information when we have a legal obligation or lawful basis to do so.</p>
                <br>

                <h5 class="privacy__policy__header__small">Disclosure of Your Personal Data</h5>
                <h6 class="privacy__policy__header__x-small">Business Transactions</h6>
                <br>
                <p class="privacy__policy__text">If the Company is involved in a merger, acquisition or asset sale, Your Personal Data may be transferred. We will provide notice before Your Personal Data is transferred and becomes subject to a different Privacy Policy.</p>
                <h6 class="privacy__policy__header__x-small">Law enforcement</h6>
                <br>
                <p class="privacy__policy__text">Under certain circumstances, the Company may be required to disclose Your Personal Data if required to do so by law or in response to valid requests by public authorities (e.g. a court or a government agency).</p>
                <h6 class="privacy__policy__header__x-small">Other legal requirements</h6>
                <br>
                <p class="privacy__policy__text">The Company may disclose Your Personal Data in the good faith belief that such action is necessary to:</p>
                <ul>
                    <li class="privacy__policy__text">Comply with a legal obligation</li>
                    <li class="privacy__policy__text">Protect and defend the rights or property of the Company</li>
                    <li class="privacy__policy__text">Prevent or investigate possible wrongdoing in connection with the Service</li>
                    <li class="privacy__policy__text">Protect the personal safety of Users of the Service or the public</li>
                    <li class="privacy__policy__text">Protect against legal liability</li>
                </ul>
                <br>

                <h5 class="privacy__policy__header__small">Security of Your Personal Data</h5>
                <p class="privacy__policy__text">The security of Your Personal Data is important to Us, but remember that no method of transmission over the Internet, or method of electronic storage is 100% secure. While We strive to use commercially acceptable means to protect Your Personal Data, We cannot guarantee its absolute security.</p>
                <br>

                <h4 class="privacy__policy__header">Children's Privacy</h4>
                <p class="privacy__policy__text">Our Service does not address anyone under the age of 13. We do not knowingly collect personally identifiable information from anyone under the age of 13. If You are a parent or guardian and You are aware that Your child has provided Us with Personal Data, please contact Us. If We become aware that We have collected Personal Data from anyone under the age of 13 without verification of parental consent, We take steps to remove that information from Our servers.</p>
                <p class="privacy__policy__text">If We need to rely on consent as a legal basis for processing Your information and Your country requires consent from a parent, We may require Your parent's consent before We collect and use that information.</p>
                <br>

                <h4 class="privacy__policy__header">Links to Other Websites</h4>
                <p class="privacy__policy__text">Our Service may contain links to other websites that are not operated by Us. If You click on a third party link, You will be directed to that third party's site. We strongly advise You to review the Privacy Policy of every site You visit.</p>
                <p class="privacy__policy__text">We have no control over and assume no responsibility for the content, privacy policies or practices of any third party sites or services.</p>
                <br>

                <h4 class="privacy__policy__header">Changes to this Privacy Policy</h4>
                <p class="privacy__policy__text">We may update Our Privacy Policy from time to time. We will notify You of any changes by posting the new Privacy Policy on this page.</p>
                <p class="privacy__policy__text">We will let You know via email and/or a prominent notice on Our Service, prior to the change becoming effective and update the "Last updated" date at the top of this Privacy Policy.</p>
                <p class="privacy__policy__text">You are advised to review this Privacy Policy periodically for any changes. Changes to this Privacy Policy are effective when they are posted on this page.</p>
                <br>

                <h4 class="privacy__policy__header">Contact Us</h4>
                <p class="privacy__policy__text">If you have any questions about this Privacy Policy, You can contact us:</p>
                <ul>
                    <li class="privacy__policy__text">By email: <a href="mailto:info@urbanacreative.com">info@urbanacreative.com</a> </li>
                </ul>
                
            </small>

            </div>

        </section>
        
    </main>

<?php
    get_footer();
?>