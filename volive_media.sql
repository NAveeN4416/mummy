-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2019 at 12:48 AM
-- Server version: 5.6.39
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `volive_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_us`
--

CREATE TABLE `about_us` (
  `id` int(11) NOT NULL,
  `title1_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title1_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content1_en` text CHARACTER SET utf8 NOT NULL,
  `content1_ar` text CHARACTER SET utf8 NOT NULL,
  `title2_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title2_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content2_en` text CHARACTER SET utf8 NOT NULL,
  `content2_ar` text CHARACTER SET utf8 NOT NULL,
  `title3_en` text CHARACTER SET utf8 NOT NULL,
  `title3_ar` text CHARACTER SET utf8 NOT NULL,
  `content3_en` text CHARACTER SET utf8 NOT NULL,
  `content3_ar` text CHARACTER SET utf8 NOT NULL,
  `image1` text COLLATE utf8_unicode_ci NOT NULL,
  `image2` text COLLATE utf8_unicode_ci NOT NULL,
  `image3` text COLLATE utf8_unicode_ci NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about_us`
--

INSERT INTO `about_us` (`id`, `title1_en`, `title1_ar`, `content1_en`, `content1_ar`, `title2_en`, `title2_ar`, `content2_en`, `content2_ar`, `title3_en`, `title3_ar`, `content3_en`, `content3_ar`, `image1`, `image2`, `image3`, `latitude`, `longitude`, `address`) VALUES
(1, 'Riyadh the capital of Arab media impact and impact', 'الرياض عاصمة الإعلام العربي أثر وتأثير ', '<p>Riyadh, the capital of Saudi Arabia, was chosen as the Arab Media Capital for 2018-2019 by the Council of Arab Information Ministers. The Council, in its decision of the 49th session, which was held on Wednesday, May 9, confirmed the headquarters of the General Secretariat of the League of Arab States in Cairo. The Council stressed &quot;the adoption of Jerusalem as the permanent capital of the Arab media in parallel with the selection of an Arab capital annually as the capital of Arab media.&quot; Because of its importance in the conscience of the Arab world.<br />\r\nThis is due to the Kingdom&#39;s position on the global level, its service to the causes of the Arab nation, and the development and media momentum it has experienced in recent years, which will positively reflect this choice to support the Arab media in general.</p>\r\n\r\n<p>Reason for selection<br />\r\nThe selection of the Arab Media Budget Council for Riyadh, the capital of the Arab media, confirms the importance of the role played by the Kingdom through its policies in the service of media issues and the international public opinion.<br />\r\nThey were the same as the results.<br />\r\nThe selection of Riyadh as the capital of the Arab media will achieve great successes that will push the Arab media to follow its example to advance the media message in the region.<br />\r\nThe choice of Riyadh as the capital of the Arab media is a confirmation of the strong relations between the Kingdom and the countries of the world, and the great prestige it enjoys in the world</p>\r\n\r\n<p>Arab.<br />\r\nThis decision contributes to the development of Arab and Islamic media institutions to meet the challenges facing the nation in a number of countries with the increasing influence of militias with foreign agenda.<br />\r\nThe selection of Riyadh as the capital of the Arab media coincides with the many successes of the Kingdom.</p>\r\n', '<p>تم اختيار مدينة الرياض، عاصمة المملكة العربية السعودية، كعاصمة للإعلام العربي لعام 2018-2019، من قِبل مجلس وزراء الإعلام العرب. وأكد المجلس في قراره الصادر عن الدورة 49، التي عقدت الأربعاء 9 مايو/أيار الجاري، بمقر الأمانة العامة لجامعة الدول العربية بالقاهرة. وأكد المجلس على &quot;تبني القدس عاصمة دائمة للإعلام العربي بالتوازي مع اختيار عاصمة عربية سنويا كعاصمة للإعلام العربي&quot;. لما لها من أهمية في وجدان العالم العربي.<br />\r\nويأتي ذلك لما تتمتع به المملكة من مكانة على المستوى العالمي، ولما تقدمه من خدمة لقضايا الأمة العربية، وللتطور والزخم الإعلامي الذي تعيشه، خلال السنوات الأخيرة، مما سينعكس ذلك بالإيجاب على هذا الاختيار ليدعم الإعلام العربي بشكل عام.<br />\r\n&nbsp;<br />\r\nسبب الاختيار<br />\r\nاختيــار مجلــس وزراء إعلام العــرب للريــاض عاصمــة الإعلام العربــي يؤكــد أهميــة الــدور الــذي تؤديــه المملكة مـن خـلال سياسـاتها الإعلامية في خدمـة قضايـا الإعلام العربـي المهمـة وإيصالهـا إلـى الـرأي العـام الدولــي.<br />\r\nكانت وما زالت المملكة قوة داعمة لقضايا العالم العربي على كافة المستويات الإعلامية.<br />\r\nاختيــار الريــاض عاصمــة الإعلام العربــي ســيحقق نجاحــات كبيــرة تدفــع الإعلام العربي للسير على منوالها للرقي بالرسالة الإعلامية في المنطقة.<br />\r\nيأتـي اختيـار الريـاض عاصمـة الإعلام العربـي تأكيـداً لأواصـر العلاقـات المتينـة التـي تربـط المملكة بـدول العالـم، ولعظـم المكانـة التـي تتمتـع بهـا في العالـم العربـي.<br />\r\nيسـهم هـذا القـرار بفاعليـته في تطويـر المؤسسات الإعلامية العربية والإسلامية، لتكـون علـى مسـتوى التحديـات التـي تمـر بهـا الأمة، في عـدد مـن الـدول مـع تزايـد نفـوذ الميليشيات ذات الأجندة الخارجية.<br />\r\nيأتــي اختيــار الريــاض عاصمــة الإعلام العربــي بالتزامــن مــع العديــد مــن النجاحــات الكبيــرة التــي تعيشــها المملكة.</p>\r\n', 'Al-Zuhair\'s family: A media history that sprang from the harem to the Arab world', 'أسرة الزّهير: تاريخٌ إعلامي ينطلق من حريملاء إلى العالم العربي ', '<p>The origin of the family of the Saudi Zuhair known in the city of Hremala, northwest of Riyadh, before migrating to Iraq and settled, about 200 years ago, in the southern border. He gained from Hajar from the Zuhair family of Iraqi nationality, until he was considered to be born there as Iraqi families. The Zuhair family is a pioneer in the practice of journalism and media outside of Saudi Arabia. Where some of its members practiced journalism in both Turkey and Iraq in the early 20th century.</p>\r\n\r\n<p>Founding of Al-Dustour newspaper in Istanbul, 1908 A number of historical and cultural sources mention that Ahmed Pasha Al-Zuhair, a member of the family, founded the Arabic edition of Al-Dustour in four editions in Istanbul in 1908. Al-Dustour, in its Arabic version, was a supporter of the Ottoman Arab brotherhood, and was even the mouthpiece. The publication of the newspaper &quot;Constitution&quot; as an incentive to the emergence and issuance of a number of newspapers and magazines in various categories and specialties, was published newspaper &quot;Sergeant&quot; of its founder Haj Abdul Latif al-Thunayan in January 1909, and continued tide journalist created by the publication of the newspaper &quot;Constitution&quot;</p>\r\n\r\n<p>Newspapers in the city of Baghdad alone have twenty-five newspapers. At the same time, the publication of these newspapers coincided with the ratification of the Ottoman constitution in 1908 and the publication of the Ottoman printing system one year later in 1909.</p>\r\n\r\n<p>Al-Dostour newspaper was established in Basra in 1912, among the members of the Zuhair family, and Abdullah Bak Al-Zuhair, who founded the Arabic version of Al-Dustour in Basra in 1912. This name was chosen by its counterpart, the Turkish &quot;Constitution&quot;. The researchers and those interested in documenting the history of the press and media in the Gulf region mentioned that this newspaper - the Constitution - was honored with the first press meeting with the founder of the Kingdom, King Abdul Aziz, after entering Al-Ahsa in October 1913. The founder of al-Dustour newspaper, Abdullah Bak al-Zuhair, is a pioneer of the early press in the city of Basra.</p>\r\n\r\n<p>The constitution, Abdullah Bak al-Zuhair, is a pioneer of the early press in the city of Basra. In addition, he has served as a deputy for Basra in the Ottoman Council of Representatives. He was a member of the Freedom Party and the Coalition and was known for his reformist and nationalist positions. Al-Dustour newspaper, along with other newspapers, sought to combat sectarian strife. The newspaper represented an important source of the history of the city of Basra in the late Ottoman era. The &quot;Constitution&quot; was the last newspaper published in Basra in the Ottoman era. The researchers and historians on the newspaper &quot;Al-Dustour&quot; visual, the level of press freedom before it was low and does not live up to the level of decent, until the issuance of a high level and a marked improvement in the editorial and technical levels.</p>\r\n\r\n<p>In 1923, the book &quot;The History of the Arab Press&quot; by Philippe de Tarazi stated that Osman Zouhair, who is likely to be a member of the Zouhair family, issued the &quot;Al-Muraqeb&quot; newspaper in Baghdad in October 1923. However, the historical and journalistic sources did not mention any details or information from this newspaper.</p>\r\n\r\n<p>The establishment of the newspaper &quot;Basra Times&quot; in English from the book &quot;History of the Arab press,&quot; also, that Osman Zuhair supervised the issuance of the English version of the newspaper, which was named BASRAH TIMES. The newspaper - the days of the British occupation of Iraq - is issued in English, Arabic, Turkish and Persian, and there is in the library &quot;Babtain Central Arab Poetry&quot; in Kuwait models of the Arabic and English versions of the newspaper.</p>\r\n\r\n<p>The legacy of Taleed and a long history of the family of Zuhair These are some of the achievements of the Zuhair family and its achievements and contributions, which formed a legacy of Telda and a history worthy of celebration and documentation, which left a lasting impact on the course of the media and media in the region, especially as these contributions to the family of Zuhair was mostly in the stage of a new form of the Arab world , From a political, social and cultural point of view. This means that the Zuhair family has laid a foundation for the development of the media and press industry in the Gulf region during the period following the Ottoman era and the British occupation of Iraq and other countries in the region.</p>\r\n', '<p>كانت نشأة أسرة الزّهير السّعوديّة المعروفة في مدينة حريملاء شمال غرب الرّياض، قبل أن تهاجر منها إلى العراق وتستوطن، منذ نحو مائتي عامٍ، في تُخُومِه الجنوبيّة. وقد اكتسبَ مَن هاجرَ من أسرة الزّهير الجنسيّة العراقيّة، حتى أضحى يُنظر إلى مَن وُلِد منهم هناك بوصفِهِم أُسَرًا عراقيّة. تُعد أسرة الزّهير رائدةً في ممارسة الصّحافة والإعلام خارج المملكة العربيّة السّعوديّة. حيث مارسَ بعضُ أفرادِها مهنة الصّحافة في كلٍّ من تركيا والعراق في بواكير القرن العشرين.</p>\r\n\r\n<p>تأسيس صحيفة الدستور بمدينة اسطنبول، 1908 يذكرُ عددٌ من المصادر التاريخيّة والثّقافيّة أنّ أحمد باشا الزّهير &ndash; أحد أفراد الأسرة &ndash; قد أسّسَ صحيفة &quot;الدستور&quot; في نُسختها العربيّة - إذ أنّها كانت تصدر بأربع لُغات - في اسطنبول في عام 1908م. وقد كانت صحيفة &quot;الدستور&quot; في نسختها العربيّة مؤيّدة لجمعية الإخاء العربي العُثماني، بل وكانت تُعد النّاطقة باسمها. وقد مثّل صدور صحيفة &quot;الدستور&quot; حافزًا لظهور وصدور عددٍ من الصّحف والمجلات بمختلف فئاتها وتخصّصاتها، فصدرت جريدة &quot;الرّقيب&quot; لمؤسّسها الحاج عبد اللطيف الثنيان في يناير 1909م، وتواصل المدًّ الصّحافي الذي خلقه إصدار صحيفة &quot;الدستور&quot; حتى بلغ عدد الصّحف التي تصدر في مدينة بغداد وحدها خمسٌ وعشرون صحيفة. في الوقت نفسه، فقد تزامن مع صدور هذه الصّحف المصادقة على الدستور العثماني في عام 1908م وصدور نظام المطبوعات العثماني بعد ذلك بعامٍ واحدٍ في عام 1909م.</p>\r\n\r\n<p>تأسيس صحيفة الدستور بمدينة البصرة، 1912 من ضمن أفراد أسرة الزّهير، كذلك، عبد الله بك الزّهير، الذي أسّسَ في عام 1912م النّسخة العربيّة من صحيفة &quot;الدستور&quot; العراقيّة في مدينة البصرة. وقد اختارَ لها هذا الاسم تيمُّنًا بنظيرتها &quot;الدستور&quot; التركية. ويذكر الباحثون والمهتمّون بتوثيق تاريخ الصّحافة والإعلام في منطقة الخليج أنّ هذه الصحيفة &ndash; الدستور &ndash; قد حُظِيت بشرف إجراء أول لقاءٍ صِحافيٍّ مع مؤسّس المملكة؛ الملك عبد العزيز، وذلك بعد دخوله الأحساء في أكتوبر 1913م. مؤسّسُ صحيفة الدستور، عبد الله بك الزّهير، يُعد رائدًا من روّاد الصّحافة الأوائل في مدينة البصرة، وقد مارس، فضلًا عن ذلك، السّياسة نائبًا عن البصرة في مجلس &quot;المبعوثان&quot; العثماني،وقد كان عضواً في حزب الحرية والائتلاف وعُرِف بمواقفه الإصلاحيّة والقوميّة. سَعَت صحيفة &quot;الدستور&quot; مع مثيلاتها من الصّحف الأخرىإلى محاربة النّعرات الطائفيّة.وقد مثّلت الصحيفة مصدرًا مهمًا من مصادر تأريخ مدينة البصرة في أواخر العهد العثماني بها. وقد كانت &quot;الدستور&quot; هي آخر صحيفة صدرت بالبصرة في العصر العثماني. وممّا أورده الباحثون والمؤرّخون بشأن صحيفة &quot;الدستور&quot; البصريّة، أنّ مستوى التّحرير الصّحافي قبلها كان متدنّيًا ولا يرقى إلى المستوى اللّائق، حتى جاء صدورها بمستوى رفيعٍ وتحسّنٍ ملحوظٍ في المستويين التحريري والفنّي.</p>\r\n\r\n<p>تأسيس صحيفة &quot; المرقب&quot; ببغداد، 1923م وردَ في كتاب &quot;تاريخ الصحافة العربية&quot;، لمؤلّفه فيليب دي طرازي،أنّ عثمان الزّهير &ndash; الذي يُرجّح أنّه أحد أفراد أسرة الزّهير &ndash; أصدر، في أكتوبر 1923م، صحيفة &quot;المرقب&quot; بمدينة بغداد. بيد إنّ المصادر التاريخية والصّحافيّة لم تذكر من أمر هذه الصّحيفة شيئًا من تفاصيلٍ أو معلومات.</p>\r\n\r\n<p>تأسيس صحيفة &quot;بصرة تايمز&quot; باللّغة الإنجليزيّة ممّا أورده كتاب &quot;تاريخ الصحافة العربية&quot; أيضًا، أنّ عثمان الزّهير أشرف على صدور النّسخة الإنقليزيّة من الصّحيفة التي حملت اسم BASRAH TIMES. وقد كانت الصحيفة - أيّام الاحتلال البريطاني للعراق - تصدر بالإنقليزيّة والعربيّة والتركيّة والفارسيّة، وتُوجد لدى &quot;مكتبة البابطين المركزية للشِّعر العربي&quot; بالكويت نماذج من النّسختين العربيّة والإنقليزيّة للصّحيفة.</p>\r\n\r\n<p>إرثٌ تليد وتأريخٌ حافل لأسرة الزهير هذه بعض مآثر أسرة الزّهير ومُنجزاتها ومساهماتها التي شكّلت إرثًا تليدًا وتاريخًا يستحق الاحتفاء والتوثيق، لما تركه من أثرٍ باقٍ على مسار الصّحافة والإعلام في المنطقة، لا سيّما أنّ هذه المساهمات لأسرة الزّهير قد كان جُلّها في مرحلة تشكُّلٍ جديدة للعالم العربيّ، من منطلقٍ سياسيٍّ واجتماعي وثقافي. وهو ما يعني أنّ أسرة الزّهير قد وضعت لبِنةً في أساس التطوّر الذي شهِدته صناعة الإعلام والصّحافة في منطقة الخليج خلال الحِقب التالية لكلٍّ من العهد العثماني والاحتلال البريطاني للعراق ودولٍ أخرى في المنطقة.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Al-Zuhair\'s family: A media history that sprang from the harem to the Arab world', 'أسرة الزّهير: تاريخٌ إعلامي ينطلق من حريملاء إلى العالم العربي ', '<p>The origin of the family of the Saudi Zuhair known in the city of Hremala, northwest of Riyadh, before migrating to Iraq and settled, about 200 years ago, in the southern border. He gained from Hajar from the Zuhair family of Iraqi nationality, until he was considered to be born there as Iraqi families. The Zuhair family is a pioneer in the practice of journalism and media outside of Saudi Arabia. Where some of its members practiced journalism in both Turkey and Iraq in the early 20th century.</p>\r\n\r\n<p>Founding of Al-Dustour newspaper in Istanbul, 1908 A number of historical and cultural sources mention that Ahmed Pasha Al-Zuhair, a member of the family, founded the Arabic edition of Al-Dustour in four editions in Istanbul in 1908. Al-Dustour, in its Arabic version, was a supporter of the Ottoman Arab brotherhood, and was even the mouthpiece. The publication of the newspaper &quot;Constitution&quot; as an incentive to the emergence and issuance of a number of newspapers and magazines in various categories and specialties, was published newspaper &quot;Sergeant&quot; of its founder Haj Abdul Latif al-Thunayan in January 1909, and continued tide journalist created by the publication of the newspaper &quot;Constitution&quot;</p>\r\n\r\n<p>Newspapers in the city of Baghdad alone have twenty-five newspapers. At the same time, the publication of these newspapers coincided with the ratification of the Ottoman constitution in 1908 and the publication of the Ottoman printing system one year later in 1909.</p>\r\n\r\n<p>Al-Dostour newspaper was established in Basra in 1912, among the members of the Zuhair family, and Abdullah Bak Al-Zuhair, who founded the Arabic version of Al-Dustour in Basra in 1912. This name was chosen by its counterpart, the Turkish &quot;Constitution&quot;. The researchers and those interested in documenting the history of the press and media in the Gulf region mentioned that this newspaper - the Constitution - was honored with the first press meeting with the founder of the Kingdom, King Abdul Aziz, after entering Al-Ahsa in October 1913. The founder of al-Dustour newspaper, Abdullah Bak al-Zuhair, is a pioneer of the early press in the city of Basra.</p>\r\n\r\n<p>The constitution, Abdullah Bak al-Zuhair, is a pioneer of the early press in the city of Basra. In addition, he has served as a deputy for Basra in the Ottoman Council of Representatives. He was a member of the Freedom Party and the Coalition and was known for his reformist and nationalist positions. Al-Dustour newspaper, along with other newspapers, sought to combat sectarian strife. The newspaper represented an important source of the history of the city of Basra in the late Ottoman era. The &quot;Constitution&quot; was the last newspaper published in Basra in the Ottoman era. The researchers and historians on the newspaper &quot;Al-Dustour&quot; visual, the level of press freedom before it was low and does not live up to the level of decent, until the issuance of a high level and a marked improvement in the editorial and technical levels.</p>\r\n\r\n<p>In 1923, the book &quot;The History of the Arab Press&quot; by Philippe de Tarazi stated that Osman Zouhair, who is likely to be a member of the Zouhair family, issued the &quot;Al-Muraqeb&quot; newspaper in Baghdad in October 1923. However, the historical and journalistic sources did not mention any details or information from this newspaper.</p>\r\n\r\n<p>The establishment of the newspaper &quot;Basra Times&quot; in English from the book &quot;History of the Arab press,&quot; also, that Osman Zuhair supervised the issuance of the English version of the newspaper, which was named BASRAH TIMES. The newspaper - the days of the British occupation of Iraq - is issued in English, Arabic, Turkish and Persian, and there is in the library &quot;Babtain Central Arab Poetry&quot; in Kuwait models of the Arabic and English versions of the newspaper.</p>\r\n\r\n<p>The legacy of Taleed and a long history of the family of Zuhair These are some of the achievements of the Zuhair family and its achievements and contributions, which formed a legacy of Telda and a history worthy of celebration and documentation, which left a lasting impact on the course of the media and media in the region, especially as these contributions to the family of Zuhair was mostly in the stage of a new form of the Arab world , From a political, social and cultural point of view. This means that the Zuhair family has laid a foundation for the development of the media and press industry in the Gulf region during the period following the Ottoman era and the British occupation of Iraq and other countries in the region.</p>\r\n', '<p>كانت نشأة أسرة الزّهير السّعوديّة المعروفة في مدينة حريملاء شمال غرب الرّياض، قبل أن تهاجر منها إلى العراق وتستوطن، منذ نحو مائتي عامٍ، في تُخُومِه الجنوبيّة. وقد اكتسبَ مَن هاجرَ من أسرة الزّهير الجنسيّة العراقيّة، حتى أضحى يُنظر إلى مَن وُلِد منهم هناك بوصفِهِم أُسَرًا عراقيّة. تُعد أسرة الزّهير رائدةً في ممارسة الصّحافة والإعلام خارج المملكة العربيّة السّعوديّة. حيث مارسَ بعضُ أفرادِها مهنة الصّحافة في كلٍّ من تركيا والعراق في بواكير القرن العشرين.</p>\r\n\r\n<p>تأسيس صحيفة الدستور بمدينة اسطنبول، 1908 يذكرُ عددٌ من المصادر التاريخيّة والثّقافيّة أنّ أحمد باشا الزّهير &ndash; أحد أفراد الأسرة &ndash; قد أسّسَ صحيفة &quot;الدستور&quot; في نُسختها العربيّة - إذ أنّها كانت تصدر بأربع لُغات - في اسطنبول في عام 1908م. وقد كانت صحيفة &quot;الدستور&quot; في نسختها العربيّة مؤيّدة لجمعية الإخاء العربي العُثماني، بل وكانت تُعد النّاطقة باسمها. وقد مثّل صدور صحيفة &quot;الدستور&quot; حافزًا لظهور وصدور عددٍ من الصّحف والمجلات بمختلف فئاتها وتخصّصاتها، فصدرت جريدة &quot;الرّقيب&quot; لمؤسّسها الحاج عبد اللطيف الثنيان في يناير 1909م، وتواصل المدًّ الصّحافي الذي خلقه إصدار صحيفة &quot;الدستور&quot; حتى بلغ عدد الصّحف التي تصدر في مدينة بغداد وحدها خمسٌ وعشرون صحيفة. في الوقت نفسه، فقد تزامن مع صدور هذه الصّحف المصادقة على الدستور العثماني في عام 1908م وصدور نظام المطبوعات العثماني بعد ذلك بعامٍ واحدٍ في عام 1909م.</p>\r\n\r\n<p>تأسيس صحيفة الدستور بمدينة البصرة، 1912 من ضمن أفراد أسرة الزّهير، كذلك، عبد الله بك الزّهير، الذي أسّسَ في عام 1912م النّسخة العربيّة من صحيفة &quot;الدستور&quot; العراقيّة في مدينة البصرة. وقد اختارَ لها هذا الاسم تيمُّنًا بنظيرتها &quot;الدستور&quot; التركية. ويذكر الباحثون والمهتمّون بتوثيق تاريخ الصّحافة والإعلام في منطقة الخليج أنّ هذه الصحيفة &ndash; الدستور &ndash; قد حُظِيت بشرف إجراء أول لقاءٍ صِحافيٍّ مع مؤسّس المملكة؛ الملك عبد العزيز، وذلك بعد دخوله الأحساء في أكتوبر 1913م. مؤسّسُ صحيفة الدستور، عبد الله بك الزّهير، يُعد رائدًا من روّاد الصّحافة الأوائل في مدينة البصرة، وقد مارس، فضلًا عن ذلك، السّياسة نائبًا عن البصرة في مجلس &quot;المبعوثان&quot; العثماني،وقد كان عضواً في حزب الحرية والائتلاف وعُرِف بمواقفه الإصلاحيّة والقوميّة. سَعَت صحيفة &quot;الدستور&quot; مع مثيلاتها من الصّحف الأخرىإلى محاربة النّعرات الطائفيّة.وقد مثّلت الصحيفة مصدرًا مهمًا من مصادر تأريخ مدينة البصرة في أواخر العهد العثماني بها. وقد كانت &quot;الدستور&quot; هي آخر صحيفة صدرت بالبصرة في العصر العثماني. وممّا أورده الباحثون والمؤرّخون بشأن صحيفة &quot;الدستور&quot; البصريّة، أنّ مستوى التّحرير الصّحافي قبلها كان متدنّيًا ولا يرقى إلى المستوى اللّائق، حتى جاء صدورها بمستوى رفيعٍ وتحسّنٍ ملحوظٍ في المستويين التحريري والفنّي.</p>\r\n\r\n<p>تأسيس صحيفة &quot; المرقب&quot; ببغداد، 1923م وردَ في كتاب &quot;تاريخ الصحافة العربية&quot;، لمؤلّفه فيليب دي طرازي،أنّ عثمان الزّهير &ndash; الذي يُرجّح أنّه أحد أفراد أسرة الزّهير &ndash; أصدر، في أكتوبر 1923م، صحيفة &quot;المرقب&quot; بمدينة بغداد. بيد إنّ المصادر التاريخية والصّحافيّة لم تذكر من أمر هذه الصّحيفة شيئًا من تفاصيلٍ أو معلومات.</p>\r\n\r\n<p>تأسيس صحيفة &quot;بصرة تايمز&quot; باللّغة الإنجليزيّة ممّا أورده كتاب &quot;تاريخ الصحافة العربية&quot; أيضًا، أنّ عثمان الزّهير أشرف على صدور النّسخة الإنقليزيّة من الصّحيفة التي حملت اسم BASRAH TIMES. وقد كانت الصحيفة - أيّام الاحتلال البريطاني للعراق - تصدر بالإنقليزيّة والعربيّة والتركيّة والفارسيّة، وتُوجد لدى &quot;مكتبة البابطين المركزية للشِّعر العربي&quot; بالكويت نماذج من النّسختين العربيّة والإنقليزيّة للصّحيفة.</p>\r\n\r\n<p>إرثٌ تليد وتأريخٌ حافل لأسرة الزهير هذه بعض مآثر أسرة الزّهير ومُنجزاتها ومساهماتها التي شكّلت إرثًا تليدًا وتاريخًا يستحق الاحتفاء والتوثيق، لما تركه من أثرٍ باقٍ على مسار الصّحافة والإعلام في المنطقة، لا سيّما أنّ هذه المساهمات لأسرة الزّهير قد كان جُلّها في مرحلة تشكُّلٍ جديدة للعالم العربيّ، من منطلقٍ سياسيٍّ واجتماعي وثقافي. وهو ما يعني أنّ أسرة الزّهير قد وضعت لبِنةً في أساس التطوّر الذي شهِدته صناعة الإعلام والصّحافة في منطقة الخليج خلال الحِقب التالية لكلٍّ من العهد العثماني والاحتلال البريطاني للعراق ودولٍ أخرى في المنطقة.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'assets/uploads/about_us/image1545291100.jpg', 'assets/uploads/about_us/image15452907651.jpg', 'assets/uploads/about_us/image15452907651.jpg', 24.6892, 46.8287, '7272 Yusuf Ibn Mahik, As Saadah, Riyadh 14255 3196, Saudi Arabia');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title_en`, `title_ar`, `image`, `status`, `created_at`) VALUES
(1, 'Blog', 'مدونة', 'assets/uploads/banners/image1545296856.jpg', 1, '2018-12-20 09:07:36'),
(2, 'about', 'حول', 'assets/uploads/banners/image1545296897.png', 1, '2018-12-20 09:08:17'),
(3, 'Successful Stories', 'قصص ناجحة', 'assets/uploads/banners/image1545296955.jpg', 1, '2018-12-20 09:09:15'),
(4, 'Events', 'أحداث', 'assets/uploads/banners/image1545296995.jpg', 1, '2018-12-20 09:09:55'),
(5, 'Gallery Album', 'Gallery Album ar', 'assets/uploads/banners/image1545307672.png', 1, '2018-12-20 12:07:52'),
(6, 'Gallery', 'صالة عرض', 'assets/uploads/banners/image1545297025.png', 1, '2018-12-20 09:10:25'),
(7, 'Media Database', 'قاعدة البيانات الإعلامية', 'assets/uploads/banners/image1545297066.png', 1, '2018-12-20 09:11:06'),
(8, 'Contact us', 'اتصل بنا', 'assets/uploads/banners/image1545297096.png', 1, '2018-12-20 09:11:36'),
(9, 'Register/Login', 'تسجيل الدخول', 'assets/uploads/banners/image1545297138.png', 1, '2018-12-20 09:12:18'),
(10, 'Content', 'يحتوى', 'assets/uploads/banners/image1545297872.jpg', 1, '2018-12-20 09:24:32'),
(11, 'News ', 'News ar', 'assets/uploads/banners/image1547107013.jpg', 1, '2019-01-10 07:56:53'),
(12, 'Event Details', 'تفاصيل الحدث', 'assets/uploads/banners/image1547199314.jpg', 1, '2019-01-11 09:35:14');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sub_title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sub_title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title_en`, `title_ar`, `sub_title_en`, `sub_title_ar`, `content_en`, `content_ar`, `image`, `status`, `created_at`) VALUES
(1, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376291.jpg', 1, '2018-12-20 06:35:20'),
(2, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376359.jpg', 1, '2018-12-20 06:35:20'),
(3, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376512.png', 1, '2018-12-20 06:35:20'),
(4, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545377385.png', 1, '2018-12-20 06:35:20'),
(5, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376422.jpg', 1, '2018-12-20 06:35:20'),
(6, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376404.png', 1, '2018-12-20 06:35:20'),
(7, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376386.jpg', 1, '2018-12-20 06:35:20'),
(8, 'The beginnings of media in Saudi Arabia:', 'بدايات الإعلام في السعودية:', 'Media News in Saudi Arabia:', 'ابدايات الإعلام في السعودية: ', '<p>Umm Al-Qura: The first newspaper published in Saudi Arabia in 1343 AH / 1924 AD, Um Al-Qura started in a variety although official. It continued until after the Second World War, when it became a full official newspaper. It continues today, Hijaz &quot;where it was issued in 1932 and later turned into&quot; the country &quot;and is issued today. While the first publication system was issued in 1347 H / 1929. The Press Institutions System was promulgated in 1383H (1964). While the Saudi Radio was founded in 1368 AH / 1949. It was followed by television, where Saudi TV was founded in 1385 H (1965). Then the news agency was established after the television five years in 1970</p>\r\n\r\n<p>Colleges and sections of information: The Ministry of Information before 1973 students to study abroad, while the Faculty of Arts was opened at King Saud University in Riyadh as the first department of information at the level of bachelor in 1973. Then opened the Faculty of Arts and Humanities at King Abdulaziz University in Jeddah Department of Public Information</p>\r\n\r\n<p>1976. While the University of Imam Muhammad bin Saud in Riyadh to graduate studies in the media through the opening of the Department of Graduate Studies (Master and Ph.D.) in 1976. Five years later, the Imam University opened a department of information within the Faculty of Arabic Language in 1981. Then, the Department of Information was established at the Faculty of Da&#39;wah and Foundations of Religion at Umm Al-Qura University in 1984. In 2013, the Media Department at King Khalid University was opened in Abha. The Department of Communication and Information was established at King Faisal University in Al-Ahsa 1433 AH. The Department of Information and Communication Sciences was established at Taif University in 2015.</p>\r\n\r\n<p>It was based on the book of Dr. Abdul Rahman Al-Shabaili (Media in the Kingdom of Saudi Arabia) 1 in 2000</p>\r\n', '<p>م القرى: تعد أم القرى أول صحيفة صدرت في المملكة العربية السعودية وذلك عام 1343هـ/1924م، وبدأت منوعة رغم أنها رسمية، واستمرت على ذلك إلى ما بعد الحرب العالمية الثانية حين تحولت إلى صحيفة رسمية بالكامل، وهي مستمرة إلى اليوم، ثم تلاها &quot;صوت الحجاز&quot; حيث صدرت عام 1932م والتي تحولت فيما بعد إلى &quot;البلاد&quot; وهي تصدر إلى اليوم. بينما صدر أول نظام للمطبوعات عام 1347هـ/ 1929م. صدر نظام المؤسسات الصحفية 1383هـ/1964م. بينما تأسست الإذاعة السعودية عام 1368هـ/1949م. وتلاها التلفزيون حيث تأسس التلفزيون السعودي عام 1385هـ/1965م. ثم تأسست وكالة الأنباء بعد التلفزيون بخمس سنوات وذلك في عام 1970م</p>\r\n\r\n<p>الصحافة: ومرت الصحافة بثلاث مراحل: صحافة الأفراد وكانت صحافة رأي تعبر عن مواقف أصحابها. 1932م ـ 1959. صحافة الدمج؛ كان ما يقارب 40 صحيفة تصدر آنذاك وتم دمجها بحيث يصبح لكل مدينة صحيفة واستمرت لما يقارب الأربع سنوات من 1959 - 1963م، لتأتي صحافة المؤسسات بعد ذلك، حين صدر مرسوم ملكي بتاريخ 10-1-1964م بالموافقة على نظام المؤسسات الأهلية.</p>\r\n\r\n<p>الإذاعة: أنشئت أول محطة إذاعية سعودية في مدينة جدة، وبدأ إرسالها يوم 9 ذي الحجة 1368هـ الموافق 1 أكتوبر 1949م - وهو يوم الوقوف بعرفة - بكلمة ألقاها الأمير (الملك) فيصل بن عبد العزيز. ويعد ميلاد الإذاعة السعودية في عهد مؤسس المملكة وموحدها جلالة الملك عبد العزيز يوم الثلاثاء 23 رمضان 1368هـ الموافق 19 يوليو 1949م. وبدأ بث &quot;إذاعة نداء الإسلام من مكة المكرمة&quot; 11/5/ 1965م. وكانت تحت مسمى برنامج صوت الإسلام ثم تغير إلى نداء الإسلام عام 1971م. بينما بدأ البث الإذاعي من إذاعة الرياض يوم الأحد 1 رمضان عام 1384هـ الموافق 3 يناير 1965م، وبدأ بث البرنامج العام مستقلاً من إذاعة الرياض، والبرنامج الثاني من إذاعة جدة يوم الخميس 1 شوال 1399هـ الموافق 23 أغسطس 1965م. وبدأت الإذاعة تبث باللغة الإنجليزية من جدة يوم 1/1/1965م.</p>\r\n\r\n<p>التلفزيون: في عام 1383هـ الموافق 1963م أقر مجلس الوزراء مشروعاً بإنشاء التليفزيون في المملكة العربية السعودية على مرحلتين مرحلة تبدأ ببناء محطتي إرسال تليفزيوني مؤقتتين في كل من الرياض وجدة. والثانية جاءت بعد المرحلة الأولى بعدة سنوات لإنشاء نظام تليفزيوني على أسس أكثر تطوراً، ويكون محققاً للآمال والطموحات التي يتطلع إليها المسؤولون؛ ففي 19 من ربيع الأول من عام 1385هـ الموافق 17 من يوليو 1965م خرجت أول إشارة بث من محطتي تليفزيون الرياض وجدة، وبلغت التكاليف حوالي عشرة ملايين ريال سعودي لكل محطة. وفي عام 1387هـ تم افتتاح محطة تليفزيون المدينة المنورة، وفي عام 1388هـ تم افتتاح محطة تليفزيون القصيم، وعام 1389هـ تم افتتاح محطة تليفزيون الدمام.</p>\r\n\r\n<p>وكالة الأنباء: صدرت موافقة الملك فيصل على إنشاء وكالة الأنباء بتاريخ 4/12/1970م. وبدأـ عملها في شهر 1/1971م. وتم تطويرها عام 1979م.وأصبحت تبث على مدار الساعة 1986م. وأصدرت نشرتين بالإنجليزية والفرنسية ودخلت الانترنت 1999م.</p>\r\n\r\n<p>كليات وأقسام الإعلام: كانت وزارة الإعلام قبل عام 1973م تبتعث الطلبة للدراسة في الخارج، في حين تم افتتاح كلية الآداب في جامعة الملك سعود بالرياض كأول قسم للإعلام على مستوى البكالوريوس عام 1973م. ثم افتتحت كلية الآداب والدراسات الإنسانية بجامعة الملك عبد العزيز بجدة قسم الإعلام عام 1976م. بينما اتجهت جامعة الإمام محمد بن سعود في الرياض إلى الدراسات العليا في الإعلام عبر افتتاحها قسمًا للدراسات العليا (ماجستير ودكتوراة) عام 1976م. وبعد ذلك بخمس سنوات افتتحت جامعة الإمام قسم للإعلام ضمن كلية اللغة العربية عام 1981م. ثم أُنشئ قسم الإعلام في كلية الدعوة وأصول الدين في جامعة أم القرى قسم الإعلام عام 1984م. وفي عام 2013م تم افتتاح قسم الإعلام في جامعة الملك خالد بأبها. وتأسس قسم الاتصال والإعلام في جامعة الملك فيصل بالأحساء 1433هـ. وآخر قسم أنشئ قسم الإعلام وعلوم الاتصال في جامعة الطائف عام 2015م.</p>\r\n\r\n<p>تم الاعتماد على كتاب الدكتور عبد الرحمن الشبيلي (الإعلام في المملكة العربية السعودية) ط1 عام 2000م</p>\r\n', 'assets/uploads/blogs/image1545376339.jpg', 1, '2018-12-20 06:35:20');

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `country_id` int(11) NOT NULL,
  `name_en` varchar(100) CHARACTER SET utf8 NOT NULL,
  `name_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `country_id`, `name_en`, `name_ar`, `status`, `created_at`) VALUES
