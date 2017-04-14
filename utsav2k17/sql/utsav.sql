-- phpMyAdmin SQL Dump
-- version 4.4.10
-- http://www.phpmyadmin.net
--
-- Host: localhost:8889
-- Generation Time: Mar 01, 2017 at 04:49 PM
-- Server version: 5.5.42
-- PHP Version: 7.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `utsav`
--
CREATE DATABASE IF NOT EXISTS `utsav` DEFAULT CHARACTER SET utf8 COLLATE utf8_bin;
USE `utsav`;

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `ClubName` varchar(255) DEFAULT NULL,
  `ClubID` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`ClubName`, `ClubID`) VALUES
('WESTERN MUSIC TEAM', 1),
('NINAAD (EASTERN MUSIC TEAM)', 2),
('PHOTOGRAPHY CLUB', 3),
('PRAVRUTTHI', 4),
('QUIZ CLUB', 5),
('BMS DANCE CREW (BDC)', 6),
('FINE ARTS CLUB', 7),
('ENTREPRENEURSHIP DEVELOPMENT CELL (EDC)', 8),
('MOUNTAINEERING CLUB (MC)', 9),
('CHIRANTHANA', 10),
('INKSANITY - LIT TEAM, BULLZEYE', 11),
('PENTAGRAM', 12),
('ASTRONOMY CLUB', 13),
('TECH TEAM', 14),
('FASHION TEAM', 15),
('INFORMAL', 16);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `ClubID` int(255) DEFAULT NULL,
  `EventName` varchar(255) NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `RegFee` varchar(255) NOT NULL,
  `First` varchar(255) NOT NULL,
  `Second` varchar(255) NOT NULL,
  `Coordinator` varchar(255) NOT NULL,
  `Contact` varchar(255) NOT NULL,
  `Date` varchar(255) DEFAULT NULL,
  `Time` varchar(255) DEFAULT NULL,
  `Venue` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`ClubID`, `EventName`, `Description`, `RegFee`, `First`, `Second`, `Coordinator`, `Contact`, `Date`, `Time`, `Venue`) VALUES
