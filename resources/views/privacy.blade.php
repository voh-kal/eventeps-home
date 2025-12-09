@extends('layouts')

@section('title', 'Privacy Policy - TEPS Event Management Platform')

@section('meta')
<meta name="description" content="Learn how TEPS protects your privacy and personal data. Our comprehensive privacy policy outlines data collection, usage, and your rights.">
<meta name="keywords" content="privacy policy, data protection, TEPS privacy, personal information, data rights">
@endsection

@section('content')
<style>
    .privacy-policy {
        font-family: 'Inter', sans-serif;
        line-height: 1.6;
        color: #333;
    }
    
    .privacy-header {
        background: linear-gradient(135deg, #007bff 0%, #0056b3 100%);
        color: white;
        padding: 80px 0 60px;
        text-align: center;
    }
    
    .privacy-header h1 {
        font-size: 3rem;
        font-weight: 700;
        margin-bottom: 20px;
    }
    
    .table-of-contents {
        background: #f8f9fa;
        border-radius: 10px;
        padding: 30px;
        margin: 40px 0;
        position: sticky;
        top: 20px;
    }
    
    .table-of-contents h3 {
        color: #007bff;
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .table-of-contents ul {
        list-style: none;
        padding: 0;
        columns: 2;
        column-gap: 30px;
    }
    
    .table-of-contents li {
        margin-bottom: 8px;
        break-inside: avoid;
    }
    
    .table-of-contents a {
        color: #333;
        text-decoration: none;
        transition: color 0.3s ease;
        font-weight: 500;
    }
    
    .table-of-contents a:hover {
        color: #007bff;
    }
    
    .privacy-section {
        margin: 40px 0;
        padding: 20px 0;
        border-bottom: 1px solid #eee;
    }
    
    .privacy-section:last-child {
        border-bottom: none;
    }
    
    .privacy-section h2 {
        color: #007bff;
        font-size: 1.8rem;
        margin-bottom: 20px;
        font-weight: 600;
        scroll-margin-top: 100px;
    }
    
    .privacy-section h3 {
        color: #333;
        font-size: 1.3rem;
        margin-top: 25px;
        margin-bottom: 15px;
        font-weight: 600;
    }
    
    .privacy-section p {
        margin-bottom: 15px;
        text-align: justify;
    }
    
    .privacy-section ul {
        margin: 15px 0;
        padding-left: 25px;
    }
    
    .privacy-section li {
        margin-bottom: 8px;
    }
    
    .highlight-box {
        background: #e3f2fd;
        border-left: 4px solid #007bff;
        padding: 20px;
        margin: 20px 0;
        border-radius: 0 5px 5px 0;
    }
    
    .contact-section {
        background: #007bff;
        color: white;
        padding: 40px;
        border-radius: 10px;
        margin: 40px 0;
        text-align: center;
    }
    
    .contact-section h2 {
        color: white;
        margin-bottom: 20px;
    }
    
    .contact-email {
        font-size: 1.2rem;
        font-weight: 600;
        color: #fff;
        text-decoration: none;
    }
    
    .contact-email:hover {
        color: #e3f2fd;
    }
    
    @media (max-width: 768px) {
        .privacy-header h1 {
            font-size: 2rem;
        }
        
        .table-of-contents ul {
            columns: 1;
        }
        
        .privacy-section h2 {
            font-size: 1.5rem;
        }
    }
</style>

<!-- Header Section -->
<section class="privacy-header">
    <div class="container">
        <h1>Privacy Policy</h1>
        <p class="lead">Your privacy is important to us. Learn how we collect, use, and protect your personal information.</p>
    </div>
</section>

<!-- Main Content -->
<div class="container privacy-policy">
    <div class="row">
        <div class="col-lg-4">
            <!-- Table of Contents -->
            <div class="table-of-contents">
                <h3>Table of Contents</h3>
                <ul>
                    <li><a href="#introduction">Introduction</a></li>
                    <li><a href="#consent">Consent</a></li>
                    <li><a href="#data-collection">Types of Personal Data We Collect</a></li>
                    <li><a href="#subscriber-content">Subscriber Content</a></li>
                    <li><a href="#data-usage">How we use your Information</a></li>
                    <li><a href="#data-sharing">How we might share your Information</a></li>
                    <li><a href="#log-files">Log Files</a></li>
                    <li><a href="#cookies">Cookies and Web Beacons</a></li>
                    <li><a href="#third-party">Third Party Privacy Policies</a></li>
                    <li><a href="#data-rights">Data Protection Rights</a></li>
                    <li><a href="#data-security">Data Security and Protection</a></li>
                    <li><a href="#data-transfers">Data Transfers</a></li>
                    <li><a href="#data-retention">Retention of your Personal Data</a></li>
                    <li><a href="#age-consent">Age of Consent</a></li>
                    <li><a href="#children-info">Children's Information</a></li>
                    <li><a href="#withdrawing-consent">Withdrawing Consent</a></li>
                    <li><a href="#policy-changes">Changes To This Privacy Policy</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                </ul>
            </div>
        </div>
        
        <div class="col-lg-8">
            <!-- Introduction -->
            <section id="introduction" class="privacy-section">
                <h2>Introduction</h2>
                <p>At TEPS, we value the privacy of our Subscribers and others (collectively or individually "Users") who visit and use our Platform and or visit our Portal at www.eventeps.com and we are committed to protecting your personal data (i.e. any information you provide to us from which you can be identified) in accordance with this Privacy Policy.</p>
                
                <p>This Privacy Policy applies only to your use of TEPS' website, Platform and or Services provided by TEPS. This Policy also governs the information you provide to us or that we may learn from your use of our Platform and informs how we may collect, use and in some instances, share this information. This policy is not applicable to any information collected offline or via channels other than this Platform.</p>
                
                <p>If you have additional questions or require more information about our Privacy Policy, do not hesitate to contact us.</p>
            </section>

            <!-- Consent -->
            <section id="consent" class="privacy-section">
                <h2>Consent</h2>
                <div class="highlight-box">
                    <p>By using our Platform, Portal and Services, you hereby consent to our Privacy Policy and agree to be bound to its terms. If you do not consent to our Privacy Policy, then you must not access or use our Services.</p>
                </div>
            </section>

            <!-- Types of Personal Data We Collect -->
            <section id="data-collection" class="privacy-section">
                <h2>Types of Personal Data We Collect</h2>
                <p>As a Platform for the provision of event technology solutions, when you create an account on the TEPS Platform or via our Portal, you may provide us with personal information that includes your name, contact details, login name and a password, payment or banking information (including related payment verification information) and other background information from you when you create or update a User account on our Platform.</p>
                
                <p>Even if you have not created or are not signed into a TEPS account, you might choose to provide us with information — like an email address to communicate with us or receive updates about our Services and/or your transactions.</p>
                
                <p>When you provide us with personal information to complete a transaction, verify your payment details, or create an event, we infer that you consent to TEPS collecting and processing your personal information and using it for that specific reason only. If we ask for your personal information for a secondary reason, like marketing, we will either ask you directly for your expressed consent, or provide you with an opportunity to say no.</p>
            </section>

            <!-- Subscriber Content -->
            <section id="subscriber-content" class="privacy-section">
                <h2>Subscriber Content</h2>
                <p>You are solely responsible for any Subscriber Content that you submit. You are legally liable for the Subscriber Content that you submit including, for example, material protected by copyright, trademark, patent or trade secret law or other proprietary rights laws without permission of the author or owner, or subject featured in such submission, or defamatory comments.</p>
            </section>

            <!-- How we use your information -->
            <section id="data-usage" class="privacy-section">
                <h2>How we use your Information</h2>
                <p>Per the terms of this Privacy Policy, we may process and use the information we collect from you for the following purposes:</p>
                <ul>
                    <li>To provide, operate, and maintain our Portal and Platform</li>
                    <li>To enable our Services including but not limited to creating and updating accounts, processing payments, processing and delivering your service requests, tracking, and sharing the progress of deliverables.</li>
                    <li>To improve, personalise, and expand our Portal and Platform.</li>
                    <li>To understand and analyse how you use our Platform and Platform</li>
                    <li>For research and development including testing, research, analysis, product development, and machine learning to improve the experience of our Subscribers. This helps us make our services more convenient and easier-to-use, enhance the safety and security of our Services, and develop new products, services, features and functionality.</li>
                    <li>To communicate with you, either directly or through one of our partners, including for customer service, to provide you with updates and other information relating to the Platform.</li>
                    <li>For marketing and non-marketing communications with our Subscribers including enabling communication amongst our Subscribers, generating receipts and marketing our services to our Subscribers.</li>
                    <li>To send you emails for promotional purposes.</li>
                    <li>For compliance with a legal obligation. This includes anti-fraud and anti-money laundering measures as well as tax and social security requirements.</li>
                </ul>
                
                <div class="highlight-box">
                    <p>As to personal data we collect, we do not use the information for any purposes other than the fulfilment of our obligations to Subscribers. We keep Subscriber information secure at all times and prevent the use and disclosure of it by our employees or any third parties.</p>
                </div>
            </section>

            <!-- How we might share your Information -->
            <section id="data-sharing" class="privacy-section">
                <h2>How we might share your Information</h2>
                <p>We may share your personal data with others such as:</p>
                <ul>
                    <li><strong>Our Clients and Partner Companies:</strong> Information such as names, demographic data and information related to the event services rendered including statistics may be shared with these entities.</li>
                    <li><strong>Third party service providers:</strong> Who process information on our behalf to help run some of our internal business operations including processing and fulfilment of your requests, email distribution, marketing service, payments, Cloud storage and IT services, so that they can provide services to TEPS;</li>
                    <li><strong>Law enforcement authorities:</strong> Or other government bodies when we are required to do so in compliance with all applicable laws, regulations and rules, and requests of law enforcement, regulatory and other governmental agencies.</li>
                    <li><strong>Business transfers:</strong> If, in future, we are acquired by or merged with another company, and all of or a substantial amount of our assets are transferred to another company, or as part of bankruptcy proceedings, we may disclose/transfer the information we have collected from you to the acquiring company.</li>
                </ul>
                
                <p>In addition to the above, we may share personal data about you with others to the extent you consent to such sharing.</p>
            </section>

            <!-- Log Files -->
            <section id="log-files" class="privacy-section">
                <h2>Log Files</h2>
                <p>TEPS follows a standard procedure of using log files. These files log visitors when they visit our Portal and Platform. All hosting companies do this and is a part of hosting services' analytics. The information collected by log files include browser type, Internet Service Provider (ISP), date and time stamp, referring/exit pages, and possibly the number of clicks.</p>
                
                <p>These are not linked to any information that is personally identifiable. The purpose of the information is for analysing trends, administering the site, tracking users' movement on the Portal and Platform, and gathering demographic information.</p>
            </section>

            <!-- Cookies and Web Beacons -->
            <section id="cookies" class="privacy-section">
                <h2>Cookies and Web Beacons</h2>
                <p>Like any other website, TEPS uses "cookies". These cookies are used to store information including its Portal visitors' preferences as well as the pages on the Portal that the visitor accessed or visited. The information is used to optimise the Subscribers' experience by customising our web page content based on visitors' browser type and/or other information.</p>
                
                <p>Once you have given your consent to use cookies, we shall store a cookie on your computer or device to remember this for next time. If you wish to withdraw consent at any time you can reset your browser to refuse all cookies or to indicate when a cookie is being sent. However, certain functionalities of our Portal might not work properly if you do so.</p>
                
                <h3>Types of Cookies We Use</h3>
                <ul>
                    <li><strong>Advertising cookies:</strong> These cookies may be used to share data with advertisers so that the ads you see are more relevant to you or allow you to share certain pages with social networks or allow you to post comments on our Platform.</li>
                    <li><strong>Secure Cookies:</strong> Secure cookies serve the purpose of preventing your browsing patterns from being observed by authorised persons. Browsers which support these cookies will only send cookies with the secure attribute when the request is going to a HTTPS page.</li>
                    <li><strong>Third Party Cookies:</strong> These cookies collect user data on our behalf and is used to improve user experience (UX) by remembering user preferences and settings, as well as provide related services.</li>
                    <li><strong>Required Cookies:</strong> These cookies are necessary to enable the basic features of our Site to function, such as allowing images to load or allowing you to select your cookie preferences.</li>
                    <li><strong>Functional Cookies:</strong> These cookies allow us analyse your use of our Platform to evaluate and improve our performance. They may also be used to provide a better customer experience on our Platform.</li>
                    <li><strong>Persistent Cookies:</strong> The persistent cookies provide convenient and rapid access to familiar objects, which enhances the user experience (UX).</li>
                    <li><strong>Session Cookies:</strong> A session starts when you launch the Portal or Platform and ends when you exit the Platform/Portal or close the browser window. Our session cookies store information in a temporary location. This information is deleted after the session ends.</li>
                </ul>
                
                <h3>Control of Cookies</h3>
                <p>Most browsers are set to accept cookies by default. However, you can remove or reject cookies in your browser's settings. Please be aware that such action could affect the availability and functionality of the Portal/Platform.</p>
                
                <h3>Other Tracking Technologies</h3>
                <p>In addition to cookies, we may use web beacons, pixel tags, and other tracking technologies on the Platform to help customise the Portal and improve your experience. A "web beacon" or "pixel tag" is tiny object or image embedded in a web page or email. They are used to track the number of users who have visited particular pages and viewed emails and acquire other statistical data.</p>
            </section>

            <!-- Third Party Privacy Policies -->
            <section id="third-party" class="privacy-section">
                <h2>Third Party Privacy Policies</h2>
                <p>TEPS' Privacy Policy does not apply to other advertisers or websites. Thus, we are advising you to consult the respective Privacy Policies of these third-party and servers for more detailed information. It may include their practices and instructions about how to opt-out of certain options.</p>
                
                <p>You can choose to disable cookies through your individual browser options. To know more detailed information about cookie management with specific web browsers, it can be found at the browsers' respective websites.</p>
            </section>

            <!-- Data Protection Rights -->
            <section id="data-rights" class="privacy-section">
                <h2>Data Protection Rights</h2>
                <p>We would like to make sure you are fully aware of all of your data protection rights. Every Subscriber is entitled to the following:</p>
                <ul>
                    <li><strong>The right to access:</strong> You have the right to request copies of your personal data. We may charge you a small fee for this service.</li>
                    <li><strong>The right to rectification:</strong> You have the right to request that we correct any information you believe is inaccurate. You also have the right to request that we complete the information you believe is incomplete.</li>
                    <li><strong>The right to erasure:</strong> You have the right to request that we erase your personal data, under certain conditions.</li>
                    <li><strong>The right to restrict processing:</strong> You have the right to request that we restrict the processing of your personal data, under certain conditions.</li>
                    <li><strong>The right to object to processing:</strong> You have the right to object to our processing of your personal data, under certain conditions.</li>
                    <li><strong>The right to data portability:</strong> You have the right to request that we transfer the data that we have collected to another organisation, or directly to you, under certain conditions.</li>
                </ul>
                
                <p>We may not always be able to fully address your request, for example if it would impact the duty of confidentiality we owe to others, or if we are legally obliged to deal with the request in a different way.</p>
                
                <div class="highlight-box">
                    <p>If you make a request, we have one month to respond to you. If you would like to exercise any of these rights, please contact us at <a href="mailto:power@eventeps.com" style="color: #007bff;">power@eventeps.com</a>.</p>
                </div>
            </section>

            <!-- Data Security and Protection -->
            <section id="data-security" class="privacy-section">
                <h2>Data Security and Protection</h2>
                <p>We understand the need for your personal data to remain secure and private and we have implemented appropriate technical and organisational security measures to protect your personal data from loss, misuse, data breaches, modification or destruction. Only authorised personnel and third parties will have access to any personal data provided by you, which is limited to the extent they need to do their job or provide their services.</p>
                
                <p>While we are committed to earning and keeping your trust with these precautions, provided information is exposed to inherent risks associated with Internet usage.</p>
                
                <p>If we learn of a security systems breach, then we will attempt to notify you electronically so that you can take appropriate protective steps. By using our Platform/Portal or providing personal data to us, you agree that we can communicate with you electronically regarding security, privacy, and administrative issues relating to your use of our Platform.</p>
                
                <div class="highlight-box">
                    <p>Please note that while we take reasonable steps to verify your identity before granting Subscribers profile access, you also play an important part in securing your own data. To protect your privacy and security, you should never share your user account's password with anyone. The responsibility for maintaining the secrecy of your unique password and account information is yours at all times.</p>
                </div>
            </section>

            <!-- Data Transfers -->
            <section id="data-transfers" class="privacy-section">
                <h2>Data Transfers</h2>
                <p>We may transfer to and store the data we collect about you in countries other than the country in which the data was originally collected, including the United States of America, Canada, North America, the European Economic Area ("EEA"), the United Kingdom, or other destinations outside Nigeria.</p>
                
                <p>Those countries may not have the same data protection laws as the country in which you provided the data. When we transfer your data to other countries, we will protect the data as described in this Privacy Policy and comply with applicable legal requirements providing adequate protection for the transfer of data to countries outside Nigeria.</p>
                
                <p>You may request more information about the safeguards that we have put in place in respect of transfers of personal data by contacting us at <a href="mailto:power@eventeps.com" style="color: #007bff;">power@eventeps.com</a>.</p>
            </section>

            <!-- Retention of Personal Data -->
            <section id="data-retention" class="privacy-section">
                <h2>Retention of your Personal Data</h2>
                <p>We will retain your personal information for as long as your account is active or as needed to provide you services and to fulfil the purposes for which the data was collected. We may keep data longer if we have a legal obligation to keep it or to maintain necessary records for legal, financial, compliance, or other reporting obligations, and to enforce our rights and agreements.</p>
            </section>

            <!-- Age of Consent -->
            <section id="age-consent" class="privacy-section">
                <h2>Age of Consent</h2>
                <p>By using this Platform, you represent that you are an adult by the laws of your country and are legally able to give us your consent.</p>
            </section>

            <!-- Children's Information -->
            <section id="children-info" class="privacy-section">
                <h2>Children's Information</h2>
                <p>TEPS understands the importance of protecting children's privacy, particularly in their online interactions and as such, our Platform and/or Portal is not directed at persons younger than 18 years of age. TEPS therefore will not intentionally collect any personal identifiable information about anyone under the age of 18, and requests that no such information be submitted to us.</p>
                
                <p>We do not anticipate children utilising our Platform or visiting our Portal. However, as a parent or guardian, if you think that your child provided information to us via our Platform or Platform, we strongly encourage you to contact us immediately and we will do our best efforts to promptly remove such information from our records.</p>
                
                <p>If we also become aware that we have collected personal data from children without due verification of parental consent, we shall take steps to remove that information from our servers.</p>
            </section>

            <!-- Withdrawing Consent -->
            <section id="withdrawing-consent" class="privacy-section">
                <h2>Withdrawing Consent</h2>
                <p>You have the option of withdrawing your consent. Should you change your mind after initially providing consent, you may withdraw your consent for us to contact you, for the continued collection, use or disclosure of your information at any time by contacting us at <a href="mailto:power@eventeps.com" style="color: #007bff;">power@eventeps.com</a>.</p>
            </section>

            <!-- Changes to Privacy Policy -->
            <section id="policy-changes" class="privacy-section">
                <h2>Changes To This Privacy Policy</h2>
                <p>Based on the evolving nature of privacy laws, and the needs of our users and business, TEPS reserves the right to amend this Policy at any time. We will notify you if material changes have been made to this policy to ensure that you are aware of any changes to the information we collect, how we use it, and the circumstances under which, if any, we use and/or disclose it.</p>
                
                <p>Changes and clarifications will take effect immediately upon their posting on the Platform and/or Portal.</p>
            </section>

            <!-- Contact Section -->
<section id="contact" class="privacy-section">
    
        <h2>Contact Us</h2>
        <p>Where you are of the opinion that you have suffered a breach, we advise that you inform us immediately to enable us take appropriate action within 72 hours of our receipt of your complaint.</p>
        <p>If you want to make a complaint about how we have handled your personal information or would like to know more about your rights and how to exercise them, you may contact us by sending an email to:</p>
        <a href="mailto:power@eventeps.com" class="contact-email">power@eventeps.com</a>
  
</section>
        </div>
    </div>
</div>



<script>
// Smooth scrolling for table of contents links
document.addEventListener('DOMContentLoaded', function() {
    const tocLinks = document.querySelectorAll('.table-of-contents a[href^="#"]');
    
    tocLinks.forEach(link => {
        link.addEventListener('click', function(e) {
            e.preventDefault();
            
            const targetId = this.getAttribute('href').substring(1);
            const targetElement = document.getElementById(targetId);
            
            if (targetElement) {
                const offsetTop = targetElement.offsetTop - 100; // Account for fixed header
                
                window.scrollTo({
                    top: offsetTop,
                    behavior: 'smooth'
                });
            }
        });
    });
    
    // Highlight current section in table of contents
    const sections = document.querySelectorAll('.privacy-section');
    const options = {
        threshold: 0.3,
        rootMargin: '-100px 0px -50% 0px'
    };
    
    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Remove active class from all links
                tocLinks.forEach(link => link.classList.remove('active'));
                
                // Add active class to current section link
                const activeLink = document.querySelector(`.table-of-contents a[href="#${entry.target.id}"]`);
                if (activeLink) {
                    activeLink.classList.add('active');
                }
            }
        });
    }, options);
    
    sections.forEach(section => {
        observer.observe(section);
    });
});
</script>

<style>
.table-of-contents a.active {
    color: #007bff !important;
    font-weight: 600;
}
</style>

@endsection