(1, 1, 'Riyadh', 'الرياض', 1, '2018-11-22 06:22:56'),
(2, 191, 'Makkah ', 'مكه', 1, '2018-11-22 06:24:02'),
(3, 191, 'Medina ', 'المدينه', 1, '2018-11-22 06:24:19'),
(4, 191, 'Jeddah ', 'جده', 1, '2018-11-22 06:24:36'),
(5, 191, 'Dammam ', 'الدمام', 1, '2018-11-22 06:24:52'),
(6, 191, 'Hail', 'حائل', 1, '2018-11-22 06:25:13'),
(7, 191, 'Tabuk', 'تبوك', 1, '2018-11-22 06:25:32'),
(8, 191, 'Qassim', 'القصيم', 1, '2018-11-22 06:25:48'),
(9, 191, 'Abha ', 'أبها', 1, '2018-11-22 06:26:02'),
(10, 191, 'Baha ', 'الباحة', 1, '2018-11-22 06:26:17'),
(11, 191, 'Jazan ', 'جيزان', 1, '2018-11-22 06:26:31'),
(12, 191, 'Najran ', 'نجران', 1, '2018-11-22 06:27:08'),
(13, 191, 'Rafha ', 'رفحاء', 1, '2018-11-22 06:27:23'),
(14, 191, 'Bisha ', 'بيشه', 1, '2018-11-22 06:27:37'),
(15, 191, 'Arar ', 'عرعر', 1, '2018-11-22 06:27:55'),
(16, 191, 'Taif ', 'الطائف', 1, '2018-11-22 06:28:09'),
(17, 191, 'Hafar Al Batin', 'حفرالباطن', 1, '2018-11-22 06:28:24'),
(18, 191, 'Yanbu ', 'ينبع', 1, '2018-11-22 06:28:39'),
(19, 191, 'Sakaka ', 'سكاكا', 1, '2018-11-22 06:29:19'),
(20, 191, 'Hasa ', 'الاحساء', 1, '2018-11-22 06:31:32'),
(21, 191, 'Kharj ', 'الخرج', 1, '2018-11-22 06:31:46'),
(22, 191, 'Qurayyat ', 'القريات', 1, '2018-11-22 06:32:02'),
(23, 191, 'Jubail ', 'الجبيل', 1, '2018-11-22 06:32:13'),
(24, 191, 'Duwadmi ', 'الدوادمي', 1, '2018-11-22 06:32:28'),
(25, 191, 'Dubai ', 'دبي', 1, '2018-11-22 06:32:43'),
(26, 191, 'Kuwait ', 'الكويت', 1, '2018-11-22 06:32:56'),
(27, 191, 'Bahrain ', 'البحرين', 1, '2018-11-22 06:33:10'),
(28, 191, 'Abu Dhabi', 'ابوظبي', 1, '2018-11-22 06:33:24'),
(29, 191, 'Muscat ', 'مسقط', 1, '2018-11-22 06:33:37'),
(30, 1, 'testcity', 'testcity', 0, '2018-12-01 06:47:27'),
(31, 1, 'Hyderbad', 'Hyderbad', 1, '2018-12-04 09:46:45'),
(32, 1, 'aaa', 'aaa', 0, '2018-12-04 13:28:55');

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE `contact_list` (
  `id` int(12) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `subject` varchar(500) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `mobile` varchar(245) COLLATE latin1_general_ci NOT NULL,
  `message` text CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci;

--
-- Dumping data for table `contact_list`
--

INSERT INTO `contact_list` (`id`, `name`, `subject`, `email`, `mobile`, `message`, `created_at`) VALUES
(1, 'Kumar', 'Subject', 'kumar@yopmail.com', '', 'Message', '2019-01-09 07:27:35'),
(2, 'kumar1', 'Subject', 'kumar1@yopmail.com', '', 'Message', '2019-01-09 07:28:51'),
(3, 'asdf', 'adfgadfg', 'asdfga@sdfa.com', '', 'adfgadfg', '2019-01-09 10:08:10'),
(4, 'gsdfg', 'asdfsadf', 'sdfgsdf@asdas.com', '', 'asdfasd1234', '2019-01-09 10:08:31'),
(5, 'fdgs', 'asdfasd', 'sdfgs@sadf.com', '', 'adsfgadfgadf', '2019-01-09 10:08:55'),
(6, 'asdsdgadf', 'fgadfg', 'dfga@asda.com', '', 'sdgad', '2019-01-09 10:10:15'),
(7, 'sdfg', 'asdfasdfa', 'sdfgd@sadfas.com', '', 'asdfasdgadf', '2019-01-09 10:10:51'),
(8, 'gdfsgsd', 'dafgadsg', 'fgsdfgds@sdas.com', '', 'gdafhfhj b  qryh', '2019-01-11 05:38:46');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` int(11) NOT NULL,
  `title_en` text CHARACTER SET utf8 NOT NULL,
  `title_ar` text CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `title_en`, `title_ar`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, 'Contact', 'اتصل بنا', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. كان لوريم إيبسوم النص القياسي المعياري في هذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق وضمتها لعمل كتاب من نوع العينة</p>\r\n', 0, '2018-11-23 07:30:47');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `phonecode` int(11) NOT NULL,
  `priority` int(11) NOT NULL,
  `country_flag` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `phonecode`, `priority`, `country_flag`) VALUES
(1, 'AF', 'Afghanistan', 93, 0, ''),
(2, 'AL', 'Albania', 355, 0, ''),
(3, 'DZ', 'Algeria', 213, 0, ''),
(4, 'AS', 'American Samoa', 1684, 0, ''),
(5, 'AD', 'Andorra', 376, 0, ''),
(6, 'AO', 'Angola', 244, 0, ''),
(7, 'AI', 'Anguilla', 1264, 0, ''),
(8, 'AQ', 'Antarctica', 0, 0, ''),
(9, 'AG', 'Antigua And Barbuda', 1268, 0, ''),
(10, 'AR', 'Argentina', 54, 0, ''),
(11, 'AM', 'Armenia', 374, 0, ''),
(12, 'AW', 'Aruba', 297, 0, ''),
(13, 'AU', 'Australia', 61, 0, ''),
(14, 'AT', 'Austria', 43, 0, ''),
(15, 'AZ', 'Azerbaijan', 994, 0, ''),
(16, 'BS', 'Bahamas The', 1242, 0, ''),
(17, 'BH', 'Bahrain', 973, 1, 'assets/flags/Bahrain.png'),
(18, 'BD', 'Bangladesh', 880, 0, ''),
(19, 'BB', 'Barbados', 1246, 0, ''),
(20, 'BY', 'Belarus', 375, 0, ''),
(21, 'BE', 'Belgium', 32, 0, ''),
(22, 'BZ', 'Belize', 501, 0, ''),
(23, 'BJ', 'Benin', 229, 0, ''),
(24, 'BM', 'Bermuda', 1441, 0, ''),
(25, 'BT', 'Bhutan', 975, 0, ''),
(26, 'BO', 'Bolivia', 591, 0, ''),
(27, 'BA', 'Bosnia and Herzegovina', 387, 0, ''),
(28, 'BW', 'Botswana', 267, 0, ''),
(29, 'BV', 'Bouvet Island', 0, 0, ''),
(30, 'BR', 'Brazil', 55, 0, ''),
(31, 'IO', 'British Indian Ocean Territory', 246, 0, ''),
(32, 'BN', 'Brunei', 673, 0, ''),
(33, 'BG', 'Bulgaria', 359, 0, ''),
(34, 'BF', 'Burkina Faso', 226, 0, ''),
(35, 'BI', 'Burundi', 257, 0, ''),
(36, 'KH', 'Cambodia', 855, 0, ''),
(37, 'CM', 'Cameroon', 237, 0, ''),
(38, 'CA', 'Canada', 1, 0, ''),
(39, 'CV', 'Cape Verde', 238, 0, ''),
(40, 'KY', 'Cayman Islands', 1345, 0, ''),
(41, 'CF', 'Central African Republic', 236, 0, ''),
(42, 'TD', 'Chad', 235, 0, ''),
(43, 'CL', 'Chile', 56, 0, ''),
(44, 'CN', 'China', 86, 0, ''),
(45, 'CX', 'Christmas Island', 61, 0, ''),
(46, 'CC', 'Cocos (Keeling) Islands', 672, 0, ''),
(47, 'CO', 'Colombia', 57, 0, ''),
(48, 'KM', 'Comoros', 269, 0, ''),
(49, 'CG', 'Republic Of The Congo', 242, 0, ''),
(50, 'CD', 'Democratic Republic Of The Congo', 242, 0, ''),
(51, 'CK', 'Cook Islands', 682, 0, ''),
(52, 'CR', 'Costa Rica', 506, 0, ''),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 225, 0, ''),
(54, 'HR', 'Croatia (Hrvatska)', 385, 0, ''),
(55, 'CU', 'Cuba', 53, 0, ''),
(56, 'CY', 'Cyprus', 357, 0, ''),
(57, 'CZ', 'Czech Republic', 420, 0, ''),
(58, 'DK', 'Denmark', 45, 0, ''),
(59, 'DJ', 'Djibouti', 253, 0, ''),
(60, 'DM', 'Dominica', 1767, 0, ''),
(61, 'DO', 'Dominican Republic', 1809, 0, ''),
(62, 'TP', 'East Timor', 670, 0, ''),
(63, 'EC', 'Ecuador', 593, 0, ''),
(64, 'EG', 'Egypt', 20, 0, ''),
(65, 'SV', 'El Salvador', 503, 0, ''),
(66, 'GQ', 'Equatorial Guinea', 240, 0, ''),
(67, 'ER', 'Eritrea', 291, 0, ''),
(68, 'EE', 'Estonia', 372, 0, ''),
(69, 'ET', 'Ethiopia', 251, 0, ''),
(70, 'XA', 'External Territories of Australia', 61, 0, ''),
(71, 'FK', 'Falkland Islands', 500, 0, ''),
(72, 'FO', 'Faroe Islands', 298, 0, ''),
(73, 'FJ', 'Fiji Islands', 679, 0, ''),
(74, 'FI', 'Finland', 358, 0, ''),
(75, 'FR', 'France', 33, 0, ''),
(76, 'GF', 'French Guiana', 594, 0, ''),
(77, 'PF', 'French Polynesia', 689, 0, ''),
(78, 'TF', 'French Southern Territories', 0, 0, ''),
(79, 'GA', 'Gabon', 241, 0, ''),
(80, 'GM', 'Gambia The', 220, 0, ''),
(81, 'GE', 'Georgia', 995, 0, ''),
(82, 'DE', 'Germany', 49, 0, ''),
(83, 'GH', 'Ghana', 233, 0, ''),
(84, 'GI', 'Gibraltar', 350, 0, ''),
(85, 'GR', 'Greece', 30, 0, ''),
(86, 'GL', 'Greenland', 299, 0, ''),
(87, 'GD', 'Grenada', 1473, 0, ''),
(88, 'GP', 'Guadeloupe', 590, 0, ''),
(89, 'GU', 'Guam', 1671, 0, ''),
(90, 'GT', 'Guatemala', 502, 0, ''),
(91, 'XU', 'Guernsey and Alderney', 44, 0, ''),
(92, 'GN', 'Guinea', 224, 0, ''),
(93, 'GW', 'Guinea-Bissau', 245, 0, ''),
(94, 'GY', 'Guyana', 592, 0, ''),
(95, 'HT', 'Haiti', 509, 0, ''),
(96, 'HM', 'Heard and McDonald Islands', 0, 0, ''),
(97, 'HN', 'Honduras', 504, 0, ''),
(98, 'HK', 'Hong Kong S.A.R.', 852, 0, ''),
(99, 'HU', 'Hungary', 36, 0, ''),
(100, 'IS', 'Iceland', 354, 0, ''),
(101, 'IN', 'India', 91, 0, ''),
(102, 'ID', 'Indonesia', 62, 0, ''),
(103, 'IR', 'Iran', 98, 0, ''),
(104, 'IQ', 'Iraq', 964, 0, 'assets/flags/iraq.png'),
(105, 'IE', 'Ireland', 353, 0, ''),
(106, 'IL', 'Israel', 972, 0, ''),
(107, 'IT', 'Italy', 39, 0, ''),
(108, 'JM', 'Jamaica', 1876, 0, ''),
(109, 'JP', 'Japan', 81, 0, ''),
(110, 'XJ', 'Jersey', 44, 0, ''),
(111, 'JO', 'Jordan', 962, 0, 'assets/flags/jordan.png'),
(112, 'KZ', 'Kazakhstan', 7, 0, ''),
(113, 'KE', 'Kenya', 254, 0, ''),
(114, 'KI', 'Kiribati', 686, 0, ''),
(115, 'KP', 'Korea North', 850, 0, ''),
(116, 'KR', 'Korea South', 82, 0, ''),
(117, 'KW', 'Kuwait', 965, 1, 'assets/flags/Kuwait.png'),
(118, 'KG', 'Kyrgyzstan', 996, 0, ''),
(119, 'LA', 'Laos', 856, 0, ''),
(120, 'LV', 'Latvia', 371, 0, ''),
(121, 'LB', 'Lebanon', 961, 0, ''),
(122, 'LS', 'Lesotho', 266, 0, ''),
(123, 'LR', 'Liberia', 231, 0, ''),
(124, 'LY', 'Libya', 218, 0, ''),
(125, 'LI', 'Liechtenstein', 423, 0, ''),
(126, 'LT', 'Lithuania', 370, 0, ''),
(127, 'LU', 'Luxembourg', 352, 0, ''),
(128, 'MO', 'Macau S.A.R.', 853, 0, ''),
(129, 'MK', 'Macedonia', 389, 0, ''),
(130, 'MG', 'Madagascar', 261, 0, ''),
(131, 'MW', 'Malawi', 265, 0, ''),
(132, 'MY', 'Malaysia', 60, 0, ''),
(133, 'MV', 'Maldives', 960, 0, ''),
(134, 'ML', 'Mali', 223, 0, ''),
(135, 'MT', 'Malta', 356, 0, ''),
(136, 'XM', 'Man (Isle of)', 44, 0, ''),
(137, 'MH', 'Marshall Islands', 692, 0, ''),
(138, 'MQ', 'Martinique', 596, 0, ''),
(139, 'MR', 'Mauritania', 222, 0, ''),
(140, 'MU', 'Mauritius', 230, 0, ''),
(141, 'YT', 'Mayotte', 269, 0, ''),
(142, 'MX', 'Mexico', 52, 0, ''),
(143, 'FM', 'Micronesia', 691, 0, ''),
(144, 'MD', 'Moldova', 373, 0, ''),
(145, 'MC', 'Monaco', 377, 0, ''),
(146, 'MN', 'Mongolia', 976, 0, ''),
(147, 'MS', 'Montserrat', 1664, 0, ''),
(148, 'MA', 'Morocco', 212, 0, ''),
(149, 'MZ', 'Mozambique', 258, 0, ''),
(150, 'MM', 'Myanmar', 95, 0, ''),
(151, 'NA', 'Namibia', 264, 0, ''),
(152, 'NR', 'Nauru', 674, 0, ''),
(153, 'NP', 'Nepal', 977, 0, ''),
(154, 'AN', 'Netherlands Antilles', 599, 0, ''),
(155, 'NL', 'Netherlands The', 31, 0, ''),
(156, 'NC', 'New Caledonia', 687, 0, ''),
(157, 'NZ', 'New Zealand', 64, 0, ''),
(158, 'NI', 'Nicaragua', 505, 0, ''),
(159, 'NE', 'Niger', 227, 0, ''),
(160, 'NG', 'Nigeria', 234, 0, ''),
(161, 'NU', 'Niue', 683, 0, ''),
(162, 'NF', 'Norfolk Island', 672, 0, ''),
(163, 'MP', 'Northern Mariana Islands', 1670, 0, ''),
(164, 'NO', 'Norway', 47, 0, ''),
(165, 'OM', 'Oman', 968, 1, 'assets/flags/oman.png'),
(166, 'PK', 'Pakistan', 92, 0, ''),
(167, 'PW', 'Palau', 680, 0, ''),
(168, 'PS', 'Palestinian Territory Occupied', 970, 0, ''),
(169, 'PA', 'Panama', 507, 0, ''),
(170, 'PG', 'Papua new Guinea', 675, 0, ''),
(171, 'PY', 'Paraguay', 595, 0, ''),
(172, 'PE', 'Peru', 51, 0, ''),
(173, 'PH', 'Philippines', 63, 0, ''),
(174, 'PN', 'Pitcairn Island', 0, 0, ''),
(175, 'PL', 'Poland', 48, 0, ''),
(176, 'PT', 'Portugal', 351, 0, ''),
(177, 'PR', 'Puerto Rico', 1787, 0, ''),
(178, 'QA', 'Qatar', 974, 1, 'assets/flags/Qatar.png'),
(179, 'RE', 'Reunion', 262, 0, ''),
(180, 'RO', 'Romania', 40, 0, ''),
(181, 'RU', 'Russia', 70, 0, ''),
(182, 'RW', 'Rwanda', 250, 0, ''),
(183, 'SH', 'Saint Helena', 290, 0, ''),
(184, 'KN', 'Saint Kitts And Nevis', 1869, 0, ''),
(185, 'LC', 'Saint Lucia', 1758, 0, ''),
(186, 'PM', 'Saint Pierre and Miquelon', 508, 0, ''),
(187, 'VC', 'Saint Vincent And The Grenadines', 1784, 0, ''),
(188, 'WS', 'Samoa', 684, 0, ''),
(189, 'SM', 'San Marino', 378, 0, ''),
(190, 'ST', 'Sao Tome and Principe', 239, 0, ''),
(191, 'SA', 'Saudi Arabia', 966, 1, 'assets/flags/saudi.png'),
(192, 'SN', 'Senegal', 221, 0, ''),
(193, 'RS', 'Serbia', 381, 0, ''),
(194, 'SC', 'Seychelles', 248, 0, ''),
(195, 'SL', 'Sierra Leone', 232, 0, ''),
(196, 'SG', 'Singapore', 65, 0, ''),
(197, 'SK', 'Slovakia', 421, 0, ''),
(198, 'SI', 'Slovenia', 386, 0, ''),
(199, 'XG', 'Smaller Territories of the UK', 44, 0, ''),
(200, 'SB', 'Solomon Islands', 677, 0, ''),
(201, 'SO', 'Somalia', 252, 0, ''),
(202, 'ZA', 'South Africa', 27, 0, ''),
(203, 'GS', 'South Georgia', 0, 0, ''),
(204, 'SS', 'South Sudan', 211, 0, ''),
(205, 'ES', 'Spain', 34, 0, ''),
(206, 'LK', 'Sri Lanka', 94, 0, ''),
(207, 'SD', 'Sudan', 249, 0, ''),
(208, 'SR', 'Suriname', 597, 0, ''),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 47, 0, ''),
(210, 'SZ', 'Swaziland', 268, 0, ''),
(211, 'SE', 'Sweden', 46, 0, ''),
(212, 'CH', 'Switzerland', 41, 0, ''),
(213, 'SY', 'Syria', 963, 0, ''),
(214, 'TW', 'Taiwan', 886, 0, ''),
(215, 'TJ', 'Tajikistan', 992, 0, ''),
(216, 'TZ', 'Tanzania', 255, 0, ''),
(217, 'TH', 'Thailand', 66, 0, ''),
(218, 'TG', 'Togo', 228, 0, ''),
(219, 'TK', 'Tokelau', 690, 0, ''),
(220, 'TO', 'Tonga', 676, 0, ''),
(221, 'TT', 'Trinidad And Tobago', 1868, 0, ''),
(222, 'TN', 'Tunisia', 216, 0, ''),
(223, 'TR', 'Turkey', 90, 0, ''),
(224, 'TM', 'Turkmenistan', 7370, 0, ''),
(225, 'TC', 'Turks And Caicos Islands', 1649, 0, ''),
(226, 'TV', 'Tuvalu', 688, 0, ''),
(227, 'UG', 'Uganda', 256, 0, ''),
(228, 'UA', 'Ukraine', 380, 0, ''),
(229, 'AE', 'United Arab Emirates', 971, 1, 'assets/flags/UAE.png'),
(230, 'GB', 'United Kingdom', 44, 0, ''),
(231, 'US', 'United States', 1, 0, ''),
(232, 'UM', 'United States Minor Outlying Islands', 1, 0, ''),
(233, 'UY', 'Uruguay', 598, 0, ''),
(234, 'UZ', 'Uzbekistan', 998, 0, ''),
(235, 'VU', 'Vanuatu', 678, 0, ''),
(236, 'VA', 'Vatican City State (Holy See)', 39, 0, ''),
(237, 'VE', 'Venezuela', 58, 0, ''),
(238, 'VN', 'Vietnam', 84, 0, ''),
(239, 'VG', 'Virgin Islands (British)', 1284, 0, ''),
(240, 'VI', 'Virgin Islands (US)', 1340, 0, ''),
(241, 'WF', 'Wallis And Futuna Islands', 681, 0, ''),
(242, 'EH', 'Western Sahara', 212, 0, ''),
(243, 'YE', 'Yemen', 967, 0, ''),
(244, 'YU', 'Yugoslavia', 38, 0, ''),
(245, 'ZM', 'Zambia', 260, 0, ''),
(246, 'ZW', 'Zimbabwe', 263, 0, ''),
(247, 'tt', 'test', 22, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `database_sites`
--

CREATE TABLE `database_sites` (
  `id` int(11) NOT NULL,
  `database_id` int(11) NOT NULL,
  `site_title_en` text CHARACTER SET utf8 NOT NULL,
  `site_title_ar` text CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `site_url` text COLLATE utf8_unicode_ci NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `database_sites`
--

INSERT INTO `database_sites` (`id`, `database_id`, `site_title_en`, `site_title_ar`, `content_en`, `content_ar`, `site_url`, `image`, `status`, `created_at`) VALUES
(1, 1, 'Google', 'Google ar', 'http://volive.in/media/assets/uploads/database_sites/image1545284119.jpgWas added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'https://www.google.com/', 'assets/uploads/database_sites/image1546409721.jpg', 1, '2018-12-20 05:26:30'),
(2, 2, 'gITHUB', 'gITHUB', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'https://github.com/', 'assets/uploads/database_sites/image1545285273.png', 1, '2018-12-20 05:54:33'),
(3, 2, 'dfgsdfg', 'sdfgsdfgs', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'sdfgsdfgsdfg', 'assets/uploads/database_sites/image1545292613.jpg', 1, '2018-12-20 07:56:53'),
(4, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546409905.jpg', 1, '2018-12-20 05:26:30'),
(5, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546409942.jpg', 1, '2018-12-20 05:26:30'),
(6, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546410002.jpg', 1, '2018-12-20 05:26:30'),
(7, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546410036.jpg', 1, '2018-12-20 05:26:30'),
(8, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546410127.jpg', 1, '2018-12-20 05:26:30'),
(9, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546410130.jpg', 1, '2018-12-20 05:26:30'),
(10, 1, 'Google', 'Google ar', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/', 'assets/uploads/database_sites/image1546410151.jpg', 1, '2018-12-20 05:26:30'),
(11, 2, 'gITHUB', 'gITHUB', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'https://github.com/', 'assets/uploads/database_sites/image1545285273.png', 1, '2018-12-20 05:54:33'),
(12, 2, 'dfgsdfg', 'sdfgsdfgs', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'sdfgsdfgsdfg', 'assets/uploads/database_sites/image1545292613.jpg', 1, '2018-12-20 07:56:53'),
(13, 2, 'gITHUB', 'gITHUB', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'https://github.com/', 'assets/uploads/database_sites/image1545285273.png', 1, '2018-12-20 05:54:33'),
(14, 2, 'dfgsdfg', 'sdfgsdfgs', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'sdfgsdfgsdfg', 'assets/uploads/database_sites/image1545292613.jpg', 1, '2018-12-20 07:56:53'),
(15, 2, 'gITHUB', 'gITHUB', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'https://github.com/', 'assets/uploads/database_sites/image1545285273.png', 1, '2018-12-20 05:54:33'),
(16, 2, 'dfgsdfg', 'sdfgsdfgs', 'Was added\r\n\r\n\"The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine\" Al Jazeera \"from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. \"The car successfully', 'تم إضا\r\n\r\n\"أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة «الجزيرة» من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. \" فة السيارة بنجاح', 'sdfgsdfgsdfg', 'assets/uploads/database_sites/image1545292613.jpg', 1, '2018-12-20 07:56:53'),
(17, 3, 'dfgsdfg', 'sdfgsdfgs', '<p>Was added &quot;The first daily newspaper issued from Riyadh, the capital of Saudi Arabia after the adoption of the system of press institutions in the Kingdom according to Royal Decree No. 62 dated 24/8/1383 e, when the magazine&quot; Al Jazeera &quot;from a monthly issue to a newspaper issued weekly weekly starting Tuesday 30 June 1964, and the island began to issue as a daily newspaper on all days of the week and non-stop from Wednesday, September 20, 1972. &quot;The car successfully</p>\r\n', '<p>تم إضا &quot;أول صحيفة يومية تصدر من الرياض عاصمة المملكة العربية السعودية بعد إقرار نظام المؤسسات الصحفية في المملكة وفق المرسوم الملكي رقم 62 وتاريخ 24/8/1383هـ، عندما تحولت مجلة &laquo;الجزيرة&raquo; من إصدار شهري إلى صحيفة تصدر أسبوعيا مؤقتا بدءا من يوم الثلاثاء 30 يونيو 1964م ، وبدأت الجزيرة في الصدور كصحيفة يومية في جميع أيام الأسبوع وبدون توقف اعتباراً من يوم الأربعاء 20 سبتمبر1972. &quot; فة السيارة بنجاح</p>\r\n', 'https://www.google.com/search?client=firefox-b-ab&q=translate', 'assets/uploads/database_sites/image1545292613.jpg', 1, '2018-12-20 07:56:53');

-- --------------------------------------------------------

--
-- Table structure for table `development_map`
--

CREATE TABLE `development_map` (
  `id` int(11) NOT NULL,
  `year_en` text CHARACTER SET utf8 NOT NULL,
  `year_ar` text CHARACTER SET utf8 NOT NULL,
  `title_en` text CHARACTER SET utf8 NOT NULL,
  `title_ar` text CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `development_map`
--

INSERT INTO `development_map` (`id`, `year_en`, `year_ar`, `title_en`, `title_ar`, `content_en`, `content_ar`, `status`) VALUES
(1, '1900 / 1920', '1990 / 2000', 'Stage 1', 'المرحلة 1', '<ul>\r\n	<li>Stage Description</li>\r\n	<li>Line 2</li>\r\n	<li>Line 3</li>\r\n	<li>Line 4</li>\r\n</ul>\r\n', '<ul>\r\n	<li>وصف المرحلة</li>\r\n	<li>خط 2</li>\r\n	<li>السطر 3</li>\r\n	<li>الخط 4</li>\r\n</ul>\r\n', 1),
(2, '1920 / 1950', '1990 / 2000', 'Stage 2', 'المرحلة 1', '<ul>\r\n	<li>Stage Description</li>\r\n	<li>Line 2</li>\r\n	<li>Line 3</li>\r\n	<li>Line 4</li>\r\n</ul>\r\n', '<ul>\r\n	<li>وصف المرحلة</li>\r\n	<li>خط 2</li>\r\n	<li>السطر 3</li>\r\n	<li>الخط 4</li>\r\n</ul>\r\n', 1),
(3, '1950 / 1960', '1990 / 2000', 'Stage 3', 'المرحلة 1', '<ul>\r\n	<li>Stage Description</li>\r\n	<li>Line 2</li>\r\n	<li>Line 3</li>\r\n	<li>Line 4</li>\r\n</ul>\r\n', '<ul>\r\n	<li>وصف المرحلة</li>\r\n	<li>خط 2</li>\r\n	<li>السطر 3</li>\r\n	<li>الخط 4</li>\r\n</ul>\r\n', 1),
(4, '1960 / 1970', '1990 / 2000', 'Stage 4', 'المرحلة 1', '<ul>\r\n	<li>Stage Description</li>\r\n	<li>Line 2</li>\r\n	<li>Line 3</li>\r\n	<li>Line 4</li>\r\n</ul>\r\n', '<ul>\r\n	<li>وصف المرحلة</li>\r\n	<li>خط 2</li>\r\n	<li>السطر 3</li>\r\n	<li>الخط 4</li>\r\n</ul>\r\n', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `org_id` int(11) NOT NULL DEFAULT '1',
  `title_en` text CHARACTER SET utf8 NOT NULL,
  `title_ar` text CHARACTER SET utf8 NOT NULL,
  `start_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `end_date` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `google_map` text COLLATE utf8_unicode_ci NOT NULL,
  `latitude` text COLLATE utf8_unicode_ci NOT NULL,
  `longitude` text COLLATE utf8_unicode_ci NOT NULL,
  `location_en` text CHARACTER SET utf8 NOT NULL,
  `location_ar` text CHARACTER SET utf8 NOT NULL,
  `address` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `website_link` text COLLATE utf8_unicode_ci NOT NULL,
  `org_logo` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `org_id`, `title_en`, `title_ar`, `start_date`, `end_date`, `google_map`, `latitude`, `longitude`, `location_en`, `location_ar`, `address`, `image`, `content_en`, `content_ar`, `website_link`, `org_logo`, `status`, `created`) VALUES