(12, '?rates of maths', 'Enjoy the adventure, to find ''x'' ;)<br/>\nTeams of two.<br/>\nAn exciting virtual treasure hunt to be completed. <br/>\nInvolving Simple math and logic.<br/>\nFastest two teams to complete the Treasure hunt will be awarded<br/>\nHave a good time, travelling with numbers!<br/>\n', '100/team', '1500/team', '1000/team', 'Swaroop Joshi', '9206122691', '1st April', '2pm to 4pm', 'PG Block,4th floor'),
(2, 'Acapella', 'Maximum 8 members. <br/>\n10+2 minutes (including set up time). <br/>\nNo language barrier.<br/>', '350/team', '3000', '2000', 'Prarthana', '9036206718', '2nd April', '3 to 5 pm', 'MPH'),
(9, 'Amazing task race  (Adrenaline Junkyard)', 'Activities will include Commando Crawl, Night Line, Zumaring, etc. <br/>\nTwo rounds. <br/>\nKnockout round: The top teams in this round are promoted to next round. <br/>\nTwo participants per team. <br/>\nThe team with the fastest time wins.<br/>', '200', '4000', '2000', 'Aashish.R	', '7259493431', '31st March', '8am to 4pm', 'arena'),
(10, 'Antyakshari', '೧)ಒಂದು ತಂಡದಲ್ಲಿ ೨ ಸ್ಪರ್ಧಿಗಳು.<br/>\r\n೨)ಲಿಖಿತ ಪೂರ್ವಭಾವಿ ಸುತ್ತು.<br/>\r\n೩)ಆಯ್ಕೆಗೊಂಡ ೫ ತಂಡಗಳಿಗೆ ಅಂತಿಮ ಸುತ್ತಿಗೆ ಪ್ರವೇಶ.<br/>', '120/team of 2', '1500', '1000', 'Shreesh Kulkarni', '9066466179', '2nd April', '2pm to 4 pm', 'Library auditorium'),
(14, 'App Up', 'App Development Event<br/>\nIndividual Event or team of 2.<br/>\nParticipants will be provided with 12 features, the team to develop it first wins.<br/>\nSelected Participants will have to give a live demo on the day of the event in front of a panel of judges.<br/>\nParticipants will be questioned on their presentation and app.<br/>\nShortlisted participants will be judged on content, originality, design and significance of the app.<br/>\nOrganizer?s decision is final.<br/>\n', '200', '2000', '1000', 'Yash Gupta', '8100852800', '2nd April', '11am to 4pm', 'IS Lab'),
(5, 'Arbit Quiz', '3 members per team. <br/>\nCross college teams allowed. <br/>\n8 team finals. <br/>\nWritten prelims (AV).<br/>', '100/team of 3', '4000', '2000', 'Yogesa Metla', '8762511006', '2nd April', '2pm to 7pm', 'BSN Hall'),
(8, 'B-Plan ', 'Start-ups have to pitch their ideas and business plans to VCs and GLOBAL INVESTORS<br/>\nGroups of 4-5<br/>', '200', '30000', '15000', 'Akshay Acharya', '9740776038', '1st April', '11am to 4pm', 'MESH'),
(1, 'Battle of Bands', '-Maximum of 8+4 will be provided including set up time. \n-Performances should be in English only. \n-In case of own composition, a copy of lyrics should be provided. \n-Bands will be disqualified if obscenity or foul language is found being used. \n-Band mem', '800', '12000', '8000', 'Sourabh TK', '9035186373', '1st April', '1pm to 4pm', 'Main Stage'),
(2, 'Battle of Bands(eastern)', 'Number of participants in band : max 10. <br/>\nDuration 20 minutes (including sound check and set up). <br/>\nDrumkit will be provided <br/>\nAtleast one representative of the band must be present at the beginning of the event for slot picking. <br/>\nNo vulgarity, No english compositions.<br/>', '600/band', '8000', '5000', 'Pramath', '9741527464', '2nd April', '10 to 1pm', 'Main Stage'),
(1, 'Beatboxing 1 on 1', 'Top 32 BeatBoxers will have a 1.5 minute showcase. <br/>\nTop 16 battle it out to top 8. <br/>\nEach person battles one other. <br/>\n2 throw downs.<br/>\nTop 8 will take part in a 7 to smoke competition.<br/>\n', '100', '7500', '5000', 'Niyanth Vidi ', '9902000295', '1st April and 2nd April', '1pm to 4pm(April 1st)\n5pm to 8pm(April 2nd)', 'Indoor Stadium'),
(1, 'Beatboxing 2 on 2', 'Top 8 teams will be chosen. <br/>\nKnock out battle. <br/>\nTwo throwdowns. <br/>\nTime limit: 3 minutes each.<br/>', '200', '7500', '5000', 'Niyanth Vidi ', '9902000295', '1st April and 2nd April', '1pm to 4pm(April 1st)\n5pm to 8pm(April 2nd)', 'Main Stage'),
(8, 'Beg Borrow Startup', 'Groups of 3-4<br/>\nRound 1: Follows the basic structure of ''Beg Borrow Steal'' where the team has to procure the most bizarre item possible in a given time limit.<br/>\nRound 2: Participants would be required to market that bizarre item using famous internet challenges or with their own quirky campaigns.<br/>\nRound 3: Final round comprises a ''Crowd Pitch'' where the startup product must be pitched to the crowd. Winner would be chosen by the audience.<br/>', '100', '5000', '3000', 'Brundha', '9611805472', '1st April', '1pm to 5pm', 'MPH'),
(12, 'Beyond Infinity', 'Welcome to the proper fraction'' <br/>\nTeams of two <br/>\nInvolving fun aptitude and logical math.<br/>\nA first preliminary pen-paper round to select 3-6 teams. <br/>\nNext, the final round which is a buzzer round<br/>', '100/team', '1500', '1000', 'Atul Bhushan', '9430887937', '1st April', '10am to 1pm', 'EC-6002'),
(8, 'Biz Quiz', '1st round is basic general questions on how business works. <br/>\n2nd round would be finalists with highest score, battling out in a rapid fire.<br/>\nTeams of 2-3.<br/>', '50', '3000', '1500', 'Job Joseph', '7259680730', '2nd April', '12pm to 3pm', 'RK hall'),
(4, 'BMS Talkies(Short Film Making)', 'The theme is "bengaluru". <br/>\nMaximum of 6 people can be credited. <br/>\nThe film shall not exceed more than 10+2 minutes including the end credits.<br/> \nFilms exceeding this time limit are liable to be rejected.<br/> \nFilm may be in Kannada English or Hindi. <br/>\nLast date to submit your film is 31/03/2017.<br/> \nThe film must be in mp4 format<br/>', '300', '4000', '2000', 'Kaushik K', '7406678055', '2nd April', '10 to 2 pm', 'FDC Hall'),
(10, 'Chakravyuha', '೧)ಒಂದು ತಂಡದಲ್ಲಿ ೨ ಸ್ಪರ್ಧಿಗಳು.<br/>\r\n೨)ಪೂರ್ವಭಾವಿ ಸುತ್ತು ಪದಬಂಧ ಹಾಗೂ ಅಕ್ಷರಗಳಿಗೆ ಸಂಭದಿಸಿರುತ್ತದೆ.<br/>\r\n೩)ಆಯ್ಕೆಗೊಂಡ ೬ ತಂಡಗಳಿಗೆ ಅಂತಿಮ ಸುತ್ತಿಗೆ ಪ್ರವೇಶ.<br/>', '100/team of 2', '1500', '1000', 'Shridhar DK', '7760309963', '2nd April', '3pm to 5pm', 'MESH'),
(10, 'Charchaspardhe', '೧) ವೈಯಕ್ತಿಕ ಪಾಲ್ಗೊಳ್ಳುವಿಕೆ.<br/>\r\n೨)ಪೂರ್ವಭಾವಿ ಸುತ್ತಿನ ಸಮಯಾವಕಾಶ ೩+೧ ನಿಮಿಷ, ಕೊಟ್ಟಿರುವ ವಿಷಯದ ಮೇಲೆ ಸ್ಪರ್ಧಿಗಳು ಪರ ಅಥವಾ ವಿರೋಧವಾಗಿ ಮಾತನಾಡಬೇಕು.<br/>\r\n೩)ಪೂರ್ವಭಾವಿ ಸುತ್ತಿನ ವಿಷಯ ಒಂದು ದಿನ ಮುಂಚಿತವಾಗಿ ಕೊಡಲಾಗುವುದು.<br/>\r\n೪)ಅಂತಿಮ ಸುತ್ತಿನ ಸಮಯಾವಕಾಶ ೩+೧ ನಿಮಿಷ, ಕೊಟ್ಟಿರುವ ವಿಷಯದ ಮೇಲೆ ಸ್ಪರ್ಧಿಗಳು ಪರ ಅಥವಾ ವಿರೋಧವಾಗಿ ಮಾತನಾಡಬೇಕು.', '50', '1000', '500', 'Bhuvana Hegde', '8277751139', '2nd April', '1pm to 3pm', 'MESH'),
(2, 'Classical (Vocal) Solo', 'Both Hindustani and Carnatic forms are allowed. <br/>\nTime limit: 7+1 min.<br/>', '100', '3000', '2000', 'Harish', '9663471552', '1st April', '10 to 1 pm', 'FDC Hall'),
(14, 'Coding/Debugging', 'Individual Event.<br/>\nTotal Rounds: 2.<br/>\nTeam Event.<br/>\nRound 1: Elimination Round<br/>\nWritten round.<br/>\nYou are given 40 objective-type questions and 60 minutes.<br/>\nRound 2: Final Round<br/>\nFew algorithmic and practical problems of varying difficulty levels in 90 minutes.<br/>\nPoints are awarded based on the following criteria, Solution correctness, Solution performance.<br/>\nOrganizer?s decision is final.<br/>', '100', '2000', '1000', 'Yash Gupta', '8100852800', '1st April', '10am to 1pm', 'MCA Lab'),
(14, 'Counter Strike GO', 'Maximum of 5 players in a team.<br/>\nMaps will be decided on spot.<br/>\nNo re-registration for a team is allowed.<br/>\nA person can play in only one team. If this rule is violated, one of the\nteams will be disqualified and refund will not be provided.<br/>\nExternal mouse/keyboard is allowed from round 2 only.<br/>           \nOn spot registrations are open on day 1 only.<br/>\nCoordinator?s decision is final. No arguments are allowed.<br/>', '250', '2500', '1500', 'Shishir Udupa', '9901398823', '1st and 2nd April', '11am to 4pm', 'IS Lab'),
(11, 'Creative Writing', 'Pen down your creative side on paper and wow the judges.<br/>', '50', '1500', '750', 'Manasi Shanbhag', '8762314871', '1st April', '10am to 12pm', 'PG Block,4th floor'),
(6, 'Crew on Crew Turtle Jam', '2 Rounds. <br/>\nRound 1: Choreography. <br/>\nRound 2: Crew vs. Crew battle. <br/>\nTime limit for Round 1 is 5+2 minutes. <br/>\nMaximum of 12 members per team. <br/>\nMusic should be on a CD or a pen drive and should be submitted one hour prior to the event.<br/>', '1000', '25000', '15000', 'Akshay C S', '8095690426', '2nd April', '12 to 5 pm', 'Indoor Stadium'),
(8, 'Cultural Sante', 'A spree of differently themed events happening simultaneously. <br/>\nBe it musicians jamming, or painters setting up their work etc etc<br/>', 'FREE', 'NA', 'NA', 'Anuj Sama', '7022216884', 'All 3 days', '9am to 9pm', 'C-bench'),
(11, 'Debate', 'Guard your stance closely and prove your point.<br/>Standard rules of debate apply.<br/>\n', '50', '1500', '750', 'Aravindh Krishnan', '8197317663', '2nd April', '12pm to 2pm', 'MV Hall'),
(14, 'DOTA 2', 'Team of 5 members.<br/>\nA player is allowed to play only for one team.<br/>\nPlayers are allowed to bring their own keyboards/mouse.<br/>\nGames will be in cm mode.<br/>\nOrganizer?s decision is final.<br/>', '300', '3000', '1500', 'Bharath R', '8792458460', '1st and 2nd April', '11am to 4pm', 'CS Lab'),
(8, 'E-Talks', 'A talk by the successful entrepreneurs from all over the country, sharing their journey and their roadblocks<br/>', 'FREE', 'NA', 'NA', 'Sarthak Goyal', '9035840614', '2nd April', '12pm to 4pm', 'Library Auditorium'),
(6, 'Eastern Group Dance', '8-12 dancers in a team. <br/>\nTime limit: 5+1 minutes. <br/>\nVideo screening will be held before the final performance on the stage. <br/>\nBollywood style & semi- classical is not allowed. <br/>\nOnly Indian style or contemporary dance form is allowed.<br/>\nMaximum of 1 minute will be allowed for stage setting.<br/>\nThe music tracks should be on a pen drive only and should be submitted 1 hour prior to the event.<br/>\nProps are allowed (any kind of fluid, heavy objects or flames are not permitted).<br/>\nNo profanity is to be displayed.<br/>', '800', '12000', '8000', 'Amulya D R', '9632536528', '31st March', '7 to 9pm', 'Main stage'),
(7, 'Facer Town ( Face painting )', '2 contestants per team. <br/>\nBring your own materials (Sponge and glitters can also be used). <br/>\nTheme will be decided on spot. <br/>\nIt could be face art or cheek art.<br/> \nTime provided : 1hour 30 min<br/>', '70/team of 2', '2000', '1000', 'Avinash ', '8548874566', '2nd April', '2 to 4 pm', 'CR Block 101'),
(15, 'Fashion Show', 'Fashion is much more than glamour, the attractive costumes, the alluring models on the ramp.. What matters is one''s grace and ability to carry one''s self elegantly! Think you have it in you? Do you think you can own the stage?Then we''ll give you the stage at Utsav 2017!<br/>\nMin - 10 members, Max - 16 members.<br/>\nTheme: Open theme.<br/>\nDuration: 9+2 minutes.<br/>\nMusic to be submitted on a pen-drive and a CD, all in mp3 format.<br/>\n2 minutes for the stage setup(inc in 9+2).<br/>\nParticipants must report 2 hours before the show.<br/>\nNo fire, animals or hazardous props allowed.<br/>\nSlots based on chit system.<br/>\nParticipants must send screenshots and videos on or before 28th March 2015.<br/>', '1700', '30000', '18000', 'Aishani Pandey', '9108290129', '1st April', '5pm to 8pm', 'Main Stage'),
(1, 'Female Beatboxing', 'Knock out battle. <br/>\nTwo throwdowns. <br/>\nTime limit: One minute each.<br/>', '50', '3000', '2000', 'Niyanth Vidi ', '9902000295', '1st April and 2nd April', '1pm to 4pm(April 1st)\n5pm to 8pm(April 2nd)', 'Main Stage '),
(14, 'FIFA 12', 'Controllers are allowed.<br/>\nRe ? registration is allowed only during first round.<br/>\nNo refund of any sort will be made.<br/>\nAll rounds are 1 on 1, Winner qualifies to the next round.<br/>\nOrganizer?s decision is final.<br/>   \n', '100', '2000', '1000', 'Arihant Surana', '9901316067', '1st and 2nd Apri', '11am to 4pm', 'CS Lab'),
(5, 'General Quiz', '3 members per team. <br/>\nCross college teams allowed. <br/>\n8 team finals. <br/>\nWritten prelims (AV).<br/>', '100/team of 3', '4000', '2000', 'Anand Krishnan', '9449340844', '1st April', '2 to 7 pm', 'BSN Hall'),
(16, 'Hogathon', 'The player must not spill any food.<br/>\nThe player who finishes the food the \nfastest qualify to the next round.<br/>\n3 rounds.<br/>', '50', '1500', '1000', 'PRABHU N', '8867996744', '1st April', '9.30am to 4pm', 'Lawn between library and class room block'),
(5, 'India Quiz', '3 members per team. <br/>\nCross college teams allowed. <br/>\n8 team finals. <br/>\nWritten prelims (AV).<br/>', '100/team of 3', '4000', '2000', 'Rohan SK', '9980724505', '2nd April', '10am to 1pm', 'BSN Hall'),
(2, 'Instrumental Solo', 'Both percussion and non percussion allowed. <br/>\nJudgment will be separate for both the categories. <br/>\nTime limit: 5+1 min. <br/>\nParticipants should bring their own instruments. <br/>\nDrums not allowed.<br/>', '150', '3000', '2000', 'Sri Sannidhi', '9483992288', '2nd April', '10 to 1 pm', 'MPH'),
(8, 'IPL Auction', 'A mock IPL auction with the same system of budget, players and teams of IPL 2016.<br/>\nA fixed amount of money is given to the team, along with player stats.<br/>\nLive bidding.<br/>\nThe best IPL team wins.<br/>\nTeams of 2-3.<br/>\n', '100', '5000', '3000', 'Sarthak Goyal', '9035840614', '2nd April', '10am to 12pm', 'Library Auditorium'),
(11, 'JAM', 'Are you a loud mouth? Do you have what it takes to speak continuously for a minute without any speech defects? Jam is the event for you.<br/>', '50', '1000', '500', 'Sneha Priya', '9611569054', '1st April', '12pm to 2pm', 'RK hall'),
(7, 'Junk down the line (Best out of waste)', '2 or 3 contestants per team. <br/>\nBring Basic materials(like glue, paint, paper,plastic etc) and make something useful from it. <br/>\nParticipants are supposed to involve the use of plastic as their main material. <br/>\nTime provided : 1 hr 30 min<br/>', '100/team of 3', '2500', '1500', 'Shreyas', '8105931079', '2nd April', '11am to 1 pm', 'CR Block 101'),
(8, 'Marketing genius', 'Set of products is given to the participants, which in turn have to be marketed and sold at the best rate to crowd present at Utsav.<br/>\nIndividual event<br/>', '100', '3000', '1500', 'Aniruddha M N', '9731821735', '1st April', '12pm to 3pm', 'CR Block 101'),
(14, 'Mini Militia', 'Individual Event<br/>\nParticipants can bring their own cell phones.<br/>\nRe-registration is allowed only during the first round.<br/>\nNo refund of any sort will be made.<br/>\nOrganizer?s decision is final.<br/>', '100', '1000', '500', 'Udyanth Vaidya', '9108458869', '1st and 2nd April', '11am to 4pm', 'Internet lab'),
(10, 'Mookabhinaya', '೧)ಒಂದು ತಂಡದಲ್ಲಿ ೩ ಸ್ಪರ್ಧಿಗಳಿರಬೇಕು.<br/>\r\n೨)ಅಭಿನಯದಿಂದ ಕೊಟ್ಟ ವಿಷಯದ ಸೂಚನೆ.<br/>\r\n೩)ಪೂರ್ವಭಾವಿ ಸುತ್ತಿನಲ್ಲಿ ಆಯ್ಕೆಗೊಂಡ ೫ ತಂಡಗಳಿಗೆ ಅಂತಿಮ ಸುತ್ತಿಗೆ ಪ್ರವೇಶ.<br/>\r\n೪)ಯಾವುದೇ ರೀತಿಯಲ್ಲಿ ಮೌಖಿಕವಾಗಿ ಸೂಚಿಸುವಂತಿಲ್ಲ, ಪದಗಳನ್ನು ಒಡೆದು ಸೂಚಿಸುವಂತಿಲ್ಲ.<br/>', '120/team of 3', '1500', '1000', 'Navyashree R naik', '9663566747', '1st April', '11am to 1pm', 'MV hall'),
(16, 'Mr.UTSAV', 'Categories: 50-60, 60-70, 70-75, 75-85, 85+.<br/>\nMinimum of 4 contestants in each category \nor else the contestant will be put into the next category.<br/> \nContests should carry valid ID card for verification. <br/>\n3 places will be awarded in each category. <br/>\n1st place winners of each category will compete \nfor the title Mr. UTSAV.<br/>', '250', '5000', '2500', 'Muniraju Y S', '9035746162', '31st March', '7pm to 9pm', 'Stage 2 (Indoor Stadium)\n'),
(4, 'NamHans ( Mad Ads)', 'The number of participants in a group should be 6+2. <br/>\nThe time limit is 10+5. <br/>\nTeams have to make a new product name, punch line and advertise the product. <br/>\nNo language barrier. <br/>\nProps allowed. <br/>\nCaution should be taken to refrain from displaying obscenity, violence, prejudice, defamation etc in the advertisement.<br/>', '500', '8000', '4000', 'Shilpa Das', '8792229042', '1st April', '10am to 12pm', 'Main stage'),
(4, 'Natakalappa Circle (Street Play)', 'Number of participants is limited to 13 + 2. <br/>\nTime limit will be 12 minutes with 1 minute of grace time.<br/> \nNo electronic music equipment will be permitted.<br/> \nAcoustic and percussion instruments only. <br/>\nLanguages should be limited to Hindi, English Kannada.<br/> \nOnly a few lines in other languages are allowed. <br/>\nNo acts containing vulgarity and real violence will be permitted.<br/> \nNo props like chains, ropes, etc. allowed.<br/> \nOnly dupattas will be permitted. <br/>\nNo acts with fire or water. <br/>\nIn case of using gulaal, glitters, flowers, etc contestants are required to clean up after the act<br/>', '600', '8000', '4000', 'Aravindh Krishnan', '8197317663', '1st April', '12 to 2 pm', 'PG block entrance'),
(14, 'NFS Most Wanted(2005)', 'Controllers are allowed.<br/>\nRe ? registration is allowed only during first round.<br/>\nNo refund of any sort will be made.<br/>\nFirst round will be time based elimination.<br/>\nOrganizer?s decision is final.<br/>', '100', '2000', '1000', 'Rajatsinh Rathod', '9898687797', '1st and 2nd April', '11am to 4pm', 'Telecom Lab'),
(2, 'Non Classical (Vocal) Solo', 'One accompanying artist or karaoke permitted. <br/>\nTime limit is 3+1 mins.<br/>\nLight Classical pieces of Hindustani/Carnatic may be performed.<br/>\nKaraoke to be brought in phones and not on pen drives.<br/>', '150', '3000+ Recording', '2000', 'Prarthana', '9036206718', '1st April and 2nd April', '2 to 6pm', 'FDC Hall-1st April\nMV hall-2nd April'),
(9, 'Obstacle cycling competitive ', 'The participant should not rest himself on supports or trees. <br/>\nThe participant cannot put his feet on the ground. <br/>\nThe shortest time of completion is the challenge. <br/>\nThe participants will be provided with cycles. <br/>\nParticipants are expected to follow the safety instruction given by the person conducting the event. <br/>\nHe/she can do the event only once with one registration<br/>', '100', '1000', '500', 'Vikas Udupa	                      ', '8095006474', '1st and 2nd April', '10am to 4pm', 'Area between Mech block and EC Block'),
(9, 'Obstacle cycling non competitive ', 'The participant should not rest himself on supports or trees. <br/>\nThe participant cannot put his feet on the ground. <br/>\nThe shortest time of completion is the challenge. <br/>\nThe participants will be provided with cycles. <br/>\nParticipants are expected to follow the safety instruction given by the person conducting the event. <br/>\nHe/she can do the event only once with one registration<br/>', '50', 'NA', 'NA', 'Vikas Udupa        ', '8095006474', '1st and 2nd April', '10am to 4pm', 'Area between Mech block and EC Block'),
(3, 'Offline Photography Contest', 'The theme will be given on spot.<br/>\nThe participant must declare the camera(s) being used.<br/>\nThe contest is OPEN on all 3 days and closes for entries on 2nd April 2017.<br/>\nOnly basic editing is allowed. Original must be entered too.<br/>\nThe submitted images must be taken within the college campus on the day of the competition.<br/>\nThe entries must adhere to the contest theme.<br/>\nA maximum of two entries is allowed.<br/>\nThe decision of judges will be final.<br/>\nEntries will not be accepted unless the form below has been filled.<br/>\nhttp://tinyurl.com/Panorama2017<br/>', 'FREE', '2000', '1000', 'B S Vishak Nandan ', '7829250510', 'All three days', '', ''),
(6, 'One on one Turtle Jam', 'Time Limit : 1 minute. <br/>\nThe number of battles depends on the number of participants. <br/>\nProps are allowed (any kind of fluid, heavy objects or flame are not permitted). <br/>\nAny kind of obscenity will lead to disqualification.<br/>', '500', '8000', '4000', 'Yashaswini G', '8884809974', '2nd April', '10 to 5 pm', 'Indoor Stadium'),
(3, 'Online Photography Contest', 'Photo(s) submitted must be original. Plagiarism will not be tolerated.<br/>\nThere are TWO themes- ?Cityscapes?, ?Creative Nature?<br/>\nThe entries must adhere to the contest themes.<br/>\nA maximum of two entries per theme is allowed.<br/>\nThere is no entry fee.<br/>\nThe Judges? decision will be final.<br/>\nThe highest available resolution of the picture(s) must be entered.<br/>\nIf the image has been post processed, the original must be mailed along too.<br/>\nAll the entries will be showcased in an album on Facebook. The link will be sent along with the acknowledgement of entry.<br/>\n?Likes? received by the entries in the album will NOT play a role in the judging process.<br/>\nEntries will not be accepted if the following online form is not filled.<br/>\nhttp://tinyurl.com/framed2017<br/>\n', '50', '2000', '1000', 'B S Vishak Nandan ', '7829250510', '', '', ''),
(14, 'Online Treasure Hunt', 'Individual Event .<br/>\nParticipants will be provided with 1 questions,the person to crack it first wins.<br/>\nOrganizer?s decision is final.<br/>', '200', '2000', '1000', 'Yash Gupta', '8100852800', '1st April', '1pm to 5pm', 'MCA Lab'),
(3, 'Photography Symposium', '4-6 Professionals will give a talk on their genre of photography.<br/>\nThe topic is ?Bringing professional knowledge and experience to amateurs.<br/>', '100', 'NA', 'NA', 'Vishruth Cavale ', '7259369625', '1st April', '10am to 1pm', 'Library Auditorium'),
(11, 'Potpourri', 'Amalgamation of charades, taboo, pictionary and all things fun.<br/>\n(max 3 in a team)<br/>', '100', '1500', '750', 'Jahnavi Singh', '7045347621', '2nd April', '10am to 12pm', 'PG Block,6th floor'),
(13, 'Questars', 'Teams of two. Inter college teams allowed.<br/>\nOpen to both PG and UG students.<br/>\nPrelims and finals.<br/>', '100', '1500', '500', 'Diksha Shukla', '9900454259', '1st April', '10am to 1pm', 'IS-4005'),
(9, 'Rappelling 	', 'The basics about the techniques in climbing will be briefed on spot. <br/>\nParticipants are expected to follow the safety instructions. <br/>\nHe/she can do the event only once with one registration.<br/>', '50', 'NA', 'NA', 'Deepak M	', '9008019635', '1st April and 2nd April', '10am to 4pm', 'EC block wall'),
(10, 'Rasaprashne', '೧)ಒಂದು ತಂಡದಲ್ಲಿ ೨ ಸ್ಪರ್ಧಾಳುಗಳು.<br/>\r\n೨)ಲಿಖಿತ ಪೂರ್ವಭಾವಿ ಸುತ್ತು.<br/>\r\n೩)ಆಯ್ಕೆಗೊಂಡ ೫ ತಂಡಗಳಿಗೆ ಅಂತಿಮ ಸುತ್ತಿಗೆ ಪ್ರವೇಶ.<br/>', '120/team of 2', '1500', '1000', 'Divya KP', '9481202160', '2nd April', '11am to 1pm', 'MESH'),
(7, 'Shades of garden city ( Painting )', 'Theme based event. <br/>\nParticipants are to bring their own materials. <br/>\nSheets will be provided. <br/>\nUse of any paint medium is permitted. <br/>\nParticipants will have to paint according to the theme provided on spot. <br/>\nTime duration: 2hrs.<br/>', '100', '2500', '1500', 'Ayesha Fathima', '8050880237', '1st April', '11 to 1 pm', 'MPH'),
(11, 'Slam Poetry ', 'Showcase your spoken word piece within the time limit specified by the judge.<br/>', '50', '1500', '750', 'Radhika Ravikumar', '8105055765', '1st April', '10am to 12pm', 'IS-4001'),
(6, 'Solo Dance', 'It is a solo event and any form of solo dance is permitted. <br/>\nThe time limit is 3+1 minutes. <br/>\nThe music must be submitted in a pen-drive only, and should be provided well in advance. <br/>\nObscenity of any kind is not allowed and will lead to immediate disqualification.<br/>', '200', '5000', '3000', 'Sagar M Jogdanker', '9482634433', '1st April', '11am to 1 pm', 'Stage 2 (Indoor Stadium)'),
(5, 'SpEnt Quiz', '3 members per team. <br/>\nCross college teams allowed.<br/> \n8 team finals. <br/>\nWritten prelims (AV).<br/>', '100/team of 3', '4000', '2000', 'Pranav Chakradhar', '9845923226', '1st April', '10am to 1pm', 'BSN Hall'),
(8, 'Stock market', 'A virtual market will be put up.<br/>\nInvest in hypothetical companies.<br/>\nThe person with higher profit wins.<br/>\nIndividual Event<br/>', '50', '3000', '1500', 'Akshit Bhalla', '9739012754', '2nd April', '9am to 12pm', 'RK hall'),
(8, 'Stress Test', 'First round would be interview. <br/>\nSecond round would be GD. <br/>\nThird would be evaluation. <br/>\nClear all of them and be the winner<br/>', '50', '3000', '1500', 'Basheera Kunnil', '8105705105', '1st April', '9am to 11pm', 'MESH'),
(14, 'Tech-Tok', 'Technical Debate.<br/>\nIndividual Event<br/>\nParticipants need to talk about an existing piece of technology for 2 Mins.<br/>', '100', '1500', 'NA', 'Atul Bhushan', '9430887937', '1st April', '12pm to 2pm', 'EC block 1st floor CS seminar hall'),
(14, 'Technovation', 'A search for a new technology.<br/>\nIndividual Event.<br/>\nParticipants need to send a ppt (max 30 slides) on a new piece of technology that they would want to develop, to utsav.techteam@gmail.com.<br/>\nSelected participants will be required to give a live presentation in front of a panel of judges. Participants will be questioned on their presentation.<br/>\nYou will be judged based on content, design and practical significance of the idea.<br/>\nParticipants should submit the ideas before 25th of March.<br/>', '200', '2000', '1000', 'Atul Bhushan', '9430887937', '2nd April', '12pm to 2pm', 'EC block 1st floor CS seminar hall'),
(4, 'Thatt Antha Maadi (Improv)', 'Group event;Team size 3+2.<br/>\nThere are 2 rounds. <br/>\nLights /sounds will not be allowed<br/>', '250', '3000', '2000', 'Nandita Nanda', '9880420814', '2nd April', '2 to 6 pm', 'FDC Hall'),
(6, 'Two on Two Turtle Jam', 'Time Limit : 2 minutes. <br/>\nThe number of battles depends on the number of participants. <br/>\nProps are allowed (any kind of fluid, heavy objects or flame are not permitted). <br/>\nAny kind of obscenity will lead to disqualification.<br/>', '750', '15000', '8000', 'Vaishnavi Yuvaraj', '8197777691', '2nd April', '11 to 5 pm', 'Indoor Stadium'),
(9, 'Tyroline Traverse Competitive ', 'There will be two rounds. (Prelims and finals). <br/>\nParticipants aren?t entertained to take part in prelims on day 3. <br/>\nThe winners are decided on time basis and other criteria. <br/>\nParticipants are expected to follow the safety instruction given by the person conducting the event. <br/>\nHe/she can do the event only once with one registration.<br/>', '100', '1000', '500', 'Meghana Iyer	', '9901649581', '1st April and 2nd April', '10am to 4pm', 'Classroom block arena'),
(9, 'Tyroline Traverse Non Competitive 	', 'For non competitive, the basics about the techniques will be briefed to all the participants before the commencement of the individual?s turn. <br/>\nParticipants are expected to follow the safety instruction given by the person conducting the event. <br/>\nHe/she can do the event only once with one registration.<br/>', '50', 'NA', 'NA', 'Meghana Iyer	', '9901649581', '1st April and 2nd April', '10am to 4pm', 'Classroom block arena'),
(7, 'Vidrawna Soudha ( Sketching )', 'Duration: 2 hours. <br/>\nContestants will have to bring their own sketching material. <br/>\nSheets will be provided. <br/>\nTheme will be given on spot.<br/>', '70', '2000', '1000', 'Aravindh Krishnan      ', '8197317663', '1st April', '2 to 4 pm', 'Mech Block Drawing Hall 1'),
(9, 'Wall climbing Competitive ', 'It occurs in two rounds, prelims on day 2 and the finals on day 3. <br/>\nParticipants aren?t entertained to take part in prelims on day 3. <br/>\nThe winners are decided on time basis and other criteria. <br/>\nThe basics about the techniques in climbing will be briefed on spot.<br/>', '100', '2000', '1000', 'Kiranmayee Bavanasi		', '9632612091', '1st April and 2nd April', '10am to 4pm', 'Gopi wall'),
(9, 'Wall climbing Non competitive 	', 'The basics about the techniques in climbing will be briefed on spot.<br/>', '50', 'NA', 'NA', 'Kiranmayee Bavanasi			', '9632612091', '1st April and 2nd April', '10am to 4pm', 'Gopi wall'),
(8, 'Wanderlust', 'Applicants send their travel blogs/stories along with applicable photo. <br/>\nRound1 - the blogs are judged by the group of travel enthusiasts. <br/>\nRound2 - the vote follower with open to public.<br/>\nIndividual event.<br/>', '50', '3000', '1500', 'Aayush Modi', '9535385760', '2nd April', '12pm to 3pm', 'C-bench'),
(6, 'Western Group Dance', '10-15 dancers in a team. <br/>\nTime limit 6+2 minutes. <br/>\nPrelims will be held before the final performance on stage. <br/>\nThe music tracks should be on a pen-drive and should be submitted one hour prior to the event. <br/>\nNo other styles of dancing are permitted other than Western. <br/>\nProps are allowed, any kind of fluid, heavy objects or flame are not permitted. <br/>\nAt no point of sequence, the stage should be left empty for more than a minute. <br/>\nNo profanity is to be displayed. <br/>\nBollywood Dance is not allowed.<br/>', '800', '12000', '8000', 'Akshay Mahale', '9008702064', '31st March', '7pm to 9pm', 'Main Stage'),
(1, 'Western(vocal) Solo', '-Individual event. \n-Maximum of 4+1 minutes will be provided to each participant. \n-Performances should be in English language only. \n-In case of own composition, a copy of the lyrics should be submitted. \n-Pre recorded music or sound tracks are NOT allow', '100', '3000', '2000', 'Gaurav Sukumar', '9663909110', '1st April', '4 to 7pm', 'Stage 2(Indoor Stadium)'),
(4, 'Wonder-LAS (Last Actor Standing)', 'Only Individual participation is allowed. <br/>\nThis event does not have any language barrier. <br/>\nWonder-LAS (Last Actor Standing) consists of 3 qualification rounds. <br/>\nIn the 1st round, the participant must deliver a monologue or a mono-act for no loner than 2-3 minutes. <br/>\nNo props are allowed. <br/>\nSecond and third rounds shall be based on improvisation.<br/>', '100', '3000', '2000', 'Bharath U', '7204731144', '1st April', '2 to 6 pm', 'MV hall'),
(9, 'Zipline (Flying Fox)', 'Flying fox is descending from an altitude with the help of a rope and a pulley.<br/>\nParticipants are expected to follow the safety instruction given by the person conducting the event . <br/>\nHe/she can do the event only once with one registration.<br/>', '50', 'NA', 'NA', 'Namratha B G		', '9480573372', '1st and 2nd April', '10am to 4pm', 'Classroom block\narena and the lawn');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`ClubID`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`EventName`),
  ADD KEY `ClubID` (`ClubID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `events`
--
ALTER TABLE `events`
  ADD CONSTRAINT `events_ibfk_1` FOREIGN KEY (`ClubID`) REFERENCES `club` (`ClubID`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
