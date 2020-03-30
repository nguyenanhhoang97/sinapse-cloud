<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Gregwar\CaptchaBundle\Type\CaptchaType;

class UserController extends Controller
{
  /**
   * @Route("/registration", name="registration")
   */
  public function registration(Request $request, \Swift_Mailer $mailer)
  {
    $form = $this->createFormBuilder()
      ->add('email', EmailType::class, array('label' => 'Email address', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input email address')))
      ->add('firstName', TextType::class, array('label' => 'First name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input first name')))
      ->add('lastName', TextType::class, array('label' => 'Last name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input last name')))
      // ->add('password', PasswordType::class, array('label' => 'Password', 'required' => false, 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input password')))
      ->add('zip', TextType::class, array('label' => 'Zip', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input Zip')))
      ->add('organizationName', TextType::class, array('label' => 'Organization name', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input organization name')))
      ->add('organizationAddress', TextType::class, array('label' => 'Organization address', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input organization address')))
      ->add(
        'country',
        ChoiceType::class,
        [
          'choices'  => [
            'Afghanistan' => 'Afghanistan',
            'Albania' => 'Albania',
            'Algeria' => 'Algeria',
            'American Samoa' => 'American Samoa',
            'Andorra' => 'Andorra',
            'Angola' => 'Angola',
            'Anguilla' => 'Anguilla',
            'Antarctica' => 'Antarctica',
            'Antigua and Barbuda' => 'Antigua and Barbuda',
            'Argentina' => 'Argentina',
            'Armenia' => 'Armenia',
            'Aruba' => 'Aruba',
            'Australia' => 'Australia',
            'Austria' => 'Austria',
            'Azerbaijan' => 'Azerbaijan',
            'Bahamas' => 'Bahamas',
            'Bahrain' => 'Bahrain',
            'Bangladesh' => 'Bangladesh',
            'Barbados' => 'Barbados',
            'Belarus' => 'Belarus',
            'Belgium' => 'Belgium',
            'Belize' => 'Belize',
            'Benin' => 'Benin',
            'Bermuda' => 'Bermuda',
            'Bhutan' => 'Bhutan',
            'Bolivia' => 'Bolivia',
            'Bosnia and Herzegovina' => 'Bosnia and Herzegovina',
            'Botswana' => 'Botswana',
            'Bouvet Island' => 'Bouvet Island',
            'Brazil' => 'Brazil',
            'British Indian Ocean Territory' => 'British Indian Ocean Territory',
            'Brunei Darussalam' => 'Brunei Darussalam',
            'Bulgaria' => 'Bulgaria',
            'Burkina Faso' => 'Burkina Faso',
            'Burundi' => 'Burundi',
            'Cambodia' => 'Cambodia',
            'Cameroon' => 'Cameroon',
            'Canada' => 'Canada',
            'Cape Verde' => 'Cape Verde',
            'Cayman Islands' => 'Cayman Islands',
            'Central African Republic' => 'Central African Republic',
            'Chad' => 'Chad',
            'Chile' => 'Chile',
            'China' => 'China',
            'Christmas Island' => 'Christmas Island',
            'Cocos (Keeling) Islands' => 'Cocos (Keeling) Islands',
            'Colombia' => 'Colombia',
            'Comoros' => 'Comoros',
            'Congo' => 'Congo',
            'Congo, the Democratic Republic of the' => 'Congo, the Democratic Republic of the',
            'Cook Islands' => 'Cook Islands',
            'Costa Rica' => 'Costa Rica',
            'Cote D`Ivoire' => 'Cote D`Ivoire',
            'Croatia' => 'Croatia',
            'Cuba' => 'Cuba',
            'Cyprus' => 'Cyprus',
            'Czech Republic' => 'Czech Republic',
            'Denmark' => 'Denmark',
            'Djibouti' => 'Djibouti',
            'Dominica' => 'Dominica',
            'Dominican Republic' => 'Dominican Republic',
            'Ecuador' => 'Ecuador',
            'Egypt' => 'Egypt',
            'El Salvador' => 'El Salvador',
            'Equatorial Guinea' => 'Equatorial Guinea',
            'Eritrea' => 'Eritrea',
            'Estonia' => 'Estonia',
            'Ethiopia' => 'Ethiopia',
            'Falkland Islands (Malvinas)' => 'Falkland Islands (Malvinas)',
            'Faroe Islands' => 'Faroe Islands',
            'Fiji' => 'Fiji',
            'Finland' => 'Finland',
            'France' => 'France',
            'French Guiana' => 'French Guiana',
            'French Polynesia' => 'French Polynesia',
            'French Southern Territories' => 'French Southern Territories',
            'Gabon' => 'Gabon',
            'Gambia' => 'Gambia',
            'Georgia' => 'Georgia',
            'Germany' => 'Germany',
            'Ghana' => 'Ghana',
            'Gibraltar' => 'Gibraltar',
            'Greece' => 'Greece',
            'Greenland' => 'Greenland',
            'Grenada' => 'Grenada',
            'Guadeloupe' => 'Guadeloupe',
            'Guam' => 'Guam',
            'Guatemala' => 'Guatemala',
            'Guinea' => 'Guinea',
            'Guinea-Bissau' => 'Guinea-Bissau',
            'Guyana' => 'Guyana',
            'Haiti' => 'Haiti',
            'Heard Island and Mcdonald Islands' => 'Heard Island and Mcdonald Islands',
            'Holy See (Vatican City State)' => 'Holy See (Vatican City State)',
            'Honduras' => 'Honduras',
            'Hong Kong' => 'Hong Kong',
            'Hungary' => 'Hungary',
            'Iceland' => 'Iceland',
            'India' => 'India',
            'Indonesia' => 'Indonesia',
            'Iran, Islamic Republic of' => 'Iran, Islamic Republic of',
            'Iraq' => 'Iraq',
            'Ireland' => 'Ireland',
            'Israel' => 'Israel',
            'Italy' => 'Italy',
            'Jamaica' => 'Jamaica',
            'Japan' => 'Japan',
            'Jordan' => 'Jordan',
            'Kazakhstan' => 'Kazakhstan',
            'Kenya' => 'Kenya',
            'Kiribati' => 'Kiribati',
            'Korea, Democratic People`s Republic of' => 'Korea, Democratic People`s Republic of',
            'Korea, Republic of' => 'Korea, Republic of',
            'Kuwait' => 'Kuwait',
            'Kyrgyzstan' => 'Kyrgyzstan',
            'Lao People`s Democratic Republic' => 'Lao People`s Democratic Republic',
            'Latvia' => 'Latvia',
            'Lebanon' => 'Lebanon',
            'Lesotho' => 'Lesotho',
            'Liberia' => 'Liberia',
            'Libyan Arab Jamahiriya' => 'Libyan Arab Jamahiriya',
            'Liechtenstein' => 'Liechtenstein',
            'Lithuania' => 'Lithuania',
            'Luxembourg' => 'Luxembourg',
            'Macao' => 'Macao',
            'Macedonia, the Former Yugoslav Republic of' => 'Macedonia, the Former Yugoslav Republic of',
            'Madagascar' => 'Madagascar',
            'Malawi' => 'Malawi',
            'Malaysia' => 'Malaysia',
            'Maldives' => 'Maldives',
            'Mali' => 'Mali',
            'Malta' => 'Malta',
            'Marshall Islands' => 'Marshall Islands',
            'Martinique' => 'Martinique',
            'Mauritania' => 'Mauritania',
            'Mauritius' => 'Mauritius',
            'Mayotte' => 'Mayotte',
            'Mexico' => 'Mexico',
            'Micronesia, Federated States of' => 'Micronesia, Federated States of',
            'Moldova, Republic of' => 'Moldova, Republic of',
            'Monaco' => 'Monaco',
            'Mongolia' => 'Mongolia',
            'Montserrat' => 'Montserrat',
            'Morocco' => 'Morocco',
            'Mozambique' => 'Mozambique',
            'Myanmar' => 'Myanmar',
            'Namibia' => 'Namibia',
            'Nauru' => 'Nauru',
            'Nepal' => 'Nepal',
            'Netherlands' => 'Netherlands',
            'Netherlands Antilles' => 'Netherlands Antilles',
            'New Caledonia' => 'New Caledonia',
            'New Zealand' => 'New Zealand',
            'Nicaragua' => 'Nicaragua',
            'Niger' => 'Niger',
            'Nigeria' => 'Nigeria',
            'Niue' => 'Niue',
            'Norfolk Island' => 'Norfolk Island',
            'Northern Mariana Islands' => 'Northern Mariana Islands',
            'Norway' => 'Norway',
            'Oman' => 'Oman',
            'Pakistan' => 'Pakistan',
            'Palau' => 'Palau',
            'Palestinian Territory, Occupied' => 'Palestinian Territory, Occupied',
            'Panama' => 'Panama',
            'Papua New Guinea' => 'Papua New Guinea',
            'Paraguay' => 'Paraguay',
            'Peru' => 'Peru',
            'Philippines' => 'Philippines',
            'Pitcairn' => 'Pitcairn',
            'Poland' => 'Poland',
            'Portugal' => 'Portugal',
            'Puerto Rico' => 'Puerto Rico',
            'Qatar' => 'Qatar',
            'Reunion' => 'Reunion',
            'Romania' => 'Romania',
            'Russian Federation' => 'Russian Federation',
            'Rwanda' => 'Rwanda',
            'Saint Helena' => 'Saint Helena',
            'Saint Kitts and Nevis' => 'Saint Kitts and Nevis',
            'Saint Lucia' => 'Saint Lucia',
            'Saint Pierre and Miquelon' => 'Saint Pierre and Miquelon',
            'Saint Vincent and the Grenadines' => 'Saint Vincent and the Grenadines',
            'Samoa' => 'Samoa',
            'San Marino' => 'San Marino',
            'Sao Tome and Principe' => 'Sao Tome and Principe',
            'Saudi Arabia' => 'Saudi Arabia',
            'Senegal' => 'Senegal',
            'Serbia and Montenegro' => 'Serbia and Montenegro',
            'Seychelles' => 'Seychelles',
            'Sierra Leone' => 'Sierra Leone',
            'Singapore' => 'Singapore',
            'Slovakia' => 'Slovakia',
            'Slovenia' => 'Slovenia',
            'Solomon Islands' => 'Solomon Islands',
            'Somalia' => 'Somalia',
            'South Africa' => 'South Africa',
            'South Georgia and the South Sandwich Islands' => 'South Georgia and the South Sandwich Islands',
            'Spain' => 'Spain',
            'Sri Lanka' => 'Sri Lanka',
            'Sudan' => 'Sudan',
            'Suriname' => 'Suriname',
            'Svalbard and Jan Mayen' => 'Svalbard and Jan Mayen',
            'Swaziland' => 'Swaziland',
            'Sweden' => 'Sweden',
            'Switzerland' => 'Switzerland',
            'Syrian Arab Republic' => 'Syrian Arab Republic',
            'Taiwan, Province of China' => 'Taiwan, Province of China',
            'Tajikistan' => 'Tajikistan',
            'Tanzania, United Republic of' => 'Tanzania, United Republic of',
            'Thailand' => 'Thailand',
            'Timor-Leste' => 'Timor-Leste',
            'Togo' => 'Togo',
            'Tokelau' => 'Tokelau',
            'Tonga' => 'Tonga',
            'Trinidad and Tobago' => 'Trinidad and Tobago',
            'Tunisia' => 'Tunisia',
            'Turkey' => 'Turkey',
            'Turkmenistan' => 'Turkmenistan',
            'Turks and Caicos Islands' => 'Turks and Caicos Islands',
            'Tuvalu' => 'Tuvalu',
            'Uganda' => 'Uganda',
            'Ukraine' => 'Ukraine',
            'United Arab Emirates' => 'United Arab Emirates',
            'United Kingdom' => 'United Kingdom',
            'United States' => 'United States',
            'United States Minor Outlying Islands' => 'United States Minor Outlying Islands',
            'Uruguay' => 'Uruguay',
            'Uzbekistan' => 'Uzbekistan',
            'Vanuatu' => 'Vanuatu',
            'Venezuela' => 'Venezuela',
            'Viet Nam' => 'Viet Nam',
            'Virgin Islands, British' => 'Virgin Islands, British',
            'Virgin Islands, U.s.' => 'Virgin Islands, U.s.',
            'Wallis and Futuna' => 'Wallis and Futuna',
            'Western Sahara' => 'Western Sahara',
            'Yemen' => 'Yemen',
            'Zambia' => 'Zambia',
            'Zimbabwe' => 'Zimbabwe',
          ],
          'label' => 'Country',
          'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')
        ]
      )
      ->add('city', TextType::class, array('label' => 'City', 'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px', 'placeholder' => 'Input city')))
      ->add(
        'proposal',
        ChoiceType::class,
        [
          'choices'  => [
            'Vocational school' => 'Vocational school',
            'University' => 'University',
            'Non profit organization' => 'Non profit organization',
            'Company' => 'Company',
            'None of them' => 'None of them',
          ],
          'label' => 'Which of the following proposal describes your organization',
          'attr' => array('class' => 'form-control', 'style' => 'margin-bottom:15px')
        ]
      )
      ->add('increase_teleworking', CheckboxType::class, [
        'label'    => 'We would like to increase teleworking',
        'required' => false,
        'attr' => array('class' => 'form-check-input')
      ])
      ->add('distance_learning', CheckboxType::class, [
        'label'    => 'We would like to prepare students with distance learning',
        'required' => false,
        'attr' => array('class' => 'form-check-input')
      ])
      ->add('corona_virus', CheckboxType::class, [
        'label'    => 'Our office are closed cause to Corona virus',
        'required' => false,
        'attr' => array('class' => 'form-check-input')
      ])
      // ->add('captcha', CaptchaType::class)
      ->getForm();

    if ($request->isMethod('POST')) {
      $form->submit($request->request->get($form->getName()));

      if ($form->isSubmitted() && $form->isValid()) {
        $this->registrationSuccess($mailer);
        return $this->render('registration/success.html.twig');
      }
    }

    return $this->render('registration/index.html.twig', ['form' => $form->createView()]);
  }

  public function registrationSuccess(\Swift_Mailer $mailer)
  {
    $message = (new \Swift_Message('Hello Email'))
      ->setFrom('anhhoangng.testmail@gmail.com')
      ->setTo('crzcoders@gmail.com')
      ->setBody(
        $this->renderView(
          'mail/reg.html.twig',
          ['name' => 'ahihihi do ngok']
        ),
        'text/html'
      );
    $mailer->send($message);
  }
}