(1, 1, 'Event Name', 'اسم الحدث', '20 January 2019', '30 January 2019', 'https://www.google.com/maps', '24.75251881745985', '45.107154686132844', 'Riyadh', 'مدينة الرياض', '17889, Saudi Arabia', 'assets/uploads/event_images/image1547094654.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، ولكن الغالبية عانت من تغيير في شكل ما ، أو عن طريق الحقن ، أو الكلمات العشوائية التي لا تبدو حتى قابلة للتصديق بشكل طفيف. إذا كنت ستستخدم ممر لوريم إيبسوم ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات Lorem Ipsum على الإنترنت إلى تكرار قطع محددة مسبقًا عند الضرورة ، مما يجعل هذا أول مولد حقيقي على الإنترنت. وهو يستخدم قاموسًا يضم أكثر من 200 كلمة لاتينية ، بالإضافة إلى حفنة من هياكل الجملة النموذجية ، لتوليد لوريم إيبسوم الذي يبدو معقولاً. وبالتالي فإن لورد إيبسوم المولود يكون دائمًا خاليًا من التكرار أو الفكاهة المحقنة أو الكلمات غير المميزة.</p>\r\n', 'https://www.lipsum.com/', 'assets/uploads/org_logos/image1547094689.jpg', 1, '2019-01-10 04:30:54'),
(2, 1, 'Event 2', 'الحدث 2', '26 January 2019', '30 January 2019', 'https://www.google.com/maps', '24.7150996', '44.6999739', 'Riyadh', 'مدينة الرياض', '8269 Prince Abdulilah Ibn Abdulaziz, Al Muhammadiyah, Riyadh 12363 3843, Saudi Arabia', 'assets/uploads/event_images/image1547094935.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، ولكن الغالبية عانت من تغيير في شكل ما ، أو عن طريق الحقن ، أو الكلمات العشوائية التي لا تبدو حتى قابلة للتصديق بشكل طفيف. إذا كنت ستستخدم ممر لوريم إيبسوم ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات Lorem Ipsum على الإنترنت إلى تكرار قطع محددة مسبقًا عند الضرورة ، مما يجعل هذا أول مولد حقيقي على الإنترنت. وهو يستخدم قاموسًا يضم أكثر من 200 كلمة لاتينية ، بالإضافة إلى حفنة من هياكل الجملة النموذجية ، لتوليد لوريم إيبسوم الذي يبدو معقولاً. وبالتالي فإن لورد إيبسوم المولود يكون دائمًا خاليًا من التكرار أو الفكاهة المحقنة أو الكلمات غير المميزة.</p>\r\n', 'https://www.lipsum.com/', 'assets/uploads/org_logos/image1547094935.png', 1, '2019-01-10 04:35:35'),
(3, 1, 'Event 3', 'الحدث 3', '25 January 2019', '05 February 2019', 'https://www.google.com/maps/@17.4322024,78.4581323,15z', '24.7150996', '44.6999739', 'Riyadh', 'مدينة الرياض', '8269 Prince Abdulilah Ibn Abdulaziz, Al Muhammadiyah, Riyadh 12363 3843, Saudi Arabia', 'assets/uploads/event_images/image1547095202.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، ولكن الغالبية عانت من تغيير في شكل ما ، أو عن طريق الحقن ، أو الكلمات العشوائية التي لا تبدو حتى قابلة للتصديق بشكل طفيف. إذا كنت ستستخدم ممر لوريم إيبسوم ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات Lorem Ipsum على الإنترنت إلى تكرار قطع محددة مسبقًا عند الضرورة ، مما يجعل هذا أول مولد حقيقي على الإنترنت. وهو يستخدم قاموسًا يضم أكثر من 200 كلمة لاتينية ، بالإضافة إلى حفنة من هياكل الجملة النموذجية ، لتوليد لوريم إيبسوم الذي يبدو معقولاً. وبالتالي فإن لورد إيبسوم المولود يكون دائمًا خاليًا من التكرار أو الفكاهة المحقنة أو الكلمات غير المميزة.</p>\r\n', 'https://www.lipsum.com/', 'assets/uploads/org_logos/image1547095202.jpg', 1, '2019-01-10 04:40:02'),
(4, 1, 'Event 4', 'Event 4 ar', '26 January 2019', '14 February 2019', 'https://www.google.com/maps/@17.4322024,78.4581323,15z', '24.7150996', '44.6999739', 'Riyadh', 'مدينة الرياض', '8269 Prince Abdulilah Ibn Abdulaziz, Al Muhammadiyah, Riyadh 12363 3843, Saudi Arabia', 'assets/uploads/event_images/image1547095271.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، ولكن الغالبية عانت من تغيير في شكل ما ، أو عن طريق الحقن ، أو الكلمات العشوائية التي لا تبدو حتى قابلة للتصديق بشكل طفيف. إذا كنت ستستخدم ممر لوريم إيبسوم ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات Lorem Ipsum على الإنترنت إلى تكرار قطع محددة مسبقًا عند الضرورة ، مما يجعل هذا أول مولد حقيقي على الإنترنت. وهو يستخدم قاموسًا يضم أكثر من 200 كلمة لاتينية ، بالإضافة إلى حفنة من هياكل الجملة النموذجية ، لتوليد لوريم إيبسوم الذي يبدو معقولاً. وبالتالي فإن لورد إيبسوم المولود يكون دائمًا خاليًا من التكرار أو الفكاهة المحقنة أو الكلمات غير المميزة.</p>\r\n', 'https://www.lipsum.com/', 'assets/uploads/org_logos/image1547095271.jpg', 1, '2019-01-10 04:41:11'),
(5, 1, 'Event 5', 'الحدث 5', '30 January 2019', '10 February 2019', 'https://www.google.com/maps/@17.4322024,78.4581323,15z', '24.7150996', '44.6999739', 'Riyadh', 'مدينة الرياض', 'Riyadh Province Saudi Arabia', 'assets/uploads/event_images/image1547095465.jpg', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn&#39;t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.</p>\r\n', '<p>هناك العديد من الاختلافات في مقاطع لوريم إيبسوم المتاحة ، ولكن الغالبية عانت من تغيير في شكل ما ، أو عن طريق الحقن ، أو الكلمات العشوائية التي لا تبدو حتى قابلة للتصديق بشكل طفيف. إذا كنت ستستخدم ممر لوريم إيبسوم ، فأنت بحاجة إلى التأكد من عدم وجود أي شيء محرج مخفي في منتصف النص. تميل جميع مولدات Lorem Ipsum على الإنترنت إلى تكرار قطع محددة مسبقًا عند الضرورة ، مما يجعل هذا أول مولد حقيقي على الإنترنت. وهو يستخدم قاموسًا يضم أكثر من 200 كلمة لاتينية ، بالإضافة إلى حفنة من هياكل الجملة النموذجية ، لتوليد لوريم إيبسوم الذي يبدو معقولاً. وبالتالي فإن لورد إيبسوم المولود يكون دائمًا خاليًا من التكرار أو الفكاهة المحقنة أو الكلمات غير المميزة.</p>\r\n', 'https://www.lipsum.com/', 'assets/uploads/org_logos/image1547095465.jpg', 1, '2019-01-10 04:44:25');

-- --------------------------------------------------------

--
-- Table structure for table `exhibitions`
--

CREATE TABLE `exhibitions` (
  `id` int(11) NOT NULL,
  `duration` text CHARACTER SET utf8 NOT NULL,
  `title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sub_title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sub_title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `exhibitions`
--

INSERT INTO `exhibitions` (`id`, `duration`, `title_en`, `title_ar`, `sub_title_en`, `sub_title_ar`, `content_en`, `content_ar`, `image`, `status`, `created_at`) VALUES
(1, '2006-2007', 'The Saudi Media Renaissance', 'نهضة الإعلام السعودي', '', '', '<p>This period witnessed renewal and progress in the media, where many satellite channels were launched which covered the interests of diverse individuals. In addition, the first cinema showroom in the capital, Riyadh, opened after a 30-year absence.</p>\r\n', '<p>شهدت هذه الفترة التجدد والتقدم في الإعلام حيث أطلقت عديدٌ من القنوات الفضائية التي غطت اهتمامات الأفراد المتنوعة. إلى جانب ذلك افتتحت أول دار عرض للسينما في العاصمة الرياض بعد غياب طال لـ 30 عاماً.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'assets/uploads/exhibitions/image1547027114.jpg', 1, '2019-01-09 09:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `faq`
--

CREATE TABLE `faq` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faq`
--

INSERT INTO `faq` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. لقد كان لوريم إيبسوم النص القياسي المعياري لهذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ، وهرعت بها لعمل كتاب من نوع العينة. وقد نجا ليس فقط خمسة قرون ، ولكن أيضا قفزة في التنضيد الإلكتروني ، وتبقى في جوهرها دون تغيير. تم تعميمها في الستينيات مع إصدار أوراق Letraset التي تحتوي على ممرات Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.</p>\r\n', 'active', '2018-12-15 10:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `album_id` int(11) NOT NULL,
  `image` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `album_id`, `image`, `status`, `created_at`) VALUES
(1, 1, 'assets/uploads/gallery/image1545801780.jpg', 1, '2018-12-26 05:23:00'),
(2, 1, 'assets/uploads/gallery/image15458017801.jpg', 1, '2018-12-26 05:23:00'),
(3, 1, 'assets/uploads/gallery/image15458017802.jpg', 1, '2018-12-26 05:23:00'),
(4, 1, 'assets/uploads/gallery/image15458017803.jpg', 1, '2018-12-26 05:23:00'),
(5, 1, 'assets/uploads/gallery/image15458017804.jpg', 1, '2018-12-26 05:23:00'),
(6, 1, 'assets/uploads/gallery/image15458017805.jpg', 1, '2018-12-26 05:23:00'),
(7, 1, 'assets/uploads/gallery/image15458017806.jpg', 1, '2018-12-26 05:23:00'),
(8, 1, 'assets/uploads/gallery/image15458017807.jpg', 1, '2018-12-26 05:23:00'),
(10, 2, 'assets/uploads/gallery/image15458018081.jpg', 1, '2018-12-26 05:23:28'),
(11, 2, 'assets/uploads/gallery/image15458018082.jpg', 1, '2018-12-26 05:23:28'),
(12, 2, 'assets/uploads/gallery/image15458018083.jpg', 1, '2018-12-26 05:23:28'),
(13, 2, 'assets/uploads/gallery/image15458018084.jpg', 1, '2018-12-26 05:23:28'),
(14, 2, 'assets/uploads/gallery/image15458018085.jpg', 1, '2018-12-26 05:23:28'),
(15, 2, 'assets/uploads/gallery/image15458018086.jpg', 1, '2018-12-26 05:23:28'),
(16, 2, 'assets/uploads/gallery/image15458018087.jpg', 1, '2018-12-26 05:23:28'),
(17, 2, 'assets/uploads/gallery/image15458018088.jpg', 1, '2018-12-26 05:23:28'),
(18, 2, 'assets/uploads/gallery/image15458018089.jpg', 1, '2018-12-26 05:23:28'),
(19, 3, 'assets/uploads/gallery/image1545802194.jpg', 1, '2018-12-26 05:29:54'),
(20, 3, 'assets/uploads/gallery/image15458021941.jpg', 1, '2018-12-26 05:29:54'),
(21, 3, 'assets/uploads/gallery/image15458021942.jpg', 1, '2018-12-26 05:29:54'),
(22, 3, 'assets/uploads/gallery/image15458021943.jpg', 1, '2018-12-26 05:29:54'),
(23, 3, 'assets/uploads/gallery/image15458021944.jpg', 1, '2018-12-26 05:29:54'),
(24, 3, 'assets/uploads/gallery/image15458021945.jpg', 1, '2018-12-26 05:29:54'),
(25, 3, 'assets/uploads/gallery/image15458021946.jpg', 1, '2018-12-26 05:29:54'),
(26, 4, 'assets/uploads/gallery/image1545802231.jpg', 1, '2018-12-26 05:30:31'),
(27, 4, 'assets/uploads/gallery/image15458022311.jpg', 1, '2018-12-26 05:30:31'),
(28, 4, 'assets/uploads/gallery/image15458022312.jpg', 1, '2018-12-26 05:30:31'),
(29, 4, 'assets/uploads/gallery/image15458022313.jpg', 1, '2018-12-26 05:30:31'),
(30, 4, 'assets/uploads/gallery/image15458022314.jpg', 1, '2018-12-26 05:30:31'),
(31, 4, 'assets/uploads/gallery/image15458022315.jpg', 1, '2018-12-26 05:30:31'),
(32, 4, 'assets/uploads/gallery/image15458022316.jpg', 1, '2018-12-26 05:30:31'),
(33, 4, 'assets/uploads/gallery/image15458022317.jpg', 1, '2018-12-26 05:30:31'),
(34, 4, 'assets/uploads/gallery/image15458022318.jpg', 1, '2018-12-26 05:30:31'),
(35, 4, 'assets/uploads/gallery/image15458022319.jpg', 1, '2018-12-26 05:30:31'),
(36, 4, 'assets/uploads/gallery/image154580223110.jpg', 1, '2018-12-26 05:30:31'),
(38, 5, 'assets/uploads/gallery/image1545802270.jpg', 1, '2018-12-26 05:31:10'),
(39, 5, 'assets/uploads/gallery/image15458022701.jpg', 1, '2018-12-26 05:31:10'),
(40, 5, 'assets/uploads/gallery/image15458022702.jpg', 1, '2018-12-26 05:31:10'),
(41, 5, 'assets/uploads/gallery/image15458022703.jpg', 1, '2018-12-26 05:31:10'),
(42, 5, 'assets/uploads/gallery/image15458022704.jpg', 1, '2018-12-26 05:31:10'),
(43, 5, 'assets/uploads/gallery/image15458022705.jpg', 1, '2018-12-26 05:31:10'),
(44, 5, 'assets/uploads/gallery/image15458022706.jpg', 1, '2018-12-26 05:31:10'),
(45, 5, 'assets/uploads/gallery/image15458022707.jpg', 1, '2018-12-26 05:31:10'),
(46, 5, 'assets/uploads/gallery/image15458022708.jpg', 1, '2018-12-26 05:31:10'),
(47, 5, 'assets/uploads/gallery/image15458022709.jpg', 1, '2018-12-26 05:31:10'),
(48, 6, 'assets/uploads/gallery/image1545802296.jpg', 1, '2018-12-26 05:31:36'),
(49, 6, 'assets/uploads/gallery/image15458022961.jpg', 1, '2018-12-26 05:31:36'),
(50, 6, 'assets/uploads/gallery/image15458022962.jpg', 1, '2018-12-26 05:31:36'),
(51, 6, 'assets/uploads/gallery/image15458022963.jpg', 1, '2018-12-26 05:31:36'),
(52, 6, 'assets/uploads/gallery/image15458022964.jpg', 1, '2018-12-26 05:31:36'),
(53, 6, 'assets/uploads/gallery/image15458022965.jpg', 1, '2018-12-26 05:31:36'),
(54, 6, 'assets/uploads/gallery/image15458022966.jpg', 1, '2018-12-26 05:31:36'),
(55, 6, 'assets/uploads/gallery/image15458022967.jpg', 1, '2018-12-26 05:31:36'),
(56, 7, 'assets/uploads/gallery/image1545802499.jpg', 1, '2018-12-26 05:35:00'),
(57, 7, 'assets/uploads/gallery/image15458024991.jpg', 1, '2018-12-26 05:35:00'),
(58, 7, 'assets/uploads/gallery/image15458024992.jpg', 1, '2018-12-26 05:35:00'),
(59, 7, 'assets/uploads/gallery/image15458024993.jpg', 1, '2018-12-26 05:35:00'),
(60, 7, 'assets/uploads/gallery/image15458024994.jpg', 1, '2018-12-26 05:35:00'),
(61, 7, 'assets/uploads/gallery/image15458024995.jpg', 1, '2018-12-26 05:35:00'),
(62, 7, 'assets/uploads/gallery/image15458024996.jpg', 1, '2018-12-26 05:35:00'),
(63, 7, 'assets/uploads/gallery/image15458024997.jpg', 1, '2018-12-26 05:35:00'),
(64, 7, 'assets/uploads/gallery/image1545802500.jpg', 1, '2018-12-26 05:35:00'),
(67, 3, 'assets/uploads/gallery/image1545803382.jpg', 1, '2018-12-26 05:49:42');

-- --------------------------------------------------------

--
-- Table structure for table `gallery_albums`
--

CREATE TABLE `gallery_albums` (
  `id` int(11) NOT NULL,
  `album_name` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `title_en` varchar(500) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(500) CHARACTER SET utf8 NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `gallery_albums`
--

INSERT INTO `gallery_albums` (`id`, `album_name`, `title_en`, `title_ar`, `image`, `status`, `created_at`) VALUES
(1, '', 'Album one', 'Album one ar', 'assets/uploads/gallery_albums/image1545216304.jpg', 1, '2018-12-19 10:45:04'),
(2, '', 'Album two', 'Album two ar', 'assets/uploads/gallery_albums/image1545216324.jpg', 1, '2018-12-19 10:45:24'),
(3, '', 'Album three', 'Album three ar', 'assets/uploads/gallery_albums/image1545309548.png', 1, '2018-12-19 10:45:43'),
(4, '', 'Album Four', 'Album Four ar', 'assets/uploads/gallery_albums/image1545216366.jpg', 1, '2018-12-19 10:46:06'),
(5, '', 'Album Five', 'Album Five ar', 'assets/uploads/gallery_albums/image1545216386.jpg', 1, '2018-12-19 10:46:26'),
(6, '', 'Album Six', 'Album Six ar', 'assets/uploads/gallery_albums/image1545216413.jpg', 1, '2018-12-19 10:46:53'),
(7, '', 'Album Seven', 'Album Seven ar', 'assets/uploads/gallery_albums/image1545216459.jpg', 1, '2018-12-19 10:47:39');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE `help` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry&#39;s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\r\n', '<p>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. لقد كان لوريم إيبسوم النص القياسي المعياري لهذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ، وهرعت بها لعمل كتاب من نوع العينة. وقد نجا ليس فقط خمسة قرون ، ولكن أيضا قفزة في التنضيد الإلكتروني ، وتبقى في جوهرها دون تغيير. تم تعميمها في الستينيات مع إصدار أوراق Letraset التي تحتوي على ممرات Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.</p>\r\n', 'active', '2018-12-15 10:38:50');

-- --------------------------------------------------------

--
-- Table structure for table `index_banners`
--

CREATE TABLE `index_banners` (
  `id` int(11) NOT NULL,
  `title_en` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `title_ar` varchar(100) CHARACTER SET utf8 NOT NULL,
  `image` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `file_type` int(1) NOT NULL DEFAULT '0' COMMENT '1- video, 0-image',
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `index_banners`
--

INSERT INTO `index_banners` (`id`, `title_en`, `title_ar`, `image`, `file_type`, `status`, `created_at`) VALUES
(1, 'Effect and Effect', ' أثر وتأثير', 'assets/uploads/index_banners/image1545299015.jpg', 0, 1, '2018-12-20 09:43:35'),
(2, 'The Saudi media is a busy process', 'الإعلام السعودي مسيرة حافلة بالعطاء', 'assets/uploads/index_banners/image1545299179.jpg', 0, 1, '2018-12-20 09:46:19'),
(3, 'Banner title 2', 'Banner title 2 ar', 'assets/uploads/index_banners/image1547031973.mp4', 1, 1, '2018-12-20 10:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `index_banners_content`
--

CREATE TABLE `index_banners_content` (
  `id` int(11) NOT NULL,
  `index_banner_id` int(11) NOT NULL,
  `title_en` varchar(500) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(500) CHARACTER SET utf8 NOT NULL,
  `heading1_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `heading1_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content1_en` text CHARACTER SET utf8 NOT NULL,
  `content1_ar` text CHARACTER SET utf8 NOT NULL,
  `heading2_en` text CHARACTER SET utf8 NOT NULL,
  `heading2_ar` text CHARACTER SET utf8 NOT NULL,
  `content2_en` text CHARACTER SET utf8 NOT NULL,
  `content2_ar` text CHARACTER SET utf8 NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `index_banners_content`
--

INSERT INTO `index_banners_content` (`id`, `index_banner_id`, `title_en`, `title_ar`, `heading1_en`, `heading1_ar`, `content1_en`, `content1_ar`, `heading2_en`, `heading2_ar`, `content2_en`, `content2_ar`, `image`, `status`, `created_at`) VALUES
(1, 1, 'Riyadh the capital of Arab media impact and impact', 'الرياض عاصمة الإعلام العربي أثر وتأثير ', 'G20 Leaders Met in Bueros Aires on 30 November and 1st December', 'اجتمع قادة مجموعة العشرين في بوروس آيرس في 30 نوفمبر و 1 ديسمبر', '<p>Riyadh, the capital of Saudi Arabia, was chosen as the Arab Media Capital for 2018-2019 by the Council of Arab Information Ministers. The Council, in its decision of the 49th session, which was held on Wednesday, May 9, confirmed the headquarters of the General Secretariat of the League of Arab States in Cairo. The Council stressed &quot;the adoption of Jerusalem as the permanent capital of the Arab media in parallel with the selection of an Arab capital annually as the capital of Arab media.&quot; Because of its importance in the conscience of the Arab world.</p>\r\n\r\n<p>This is due to the Kingdom&#39;s position on the global level, its service to the causes of the Arab nation, and the development and media momentum it has experienced in recent years, which will positively reflect this choice to support the Arab media in general.</p>\r\n', '<p>تم اختيار مدينة الرياض، عاصمة المملكة العربية السعودية، كعاصمة للإعلام العربي لعام 2018-2019، من قِبل مجلس وزراء الإعلام العرب. وأكد المجلس في قراره الصادر عن الدورة 49، التي عقدت الأربعاء 9 مايو/أيار الجاري، بمقر الأمانة العامة لجامعة الدول العربية بالقاهرة. وأكد المجلس على &quot;تبني القدس عاصمة دائمة للإعلام العربي بالتوازي مع اختيار عاصمة عربية سنويا كعاصمة للإعلام العربي&quot;. لما لها من أهمية في وجدان العالم العربي.</p>\r\n\r\n<p>ويأتي ذلك لما تتمتع به المملكة من مكانة على المستوى العالمي، ولما تقدمه من خدمة لقضايا الأمة العربية، وللتطور والزخم الإعلامي الذي تعيشه، خلال السنوات الأخيرة، مما سينعكس ذلك بالإيجاب على هذا الاختيار ليدعم الإعلام العربي بشكل عام.</p>\r\n', 'Reason for selection', 'سبب الاختيار', '<p>The selection of the Council of Ministers of Arab Information for Riyadh, the capital of the Arab media, stresses the importance of the role played by the Kingdom through its media policies in serving important Arab media issues and communicating them to international public opinion.</p>\r\n\r\n<p>The Kingdom of Saudi Arabia has been a strong force supporting the causes of the Arab world at all levels of media. The selection of Riyadh as the capital of the Arab media will achieve great successes that push the Arab media to follow suit to advance the media message in the region.</p>\r\n\r\n<p>The choice of Riyadh as the capital of the Arab media is a confirmation of the strong relations between the Kingdom and the countries of the world, and the great position it enjoys in the Arab world. This decision contributes to the development of Arab and Islamic media institutions to meet the challenges facing the nation in a number of countries with The growing influence of militias with an external agenda. The selection of Riyadh as the capital of the Arab media coincides with the many successes of the Kingdom.</p>\r\n', '<p>اختيــار مجلــس وزراء إعلام العــرب للريــاض عاصمــة الإعلام العربــي يؤكــد أهميــة الــدور الــذي تؤديــه المملكة مـن خـلال سياسـاتها الإعلامية في خدمـة قضايـا الإعلام العربـي المهمـة وإيصالهـا إلـى الـرأي العـام الدولــي.</p>\r\n\r\n<p>كانت وما زالت المملكة قوة داعمة لقضايا العالم العربي على كافة المستويات الإعلامية.اختيــار الريــاض عاصمــة الإعلام العربــي ســيحقق نجاحــات كبيــرة تدفــع الإعلام العربي للسير على منوالها للرقي بالرسالة الإعلامية في المنطقة.</p>\r\n\r\n<p>يأتـي اختيـار الريـاض عاصمـة الإعلام العربـي تأكيـداً لأواصـر العلاقـات المتينـة التـي تربـط المملكة بـدول العالـم، ولعظـم المكانـة التـي تتمتـع بهـا في العالـم العربـي.يسـهم هـذا القـرار بفاعليـته في تطويـر المؤسسات الإعلامية العربية والإسلامية، لتكـون علـى مسـتوى التحديـات التـي تمـر بهـا الأمة، في عـدد مـن الـدول مـع تزايـد نفـوذ الميليشيات ذات الأجندة الخارجية.يأتــي اختيــار الريــاض عاصمــة الإعلام العربــي بالتزامــن مــع العديــد مــن النجاحــات الكبيــرة التــي تعيشــها المملكة.</p>\r\n', 'assets/uploads/index_banners_content/image1545301892.png', 1, '2018-12-20 10:31:32'),
(2, 2, 'Riyadh the capital of Arab media impact and impact', 'الرياض عاصمة الإعلام العربي أثر وتأثير ', 'G20 Leaders Met in Bueros Aires on 30 November and 1st December', 'اجتمع قادة مجموعة العشرين في بوروس آيرس في 30 نوفمبر و 1 ديسمبر', '<p>Riyadh, the capital of Saudi Arabia, was chosen as the Arab Media Capital for 2018-2019 by the Council of Arab Information Ministers. The Council, in its decision of the 49th session, which was held on Wednesday, May 9, confirmed the headquarters of the General Secretariat of the League of Arab States in Cairo. The Council stressed &quot;the adoption of Jerusalem as the permanent capital of the Arab media in parallel with the selection of an Arab capital annually as the capital of Arab media.&quot; Because of its importance in the conscience of the Arab world.</p>\r\n\r\n<p>This is due to the Kingdom&#39;s position on the global level, its service to the causes of the Arab nation, and the development and media momentum it has experienced in recent years, which will positively reflect this choice to support the Arab media in general.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>تم اختيار مدينة الرياض، عاصمة المملكة العربية السعودية، كعاصمة للإعلام العربي لعام 2018-2019، من قِبل مجلس وزراء الإعلام العرب. وأكد المجلس في قراره الصادر عن الدورة 49، التي عقدت الأربعاء 9 مايو/أيار الجاري، بمقر الأمانة العامة لجامعة الدول العربية بالقاهرة. وأكد المجلس على &quot;تبني القدس عاصمة دائمة للإعلام العربي بالتوازي مع اختيار عاصمة عربية سنويا كعاصمة للإعلام العربي&quot;. لما لها من أهمية في وجدان العالم العربي.</p>\r\n\r\n<p>ويأتي ذلك لما تتمتع به المملكة من مكانة على المستوى العالمي، ولما تقدمه من خدمة لقضايا الأمة العربية، وللتطور والزخم الإعلامي الذي تعيشه، خلال السنوات الأخيرة، مما سينعكس ذلك بالإيجاب على هذا الاختيار ليدعم الإعلام العربي بشكل عام.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Reason for selection', 'سبب الاختيار', '<p>The selection of the Council of Ministers of Arab Information for Riyadh, the capital of the Arab media, stresses the importance of the role played by the Kingdom through its media policies in serving important Arab media issues and communicating them to international public opinion.</p>\r\n\r\n<p>The Kingdom of Saudi Arabia has been a strong force supporting the causes of the Arab world at all levels of media. The selection of Riyadh as the capital of the Arab media will achieve great successes that push the Arab media to follow suit to advance the media message in the region.</p>\r\n\r\n<p>The choice of Riyadh as the capital of the Arab media is a confirmation of the strong relations between the Kingdom and the countries of the world, and the great position it enjoys in the Arab world. This decision contributes to the development of Arab and Islamic media institutions to meet the challenges facing the nation in a number of countries with The growing influence of militias with an external agenda. The selection of Riyadh as the capital of the Arab media coincides with the many successes of the Kingdom.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>اختيــار مجلــس وزراء إعلام العــرب للريــاض عاصمــة الإعلام العربــي يؤكــد أهميــة الــدور الــذي تؤديــه المملكة مـن خـلال سياسـاتها الإعلامية في خدمـة قضايـا الإعلام العربـي المهمـة وإيصالهـا إلـى الـرأي العـام الدولــي.</p>\r\n\r\n<p>كانت وما زالت المملكة قوة داعمة لقضايا العالم العربي على كافة المستويات الإعلامية.اختيــار الريــاض عاصمــة الإعلام العربــي ســيحقق نجاحــات كبيــرة تدفــع الإعلام العربي للسير على منوالها للرقي بالرسالة الإعلامية في المنطقة.</p>\r\n\r\n<p>يأتـي اختيـار الريـاض عاصمـة الإعلام العربـي تأكيـداً لأواصـر العلاقـات المتينـة التـي تربـط المملكة بـدول العالـم، ولعظـم المكانـة التـي تتمتـع بهـا في العالـم العربـي.يسـهم هـذا القـرار بفاعليـته في تطويـر المؤسسات الإعلامية العربية والإسلامية، لتكـون علـى مسـتوى التحديـات التـي تمـر بهـا الأمة، في عـدد مـن الـدول مـع تزايـد نفـوذ الميليشيات ذات الأجندة الخارجية.يأتــي اختيــار الريــاض عاصمــة الإعلام العربــي بالتزامــن مــع العديــد مــن النجاحــات الكبيــرة التــي تعيشــها المملكة.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'assets/uploads/index_banners_content/image1545304468.png', 1, '2018-12-20 11:14:28'),
(3, 3, 'Riyadh the capital of Arab media impact and impact', 'الرياض عاصمة الإعلام العربي أثر وتأثير ', 'G20 Leaders Met in Bueros Aires on 30 November and 1st December', 'اجتمع قادة مجموعة العشرين في بوروس آيرس في 30 نوفمبر و 1 ديسمبر', '<p>Riyadh, the capital of Saudi Arabia, was chosen as the Arab Media Capital for 2018-2019 by the Council of Arab Information Ministers. The Council, in its decision of the 49th session, which was held on Wednesday, May 9, confirmed the headquarters of the General Secretariat of the League of Arab States in Cairo. The Council stressed &quot;the adoption of Jerusalem as the permanent capital of the Arab media in parallel with the selection of an Arab capital annually as the capital of Arab media.&quot; Because of its importance in the conscience of the Arab world.</p>\r\n\r\n<p>This is due to the Kingdom&#39;s position on the global level, its service to the causes of the Arab nation, and the development and media momentum it has experienced in recent years, which will positively reflect this choice to support the Arab media in general.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>تم اختيار مدينة الرياض، عاصمة المملكة العربية السعودية، كعاصمة للإعلام العربي لعام 2018-2019، من قِبل مجلس وزراء الإعلام العرب. وأكد المجلس في قراره الصادر عن الدورة 49، التي عقدت الأربعاء 9 مايو/أيار الجاري، بمقر الأمانة العامة لجامعة الدول العربية بالقاهرة. وأكد المجلس على &quot;تبني القدس عاصمة دائمة للإعلام العربي بالتوازي مع اختيار عاصمة عربية سنويا كعاصمة للإعلام العربي&quot;. لما لها من أهمية في وجدان العالم العربي.</p>\r\n\r\n<p>ويأتي ذلك لما تتمتع به المملكة من مكانة على المستوى العالمي، ولما تقدمه من خدمة لقضايا الأمة العربية، وللتطور والزخم الإعلامي الذي تعيشه، خلال السنوات الأخيرة، مما سينعكس ذلك بالإيجاب على هذا الاختيار ليدعم الإعلام العربي بشكل عام.</p>\r\n\r\n<p>&nbsp;</p>\r\n', 'Reason for selection', 'سبب الاختيار', '<p>The selection of the Council of Ministers of Arab Information for Riyadh, the capital of the Arab media, stresses the importance of the role played by the Kingdom through its media policies in serving important Arab media issues and communicating them to international public opinion.</p>\r\n\r\n<p>The Kingdom of Saudi Arabia has been a strong force supporting the causes of the Arab world at all levels of media. The selection of Riyadh as the capital of the Arab media will achieve great successes that push the Arab media to follow suit to advance the media message in the region.</p>\r\n\r\n<p>The choice of Riyadh as the capital of the Arab media is a confirmation of the strong relations between the Kingdom and the countries of the world, and the great position it enjoys in the Arab world. This decision contributes to the development of Arab and Islamic media institutions to meet the challenges facing the nation in a number of countries with The growing influence of militias with an external agenda. The selection of Riyadh as the capital of the Arab media coincides with the many successes of the Kingdom.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '<p>اختيــار مجلــس وزراء إعلام العــرب للريــاض عاصمــة الإعلام العربــي يؤكــد أهميــة الــدور الــذي تؤديــه المملكة مـن خـلال سياسـاتها الإعلامية في خدمـة قضايـا الإعلام العربـي المهمـة وإيصالهـا إلـى الـرأي العـام الدولــي.</p>\r\n\r\n<p>كانت وما زالت المملكة قوة داعمة لقضايا العالم العربي على كافة المستويات الإعلامية.اختيــار الريــاض عاصمــة الإعلام العربــي ســيحقق نجاحــات كبيــرة تدفــع الإعلام العربي للسير على منوالها للرقي بالرسالة الإعلامية في المنطقة.</p>\r\n\r\n<p>يأتـي اختيـار الريـاض عاصمـة الإعلام العربـي تأكيـداً لأواصـر العلاقـات المتينـة التـي تربـط المملكة بـدول العالـم، ولعظـم المكانـة التـي تتمتـع بهـا في العالـم العربـي.يسـهم هـذا القـرار بفاعليـته في تطويـر المؤسسات الإعلامية العربية والإسلامية، لتكـون علـى مسـتوى التحديـات التـي تمـر بهـا الأمة، في عـدد مـن الـدول مـع تزايـد نفـوذ الميليشيات ذات الأجندة الخارجية.يأتــي اختيــار الريــاض عاصمــة الإعلام العربــي بالتزامــن مــع العديــد مــن النجاحــات الكبيــرة التــي تعيشــها المملكة.</p>\r\n', 'assets/uploads/index_banners_content/image1547035062.jpg', 1, '2019-01-09 11:57:42');

-- --------------------------------------------------------

--
-- Table structure for table `keys`
--

CREATE TABLE `keys` (
  `id` int(11) NOT NULL,
  `key` varchar(50) NOT NULL,
  `level` int(2) NOT NULL,
  `ignore_limits` tinyint(1) NOT NULL,
  `is_private_key` tinyint(1) NOT NULL,
  `ip_address` text CHARACTER SET utf8 NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keys`
--

INSERT INTO `keys` (`id`, `key`, `level`, `ignore_limits`, `is_private_key`, `ip_address`, `date_created`) VALUES
(1, '963524', 0, 0, 0, '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `media_databases`
--

CREATE TABLE `media_databases` (
  `id` int(1) NOT NULL,
  `title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `media_databases`
--

INSERT INTO `media_databases` (`id`, `title_en`, `title_ar`, `status`, `created_at`) VALUES
(1, 'Newspapers', 'الصحف ', 1, '2018-12-20 04:55:43'),
(2, 'Channels', 'القنوات', 1, '2018-12-20 04:59:00'),
(3, 'Magazines', 'مجلات', 1, '2018-12-20 04:59:00');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `image` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title_en`, `title_ar`, `content_en`, `content_ar`, `image`, `status`, `created_at`) VALUES
(1, 'sdf gg', 'gdfgsdfg', '<p>asdasfsdgadsf</p>\r\n', '<p>hsfgh</p>\r\n', 'assets/uploads/news/image1547100747.jpg', 1, '2019-01-10 06:01:14');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter_subscriptions`
--

CREATE TABLE `newsletter_subscriptions` (
  `id` int(11) NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `newsletter_subscriptions`
--

INSERT INTO `newsletter_subscriptions` (`id`, `email`, `created_at`) VALUES
(1, 'naveen@gmail.com', '2019-01-09 11:46:00');

-- --------------------------------------------------------

--
-- Table structure for table `privacy`
--

CREATE TABLE `privacy` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `privacy`
--

INSERT INTO `privacy` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<p><strong>Lorem Ipsum</strong></p>\r\n', '<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. .</p>\r\n', 'active', '2018-12-15 10:35:47');

-- --------------------------------------------------------

--
-- Table structure for table `social_media`
--

CREATE TABLE `social_media` (
  `id` int(11) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '0' COMMENT '1-social media, 2-Ministry of communication',
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `social_media`
--

INSERT INTO `social_media` (`id`, `type`, `title`, `link`, `status`, `created_at`) VALUES
(1, 1, 'facebook', 'https://www.facebook.com/', 1, '2018-11-23 09:30:35'),
(2, 1, 'twitter', 'https://twitter.com/login?lang=en', 1, '2018-11-23 09:32:57'),
(3, 1, 'google plus', 'https://plus.google.com', 1, '2018-11-23 09:33:27'),
(4, 1, 'youtube', 'https://www.youtube.com/', 1, '2018-11-23 09:33:48'),
(5, 1, 'instagram', 'https://www.instagram.com/accounts/login/?hl=en', 0, '2018-11-23 09:34:11'),
(8, 2, 'Youtube', 'https://www.youtube.com/channel/UC6pPMWDYiY-AHAzYYJP5-8Q', 1, '2019-01-11 09:57:58');

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` int(11) NOT NULL,
  `title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sub_title_en` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `sub_title_ar` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `stories`
--

INSERT INTO `stories` (`id`, `title_en`, `title_ar`, `sub_title_en`, `sub_title_ar`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(3, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(4, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(5, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(6, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(7, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(8, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>هاشم عبده هاشم من مواليد مدينة جيزان عام 1940م / 1359هـ ، أكمل دراسته في مراحل التعليم الأولى وحتى بداية المرحلة الثانوية في مدينة جيزان ومن ثم أكمل دراسته في جدة ، بعدها التحق بالجامعة ودرس في جامعة الملك عبد العزيز وتخرج فيها ببكالوريوس المكتبات والمعلومات حين كان في الثامنة والثلاثين وكان متفوقًا بدرجة كبيرة فقد نجح بدرجة الامتياز مع مرتبة الشرف الأولى. في عام 1400 هـ حصل على درجة الماجستير بمرتبة الشرف مرة أخرى ، وفي عام 1404هـ حصل على درجة الدكتوراة بمرتبة الشرف من كلية الآداب جامعة القاهرة. يترك عمله لأجل الصحافة عمل في بداية حياته المهنية في إدارة الجمارك لمدة عشرة أعوام، بعدها بدأ يعمل في مؤسسة المدينة الصحفية لمدة عام، وبعد انتهاء هذا العام عاد من جديد للعمل في مديرية الجمارك واستمر بالعمل حوالي خمسة أعوام، ولكنه لم يتمكن من مقاومة شغفه للصحافة فقرر أن يستقيل ليمنح كل جهده وتركيزه للعمل الصحفي. كانت بدايته في الصحافة مراسلا لجريدة المنهل ، وبعدها مراسلا لمجلة الرائد الأسبوعية ، ومن ثم التحق بفريق عمل مجلة قريش، وبدأ عمله في التحرير حين التحق بجريدة المدينة التي عمل فيها محررا فنيا ، وبعدها محررا رياضيا ، وأخيرًا أصبح سكرتير تحرير الشؤون المحلية. وكل هذا أهله لكي يعمل مدير تحرير لمجلة الرياضي التي أطلق عليها في وقت لاحق مجلة الشباب ، كما عمل في نفس الوقت في جريدة الجزيرة بمكتبها في جدة ، ومن ثم تولى منصب مدير تحرير جريدة البلاد، وتميز في منصبه للدرجة التي أهلته لكي يعمل نائبالرئيس التحرير في الجريدة وأن يصبح عضوافي مجلس إدارة الجريدة . نقلة كبرى في العمل الصحفي في نقلة مميزة عُين رئيس تحرير لجريدة عكاظ لمدة سبعة وعشرين عاما ، وفي نفس الأثناء عُين مديرا عاما لمؤسسة عكاظ للصحافة والنشر، ولم يتوقف عن النجاح والإبداع والنشاط بل استمر وقد شارك في كتابة عدد كبير من البرامج الثقافية وبرامج المنوعات وشارك بالتعليق السياسي في إذاعة وتلفزيون السعودية لمدة ستة أعوام. توازن فريد لنموذج إعلامي مميز، فمن يستطيع أن يوازن بين العمل الصحفي والعمل الأكاديمي والعمل التطوعي لابد أن نقف له وقفة احترام، ففي نفس الوقت الذي كان يعمل فيه في الصحف والمجلات كان يعمل معيدا في جامعة الملك عبدالعزيز وبعدها أصبح محاضرًا في نفس الجامعة ، وفي عام 1405هـ تم تعيينه أستاذًا مساعدًا في قسم المكتبات والمعلومات ، لكنه في عام 1418 هـ قرر التقاعد من العمل الأكاديمي وهو ما شكل صدمه لدى الكثيرين من الطلبة، لأن التقاعد جاء مبكرًا ولم يكن متوقعًا. لم يكتف بعمله الاكاديمي والصحفي بل كان له باع كذلك في العمل السياسي وبدأ حين تم تعيينه كعضو في مجلس الشوري بأمر ملكي ، وتم تجديد عضويته ثلاث مرات متتالية ، حينها كان يعمل أيضًا مستشارًا في وزارة الإعلام. كان للدكتور هاشم كذلك العديد من المشاركات والمساهمات في الأعمال التطوعية فقد كان عضوا في اللجنة الوطنية لمكافحة المخدرات ،وعضوا في مجلس إدارة في الجمعية السعودية الخيرية لرعاية الأطفال المعاقين ، وقد ساهم في تأسيس مركز المعاقين في المنطقة الغربية، وكان عضوا أساسيا في جمعية البر في جدة، وعضوا في جمعية التبرع بالدم.. كذلك كان له مشاركات ثقافية عظيمة حيث كان عضوا في مجلس الشرف في مركز جدة للعلوم والتكنولوجيا واللجنة الأولمبية السعودية منذ أول انعقاد لها، وكذلك عضوا في اللجنة الخاصة بمركز أبحاث مكتبة الملك فهد بالرياض، وأحد الأعضاء المؤسسين لمكتبة الملك فهد في جدة، وكان عضوا مؤسسا في هيئة الصحفيين بالمملكة وعضوا باللجنة العليا الخاصة بتطوير العمل الصحفي وهي المسؤولة عن تأسيس الأكاديمية الخاصة بالتدريب على الصحافة التي كانت حينها برئاسة الأمير فيصل بن سلمان بن عبد العزيز، وكذلك كان عضوا في المجلس الاستشاري للغرفة التجارية الصناعية في جدة. وحتى خارج المملكة كان للدكتور هاشم بصمته ، فقد كان عضوا فخريا في رابطة الأدب الحديثة بالقاهرة وكذلك كان عضوا شرفيا في اتحاد الكتاب المصريين. وقد كان له حصيلة أدبية كبيرة فقد أصدر أول كتاب له عام 1408هـ بعنوان &quot; الحب احتراقا &quot; وبعدها &quot; الحزن لا يغسل الهموم &quot; ومن ثم &quot; الاتجاهات العددية والنوعية للدوريات السعودية &quot; وبعدها &quot; دراسات كروية &quot; وكتابه الخامس هو &quot; الدوري السعودي في الخليج &quot; وبعدها نشر &quot; سجلا وثائقيا تحليليا عن مستقبل مجلس التعاون الخليجي &quot; وأخيرًا كتاب &quot; صناعة القرار في المملكة العربية السعودية &quot;. كما أشرف على ثلاث رسائل علمية ، وقام بنفسه بنشر أكثر من دراسة بحثية عن &quot; المكتبات المدرسية في المملكة العربية السعودية &quot; ، و&quot; عجز المناهج الدراسة عن إشباع حاجات الطفل القرائية &quot; و &quot;الدوريات كمصادر لثقافة الأطفال &quot; و &quot; عوامل توقف دوريات الأطفال بالمملكة&quot;. تتويج بجوائز تقديرية نال الدكتور هاشم العديد من الجوائز والتقديرات من المؤسسات والهيئات المحلية التي كانت تعبر عن تقديرها لدوره المتميز في مجال الإعلام ، فقد حاز درع الجمعية السعودية الخيرية لرعاية الأطفال المعاقين من الأمير سلطان بن سلمان عام 1415هـ وفي نفس العام فاز بدرع جامعة الملك عبد العزيز في جدة. في عام 1422هـ تم تكريمه من مؤسسة عكاظ وذلك بمناسبة مرور 20 عام على تعيينه في منصب رئيس تحرير جريدة عكاظ ، وفي عام 1423هـ اختير رجل العام 1422 هـ وذلك نظرًا للمجهودات التي قام بها من أجل تطوير مؤسسة عكاظ الصحفية والمجهودات العظيمة التي بذلها في الإدارة والتحرير طوال سنوات. هاشم عبد هاشم مثال في الميدان الإعلامي للشعلة التي لا تنطفئ وتضيء الدرب للآخرين، لا يتوقف عن نشاطاته المعتادة ولا يرضى بأقل من النجاح وتحقيق الإنجازات العظيمة.</p>\r\n', 1, '2018-12-19 11:07:27'),
(9, 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية ', 'Hashem Abdu Hashimsha is a bright light in journalism, teaching and volunteer work', 'هاشم عبده هاشمشمعة مضيئة في الصحافة والتدريس والأعمال التطوعية', '<p>Hashim Abdu Hashim was born in Jizan city in 1940. He completed his studies in the first stages of education until the beginning of secondary school in Jizan city. Then he completed his studies in Jeddah. Then he joined the university and studied at King Abdul Aziz University. Thirty years ago, he was highly successful, winning the distinction with first honors. In 1400 AH he received a master&#39;s degree with honors again, and in 1404 he received a doctorate degree with honors</p>\r\n', '<p>يأخذنا الحديث أحيانًا للتغني بالعظماء الموسوعيين في تاريخنا، وحين يكون الحديث عن صانعي الإعلام العربي ورواده فالمملكة العربية السعودية تفاخر بشخصيات سعودية كانت لها الريادة وقادت طليعة الإعلام العربيوكان لها الأثر العظيم على مسيرة الإعلام. ومن هؤلاءالعلّامة حمد الجاسر الذي تسابقت نحوه الألقاب فسماه بعضهم (همداني الجزيرة العربية).</p>\r\n\r\n<p>لم يفلح في الفلاحة فصار علامة فارقة في العلم والإعلام</p>\r\n', 1, '2018-12-19 11:07:27');

-- --------------------------------------------------------

--
-- Table structure for table `terms`
--

CREATE TABLE `terms` (
  `id` int(12) NOT NULL,
  `content_en` text CHARACTER SET utf8 NOT NULL,
  `content_ar` text CHARACTER SET utf8 NOT NULL,
  `status` enum('active','inactive') COLLATE utf8_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `terms`
--

INSERT INTO `terms` (`id`, `content_en`, `content_ar`, `status`, `created_at`) VALUES
(1, '<ul>\r\n	<li><strong>Lorem Ipsum</strong></li>\r\n</ul>\r\n', '<ul>\r\n	<li>لوريم إيبسوم (Lorem Ipsum) هو ببساطة نص شكلي في صناعة الطباعة والتنضيد. لقد كان لوريم إيبسوم النص القياسي المعياري لهذه الصناعة منذ القرن السادس عشر ، عندما أخذت طابعة غير معروفة مجموعة من الأطباق ، وهرعت بها لعمل كتاب من نوع العينة. وقد نجا ليس فقط خمسة قرون ، ولكن أيضا قفزة في التنضيد الإلكتروني ، وتبقى في جوهرها دون تغيير. تم تعميمها في الستينيات مع إصدار أوراق Letraset التي تحتوي على ممرات Lorem Ipsum ، ومؤخرًا مع برامج النشر المكتبي مثل Aldus PageMaker بما في ذلك إصدارات Lorem Ipsum.</li>\r\n</ul>\r\n', 'active', '2018-12-15 10:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `name` varchar(100) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `occupation` text NOT NULL,
  `type` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `country_code` varchar(10) NOT NULL,
  `phone_code` varchar(10) NOT NULL,
  `image` varchar(500) NOT NULL,
  `gender` int(2) NOT NULL,
  `country_id` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `auth_level` tinyint(3) UNSIGNED NOT NULL COMMENT 'admin-9,',
  `auth_id` varchar(245) NOT NULL,
  `device_type` varchar(100) NOT NULL,
  `device_token` varchar(1000) NOT NULL,
  `role` varchar(10) NOT NULL,
  `banned` int(1) NOT NULL DEFAULT '0',
  `password` varchar(60) NOT NULL,
  `approval_status` int(2) NOT NULL DEFAULT '0',
  `passwd_recovery_code` varchar(100) NOT NULL,
  `passwd_recovery_date` datetime NOT NULL,
  `passwd_modified_at` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `first_name`, `last_name`, `occupation`, `type`, `email`, `phone_number`, `country_code`, `phone_code`, `image`, `gender`, `country_id`, `address`, `auth_level`, `auth_id`, `device_type`, `device_token`, `role`, `banned`, `password`, `approval_status`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`) VALUES
(1, 'admin', 'Admin', '', '', '', 0, 'admin@gmail.com', '99519295', 'AF', '966', 'assets/uploads/user_profiles/profile.png', 1, 1, 'Riyadh', 9, '', '', '', 'admin', 0, 'MTIzNDU2', 1, 'KtHYqTICgPtuVyOSRj40hGMlJHqJL1P1YdU0UbXyLkIX69AUOQ', '2018-08-24 07:27:21', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-06-07 13:15:17', '2019-01-09 06:11:05'),
(2, '', '', 'Naveen', 'Kumar', 'Occupation', 1, 'naveenkumar@yopmail.com', '1234567891', '', '', '', 0, 0, '', 1, '', '', '', '', 0, 'MTIzNDU2', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-01-09 06:20:57'),
(3, '', '', 'Kumar', 'Kumar', 'Occupation', 1, 'kumar@yopmail.com', '1234561233', '', '', '', 0, 0, '', 1, '', '', '', '', 0, 'MTIzNDU2', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-01-09 06:21:20'),
(4, '', '', 'Kumar1', 'Kumar1', 'Occupation', 1, 'kumar1@yopmail.com', '1234561235', '', '', '', 0, 0, '', 1, '', '', '', 'user', 0, 'MTIzNDU2', 0, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-01-09 06:21:15'),
(5, '', '', '', '', '', 0, 'kumar12@yopmail.com', '12345643', '', '', 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'user', 0, 'MTIzNDU2', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-01-09 06:27:27', '2019-01-09 06:27:27'),
(6, '', '', '', '', '', 3, 'kumar123@yopmail.com', '123456431', '', '', 'assets/uploads/user_profiles/profile.png', 0, 0, '', 1, '', '', '', 'user', 0, 'MTIzNDU2', 1, '', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-01-09 06:28:36', '2019-01-09 06:28:36');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about_us`
--
ALTER TABLE `about_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `country_id` (`country_id`);

--
-- Indexes for table `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `database_sites`
--
ALTER TABLE `database_sites`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `development_map`
--
ALTER TABLE `development_map`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exhibitions`
--
ALTER TABLE `exhibitions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `album_id` (`album_id`);

--
-- Indexes for table `gallery_albums`
--
ALTER TABLE `gallery_albums`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `help`
--
ALTER TABLE `help`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_banners`
--
ALTER TABLE `index_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `index_banners_content`
--
ALTER TABLE `index_banners_content`
  ADD PRIMARY KEY (`id`),
  ADD KEY `index_banner_id` (`index_banner_id`);

--
-- Indexes for table `keys`
--
ALTER TABLE `keys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `media_databases`
--
ALTER TABLE `media_databases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `privacy`
--
ALTER TABLE `privacy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_media`
--
ALTER TABLE `social_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `terms`
--
ALTER TABLE `terms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about_us`
--
ALTER TABLE `about_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=249;

--
-- AUTO_INCREMENT for table `database_sites`
--
ALTER TABLE `database_sites`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `development_map`
--
ALTER TABLE `development_map`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `exhibitions`
--
ALTER TABLE `exhibitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `faq`
--
ALTER TABLE `faq`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `gallery_albums`
--
ALTER TABLE `gallery_albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `help`
--
ALTER TABLE `help`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `index_banners`
--
ALTER TABLE `index_banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `index_banners_content`
--
ALTER TABLE `index_banners_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `keys`
--
ALTER TABLE `keys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `media_databases`
--
ALTER TABLE `media_databases`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `newsletter_subscriptions`
--
ALTER TABLE `newsletter_subscriptions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `privacy`
--
ALTER TABLE `privacy`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `social_media`
--
ALTER TABLE `social_media`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `terms`
--
ALTER TABLE `terms`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cities`
--
ALTER TABLE `cities`
  ADD CONSTRAINT `cities_ibfk_1` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`album_id`) REFERENCES `gallery_albums` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `index_banners_content`
--
ALTER TABLE `index_banners_content`
  ADD CONSTRAINT `index_banners_content_ibfk_1` FOREIGN KEY (`index_banner_id`) REFERENCES `index_banners` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
