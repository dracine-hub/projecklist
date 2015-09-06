<?php
/**
 * File name: email_html_dev.php
 *
 * Note: This is development file. The HTML/CSS of this file must be inlined and copied in email_html.php for production.
 *       Campaign Monitor CSS inliner -> http://inliner.cm
 *
 * This file is part of PROJECKLIST
 *
 * Copyright (c) 2015 Daniel Racine
 * You should have received a copy of the MIT License
 * along with PROJECKLIST. If not, see <https://en.wikipedia.org/wiki/MIT_License>.
 */
?>





<!DOCTYPE html>

<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>Form submission from danwebco.ca  |  <?php $_post['fld_project_name'] ?></title>
  <meta name="viewport" content="width=device-width">

  <style>
    
    body {
    font-family: 'Helvetica Neue',Helvetica,Arial,sans-serif;
    font-size: 11pt;
    color: #575757; }

  ul, ol {
    margin: 0;
    padding: 0; }

  hr {
    margin: 0;
    padding: 0; }

  .section hr {
    margin: 5px 0 20px;
    border-top: 2px solid #f2f2f2;
    border-bottom: none;
  }

  .section2 hr {
    margin: 5px 0 20px;
    border-top: 1px solid #EB212E;
    border-bottom: none;
  }

  a:hover {
    text-decoration: underline; }

  img {
    outline: none;
    margin: 0;
    padding: 0;
    -ms-interpolation-mode: bicubic; }

  h3, h4 {
    margin: 0;
    padding-top: 0;
    padding-bottom: 0;
    font-weight: bold;
    line-height: 25px;
    margin-bottom: 10px;
    text-align: left;
    color: #575757; }

  h5 {
    margin: 0;
    padding-top: 0;
    padding-bottom: 0;
    font-weight: bold;
    line-height: 25px;
    text-align: left;
    color: #575757;
    font-size: 12pt;
    /*text-decoration: underline;*/
  }

  p, ul, ol {
    line-height: 23px;
    margin-top: 0;
    margin-bottom: 20px;
    padding-top: 0;
    padding-bottom: 0;
    font-weight: normal; }

  .review p {
    margin-bottom: 20px;
    padding-left: 0px;
  }

  ul {
    list-style-type: bullets;
    padding-left: 10px; }

  li {
    padding-bottom: 5px; }

  th {
    padding-bottom: 10px; }

  .lob {
    display: block;
    color: #a6a6a6;
    font-size: 8pt; }

  .title h4 {
    color: #0079c1;
    font-size: 16pt;
    line-height: 30px;
    margin-bottom: 0; }
  .title p {
    color: #0079c1;
    font-size: 12pt;
    line-height: 25px;
    margin-top: 0;
    margin-bottom: 0;
    padding-top: 0;
    padding-bottom: 15px;
    font-weight: normal; }


  .contentblock {
    padding: 20px 20px 10px; }
    .contentblock a {
      color: #3ca7dd;
      text-decoration: none; }
    .contentblock h3 {
      font-size: 11pt; }
    .contentblock h4 {
      font-size: 14pt; }
     .contentblock p {
        color:#575757;
        font-size: 11pt;
     }


  .feature .contentblock p,
  .feature .contentblock li {
    color: #636363; }

  .container {
    padding: 0; }
    @media only screen and (max-width: 600px) {
      .container {
        padding: 0 10px; } }

  .footer {
    text-align: center; }

  /* Archive home page custom styles
  --------------------------------*/
  .en-fr a {
    color: #3ca7dd;
    line-height: 32px;
    text-decoration: none; }

  .issues ul {
    margin-bottom: 0; }

  .bilingual {
    text-align: right;
    font-style: italic;
    font-weight: 100; }

  .btitle {
    display: block;
    text-align: right;
    font-style: italic;
    font-weight: normal;
    line-height: 25px;
    margin-top: 0px;
    margin-bottom: 5px;
    padding-top: 0;
    padding-bottom: 0; }

  .milestones {
    padding: 20px 20px 30px 150px;
  }

  /*
  @media only screen and (max-width: 480px) {

    h4 {
      line-height: 26px;
      margin-bottom: 15px;
      font-size: 28px;
    }
    h3 {
      line-height: 30px;
      margin-bottom: 15px;
      font-size: 24px;
    }
    p, li {
      line-height: 30px;
      margin-bottom: 15px;
      font-size: 22px;
    }
    li {
      margin-bottom: 5px;
    }

    .footer p {
      line-height: 60px;
      margin-bottom: 0px;
    }

  }
  */
  /* ==========================================================================
     Print styles.
     Inlined to avoid required HTTP connection: h5bp.com/r
     ========================================================================== */
  @media print {
    * {
      background: transparent;
      color: #000;
      /* Black prints faster: h5bp.com/s */
      box-shadow: none;
      text-shadow: none; }

    a,
    a:visited {
      text-decoration: underline; }

    a[href]:after {
      content: ""; }

    abbr[title]:after {
      content: ""; }

    /*
     * Don't show links for images, or javascript/internal links
     */
    .ir a:after,
    a[href^="javascript:"]:after,
    a[href^="#"]:after {
      content: ""; }

    pre,
    blockquote {
      border: 1px solid #999;
      page-break-inside: avoid; }

    thead {
      display: table-header-group;
      /* h5bp.com/t */ }

    tr,
    img {
      page-break-inside: avoid; }

    img {
      max-width: 100%; }

    @page {
      margin: 0.5cm; }
    p,
    h2,
    h3 {
      orphans: 3;
      widows: 3; }

    h2,
    h3 {
      page-break-after: avoid; } }

  </style>
  

</head>

<body bgcolor="#ffffff" style="-webkit-font-smoothing: antialiased;width:100%;background:#ffffff;-webkit-text-size-adjust:none; margin:0; padding:0;">
    
  <table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#ffffff">
  <tr>
    <td bgcolor="#ffffff" width="100%">




<!-- START OF ENGLISH SECTION -->
<table width="600" cellpadding="0" cellspacing="0" border="0" align="center">
<tr>
  <td width="100%" class="container">
    

    <!-- LOGO -->
      <table width="100%" height="62" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td width="229" bgcolor="#ffffff">
          <span>DanielRacine.ca</span>
        </td>

        <td width="371"></td>
      </tr>
    </table>


    <!-- NEWLETTER NAME HERO IMAGE -->
    <!--  
    <table width="100%" height="253" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td width="100%" height="253">
          <img border="0" src="../../../img-default/hero-en_@x2-voice.png" width="600" height="254" alt="Newsletter | One Bank">
        </td>
      </tr>
    </table>
      -->

    <!-- TITLE HEADER -->
    <table width="100%" cellpadding="0" cellspacing="0" border="0">
      <tr>
        <td bgcolor="#FFFFFF" width="100%" class="title">  

          <h4><strong>Form Submission Request</strong></h4>
          <p>form sent from danwebco.ca</p>

        </td>
      </tr>
    </table>
    <br />


    <!-- HIGHLIGHT / FEATURE SECTION -->
    <table class="section feature" width="100%" cellpadding="0" cellspacing="0" border="0">
    <tr>

      <!-- left spacer -->
      <td bgcolor="#EB212E" style="padding-left:5px;"></td>

      <!-- content -->
      <td width="100%" bgcolor="#ffffff">
        <table width="100%" cellpadding="20" cellspacing="0" border="0">
        <tr>
          <td bgcolor="#ffffff" class="contentblock">

            <h4>FORM DETAILS</h4>

            <ul>
              <li><?php echo htmlentities($_post['label']['fld_project_name'])." ".htmlentities($_post['value']['fld_project_name']) ?></li>
              <li><?php echo htmlentities($_post['label']['fld_contact_primary_fn'])." ".htmlentities($_post['value']['fld_contact_primary_fn']) ?></li>
              <li><?php echo htmlentities($_post['label']['fld_contact_primary_ln'])." ".htmlentities($_post['value']['fld_contact_primary_ln']) ?></li>
              <li><?php echo htmlentities($_post['label']['tel_contact_primary_tel'])." ".htmlentities($_post['value']['tel_contact_primary_tel']) ?></li>
              <li><?php echo htmlentities($_post['label']['eml_contact_primary_email'])." ".htmlentities($_post['value']['eml_contact_primary_email']) ?></li>
            </ul>

          </td>
        </tr>
        </table>
      </td>
    </tr>
    </table>  
    <br />


  </td>
</tr>
</table>


<!-- FOOTER -->
<table width="100%" cellpadding="0" cellspacing="0" border="0" bgcolor="#f2f2f2">
<tr>
  <td style="border-bottom: 2px solid #c8c8c8">
    <br />
    <table width="100%" cellpadding="0" cellspacing="0" border="0" align="center">
    <tr>
      <td width="100%" bgcolor="#f2f2f2" class="contentblock footer">
        

          <p style="color:#c8c8c8; margin:0 0 30px; font-size:10pt; text-align: center;">

                    <a href="danwebco.ca" style="color: #3ca7dd;">danwebco.ca</a>
                    &nbsp;&nbsp;|&nbsp;&nbsp;
                     
                    <a href="mailto:daniel.racine@danwebco.ca" style="color: #3ca7dd;">Contact Us</a>

                </p>

      </td>
    </tr> 
      </table>

   </td>
</tr>
</table>
<!-- END OF ENGLISH SECTION -->


    
    </td>
  </tr>
  </table>                   
</body>
</html>
