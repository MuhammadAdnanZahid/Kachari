-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2020 at 01:44 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kachari`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `creationDate`, `updationDate`) VALUES
(1, 'admin', 'aa3870525fd37551c80b22a5b7293892', '2020-04-24 16:21:18', '25-06-2020 02:50:26 PM');

-- --------------------------------------------------------

--
-- Table structure for table `blogreviews`
--

CREATE TABLE `blogreviews` (
  `reid` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `review` longtext DEFAULT NULL,
  `reviewDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogreviews`
--

INSERT INTO `blogreviews` (`reid`, `name`, `summary`, `review`, `reviewDate`) VALUES
(10, 'adnan', 'adn@gmail.com', 'gjgjgjygyg', '2020-08-14 19:39:54'),
(27, 'Muhammad Adnan Zahid', 'adn@gmail.com', 'vjvjjhhj', '2020-08-14 19:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(50) NOT NULL,
  `btitle` varchar(255) NOT NULL,
  `bwri` varchar(255) NOT NULL,
  `bdes` text NOT NULL,
  `bbody` longtext NOT NULL,
  `bdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `bpic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `btitle`, `bwri`, `bdes`, `bbody`, `bdate`, `bpic`) VALUES
(10, 'Divorce/ Khula Procedure For Overseas Pakistanis', 'Admin', 'In this article I am going to write an answer of a very common question asked by many Pakistani females. The question is “What is Step by Step Procedure of Khula or Divorce through court in Pakistan?” Khula Procedure or procedure of divorce through Family', '<span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Khulla by definition is form of divorce according to which a husband denies to divorce wife and wife seeks divorce through a prescribed law. If wife wants to obtain divorce then she will have to file a suit of Dissolution of Marriage in Family court of her area and Family Court will issue a decree of divorce after hearing the case.&nbsp;</span><span style=\"box-sizing: inherit; font-weight: 700; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">khula is right given to the female in Islam as well so the Pakistani Laws.</span><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">&nbsp;However, there are very important questions...</span><ul style=\"box-sizing: inherit; margin-top: 20px; margin-bottom: 1.75em; margin-left: 40px; list-style-position: initial; list-style-image: initial; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">When and how a wife can file khula suit in family court</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Are any limits for institution of divorce suit?</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">How much time required for getting decree of Dissolution of Marriage?</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Can a woman remarry the same husband without intervention of third person i.e (HALALA) after khulla decree?</li></ul><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">According to the Pakistani Family laws, a family court will decide the matter within 3 month. But unfortunately in many cities of Pakistan this does not happen and case may linger upto 5 or sometimes 6 months in total. After getting Khulla decree the matter is sent to concerned Union Council for the issuance of Divorce Effectiveness Certificate.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><h4 style=\"box-sizing: inherit; clear: both; margin-bottom: 0px; color: rgb(26, 26, 26); font-family: sans-serif; text-align: justify;\">Questions 1: When and how a wife can file khula suit in family court?</h4><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Answer: When a wife feels that she cannot perform her matrimonial obligations due to any reasons and she also do not have \"delegated right of divorce\" in the column 18 of her Nikahnamma then she will have to seek the khulla decree from a family court. It is also called filling&nbsp;a suit for dissolution of marriage in the court.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><h4 style=\"box-sizing: inherit; clear: both; margin-bottom: 0px; color: rgb(26, 26, 26); font-family: sans-serif; text-align: justify;\">Question 2: Are any limits for institution of divorce suit?</h4><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Answer: As per Pakistani Family Laws a woman is entitled to seek a decree of marriage dissolution on any or more of the following grounds: Husband is missing for four or more years, husband has failed to maintain the wife, husband was involved in any crime and sentenced for 7 or more years, husband is medically not able to perform marital obligations for a period of three years, husband was impotent at the time of marriage, husband has any incurable disease etc. Beside these grounds, there are some other grounds available to wife for the dissolution of marriages under Muslim Law.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><h4 style=\"box-sizing: inherit; clear: both; margin-bottom: 0px; color: rgb(26, 26, 26); font-family: sans-serif; text-align: justify;\">Question 3: How much time required for getting decree of Dissolution of Marriage?</h4><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">It depends upon various factors such as in which province do you live, what are grounds for the khulla, how the case is being responded by the husband etc. Plus having a good and reliable lawyer for your khula case is also very important.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><h4 style=\"box-sizing: inherit; clear: both; margin-bottom: 0px; color: rgb(26, 26, 26); font-family: sans-serif; text-align: justify;\">Question 4: How much time required for getting decree of Dissolution of Marriage?</h4><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Can a woman remarry the same husband without intervention of third person i.e (HALALA) after khulla decree? Divorce on the basis of Khula would be Talaq e bayen (single divorce). Husband and wife would be at liberty for reunion (remarry) without intervention of third person i.e (HALALA), even after the issuance of Talaq Muasar certificate by the union council and even after lapse of 10 years.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">PLD 2014 Fsc 43</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">PLD 2013 Lhr 88</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">2011 CLC 1211</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">PLD 2011 Lah 458</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">PLD 2003 Pesh, 169</span><br>', '2020-07-31 10:46:06', 'blogimage/legal-forms.png'),
(11, 'CASE AGAINST BAILIFF FEE IN CHILD CUSTODY LITIGATION', 'Admin', 'This article questions the authority of Guardian Judges at Lahore to fix bailiff fees for home visitation of the minor to his or her non-custodial parent on the ground, inter alia, that the said authority exercised by the learned judges and infliction of bailiff fee is', '<p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">This article questions the authority of Guardian Judges at Lahore to fix bailiff fees for home visitation of the minor to his or her non-custodial parent on the ground, inter alia, that the said authority exercised by the learned judges and infliction of bailiff fee is ultra vires of the quasi-parental powers vested in the province of Punjab and that the same merits to be so declared. There are more than 3,000 child custody petitions pending adjudication in several Guardian Courts at Lahore seeking physical custody of minor children who are kept by their custodial parents under ad litem custody during pendency of the litigation. In almost every guardian case, a non-custodial parent seeks for the grant of visitation rights with the minor children including at-home visitation and physical custody of them on account of different occasions may that be Eid, public holiday, vacation, birthday of the minor or non-custodial parent or other such days. While allowing visitation rights, including at-home visitation of the minor child with non-custodial parents, the honourable Guardian Courts at Lahore, as a practice, order that custody of the minor be administered by a bailiff of the court and for this administration of safe custody of the minor to the non-custodial parent, a fees of PKR 1,000 is fixed, which is to be paid by the non-custodial parent upon each home visitation. Such orders have been passed while ignoring the fact that non-custodial parents are already paying an appropriate amount towards the minor child as monthly maintenance and also bearing the travel expenses of their minor child as and when the minor is produced in court for the purposes of meeting with the non-custodial parent. In presence of the payment of monthly maintenance and travel allowance to the custodial parent for the production of minor in court for the purposes of meeting with the minor child, the fixation of bailiff fees at PKR 1,000 on account of handing over of physical custody of the minor through bailiff is against the very mandate of law and against the welfare of the minor itself. Ordinarily a non-custodial parent is allowed physical custody of the minor child on Eid ul Fitr, Eid ul Azha, school vacation, Moharram holidays and birthday of the minor and birthday of the non-custodial parent, resulting in 8 occasions for which he or she is required to pay PKR 1000 to the bailiff on every time. The paramount consideration for the court in matters with regard to custody of minors is nothing but welfare of the minor. Levying heavy fees in the name of bailiff fee is tantamount to depriving a parent in meeting his or her minor child for the reason of his or her fiscal constraints and this is against the doctrine of welfare of the minor. Further pertinent to be noted here is that a family court affixes maintenance of the minor while keeping in view the resources of the parent and after going through all the evidence. On the other hand, the guardian courts fix bailiff fee without any such consideration as to whether a parent would be in a position to pay fees to a bailiff who is appointed solely for the job and is also a salaried employee of the court. This illegal practice of fixation of bailiff fee is adding financial hardship for the non-custodial parents resulting in their inability to meet their minor children on special occasions for want of adequate financial resources as well as depriving the minor from having a home visit with the non-custodial parent, which is against the welfare of the minor. The fees of the bailiff which the learned guardian judges at Lahore are fixing on their own, without following any criteria, is without any factual basis or justifiable reasons resulting in acute financial burden for the non-custodial parents. It is pertinent to be noted here that a fee may generally be defined as a charge for a special service rendered to individuals by some court agency. The amount of fee levied is supposed to be based on the expenses incurred by the court in rendering the services but in guardian courts there exists no such procedure where fee of the bailiff is calculated and directed to be paid by the non-custodial parent (mostly father), rather the guardian judges fix it in a slipshod manner, at an arbitrary rate resulting in extra burden on the non-custodial parent already involved in child custody litigation. In the case titled United Marine Agencies (Pvt.) Ltd vs Trustees of the Port of Karachi and Others, it has been observed by the honourable Sindh High Court that no tax, levy, charge, fee or cess could be imposed or recovered without there being any statutory sanction. Imposition of tax, levy, charge, fee or cess is a sovereign function and can only be exercised under a mandate and subject to limitation provided under the law. Reliance is placed on 2007 CLD 1092 Sindh High Court. There exists no criteria in the Guardian Courts at Lahore on the basis of which this fee is calculated and recovered from the non-custodial parents, rather it is in sheer contravention of the provisions of Rule No. 10 &amp; 11 of Part F of the Rules and Orders of the Lahore High Court, Lahore Volume V, Chapter No. 4, Special Procedures (Revised Edition) of 2005 framed under Section 491 (2) of the Code of Criminal Procedure to regulate the procedure in cases under section 491 of the Code of Criminal Procedure. This categorically lays down that,</p><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59); text-align: justify;\">WHEN A BAILIFF IS DEPUTED BY THE COURT TO PRODUCE AN ALLEGED DETENU/DETENUS, THE PARTY REQUIRING THE PRODUCTION SHOULD DEPOSIT WITH THE TREASURER IN ADVANCE, AN AMOUNT EQUAL TO THE CALCULATED EXPENSES FOR THE JOURNEYS INVOLVED KEEPING IN VIEW HIS GRADE OF PAY AND THE DAILY ALLOWANCE ADMISSIBLE TO HIM UNDER THE RELEVANT RULES.</h3><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">Again in Rule 13 of the Rules ibid, it is mentioned that in case the bailiff does not submit his claim within the time mentioned in the last rule, the amount or balance thereof should be refunded to the party concerned. In case, however, the party fails to claim refund within six weeks, the amount due is to be credited to government under the head ‘major head’. It is stated here that as per the provisions of Rule No. 15 of the Rules ibid, it is provided that if, at any time, on sufficient ground shown to the satisfaction of the registrar, it is proved that the bailiff submitted an exaggerated or incorrect claim or claimed expenses, this should be taken to be a misconduct and necessary proceedings against him be initiated under the High Court Establishment (Appointment &amp; Conditions of Service) Rules, which may result in major penalty provided by the relevant Rules. At Guardian Courts, there exists no documentation with regards to the claim of the bailiff as to his actual expenditure. The fixation of fee of the bailiff by the learned guardian judges at Lahore, is again in contravention of the High Court (Lahore) Rules &amp; Orders, Vol. IV, Part A, Chap. 6, Rule 12 pertaining to the “Process-Serving Establishment, A- Remarks and Directions”, which clearly postulates, under the head of Special Messenger and Special Bailiff that, “A special bailiff may be appointed for the execution of a warrant of arrest if service cannot be effected in the ordinary course. The period of such appointment can be determined by the court concerned in the circumstances of each case but no special fee should be levied.” It is estimated that there are almost 15,000 custody cases registered in the guardian courts across Pakistan. Almost 3,000 cases are pending adjudication in the guardian courts at Lahore[1]. Assuming that on average 3-4 children are being affected in each case involving home visitation, the total number could be as many as 9,000 minor children across Lahore to be direct affectees of this blatant illegal practice carried out by the Guardian Courts at Lahore. It is further significant to be noted here that the Punjab Finance Department has revised the rates of travel allowances for civil servants of the Punjab government, where under the rates of qualification pay, senior post allowance and daily travel allowance have been revised through the notification No. FDSR.1-9-2/2010 dated 01.01.2013, a copy of which has been dispatched to all the District and Sessions Judges. Under the said notification, the ordinary rate of daily allowance of a person with basic pay scale (BPS) 1-4 is PKR 310 and for 4-5 is revised to be PKR 390 in addition to revised rates for travel and mileage allowance for motor cycle/ scooter which is fixed at PKR 2.50 per kilometer. The non-custodial parent is required to pay an additional amount of PKR 8000 per annum to the bailiff under the head of bailiff fees, despite the very fact that the bailiff is appointed as a bailiff in pay scale No. 4 and draws a monthly salary from public exchequer. There exists no criterion as to how the fee of the bailiff is calculated, despite the fact that the office of the District and Sessions Judge, Lahore has already sanctioned 6 official motorbikes to the bailiffs attached with Guardian Courts at Lahore. On an average, these motorcycles give a mileage of 70 km per litre and petrol nowadays is available for PKR 64 per litre, hence fixation of PKR 1000 as fee of the bailiff is exorbitant in the peculiar circumstances of the matter. Justice should be done for the sake of God and its exclusive purpose should not be money, fee, compensation or reward. Devouring anything is forbidden – both in a literal and figurative sense. In the figurative sense, it may be the taking of bribe, or usury, or taking undue advantage of people’s weak position by way of levy of any fee or charge. The learned guardian judges are oblivious to the simple fact that there are more than 3,000 cases that are pending adjudication in the Guardian Court at Lahore alone, and one of the litigants in a child custody litigation is a non-custodial parent who is made to pay an additional charge of PKR 1,000 for each home visit with his or her own child, in order to strengthen bonding with his or her own offspring. Each parent is approximately paying almost PKR 8000 to 15000 against this bailiff fee, and if it is calculated at a large scale with the total number of child custody cases pending adjudication, the amount comes to an approximate figure of PKR 24,000,000 for which there exists no justification as the same is collected against the very mandate of the law enshrined in High Court Rules (Lahore) (Instructions to Civil Court) Volume IV, Chapter 6, Rule 12 and in sheer contravention of High Court Rules (Lahore) Rules and Orders, Volume V, Part F and the rules framed under Section 491 (2) of the Code of Criminal Procedure 1898 to regulate procedure in cases under section 491. It is the duty of government of an Islamic state to take effective steps for eliminating fasad-fil-arz. It needs no reiteration to say that the most important factor in discharging this duty of elimination of fasad-fil-arz is the settling of disputes through courts. Whether it is a dispute between citizens or between the state and a citizen, it must be settled in a peaceful way through the court enjoying unfettered powers and inspiring confidence. An Islamic state cannot close the portals of justice or create obstructions in the way of seekers of justice. A person with injured feelings should be smoothly and peacefully taken to the fountain of justice rather than be forced to settle scores with adversaries on the streets. Looking from this angle, the levy of bailiff-fee is totally repugnant to the concept of providing justice to the citizen and is a negation to the claim of establishing a just social order. It is an admitted fact that discretion becomes an act of discrimination when it is improper or is a capricious exercise or abuse of discretionary authority, and the person against whom this discretion is exercised faces certain disadvantages which he or she would not have otherwise faced. Where discretion is not based on any rational ground bearing upon the subject being dealt with, the law offends against the principle of equality and is void (2001 SCMR 256). Pakistan is a civilized society governed by law and not by the will of a few. The Constitution and other laws provide a very good system of checks and balances. The country, or for that matter a province, is not a fiefdom of any one person no matter how high-ranking he or she may be. Everybody remains under the law. All public power is a trust and has to be exercised fairly, honestly and in the interests of the public. It is further suggested here that the Guardian Courts are bound to look into the earning capacity of a non-custodial parent before inflicting him or her with the cost of bailiff fees. Such orders should not be perverse or based upon conjectures and surmises and Guardian Courts should exercise such power in a rational manner, which is not being done in matters of child custody pending adjudication before them and is resulting in acute fiscal constraints on the non-custodial parents. Honourable guardian judges are requested to accord fair and proper hearing to the person expected to be affected by their orders and to give sufficiently clear and explicit reasons in support of their orders regarding fixation of bailiff fees. The quantum of fee of the bailiff should be fixed while taking into consideration the sources of income of the non-custodial parent and keeping in view the genuinely expected expenses that may be incurred by a bailiff for change of physical custody of the minor and handing him or her over to the non-custodial parent. Such allowance must also be in conformity with other expenses. ———- References [1] Report submitted before the Division Bench of the Lahore High Court by the Senior Guardian Judge Lahore in Writ Petition bearing No 28566/11 &amp; 28237/11</p>', '2020-07-31 11:19:22', 'blogimage/divorce-2321087_1280.png'),
(14, 'Foreigner’s Marriage Rules & Documents Requirements in Pakistan', 'Admin', 'As we all know world have become a global village hence there is no surprise in inter-content or inter-country marriages are so much common now. Being a sixth most populated country, Pakistanis can be found in all parts of the world ', '<span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">As we all know world have become a global village hence there is no surprise in inter-content or inter-country marriages are so much common now. Being a sixth most populated country, Pakistanis can be found in all parts of the world hence and there are so many Pakistani nationals who choose their life partners from across the globe. So it is a very common question people ask what are the rules for foreigners getting married with a Pakistani national in Pakistan. In this article we would list some details about foreigners Marriage rules and requirements if they want to get it registered on&nbsp;Pakistan soil.</span><br><div><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br></span></div><div><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59); text-align: justify;\">PRIMARY REQUIREMENTS AND RULES FOR FOREIGNERS WHO WANT TO GET MARRIED WITH A PAKISTANI NATIONAL IN PAKISTAN:</h3><ol style=\"box-sizing: inherit; margin-bottom: 1.75em; margin-left: 1.5em; padding-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">A foreigner must have to have a valid Pakistan visa at the time of marriage registration. This visa can even a tourist visa.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">If a foreigner is getting married in Islamabad or Karachi with a Pakistani national then he/she will have to submit 6x passport size photographs, in Lahore 4x photographs are required.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Pakistani partner will have to present his National Identity Card for the registration of their marriage.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">If any party was previously married but now living as divorced or widowed then presentation of relevant document is compulsory.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Couple will also have to bring along with two male witnesses with them at the time of registration. We can also arrange witnesses on request, however, this service may add some additional cost.</li></ol><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59); text-align: justify;\">HOW THE PROCESS WILL WORK:</h3><ul style=\"box-sizing: inherit; margin-top: 20px; margin-bottom: 1.75em; margin-left: 40px; list-style-position: initial; list-style-image: initial; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Books an appointment with us in advance. At least 1 or 2 days in advance appointment is necessary.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Couple arrives at our office along with all the documents listed above on scheduled time.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">At our office marriage will be registered as per Pakistan laws and will also be solemnized in religious way by the concerned person which is also a necessary part of these proceedings.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">This whole process may take up to two hours and couple will be provided with \"Nikahnama\" on the same day.</li></ul><font color=\"#00033b\" face=\"SourceSansPro-Light\"><span style=\"font-size: 20px;\"><br></span></font></div>', '2020-07-31 12:14:17', 'blogimage/wedding-2412827_1280.jpg'),
(18, 'How to do Court Marriage in Lahore and court marriage lawyer', 'Admin', 'Legal Services Regarding Court Marriage Registration in Lahore We are working in Lahore since 2007 and have earned a name of trust and reliability in various fields of laws, one of those many is family laws and court marriages. When a couple decide to make a decision', '<div><b><font size=\"4\">LEGAL SERVICES REGARDING COURT MARRIAGE REGISTRATION IN LAHORE</font></b></div><div><font size=\"3\">We are working in Lahore since 2007 and have earned a name of trust and reliability in various fields of laws, one of those many is family laws and court marriages. When a couple decide to make a decision against the will of their parents due to any reason they face a very difficult situation about hiring of a lawyer in Lahore for their court marriage process. Our team of expert lawyers in Lahore have simplified whole court marriage procedure and we ensure 100% confidentiality at all levels and try our best to secure the constitutional rights of a couple who want to enter into a marital bond.</font></div><div><font size=\"3\"><br></font></div><div><div style=\"\"><b style=\"\"><font size=\"4\">LIST OF THE DOCUMENTS REQUIRED FOR COURT MARRIAGE REGISTRATION IN LAHORE...</font></b></div><div style=\"\"><ol style=\"font-size: medium;\"><li style=\"text-align: justify;\">National ID cards of both. Just in case someone do not have ID card, we can use Form B and Matriculation certificate as proof of age and identity.</li><li style=\"text-align: justify;\">Four passport size photos of the lady.</li><li style=\"text-align: justify;\">Proof documents in case of any party is divorced or widow issued by competent authority.</li><li style=\"text-align: justify;\">A Free Will Affidavit in Stamp Paper (It will be prepared by us on your arrival at our Lahore office on scheduled time.)</li><li style=\"text-align: justify;\">Two male persons having valid national Identity Cards as witnesses of marriage. We can also arrange you witnesses for some additional cost in case a couple is not able to manage or want to keep their marriage a secret.</li></ol><div style=\"text-align: justify;\"><b style=\"\"><font size=\"4\">STEP BY STEP PROCESS OF COURT MARRIAGE IN LAHORE</font></b><br></div><div style=\"text-align: justify;\"><b style=\"\"><font size=\"4\"><br></font></b></div></div></div><div><font size=\"3\"><div><ul><li><font size=\"3\"><div style=\"text-align: justify;\">Arrange all the documents above mentioned.</div></font></li><li><font size=\"3\"><div style=\"text-align: justify;\">You contact us either by email or a phone call for an initial discussion.</div></font></li><li><font size=\"3\"><div style=\"text-align: justify;\">Book an appointment with us at least one or two days in advance.</div></font></li><li><font size=\"3\"><div style=\"text-align: justify;\">Visit our office on scheduled time</div></font></li><li><font size=\"3\"><div style=\"text-align: justify;\">There it may take 2 to 3 hours to complete all the paper work e.g. Free Will Affidavit for marriage and marriage registration with Nikah Registrar etc.</div></font></li></ul></div></font></div>', '2020-08-05 06:29:08', 'blogimage/signature-2743370_1280.jpg'),
(20, 'How to Setup a Company in Pakistan', 'Admin', 'Business incorpration/Company registration/ formation process (Step by Step Guide) Team of Corporate lawyers and Associates has drafted a Step by Step guide of business formation/Company Registration/ Company Formation for our valued corporate and business', '<h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59);\">BUSINESS CORPRATION/COMPANY REGISTRATION/FORMATION PROCESS (STEP BY STEP GUIDE)</h3><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">Team of Corporate lawyers at Pk-Legal and Associates has drafted a Step by Step guide of business formation/Company Registration/Company Formation for our valued corporate and business clients who want to get their company regsitered anywhere within Pakistan. Since SECP (Securities and Exchange Commision of Pakistan) has introdcuded their Online system, process of company registration is no more hard to understand.</p><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59); text-align: justify;\">SELECT YOUR BUSINESS NAME AND APPLY FOR NAME AVAILABILITY/NAME RESERVATION.</h3><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">You will have to choose a unique name for your business which not already registered with SECP. An application with proposed name will be submitted to SECP for name reservation. If the name is already taken or similar to any other existing business then it will be rejected and you will be asked to apply for another name, name will be reservered otherwise for a period of 90 days per Companies Ordinance 1984. Process of name availabilty application at SECP may take upto two working days to complete. Once the name is approved, applicable fee will be deposited in selected brances of UBL or MCB banks.\r\nDigital signatures are mandatory for submitting case through SECP e services. If proposed company director don\'t have any SECP user/login ID already then direcotor(s) of proposed company will have to apply for a Digital signatures through NIFT (National Instriture of Facilitation Technologies).\r\n</p>\r\n', '2020-08-05 06:45:13', 'blogimage/paper-3213924_1280.jpg'),
(21, 'Some important things for new lawyers and litigants', 'Admin', 'Some important things for new lawyers and litigants who want to build some basic understanding of legal basic level legal procedures and rules. Every civil suit is filed in the lowest court of a district which is the court of Senior Civil Judge. A summary suit under', '<span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Some important things for new lawyers and litigants who want to build some basic understanding of legal basic level legal procedures and rules.</span><ul style=\"box-sizing: inherit; margin-bottom: 1.75em; margin-left: 1.25em; list-style-position: initial; list-style-image: initial; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><li style=\"box-sizing: inherit;\">Every civil suit is filed in the lowest court of a district which is the court of Senior Civil Judge.</li><li style=\"box-sizing: inherit;\">A summary suit under Order 37 of CPC is filed in the court of a district judge.</li><li style=\"box-sizing: inherit;\">Family suits are governed by the Family Courts Act, 1964 in Pakistan.</li><li style=\"box-sizing: inherit;\">Another statute that governs family suits is West Pakistan Family Court Rules, 1965.</li><li style=\"box-sizing: inherit;\">In the case of family suits, it is filed at the place where the female resides even if she resides temporarily.</li><li style=\"box-sizing: inherit;\">Visitation is a right for both the parents. It cannot be denied by courts unless any one of them has defaulted.</li><li style=\"box-sizing: inherit;\">Stay order can be permanent or temporary.</li><li style=\"box-sizing: inherit;\">Perpetual or permanent stay is granted under the Specific Relief Act 1877.</li><li style=\"box-sizing: inherit;\">Temporary Injunction or stay is granted under order 39 rules 1 &amp; 2 of CPC.</li><li style=\"box-sizing: inherit;\">Any application can be given anytime in a civil suit and Judge is bound to admit or dismiss it.</li><li style=\"box-sizing: inherit;\">A decree can be preliminary or final. It is always appeal-able.</li><li style=\"box-sizing: inherit;\">An order is generally revision-able unless it falls under the ambit of section 104 or order 43 of CPC.</li><li style=\"box-sizing: inherit;\">The time for filing first appeal in civil cases is 30 days.</li><li style=\"box-sizing: inherit;\">The time for filing the second appeal in civil cases is 60 days.</li><li style=\"box-sizing: inherit;\">The time for filing civil revision is 90 days.</li><li style=\"box-sizing: inherit;\">Civil revision is filed under section 115 of CPC.</li><li style=\"box-sizing: inherit;\">The petitioner is bound to provide all the records of a trial court in a civil revision.</li><li style=\"box-sizing: inherit;\">The first appeal can have a question of law as well as the question of fact.</li><li style=\"box-sizing: inherit;\">The second appeal is only filed on the Question of Law.</li><li style=\"box-sizing: inherit;\">In normal civil cases, the first appeal is filed in the court of a district judge.</li><li style=\"box-sizing: inherit;\">In normal civil cases, the second appeal is filed in High Court.</li><li style=\"box-sizing: inherit;\">Civil court has unlimited pecuniary jurisdiction under the West Pakistan Civil Courts Act 1962.</li><li style=\"box-sizing: inherit;\">In normal practice, different local governments have set different limits for the pecuniary jurisdiction of civil courts.</li><li style=\"box-sizing: inherit;\">When a case is filed in the high court for the first time it is heard by a single bench.</li><li style=\"box-sizing: inherit;\">An appeal of a decision of single bench can be heard by a division bench or full court in Intra Court Appeal.</li><li style=\"box-sizing: inherit;\">For challenging a decision of DB or Full Court a leave to appeal is filed in the Supreme Court.</li><li style=\"box-sizing: inherit;\">When Supreme Court accepts leave to appeal then the case is heard in Supreme Court.</li><li style=\"box-sizing: inherit;\">A case of public interest can be directly filed under Article 184(3) of the Constitution of Pakistan.</li><li style=\"box-sizing: inherit;\">Normally appeals in Supreme Court are filed under article 185 of the Constitution of the Islamic Republic of Pakistan.</li><li style=\"box-sizing: inherit;\">Writs are of 5 types.</li><li style=\"box-sizing: inherit;\">Writs are usually filed under article 199 of the constitution of the Islamic Republic of Pakistan.</li><li style=\"box-sizing: inherit;\">Writ of Habeas Corpus is filed in Session court under section 491 of CrPC.</li><li style=\"box-sizing: inherit;\">Inherent Powers of Civil Courts can be invoked under section 151 of CPC.</li><li style=\"box-sizing: inherit;\">Courts have powers to appoint local commission under order 26 of CPC.</li><li style=\"box-sizing: inherit;\">In cases of contempt of court regarding temporary injunction, a local commission is appointed under order 39 rule 7 of CPC.</li><li style=\"box-sizing: inherit;\">Property can be attached and the accused can be imprisoned for 6 months in contempt under order 39 of CPC.</li><li style=\"box-sizing: inherit;\">A review is done by the same court passing the judgment.</li><li style=\"box-sizing: inherit;\">A review petition is filed under order 47 rule 1 of CPC.</li><li style=\"box-sizing: inherit;\">Order 21 of CPC deals with the execution proceedings</li><li style=\"box-sizing: inherit;\">The plaintiff has a time of 3 years to file execution.</li><li style=\"box-sizing: inherit;\">Limitation in civil suits is 3 years from the cause of action.</li><li style=\"box-sizing: inherit;\">Plaint is rejected under Order 7 rule 11 of CPC.</li><li style=\"box-sizing: inherit;\">Plaint is returned under order 7 rule 10 of CPC.</li><li style=\"box-sizing: inherit;\">Section 10 of CPC deals with the principle of Res Sub Judice</li><li style=\"box-sizing: inherit;\">Section 11 of CPC deals with the principle of Res Judicata</li><li style=\"box-sizing: inherit;\">A plaint can be amended under order 6 rule 17 of CPC.</li><li style=\"box-sizing: inherit;\">A written statement can be amended under order 6 rule 17 of CPC.</li><li style=\"box-sizing: inherit;\">Order 7 of CPC deals with the plaint</li><li style=\"box-sizing: inherit;\">Order 8 of CPC deals with the Written Statement</li><li style=\"box-sizing: inherit;\">In cases of appeals and revisions, the respondents are not required to file replies.</li><li style=\"box-sizing: inherit;\">The time for filing a written statement is 30 days.</li><li style=\"box-sizing: inherit;\">In the case of Government Institutions time period for filing the written statement is 90 days.</li><li style=\"box-sizing: inherit;\">When an organization has a head office in one city and branch office in another city then the suit can be filed anywhere.</li><li style=\"box-sizing: inherit;\">A civil suit is filed where the cause of action takes place or where the defendant resides.</li><li style=\"box-sizing: inherit;\">A female child remains with mother till she reaches her puberty.</li><li style=\"box-sizing: inherit;\">A male child remains with mother till the age of 7 years.</li><li style=\"box-sizing: inherit;\">Father is liable to maintain his children no matter with whom they live.</li><li style=\"box-sizing: inherit;\">When a mother contracts a second marriage, she loses her right of child custody.</li><li style=\"box-sizing: inherit;\">Khula can be taken on grounds mentioned in section 2 of the Dissolution of Muslim Marriages Act 1939.</li><li style=\"box-sizing: inherit;\">When a woman has the right of Talaq-e-Tafweez in column 18 then she can take Talaq directly from the Arbitration council.</li><li style=\"box-sizing: inherit;\">A husband can contract a second marriage if the arbitration council permits him.</li><li style=\"box-sizing: inherit;\">A husband is liable to pay full Haq Mehr to the first wife before contracting a second marriage.</li><li style=\"box-sizing: inherit;\">The wife is liable to return Haq Mehar in the case of Khula.</li><li style=\"box-sizing: inherit;\">If a wife is not in a position to return Haq Mehar, her Khula decree cannot be stopped.</li><li style=\"box-sizing: inherit;\">Khula decree becomes effective after six months of its passing.</li><li style=\"box-sizing: inherit;\">Khula is counted as a single Talaq in Pakistan.</li><li style=\"box-sizing: inherit;\">Suit for declaration is filed under section 42 of the Specific Relief Act 1877.</li><li style=\"box-sizing: inherit;\">A declaration can be in rem or in personam.</li><li style=\"box-sizing: inherit;\">A nominee is not an Inheritor. He is liable to distribute the shares as per the Islamic Law of Inheritance.</li><li style=\"box-sizing: inherit;\">The right of wife in the inheritance of the deceased is 1/8 in the case of children.</li><li style=\"box-sizing: inherit;\">The right of wife in inheritance is 1/4th in case there are no children.</li><li style=\"box-sizing: inherit;\">The right of mother and father is 1/6 each.</li><li style=\"box-sizing: inherit;\">The right of a husband in the property of wife is 1/4th in the case of children.</li><li style=\"box-sizing: inherit;\">The right of a husband in the property of wife is 1/2 in case of no children.</li><li style=\"box-sizing: inherit;\">A single daughter inherits 1/2 property.</li><li style=\"box-sizing: inherit;\">2 or more than 2 daughters inherit 2/3rd property</li><li style=\"box-sizing: inherit;\">Single son inherits full property.</li><li style=\"box-sizing: inherit;\">Mother and father are natural guardians of children.</li><li style=\"box-sizing: inherit;\">The banking court is equal to the district court.</li><li style=\"box-sizing: inherit;\">Murderer has no share in the inheritance.</li><li style=\"box-sizing: inherit;\">Specific relief cannot be granted for the mere purpose of enforcing a penal.</li></ul>', '2020-08-06 08:57:43', 'blogimage/image_3.jpg');
INSERT INTO `blogs` (`id`, `btitle`, `bwri`, `bdes`, `bbody`, `bdate`, `bpic`) VALUES
(22, 'Sample Reconciliation Agreement between Wife and Husband after divorce', 'Admin', 'Sample Reconciliation Agreement between Wife and Husband We as a family law firm in Pakistan try our best to guide and help people related to their family law cases and allied issues through our online presence. Below is the sample of a Reconciliation Agreement which', '<h1 style=\"box-sizing: inherit; clear: both; margin-bottom: 0px; color: rgb(26, 26, 26); font-family: sans-serif; text-align: justify;\">Sample Reconciliation Agreement between Wife and Husband</h1><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">We as a family law firm in Pakistan try our best to guide and help people related to their family law cases and allied issues through our online presence. Below is the sample of a Reconciliation Agreement which is to be prepared and submit at concerned Union Council when a husband and wife have a divorce case proceedings pending in the concerned Union Council Under Section 7 of The Muslum Family Laws Ordinance, 1961 but before the expiry of 90 days, they come to a reconciliation and want to start living together once again as wife and husband as per the Muslim Family laws of Pakistan.</p><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><h2 style=\"box-sizing: inherit; clear: both; margin-bottom: 0px; color: rgb(26, 26, 26); font-family: sans-serif; text-align: center;\">Reconciliation Agreement</h2><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Mr. XYZ, referred to as HUSBAND, and Ms. ABC, referred to as WIFE, agree:</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">The parties were lawfully married on ______________________ at __________________________. Since such time they have continued to be married.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">The Husband initiated divorce proceedings at Union Council # ______, Rawalpindi on dated________.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">The parties have settled their differences, and desire to terminate the divorce proceedings at UC # (____), Islamabad/Rawalpindi (CHANGE CITY/PLACE AS PER YOUR CASE).</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Henceforward, the parties shall live together as husband and wife. The parties have each had a full and ample opportunity to consult with legal and other counselors of their own choice and have reviewed the terms of this agreement with their advisors.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">The parties shall petition the court for dismissal of this action.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">This agreement is the entire agreement between the parties and the same may only be modified by a written agreement executed by both parties.</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Dated: ___________</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Husband Name and Signaure: ______________</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Wife Name and Signaure:______________</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Witnesse 1:</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Name and Signaure:______________</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Witness 2:</span><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><br style=\"box-sizing: inherit; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><span style=\"color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\">Name and Signaure: ______________</span><br>', '2020-08-06 09:01:22', 'blogimage/aa.jpg'),
(23, 'The Sindh Child Marriage Restraint Act 2013', 'Admin', 'The Sindh Assembly is the first assembly in Pakistan where a a bill of this kind is passed. According to “The Sindh Child Marriage Restraint Act 2013”, in cases of underage marriage the Bride, Groom and parents can all be sentenced to three years in prison', '<p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">The Sindh Assembly is the first assembly in Pakistan where a a bill of this kind is passed. According to \"The Sindh Child Marriage Restraint Act 2013\", in cases of underage marriage the Bride, Groom and parents can all be sentenced to three years in prison and can be fined with Rs. 45,000.</p><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">Sindh Minister for Culture Sharmila Farooqi presented this bill in Sind Assembly and an eight member committee took part in prepration of its drafts with the consultation with stakeholders. The legislation cover child marriage, harassment of women, honour killings and acid attacks.</p><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">We have history of the first such bill, Sindh Law department’s additional secretary Aslam Shaikh had told that a bill was introduced in 1929 and the age of a girl for marriage was fixed at 14 years. He had said that with an amendment, the age limit was made 16 in 1965. The enforced Child Marriage Restraint Act, 1929 awards three-month maximum imprisonment and Rs1,000 fine.</p>', '2020-08-06 09:49:11', 'blogimage/kid-2529907_1280.jpg'),
(24, 'PROTECTION AGAINST HARASSMENT OF WOMEN AT THE WORKPLACE ', 'Admin', 'The Federal Government introduced the Protection Against Harassment of Women at the Workplace Act, 2010 (the Act ) for protection of women from harassment at the workplace, and requiring every organization to adopt the Code of Conduct prescribed under the Act.', '<p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">The Federal Government introduced the&nbsp;<span style=\"box-sizing: inherit; font-weight: 700;\">Protection Against Harassment of Women at the Workplace Act, 2010</span>&nbsp;(the Act ) for protection of women from harassment at the workplace, and requiring every organization to adopt the Code of Conduct prescribed under the Act.</p><p style=\"box-sizing: inherit; margin-bottom: 1.75em; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 40px; text-align: justify;\">This Act requires all public and private organizations to adopt an internal Code of Conduct (the Code ) and a complain/appeals mechanism aimed at establishing a safe working environment, free of intimidation and abuse, for all working women. The word \"Organization\" has been defined in the Act to include, amongst others, a company as defined in the Companies Ordinance, 1984.</p><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59); text-align: justify;\">THE COMPLIANCE OF THE CODE<em style=\"box-sizing: inherit;\">, INTER-ALIA</em>,</h3><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59); text-align: justify;\">&nbsp;REQUIRES THE FOLLOWING:</h3><ul style=\"box-sizing: inherit; margin-top: 20px; margin-bottom: 1.75em; margin-left: 40px; list-style-position: initial; list-style-image: initial; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px; text-align: justify;\"><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Making the Code of Conduct a part of HR policies;</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Forming a three member inquiry Committee to address any complaints of sexual harassment within employees;</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Displaying the Code in the office so that the employees have access to the information; and</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Following the Code in letter and spirit to make the office environment more dignified.</li></ul>', '2020-08-06 10:01:06', 'blogimage/student-849822_1280.jpg'),
(25, 'What to do when your facebook account is hacked and misused?', 'Admin', 'In the Cyber world it is a continuous war to safeguard your private data from hackers and someones who are not professional hacker but have an enmity with you and always keep in search of anything that may harm your public reputation and image. Hackers are always busy', '<div style=\"text-align: left;\"><span style=\"color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; text-align: justify;\">In the Cyber world it is a continuous war to safeguard your private data from hackers and someones who are not professional hacker but have an enmity with you and always keep in search of anything that may harm your public reputation and image.</span></div><div><div style=\"text-align: justify;\"><font color=\"#00033b\" face=\"SourceSansPro-Light\"><span style=\"font-size: 20px;\"><br></span></font></div><span style=\"color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; text-align: justify;\"><div style=\"text-align: justify;\">Hackers are always busy in finding a ways to Hack Facebook Accounts. But hacking Facebook accounts is not something that everyone can do easily as Facebook has a team of professional security experts and penetration testers to keep your data as much secure as much possible. So you should not be much worried about such type of hacking.</div></span></div><div><div style=\"text-align: justify;\"><font color=\"#00033b\" face=\"SourceSansPro-Light\"><span style=\"font-size: 20px;\"><br></span></font></div><span style=\"color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; text-align: justify;\"><div style=\"text-align: justify;\">But there is another type of hacking as well, that is hacking by a close relative, a friend or your office colleague. This is the type that is on your part where you need to take some necessary steps to safeguard your private data and secure your public image.</div><div style=\"text-align: justify;\"><br></div><div style=\"text-align: justify;\"><h3 style=\"box-sizing: inherit; clear: both; font-weight: normal; font-family: Conv_century; font-size: 22px; letter-spacing: 1px; text-transform: uppercase; color: rgb(0, 3, 59);\">LET LEARN A FEW THINGS THAT MAY HELP YOU TO SECURE YOUR PRIVATE INFORMATION FROM SUCH PEOPLE AND AVOID ANY MISHAPS.</h3></div><div style=\"text-align: justify;\"><ol style=\"box-sizing: inherit; margin-bottom: 1.75em; margin-left: 1.5em; padding-left: 20px; list-style-position: initial; list-style-image: initial; color: rgb(26, 26, 26); font-family: sans-serif; font-size: 16px;\"><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">At first you should never share your password with anyone.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Always use strong password that also contains special numbers and characters e.g. Jam!l*&amp;1 and avoid easy to guess passwords such as your date of birth, your mobile numbers, your name etc.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Always properly logout if you use public or shared computer.</li><li style=\"box-sizing: inherit; color: rgb(0, 3, 59); font-family: SourceSansPro-Light; font-size: 20px; line-height: 44px;\">Do not write your passwords on any notebooks etc. that can be accessed or viewed by others.</li></ol></div></span></div>', '2020-08-06 10:07:09', 'blogimage/hacking-2903156_1280.jpg'),
(26, 'Can a Dependant Mother retain custody of her minor child?', 'Admin', 'In a recent court case 2019 SCMR 520, the question whether mother can retain custody became the bone of contention and it was argued before the Supreme Court. The court whilst decling appeal of the Petitioner father held that Petitioner was directed immediately and peacefully hand.....', '<p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">In a recent court case 2019 SCMR 520, the question whether mother can retain custody became the bone of contention and it was argued before the Supreme Court that the mother was financially dependant on her parents.&nbsp;</span></p><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">The Supreme Court decision by Honorable judge Mr. Faiz Isa ruled in favour of the mother. The court whilst decling appeal of the Petitioner father held that Petitioner was directed immediately and peacefully hand over the minor girl to her mother. In case of failure, the Social Welfare Department was directed to ensure that the child was handed over to her mother through a lady officer of the Department and in case of no lady officer, police women constable was directed to do the same.&nbsp;</span></p><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\"><span style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-style: inherit; font-weight: 700; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">Apart from other legal points that came into consideration, an important point decided by the August court was that the plea of father that the mother lived with her parents and was financially dependent on them, therefore, presumably she was not able to support the minor, was dismissed and held that such presumption was contrary to law since the father was legally obliged to maintain his child and poverty on the part of mother was no ground to disentitle her from the custody of the minor child.&nbsp;&nbsp;</span></p>', '2020-08-06 10:16:08', 'blogimage/baby-164897_1280.jpg'),
(27, 'Child Adoption law in Pakistan', 'Admin', 'With regard to the concept of adoption in Islam, we seek guidance from Sunnah of the Prophet Muhammad (P.B.U.H). At the time of prophet’s marriage (P.B.U.H) with Hazrat Khadija (R.A), she gave a slave namely Zayd Bin Haritha to Prophet Muhammad (P.B.U.H) and the Prophet Muhammad (P.B.U.H) took good care', '<p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">With regard to the concept of adoption in Islam, we seek guidance from Sunnah of the Prophet Muhammad (P.B.U.H). At the time of prophet’s marriage (P.B.U.H) with Hazrat Khadija (R.A), she gave a slave namely Zayd Bin Haritha to Prophet Muhammad (P.B.U.H) and the Prophet Muhammad (P.B.U.H) took good care of him and their relationship changed from that of master and a slave into one of father and son. Zayd was one of the first persons to have accepted Islam</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">. When his father and uncles came to know about his whereabouts, they came to Makkah and told Prophet Muhammad (P.B.U.H) that Zayd had been captured by some thieves and sold into slavery. The Prophet set him free, but Zayd refused to leave Prophet Muhammad (P.B.U.H) and go home with his father. Haritha the father of Zayd, became very angry and openly declared that from now on “Zayd is not my son”. The Prophet immediately responded by adopting Zayd. Zayd came to be know as Zayd Bin Muhammad. This continued till after the Prophet Muhammad (P.B.U.H) migrated to Medina. Zayd had grown up and was now a married man. However, his marriage did not work out. Allah revealed some verses related to Zayd’s divorce in which Almighty also talks about the issue of ‘re-naming’ the adopted children.</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">&nbsp;</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">The Almighty says:</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">&nbsp;</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\"><em style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">‘And Allah did not make your adopted children your sons. This is only your words coming from your tongues. And Allah says the truth and He guides you to the right path. Call them with reference to their (real) fathers. It is more just in the sight of Allah”. (33.4)</em></p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\"><em style=\"box-sizing: inherit; border: 0px; font-family: inherit; font-weight: inherit; margin: 0px; outline: 0px; padding: 0px; vertical-align: baseline;\">&nbsp;</em></p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">What this means is that adoption does not change the relationship of a person with his real parents and siblings, nor does it create real relationship between him and his adoptive parents and their children. The practical implications of this view on the one hand is that all the rules which apply between blood relatives are still valid; for example the child will still be mahram; that an adopted child cannot marry his/her real siblings; he or she is also eligible for inheritance from the real parents; and there is no need for hijab between the child and his or her real family. On the other hand, the rules that apply between non-related persons are still valid. For example, adoption would not create the mahramiyyat between child and the new family. In Islam, the right of inheritance is based on uterine relationship.</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">&nbsp;</p><p style=\"text-align: justify; box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">However, there is only one case of adoption where a sort of semi-familial relationship and mahramiyyat is created between the adopted child and the adoptive family: when the adopted child is below two years of age and is also breast-fed directly by the adoptive mother for at least a day and a night. This creates a foster rizai relationship , and the child is mahram to the new family- there is no need for hijab, nor can the child marry the real children of the adoptive parents. However, in case of inheritance, even a rizai child has no right in the estate of the adoptive parents. But as mentioned above, the adoptive parents can write up to one third of their&nbsp;&nbsp; estate for their adopted child.</p>', '2020-08-06 10:29:07', 'blogimage/love-826936_1280.jpg'),
(28, 'What are the Property Laws in Pakistan', 'Admin', 'Article 4 subsection 2 of the constitution of Islamic Republic of Pakistan provides that no action detrimental to the life, liberty, body, reputation or property of any person shall be taken except in accordance with law. ', '<p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">Article 4 subsection 2 of the constitution of Islamic Republic of Pakistan provides that no action detrimental to the life, liberty, body, reputation or property of any person shall be taken except in accordance with law. This article of the constitution provides protection to all citizens of Pakistan with regards to their property rights.</p><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">In such broader protection follow detailed legislation, which provides how such property is to be protected.&nbsp; Property law basically governs ownership in real property and or personal property. Real property is often categorized as immovable property and personal property relates to that which is moveable. So real estate like land would be real property and your car would be your personal property, which is moveable.</p><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">Let us consider some important areas of law with regards to protection of property.</p><h3 style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 2.7rem; margin-top: 2.3704em; margin-bottom: 1.1852em; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 1.1852;\">The Transfer of Property Act, 1882</h3><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">This law governs the ‘transfer of property’, which means an act by which a person is to convey property to one or more persons. The person can be a body corporate, it could be a transfer from one to many or to ones self. The transfer could be one, which is for present or for a future date. Property is broadly classified in two types mentioned above. A transfer of property effectively transfers all rights and obligations contained within such property and the transferee is then capable of subsequently passing such rights to another buyer. Every person who the law holds as competent to contract is competent to transfer property. Section 6 of Transfer of Property Act 1882 provides that any type of property can be transferred provided that the law allows the person holding property to transfer it. In other words the transferee is not barred by any condition precedent, which prohibits him/her from transferring such property.</p><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">So Transfer of Property Act 1882 is the main legislation dealing with transfer of property.</p><h3 style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 2.7rem; margin-top: 2.3704em; margin-bottom: 1.1852em; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 1.1852;\">Land Revenue Act, 1967</h3><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">It is law, which relates to making and maintenance of records of rights, the assessment and collection of land revenue and the appointment and function of revenue officers and other matters connected with the Land Revenue.</p><h3 style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 2.7rem; margin-top: 2.3704em; margin-bottom: 1.1852em; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 1.1852;\">Stamp Act 1899</h3><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">An act to provide authenticity to executed documents between parties. It provides a legal sanctity to such documents. Aims of the stamp Act also include that the government can increase their revenue by charging fee for stamps.&nbsp; The stamped document ensures that it holds evidentiary value, creation of rights, preventing fraud etc..</p><h3 style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 2.7rem; margin-top: 2.3704em; margin-bottom: 1.1852em; outline: 0px; padding: 0px; vertical-align: baseline; clear: both; line-height: 1.1852;\">Registration Act 1908</h3><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 1.6842em; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">This act provides for instances where registration of document is compulsory. For instance, instruments of gifts of immovable property, lease of immovable property, composition deed, any instrument relating to shares in a Joint Stock Company etc</p><p style=\"box-sizing: inherit; border: 0px; font-family: &quot;Noto Serif&quot;, serif; font-size: 19px; margin-bottom: 0px; outline: 0px; padding: 0px; vertical-align: baseline; color: rgb(51, 51, 51);\">Above is a brief synopsis of the laws, which relate to property. AskWakeel is proud to announce that it comprises those lawyers who are expert in property laws and they can appropriately address any queries you may have.</p>', '2020-08-06 10:39:46', 'blogimage/money-2724235_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(255) DEFAULT NULL,
  `categoryDescription` longtext DEFAULT NULL,
  `creationDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `categoryName`, `categoryDescription`, `creationDate`, `updationDate`) VALUES
(3, 'Landlord-Tenant', '', '2020-06-24 19:14:04', ''),
(4, 'Wills and Estates', '', '2020-06-24 19:14:04', ''),
(5, 'Going to Court', '', '2020-06-24 19:14:23', ''),
(6, 'Family Law', '', '2020-06-24 19:14:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contactno` varchar(15) NOT NULL,
  `password` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `PracticeAs` varchar(255) NOT NULL,
  `city` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `email`, `contactno`, `password`, `education`, `experience`, `PracticeAs`, `city`, `image`) VALUES
(9, 'Zohaib Anwar', 'zohaib@gmail.com', '03005657890', '46d923d9b44b8aaaf3179c5f6f7adf81', 'LLB From Bahria University, Islamabad.', '5 year experience as a Child Protection Lawyer in Khnewal.\r\n2 year experience as a Family Lawyer Handle legal issues like Marriage, Home violence, Divorce etc.', 'Child Protection Lawyer', 'khanewal', 'upload/p22.jpg'),
(10, 'Shoaib Ahmad', 'shoaib@gmail.com', '03004865809', '61243c7b9a4022cb3f8dc3106767ed12', 'LLB from Adleid University Australlia', '5 Year Experience dealing with the legal business issues like Protection of Intellectual Property.Employee-related Issues like Employee Classification. Termination of Employment. Discrimination. Information Sharing. \r\nForeign Work Policies.\r\n', 'Business Laywer', 'Lahore', 'upload/person_3.jpg'),
(11, 'Mohsin Haider', 'mohsin@gmail.com', '0348787976', '4a9618951d55fa3fab9200151cadf007', 'LLB From University of Management and Technology, Lahore.', '2 Year Experience as a Criminal defence Lawyer.work to defend individuals, organizations, and entities that have been charged with a crime.', 'Criminal Defence Lawyer', 'khanewal', 'upload/person_8.jpg'),
(12, 'Irfan Shahid', 'irfan@gmail.com', '0354959905', 'f3224d90c778d5e456b49c75f85dd668', 'LLB From Government College University, Faisalabad, Pakistan.\r\nMaster of Legal Studies (MLS)', '4 Year Experience as a Military Lawyer efficiently Advising military clients brought before the courts.\r\nHandling the legal discipline of military personnel.\r\nDrafting and preparing legal documents.\r\nCreating and maintaining military handbooks.\r\nPreparing', 'Military defence Lawyer', 'Sahiwal', 'upload/person_2.jpg'),
(13, 'Usman nisar', 'usman@gmail.com', '3486469693', '9e95f6d797987b7da0fb293a760fe57e', 'Juris Doctor (JD) From Hamdard University.\r\nLLB From University of Sargodha.', '7 Year of Experience of handle cases involving contracts and property between individuals, government and businesses. ', 'Civil Lawyer', 'Sahiwal', 'upload/person_1.jpg'),
(14, 'Humza Ali', 'humza@gmail.com', '0399099028', '86318e52f5ed4801abe1d13d509443de', 'LLB from KINGS COLLAGE London', '4 year experience as a criminal defence lawyer', 'Criminal defence lawyer', 'khanewal', 'upload/bs1.jpg'),
(15, 'Malik Shahid', 'malik@gmail.com', '0344897987', 'f3224d90c778d5e456b49c75f85dd668', 'LLB from Law COLLAGE London', '4 year practice experience as a Family law protection Lawyer provide legal representation to individuals or families regarding issues such as adoption, children\'s rights, divorce, and estates and trusts', 'Family lawyer', 'khanewal', 'upload/p2.jpg'),
(16, 'Fuqan Zahid', 'Fuqan@gmail.com', '0393083988', 'c651148415ab2a260e6c506075c12ae3', 'Master of Dispute Resolution (MDR) From Islamabad Law College.LLB From Bahria University, Islamabad.', '5 year Experience Criminal Defence can defend individuals who have been accused of committing a crime. By conducting research, analyze cases, and present their findings in court in an effort to gain the defendant\'s freedom or negotiate a plea bargain.', 'Criminal defence Lawyer', 'Multan', 'upload/law1.jpg'),
(18, 'Rao Usman Shahid', 'rao@gmail.com', '0345667789', '2f1fed5365c79d8fea7859dcc8788d77', 'Master of Laws (LLM) From University of Lahore.', 'We ensure the legality of commercial transactions, advising corporations on their legal rights and duties, including the duties and responsibilities of corporate officers', 'Corporate Lawyer', 'Lahore', 'upload/download.jpg'),
(19, 'Muzamil Ali', 'muzamil@gmail.com', '0333884768', '86318e52f5ed4801abe1d13d509443de', 'Master of Laws (L.L.M.) From Islamia University, Bahawalpur', '5 Year Experience as Corporate Lawyer experts in commercial law. We are ensuring a company’s transactions comply with corporate laws and regulations.', 'Corporate Lawyer', 'Khanewal', 'upload/law5.jpg'),
(20, 'Saeed Hamza', 'humzashah@gmail.com', '03786789976', 'efcde95d17d6417fdb4675b3eedc6c19', 'LLB From ROYAL Education & Law College', '3 Year Experience as an Immigration Lawyer interpret and provide advice on migration, citizenship and business immigration issues, political asylum, and on the processes through which people may secure travel, work or student visas.', 'Immigration Lawyer', 'Sahiwal', 'upload/law3.jpg'),
(21, 'Abdul Rehman', 'abdul@gmail.com', '0342494849', 'b86bb59cddf35f94c2bf4cebb065e366', 'Master of Laws (LLM) From University of Lahore.', '5 Year Experience as aTax attorneys advise individuals, businesses, and government agencies on taxes, tax laws, tax disputes, and accounting matters,research legal issues, interpret tax laws, discuss and write reports about their findings, and prepare and', 'Tax Lawyer', 'Sahiwal', 'upload/team-member-8.png'),
(22, 'Rao Asad', 'raoasad@gmail.com', '034678908', '140b543013d988f4767277b6f45ba542', 'Master of Laws (LLM) From University of Gujrat', '2 Year Experience as a Estate law attorney help our clients determine the specific distribution of their estate. We also provide counsel for those seeking to establish a trust where assets are set aside for a future beneficiary. Drafting wills, trusts and', 'Estate Planning Lawyer', 'Sahiwal', 'upload/law4.jpg'),
(23, 'Kahif Nisar', 'kashif@gmail.com', '0307557725', 'dafe51d37cec7495f78992b8ae82f5e0', 'LLB From ROYAL Education & Law College', '6 Year Experience dealing with the legal business issues like Protection of Intellectual Property.Employee-related Issues like Employee Classification. Termination of Employment. Discrimination. Information Sharing. Foreign Work Policies.', 'Business Lawyer', 'Multan', 'upload/law9.jpg'),
(24, 'Faizan Ali', 'faizan@gmail.com', '0389076778', '86318e52f5ed4801abe1d13d509443de', 'Master of Laws From University of Lahore.', '3 Year practice experience as a Family law protection Lawyer provide legal representation to individuals or families regarding issues such as adoption, children rights, divorce, and estates and trusts.', 'Family Lawyer', 'Multan', 'upload/law8.jpg'),
(25, 'Nouman Akram', 'nouman@gmail.com', '0306987267', '3248f28c2b5f704b8c214924b7218f11', 'Master of Laws (L.L.M.) From Islamia University, Bahawalpur', '3 Year Experience as a Criminal defence Lawyer.work to defend individuals, organizations, and entities that have been charged with a crime.', 'CRIMINAL DEFENCE LAWYER', 'Multan', 'upload/law7.jpg'),
(26, 'Zeshan Kalid', 'zeshan@gmail.com', '0354339390', '794761a765ceca759536a1bf39100142', 'Juris Doctor (JD) From Hamdard University. LLB From University of Sargodha.', '7 Year of Experience of handle cases involving contracts and property between individuals, government and businesses.', 'CIVIL LAWYER', 'Lahore', 'upload/law2.jpg'),
(27, 'Muhammad Umair', 'umair@gmail.com', '0387638904', 'dafe51d37cec7495f78992b8ae82f5e0', 'Master of Laws (LLM) From University of Lahore.', '6 Year Experience as a Criminal Defence Lawyer can defend individuals who have been accused of committing a crime.', 'Criminal Defence Lawyer', 'Kabirwala', 'upload/images (1).jpg'),
(28, 'Irshad Ahmad', 'irshad@gmail.com', '0344679087', '61243c7b9a4022cb3f8dc3106767ed12', 'LLB From Bahria University, Islamabad', 'We ensure the legality of commercial transactions, advising corporations on their legal rights and duties, including the duties and responsibilities of corporate officers', 'Corporate Lawyer', 'MianChanu', 'upload/model-2911331_1280.jpg'),
(29, 'Sara Khan', 'sara@gmail.com', '0344334432', '9e95f6d797987b7da0fb293a760fe57e', 'LLB From Muhammad Ali Jinnah Law College', '4 Year Experience as a Family lawyers provide legal representation to individuals or families regarding issues such as adoption, children rights, divorce, and estates and trusts.', 'Family Lawyer', 'Lahore', 'upload/aurelie-berger-884272_1280.jpg'),
(30, 'Umza Pashah', 'umza@gmail.com', '0333789900', '4f81f26adf71cd6c8c75101ab7c97206', 'LLB From Bahria University, Islamabad', '6 Year Experience dealing with the legal business issues like Protection of Intellectual Property.Employee-related Issues like Employee Classification. Termination of Employment. Discrimination. Information Sharing. Foreign Work Policies.', 'Business Lawyer', 'Kabirwala', 'upload/female-836109_1280.jpg'),
(31, 'Kabir Afzal', 'kabir@gmail.com', '0335948990', '919864a40f3154bace897117e0e2387e', 'Master of Laws From University of Lahore.', '3 Year Experience as an Immigration Lawyer interpret and provide advice on migration, citizenship and business immigration issues, political asylum, and on the processes through which people may secure travel, work or student visas.', 'Immigration Lawyer', 'MianChanu', 'upload/business-man-1125324_1280.jpg'),
(32, 'Javed Shabir', 'javed@gmail.com', '034563456', '6cdb80d2e97f4aaf5c057c420e48e29d', 'Master of Laws (L.L.M.) From Islamia University, Bahawalpur', '5 year experience as a Child Protection Lawyer in Khanewal. 2 year experience as a Family Lawyer Handle legal issues like Marriage, Home violence, Divorce etc.', 'Child Protection Lawyer', 'Kabirwala', 'upload/suits-3396684_1280.jpg'),
(33, 'Arslan javeed', 'arslan@gmail.com', '04i05984908', '8be30a0fd1151a70c152e889954c1a8e', 'Master of Laws (LLM) From University of Lahore.', '5 year  as Family Lawyer', 'Family Lawyer', 'Khanewal', 'upload/man-1342457_1280.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `lawyerlog`
--

CREATE TABLE `lawyerlog` (
  `id` int(255) NOT NULL,
  `lawyeremail` varchar(255) NOT NULL,
  `lawyerip` varchar(255) NOT NULL,
  `logintime` timestamp(6) NOT NULL DEFAULT current_timestamp(6),
  `logout` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lawyerlog`
--

INSERT INTO `lawyerlog` (`id`, `lawyeremail`, `lawyerip`, `logintime`, `logout`, `status`) VALUES
(1, 'su@gmail.com', '', '2020-06-28 00:55:07.969348', '', 0),
(2, 'sufi@gmail.com', '', '2020-06-28 00:55:43.839240', '', 1),
(3, 'sufi@gmail.com', '', '2020-06-28 01:07:07.866011', '', 1),
(4, 'sufi@gmail.com', '', '2020-06-28 01:18:10.634421', '', 1),
(5, 'sufi@gmial.com', '', '2020-06-28 01:30:33.865837', '', 0),
(6, 'sufi@gmail.com', '', '2020-06-28 01:30:47.563729', '', 1),
(7, 'sufi@gmail.com', '', '2020-06-28 01:40:34.892944', '', 0),
(8, 'sufi@gmail.com', '', '2020-06-28 01:40:52.105223', '', 1),
(9, 'adnan462@gmail.com', '', '2020-06-28 03:40:09.524057', '', 1),
(10, 'adnan462@gmail.com', '', '2020-06-28 03:47:14.210009', '', 1),
(11, 'adnan462@gmail.com', '', '2020-06-28 04:04:48.034027', '', 0),
(12, 'adnan462@gmail.com', '', '2020-06-28 04:05:12.832960', '', 1),
(13, 'adnan462@gmail.com', '', '2020-06-29 06:06:37.735026', '', 1),
(14, 'adnan462@gmail.com', '', '2020-06-29 06:24:14.257862', '', 1),
(15, 'adnan462@gmail.com', '', '2020-06-29 06:52:03.095614', '', 0),
(16, 'adnan462@gmail.com', '', '2020-06-29 06:52:12.430836', '', 1),
(17, 'adnan462@gmail.com', '', '2020-06-29 10:39:55.278027', '', 1),
(18, 'adnan462@gmail.com', '', '2020-06-29 15:47:43.223396', '', 1),
(19, 'adnan462@gmail.com', '', '2020-06-30 04:38:03.946689', '', 1),
(20, 'zohaib@gmail.com', '', '2020-07-05 07:14:54.588056', '', 0),
(21, 'zohaib@gmail.com', '', '2020-07-05 07:15:26.968773', '', 0),
(22, 'zohain@gmail.com', '', '2020-07-05 07:15:59.871772', '', 1),
(23, 'zohaib@gmail.com', '', '2020-07-05 11:03:29.791578', '', 1),
(24, 'shoaib@gmail.com', '', '2020-07-06 09:44:58.960798', '', 1),
(25, 'mohsin@gmail.com', '', '2020-07-06 10:03:03.724121', '', 1),
(26, 'sohaib@gmail.com', '', '2020-07-06 12:26:10.447840', '', 0),
(27, 'shoaib@gmail.com', '', '2020-07-06 12:26:48.059172', '', 0),
(28, 'zohaib@gmail.com', '', '2020-07-06 12:27:31.165816', '', 1),
(29, 'irfan@gmail.com', '', '2020-07-07 06:53:30.317528', '', 1),
(30, 'usman@gmail.com', '', '2020-07-07 06:57:47.138045', '', 1),
(31, 'mohsin@gmail.com', '', '2020-07-09 18:48:37.601559', '', 1),
(32, 'mohsin@gmail.com', '', '2020-07-09 19:10:23.608220', '', 1),
(33, 'mohsin@gmail.com', '', '2020-07-10 08:35:52.579317', '', 1),
(34, 'humza@gmail.com', '', '2020-07-10 08:39:03.917472', '', 1),
(35, 'mohsin@gmail.com', '', '2020-07-10 14:07:21.500489', '', 1),
(36, 'humza@gmail.com', '', '2020-07-10 14:07:44.752245', '', 1),
(37, 'malik@gmail.com', '', '2020-07-10 14:19:19.701043', '', 1),
(38, 'malik@gmail.com', '', '2020-07-10 18:18:04.677868', '', 1),
(39, 'malik@gmail.com', '', '2020-07-10 18:56:57.041058', '', 1),
(40, 'malik@gmail.com', '', '2020-07-11 05:07:54.551586', '', 1),
(41, 'malik@gmail.com', '', '2020-07-11 06:27:15.493265', '', 1),
(42, 'malik@gmail.com', '', '2020-07-11 09:19:06.908554', '', 1),
(43, 'malik@gmail.com', '', '2020-07-11 15:09:35.235510', '', 1),
(44, 'zohaib@gmail.com', '', '2020-07-12 06:27:05.896508', '', 1),
(45, 'shoaib@gmail.com', '', '2020-07-12 15:29:09.644396', '', 1),
(46, 'zohaib@gmail.com', '', '2020-07-13 05:20:17.575339', '', 1),
(47, 'zohaib@gmail.com', '', '2020-07-18 12:29:04.007427', '', 1),
(48, 'usman@gmail.com', '', '2020-07-18 12:38:52.223148', '', 0),
(49, 'usman@gmail.com', '', '2020-07-18 12:39:07.384039', '', 1),
(50, 'usman@gmail.com', '', '2020-07-18 12:51:06.054386', '', 1),
(51, 'usman@gmail.com', '', '2020-07-18 13:02:14.296474', '', 1),
(52, 'usman@gmail.com', '', '2020-07-18 13:09:53.567307', '', 1),
(53, 'Fuqan@gmail.com', '', '2020-07-21 16:56:29.665292', '', 1),
(54, 'samra@gmail.com', '', '2020-07-24 10:43:36.594924', '', 1),
(55, 'rao@gmail.com', '', '2020-07-26 17:34:13.898932', '', 1),
(56, 'zohaib@gmail.com', '', '2020-07-27 12:27:30.002468', '', 1),
(57, 'muzamil@gmail.com', '', '2020-07-28 09:12:01.829949', '', 1),
(58, 'muzamil@gmail.com', '', '2020-07-28 09:55:53.013052', '', 1),
(59, 'Fuqan@gmail.com', '', '2020-07-28 09:56:48.160241', '', 1),
(60, 'muzamil@gmail.com', '', '2020-07-28 10:01:28.977695', '', 1),
(61, 'Fuqan@gmail.com', '', '2020-07-28 10:02:07.960778', '', 1),
(62, 'humzashah@gmail.com', '', '2020-07-28 10:08:41.474593', '', 1),
(63, 'abdul@gmail.com', '', '2020-07-28 10:19:17.463889', '', 1),
(64, 'raoasad@gmail.com', '', '2020-07-28 10:25:56.968078', '', 1),
(65, 'kashif@gmail.com', '', '2020-07-28 10:39:37.203467', '', 1),
(66, 'faizan@gmail.com', '', '2020-07-28 10:46:09.046330', '', 1),
(67, 'faizan@gmail.com', '', '2020-07-28 10:53:56.180172', '', 1),
(68, 'nouman@gmail.com', '', '2020-07-28 10:58:39.871982', '', 1),
(69, 'zeshan@gmail.com', '', '2020-07-28 11:01:51.039053', '', 1),
(70, 'umair@gmail.com', '', '2020-07-28 11:06:29.194403', '', 1),
(71, 'umair@gmail.com', '', '2020-07-28 11:16:36.511656', '', 1),
(72, 'irshad@gmail.com', '', '2020-07-28 11:34:29.606399', '', 1),
(73, 'sara@gmail.com', '', '2020-07-28 11:46:21.074417', '', 1),
(74, 'umza@gmail.com', '', '2020-07-28 11:52:16.972396', '', 1),
(75, 'kabir@gmail.com', '', '2020-07-28 11:55:31.135532', '', 1),
(76, 'javed@gmail.com', '', '2020-07-28 12:13:04.717370', '', 1),
(77, 'zohaib@gmail.com', '', '2020-07-29 09:13:56.489382', '', 1),
(78, 'zohaid@gmail.com', '', '2020-07-30 02:29:00.048336', '', 0),
(79, 'zohaib@gmail.com', '', '2020-07-30 02:29:30.724817', '', 1),
(80, 'zohaib@gmail.com', '', '2020-07-30 04:52:19.907260', '', 1),
(81, 'zohaib@gmail.com', '', '2020-07-31 19:21:18.962142', '', 1),
(82, 'zohiab@gmail.com', '', '2020-08-03 07:38:35.692438', '', 0),
(83, 'zohaib@gmail.com', '', '2020-08-03 07:38:51.139355', '', 1),
(84, 'arslan@gmail.com', '', '2020-08-04 12:34:54.384493', '', 1),
(85, 'zohaib@gmail.com', '', '2020-08-04 13:27:00.839029', '', 1),
(86, 'zohaib@gmail.com', '', '2020-08-04 13:37:09.636405', '', 0),
(87, 'zohaib@gmaill.com', '', '2020-08-11 05:29:26.727314', '', 0),
(88, 'arsalan@gmail.com', '', '2020-08-11 05:29:59.811235', '', 0),
(89, 'arslan@gmail.com', '', '2020-08-11 05:30:12.610279', '', 1),
(90, 'arslan@gmail.com', '', '2020-08-21 11:30:25.659521', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` varchar(255) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `orderDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `paymentMethod` varchar(50) DEFAULT NULL,
  `orderStatus` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `userId`, `productId`, `quantity`, `orderDate`, `paymentMethod`, `orderStatus`) VALUES
(7, 5, '1', 1, '2020-06-25 13:46:27', 'COD', NULL),
(8, 5, '4', 1, '2020-06-25 16:25:55', 'Internet Banking', NULL),
(9, 5, '15', 1, '2020-06-25 16:31:52', 'COD', NULL),
(10, 5, '4', 1, '2020-06-26 01:11:09', 'COD', NULL),
(11, 5, '4', 1, '2020-06-26 01:26:12', 'COD', NULL),
(12, 6, '24', 1, '2020-06-30 04:45:04', 'COD', NULL),
(13, 7, '2', 1, '2020-07-21 16:53:18', 'COD', NULL),
(14, 8, '24', 1, '2020-07-24 10:38:53', 'COD', 'Delivered'),
(15, 8, '24', 1, '2020-07-24 10:38:59', 'COD', 'Delivered'),
(16, 9, '25', 1, '2020-07-31 19:19:27', 'COD', NULL),
(17, 9, '26', 2, '2020-08-04 09:42:01', 'Internet Banking', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ordertrackhistory`
--

CREATE TABLE `ordertrackhistory` (
  `id` int(11) NOT NULL,
  `orderId` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `remark` mediumtext DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordertrackhistory`
--

INSERT INTO `ordertrackhistory` (`id`, `orderId`, `status`, `remark`, `postingDate`) VALUES
(5, 14, 'in Process', 'your oder will deliver soon', '2020-07-24 10:40:52'),
(6, 14, 'Delivered', 'delivered', '2020-07-25 04:56:33'),
(7, 15, 'Delivered', 'delivered', '2020-07-25 04:57:19');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category` int(11) NOT NULL,
  `subCategory` int(11) DEFAULT NULL,
  `productName` varchar(255) DEFAULT NULL,
  `productCompany` varchar(255) DEFAULT NULL,
  `productPrice` int(11) DEFAULT NULL,
  `productPriceBeforeDiscount` int(11) DEFAULT NULL,
  `productDescription` longtext DEFAULT NULL,
  `productImage1` varchar(255) DEFAULT NULL,
  `productImage2` varchar(255) DEFAULT NULL,
  `productImage3` varchar(255) DEFAULT NULL,
  `shippingCharge` int(11) DEFAULT NULL,
  `productAvailability` varchar(255) DEFAULT NULL,
  `postingDate` timestamp NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category`, `subCategory`, `productName`, `productCompany`, `productPrice`, `productPriceBeforeDiscount`, `productDescription`, `productImage1`, `productImage2`, `productImage3`, `shippingCharge`, `productAvailability`, `postingDate`, `updationDate`) VALUES
(2, 3, 0, 'Residential Lease Agreement', 'Kachari', 400, 0, '<div class=\"_2PF8IO\" style=\"box-sizing: border-box; margin: 0px 0px 0px 110px; padding: 0px; flex: 1 1 0%; color: rgb(33, 33, 33); font-family: Roboto, Arial, sans-serif; font-size: 14px;\"><ul style=\"box-sizing: border-box; margin-bottom: 0px; margin-left: 0px;\"><li class=\"_1tMfkh\" style=\"box-sizing: border-box; margin: 0px; padding: 0px 0px 8px 16px; list-style: none; position: relative;\"><br></li></ul></div>', 'lease1.png', 'lease2.png', 'lease3.png', 0, 'In Stock', '2017-01-30 16:59:00', ''),
(24, 3, NULL, 'Commercial Lease Agreement', 'Kachari', 350, 400, '<br>', 'comerciallease1.png', 'comerciallease2.png', 'comerciallease3.png', 50, 'In Stock', '2020-06-29 17:55:21', NULL),
(25, 3, NULL, 'Lease Termination Agreements', 'Kachari', 200, 0, '<br>', 'lease-termination-agreement-01.jpg', 'leaster2.png', 'leaster3.png', 50, 'In Stock', '2020-07-25 07:12:48', NULL),
(26, 5, NULL, 'Affidavit Of Death', 'Kachari', 350, 400, '<br>', 'affidavit-of-death-03.jpg', 'affidavit-of-death-09.jpg', 'affidavit-of-death-37.jpg', 50, 'In Stock', '2020-07-25 08:30:37', NULL),
(27, 3, NULL, 'Property Management Agreements', 'Kachari', 450, 500, '<br>', 'property-management-agreement-01.jpg', 'property-management-agreement-02.jpg', 'property-management-agreement-03.jpg', 50, 'In Stock', '2020-07-25 08:36:35', NULL),
(28, 6, NULL, 'Divorce Settlement Agreement', 'Kachari', 450, 0, '<br>', 'divorce-agreement-01.jpg', 'divorce-agreement-02.jpg', 'divorce-agreement-03.jpg', 50, 'In Stock', '2020-07-25 08:40:51', NULL),
(29, 5, NULL, 'Employment Contracts', 'Kachari', 400, 0, '<br>', 'employment-contract-06.jpg', 'employment-contract-09.jpg', 'employment-contract-17.jpg', 50, 'In Stock', '2020-07-26 02:29:10', NULL),
(30, 5, NULL, 'Notary Acknowledgement & Statement', 'Kachari', 300, 0, '<br>', 'notary-acknowledgement-03.jpg', 'notary-acknowledgement-05.jpg', 'notary-acknowledgement-09.jpg', 50, 'In Stock', '2020-07-26 02:33:20', NULL),
(31, 6, NULL, 'Child Support Agreement', 'Kachari', 400, 0, '<br>', 'child-support-agreement-08.jpg', 'child-support-agreement-20.jpg', 'child-support-agreement-21.jpg', 50, 'In Stock', '2020-07-26 02:39:08', NULL),
(32, 5, NULL, 'Affidavit of Identity', 'Kachari', 200, 0, '<br>', 'affidavit-of-identity-03.jpg', 'affidavit-of-identity-06.jpg', 'affidavit-of-identity-02.jpg', 50, 'In Stock', '2020-07-26 02:43:44', NULL),
(33, 5, NULL, 'Affidavit of Domicile', 'Kachari', 250, 0, '<br>', 'affidavit-of-domicile-01.jpg', 'affidavit-of-domicile-08.jpg', 'affidavit-of-domicile-20.jpg', 50, 'In Stock', '2020-07-26 02:45:53', NULL),
(34, 4, NULL, 'Professional Trust Agreement', 'Kachari', 420, 500, '<br>', 'trust-agreement-14.jpg', 'trust-agreement-05.jpg', 'trust-agreement-13.jpg', 50, 'In Stock', '2020-07-26 02:51:36', NULL),
(35, 4, NULL, 'Living Will Form', 'Kachari', 350, 0, '<br>', 'living-will-template-03.jpg', 'living-will-template-02.jpg', 'living-will-template-05.jpg', 50, 'In Stock', '2020-07-26 02:55:41', NULL),
(36, 6, NULL, 'Marriage Forms', 'Kachari', 500, 0, '<br>', 'marriage-contract-template-07.jpg', 'marriage-contract-template-03.jpg', 'marriage-contract-template-06.jpg', 50, 'In Stock', '2020-07-26 07:26:46', NULL),
(37, 5, NULL, 'Witness Statement Forms', 'Kachari', 300, 0, '<br>', 'witness-statement-form-02.jpg', 'witness-statement-form-13.jpg', 'witness-statement-form-04.jpg', 50, 'In Stock', '2020-07-26 07:31:32', NULL),
(38, 5, NULL, 'Witness Statement Forms', 'Kachari', 300, 0, '<br>', 'witness-statement-form-02.jpg', 'witness-statement-form-13.jpg', 'witness-statement-form-04.jpg', 50, 'In Stock', '2020-07-26 08:32:09', NULL),
(39, 6, NULL, 'Inheritance Affidavit', 'Kachari', 200, 300, '<br>', 'affidavit-form-01.jpg', 'affidavit-form-12.jpg', 'affidavit-form-19.jpg', 50, 'In Stock', '2020-07-26 08:36:46', NULL),
(40, 6, NULL, 'Birth Affidavit', 'Kachari', 300, 0, '<br>', 'affidavit-form-08.jpg', 'affidavit-form-12.jpg', 'affidavit-form-19.jpg', 50, 'In Stock', '2020-07-26 08:38:25', NULL),
(41, 6, NULL, 'Divorce Papers', 'Kachari', 300, 400, '<br>', 'Divorce-Papers-Template-01.jpg', 'Divorce-Papers-Template-02.jpg', 'Divorce-Papers-Template-04.jpg', 50, 'In Stock', '2020-07-26 08:45:25', NULL),
(42, 4, NULL, 'Power OF Attorney', 'Kachari', 300, 350, '<br>', 'power-of-attorney-01.jpg', 'power-of-attorney-02.jpg', 'power-of-attorney-06.jpg', 50, 'In Stock', '2020-07-26 08:47:29', NULL),
(43, 4, NULL, 'Last Will and Testament', 'Kachari', 300, 350, '<br>', 'Last-will-and-testament-template-01.jpg', 'Last-will-and-testament-template-02.jpg', 'Last-will-and-testament-template-03.jpg', 50, 'In Stock', '2020-07-26 08:49:17', NULL),
(44, 3, NULL, 'Franchise Agreement', 'Kachari', 200, 350, '<br>', 'franchise-agreement-02.jpg', 'franchise-agreement-04.jpg', 'franchise-agreement-05.jpg', 50, 'In Stock', '2020-07-26 08:56:38', NULL),
(45, 5, NULL, 'License Agreement', 'Kachari', 300, 0, '<br>', 'license-agreement-template-04.jpg', 'license-agreement-template-08.jpg', 'license-agreement-template-13.jpg', 50, 'In Stock', '2020-07-26 08:58:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reclawyer`
--

CREATE TABLE `reclawyer` (
  `id` int(255) NOT NULL,
  `rname` varchar(255) NOT NULL,
  `redu` varchar(255) NOT NULL,
  `rprac` varchar(255) NOT NULL,
  `rexp` varchar(255) NOT NULL,
  `rcity` varchar(255) NOT NULL,
  `remail` varchar(255) NOT NULL,
  `rcontact` varchar(15) NOT NULL,
  `rimage` varchar(255) NOT NULL,
  `rdes` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reclawyer`
--

INSERT INTO `reclawyer` (`id`, `rname`, `redu`, `rprac`, `rexp`, `rcity`, `remail`, `rcontact`, `rimage`, `rdes`) VALUES
(9, 'MOHSIN HAIDER', 'LLB From University of Management and Technology, Lahore', 'CRIMINAL DEFENCE LAWYER', '2 Year Experience as a Criminal defence Lawyer.work to defend individuals, organizations, and entities that have been charged with a crime.', 'khanewal', 'mohsin@gmail.com', '0348787976', 'rlawyerpic/person_8.jpg', 'Passionate with work and provide ease to client and work in his comfort zone.With 100% case Success '),
(10, 'SHOAIB AHMAD', 'LLB from Adleid University Australlia', 'BUSINESS LAYWER', '5 Year Experience dealing with the legal business issues like Protection of Intellectual Property.Employee-related Issues like Employee Classification. Termination of Employment. Discrimination. Information Sharing. Foreign Work Policies.', 'Lahore', 'shoaib@gmail.com', '0348787976', 'rlawyerpic/person_3.jpg', '50 Success Cases. 100% Trusted work Provide free Consultation anytime to the client.'),
(11, 'IRFAN SHAHID', 'LLB From Government College University, Faisalabad, Pakistan. Master of Legal Studies (MLS)', 'MILITARY DEFENCE LAWYER', '4 Year Experience as a Military Lawyer efficiently Advising military clients brought before the courts. Handling the legal discipline of military personnel. Drafting and preparing legal documents. Creating and maintaining military handbooks.', 'Sahiwal', 'irfan@gmail.com', '0354959905', 'rlawyerpic/person_2.jpg', 'Free Consultation anytime.100% Success rate in 20 solved legal cases.Trusted Legal Work '),
(12, 'FUQAN ZAHID', 'Master of Dispute Resolution From Islamabad Law College.LLB From Bahria University, Islamabad.', 'CRIMINAL DEFENCE LAWYER', '5 year Experience Criminal Defence can defend individuals who have been accused of committing a crime. By conducting research, analyze cases, and present their findings in court in an effort to gain the defendant\'s freedom or negotiate a plea bargain.', 'Multan', 'Fuqan@gmail.com', '0348787976', 'rlawyerpic/law1.jpg', '30 Successfully solved Cases.Manage all Legal documentation work.Provide Free Consultation anytime.'),
(13, 'UMZA PASHAH', 'LLB From Bahria University, Islamabad', 'BUSINESS LAWYER', '6 Year Experience dealing with the legal business issues like Protection of Intellectual Property.Employee-related Issues like Employee Classification. Termination of Employment. Discrimination. Information Sharing. Foreign Work Policies.', 'Kabirwala', 'umza@gmail.com', '0333789900', 'rlawyerpic/female-836109_1280.jpg', '50 Successful business legal Cases. Worked with famous Pak firms.Provide free Consultation,'),
(14, 'KABIR AFZAL', 'Master of Laws From University of Lahore. ', 'IMMIGRATION LAWYER', '3 Year Experience as an Immigration Lawyer interpret and provide advice on migration, citizenship and business immigration issues, political asylum, and on the processes through which people may secure travel, work or student visas.', 'MianChanu', ' kabir@gmail.com', ' 0335948990', 'rlawyerpic/business-man-1125324_1280.jpg', 'Deal with all Immigration legal. 40 Successful cases of immigration.provide free Consultation. ');

-- --------------------------------------------------------

--
-- Table structure for table `userlog`
--

CREATE TABLE `userlog` (
  `id` int(11) NOT NULL,
  `userEmail` varchar(255) DEFAULT NULL,
  `userip` binary(16) DEFAULT NULL,
  `loginTime` timestamp NULL DEFAULT current_timestamp(),
  `logout` varchar(255) DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userlog`
--

INSERT INTO `userlog` (`id`, `userEmail`, `userip`, `loginTime`, `logout`, `status`) VALUES
(25, 'raoadnan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-25 13:43:14', NULL, 0),
(26, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-25 13:46:20', '25-06-2020 07:17:32 PM', 1),
(27, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-25 16:24:23', NULL, 1),
(28, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-25 16:31:32', '25-06-2020 10:14:26 PM', 1),
(29, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-26 01:04:24', '26-06-2020 07:06:19 AM', 1),
(30, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-27 07:04:07', NULL, 0),
(31, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-27 09:31:38', '27-06-2020 02:39:32 PM', 1),
(39, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-28 03:12:13', '28-06-2020 08:38:50 AM', 1),
(40, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-29 06:53:21', '29-06-2020 11:53:55 AM', 1),
(41, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-29 06:54:10', '29-06-2020 11:54:13 AM', 1),
(42, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-29 06:54:28', NULL, 0),
(43, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-29 06:55:48', '29-06-2020 11:56:10 AM', 1),
(44, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-29 06:56:23', NULL, 0),
(45, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-29 06:56:34', '29-06-2020 11:56:37 AM', 1),
(46, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-30 04:42:24', NULL, 0),
(47, 'raoadnan462@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-30 04:42:39', NULL, 0),
(48, 'raoadnan462@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-30 04:42:59', NULL, 0),
(49, 'adnan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-30 04:43:18', NULL, 0),
(50, 'sufiyan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-06-30 04:44:37', NULL, 1),
(51, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 18:56:07', NULL, 0),
(52, 'raoadnan462@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 18:56:23', NULL, 0),
(53, 'raoadnan123@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 18:57:16', NULL, 0),
(54, 'sufiyan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-09 18:57:41', NULL, 1),
(55, 'furkan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-21 16:53:10', '21-07-2020 09:54:44 PM', 1),
(58, 'samra@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-24 10:41:32', NULL, 0),
(59, 'samra@gamil.com', 0x3a3a3100000000000000000000000000, '2020-07-24 10:41:56', '24-07-2020 03:42:36 PM', 1),
(60, 'furkan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-25 05:55:26', '25-07-2020 10:58:12 AM', 1),
(61, 'adnan@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-31 19:18:27', NULL, 0),
(62, 'subtain@gmail.com', 0x3a3a3100000000000000000000000000, '2020-07-31 19:19:22', '01-08-2020 12:20:49 AM', 1),
(63, 'subtain@gmail.com', 0x3a3a3100000000000000000000000000, '2020-08-04 09:41:52', '04-08-2020 02:51:04 PM', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `contactno` bigint(11) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `shippingAddress` longtext DEFAULT NULL,
  `shippingState` varchar(255) DEFAULT NULL,
  `shippingCity` varchar(255) DEFAULT NULL,
  `shippingPincode` int(11) DEFAULT NULL,
  `billingAddress` longtext DEFAULT NULL,
  `billingState` varchar(255) DEFAULT NULL,
  `billingCity` varchar(255) DEFAULT NULL,
  `billingPincode` int(11) DEFAULT NULL,
  `regDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `updationDate` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `contactno`, `password`, `shippingAddress`, `shippingState`, `shippingCity`, `shippingPincode`, `billingAddress`, `billingState`, `billingCity`, `billingPincode`, `regDate`, `updationDate`) VALUES
(4, 'adnan', 'raadnan@gmail.com', 1215184994, 'e10adc3949ba59abbe56e057f20f883e', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-25 13:42:06', NULL),
(5, 'adnanz', 'raoadnan123@gmail.com', 1215184994, '040b7cf4a55014e185813e0644502ea9', 'comsat university', 'punjab', 'sahiwal', 12345, 'comsat university', 'punjab', 'sahiwal', 12345, '2020-06-25 13:45:50', '29-06-2020 11:56:06 AM'),
(6, 'sufi', 'sufiyan@gmail.com', 1244677767, '68f64946f7044d4af59b3654e25a036f', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-30 04:44:09', NULL),
(7, 'furkan zahid', 'furkan@gmail.com', 345678909, 'c651148415ab2a260e6c506075c12ae3', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-21 16:52:49', NULL),
(9, 'Subtain', 'subtain@gmail.com', 0, '5ae1c881ad1d8d750f15c232a3232379', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-31 19:19:04', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `productId` int(11) DEFAULT NULL,
  `postingDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogreviews`
--
ALTER TABLE `blogreviews`
  ADD PRIMARY KEY (`reid`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyerlog`
--
ALTER TABLE `lawyerlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reclawyer`
--
ALTER TABLE `reclawyer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlog`
--
ALTER TABLE `userlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogreviews`
--
ALTER TABLE `blogreviews`
  MODIFY `reid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `lawyerlog`
--
ALTER TABLE `lawyerlog`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `ordertrackhistory`
--
ALTER TABLE `ordertrackhistory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `reclawyer`
--
ALTER TABLE `reclawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `userlog`
--
ALTER TABLE `userlog`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
