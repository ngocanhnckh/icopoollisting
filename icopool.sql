-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 26, 2019 lúc 12:53 AM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `icopool`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `blog`
--

CREATE TABLE `blog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `blog`
--

INSERT INTO `blog` (`id`, `link`) VALUES
(1, 'http://youtube.com');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ico`
--

CREATE TABLE `ico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average` float NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci,
  `idngpost` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ico`
--

INSERT INTO `ico` (`id`, `name`, `slug`, `average`, `Description`, `idngpost`) VALUES
(1, 'Oasis Labs', 'oasis-labs', 5, NULL, 1),
(2, 'CertiK', 'certik', 8.8, '<p><strong>Category:</strong>&nbsp;<strong>Verification, Cybersecurity&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Country of incorporation:&nbsp;</strong>Singapore&nbsp;&nbsp;<strong>&nbsp; Date:&nbsp;</strong>19.07.2018</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>INTRO</p>\r\n\r\n<p><a href=\"https://certik.org/?utm_source=cryptodiffer\">Certik</a>&nbsp;- is a framework for automated verification/audit of smart contracts/dApps for building fully trustworthy smart contracts and blockchain ecosystems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TOKENOMICS</p>\r\n\r\n<p><strong>Metrics</strong></p>\r\n\r\n<ul>\r\n	<li>ICO Time: No data</li>\r\n	<li>Token: CTK</li>\r\n	<li>Token type: ERC-20</li>\r\n	<li>Hard cap: $ 30-40M</li>\r\n	<li>Price: $ 3,05 (not official)</li>\r\n	<li>Minimum investment: 0.1 ETH</li>\r\n	<li>Bonus: 5%</li>\r\n	<li>Bounty: No</li>\r\n	<li>Accepting: ETH</li>\r\n	<li>Сan&#39;t participate: China, USA</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Note:</em></p>\r\n\r\n<ul>\r\n	<li>Price is not official;</li>\r\n	<li>Current allocation is unknown, but estimated token sale allocation &nbsp;- 40%;</li>\r\n	<li>With this allocation estimated Hardcap is $ 120M!!!</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tokens distribution</strong></p>\r\n\r\n<p>No data</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Protective measures against the tokens depreciation</strong></p>\r\n\r\n<p>Lock up:</p>\r\n\r\n<ul>\r\n	<li>1/3 release before exchange;</li>\r\n	<li>1/3 release 1 month after exchange;</li>\r\n	<li>1/3 release 2 month after exchange.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PRODUCT</p>\r\n\r\n<p><strong>The relevance of market problems solved by the project</strong></p>\r\n\r\n<p>Smart contracts and dApps are needed an automated verification/ audit system, that will help to build trustworthy blockchain ecosystems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The description of key products and project technology</strong></p>\r\n\r\n<p>To solve this, CertiK developed a layer-based approach to&nbsp;<a href=\"http://prntscr.com/k8bvhi\">decompose such tasks</a>&nbsp;into smaller ones and&nbsp;<a href=\"http://prntscr.com/k8bv1s\">smart label them</a>for the specification. These smaller proof obligations can be encoded in the CertiK transactions and will then be proved and validated by the participants in a decentralized style. For their work participants will be rewarded in CTK tokens.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Decomposed proof obligations are much easier to untangle and can even be solved by some automatic verifiers (e.g., SMT solvers).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CertiK Platform offers a series of certified libraries</p>\r\n\r\n<p>and plug-ins to the integrated development environment (IDE) for building more trustworthy DApps.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CertiK Platform intends to provide customized certification services. In this case, verification experts will help specify/verify the programs and generate a detailed, comprehensive report.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The CertiK Platform constructs mechanized proof objects (or counterexamples) such that these proofs can be quickly checked by anyone using their own machine. These proof objects can be viewed as the &ldquo;certificates&rdquo; to the verified programs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By the team was developed Proo-of-Proof scheme, that unifies 5 roles for platform participants:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Customers can submit programs/systems that need verification or any proof obligations to the CertiK Platform&rsquo;s network. This is done by initiating and broadcasting a special &ldquo;proof request&rdquo; transaction associated with some CTK incentives offered for anyone who constructs the proofs.</li>\r\n	<li>Bounty hunters are the ones who aim for CTK incentives and would like to share their computation resources. They will construct and broadcast the proof objects, and then wait for the proofs to be validated. Due to the significant importance of this role, only users who possess a certain amount of CTKs are allowed to take this role.</li>\r\n	<li>Checkers can get CTK incentives by recording regular transactions or check the submitted proof objects. Bounty hunters can only receive their incentives once their proofs are validated and checkers can also get a small portion of these incentives.</li>\r\n	<li>Sages are the ones who plug in their proof engines via the CertiK Platform&rsquo;s open protocol. Their engines may be randomly used by bounty hunters and will be evaluated through A/B testing. They can also get some CTK incentives depending on the evaluation result of their engines.</li>\r\n	<li>Users can subscribe to all CertiK Platform&rsquo;s certified libraries and IDE plug-ins to build their own DApps/systems with some CTKs.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>These five roles will balance, guard, and improve the CertiK Platform. Value of CTK is generated by posing and solving proof obligations, validating proof objects, and creating advanced proof engines.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The stage progress and milestones of the project development (Roadmap)</strong></p>\r\n\r\n<p>The&nbsp;<a href=\"http://prntscr.com/k8ag7q\">Roadmap</a>&nbsp;provides a good technical overview of the development, yet there is no date of release of the final product. The project is developing according to the Roadmap.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>No Github.</p>\r\n\r\n<p><br />\r\nThere is a&nbsp;<a href=\"https://youtu.be/x3kaORlamMQ\">demo video</a>&nbsp;of the MVP.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The importance of blockchain in the project</strong></p>\r\n\r\n<p>Role of the blockchain in the project is not specified, but it can be assumed, that Ethereum blockchain will be used to store and perform transactions with CTK.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TEAM AND PARTNERS</p>\r\n\r\n<p><strong>Experience and the team achievements</strong></p>\r\n\r\n<p>The team consists of 3 employees, who are experienced in research in the tech field, engineering, verification, software development, system development, and cybersecurity. Members with experience in the blockchain development are not found.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/guronghui\">Ronghui Gu</a>, Co-Founder &ndash; He is a tenure-track Assistant Professor of Computer Science at Columbia University. He obtained his Ph.D. in Computer Science from Yale University in 2016, where his dissertation won the Distinction Dissertation Award at Yale and was nominated for the ACM Dissertation Award. He obtained his B.S. from Tsinghua University in 2011. Prof. Gu is an expert in formal verification of system software. He was the primary designer and developer of CertiKOS, the world&#39;s first fully verified concurrent OS kernel. His OSDI16 paper on CertiKOS has been nominated and selected for publication in the Research Highlights section of the CACM.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/zhong-shao-545b754\">Zhong Shao</a>, Co-Founder &ndash; He is Thomas L. Kempner Professor and Department Chair in the Department of Computer Science at Yale University. He earned his Ph.D. in Computer Science from Princeton University in 1994. During his early career, he was a key developer of the SML/NJ compiler and the main architect of its FLINT certifying infrastructure. In recent years, Shao has been a leading figure working on the highly visible research fields on cybersecurity, programming languages, operating systems, and certified software. He and his FLINT group at Yale have developed the world&#39;s first hacker-resistant concurrent operating system CertiKOS---a major milestone toward building cyber-physical systems that are probably free from software vulnerabilities. Shao is the author or co-author of 90 articles in top scientific journals and conferences</p>\r\n\r\n<p><br />\r\n<a href=\"https://www.linkedin.com/in/vilhelm-sj%C3%B6berg-9b667a94\">Vilhelm Sjoberg</a>, Co-Founder - He&nbsp;is an associate research scientist at Yale University. He received his Ph.D. in Computer Science from the University of Pennsylvania in 2015. He is an expert in software verification, programming languages, and type systems. His thesis research focused on making dependent type systems more attractive for general purpose programming languages by making it optional to prove that functions terminate, and by incorporating automatic theorem proving via congruence closure. Currently, he is interested in language support for layered verified systems like CertiKOS. Dr. Sj&ouml;berg is the winner of 2016 ACM SIGPLAN John C. Reynolds Doctoral Dissertation Award.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Advisory board</strong></p>\r\n\r\n<p>No data.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Strategic partners</p>\r\n\r\n<p>Confirmed:&nbsp;<a href=\"https://medium.com/iotex/iotex-certik-announce-partnership-focused-on-blockchain-and-smart-contract-security-954c422fca43\">IoTeX,</a>&nbsp;<a href=\"https://medium.com/ontologynetwork/ontology-partners-with-certik-to-build-reliable-blockchain-security-5faf7e681801\">Ontology</a>,&nbsp;<a href=\"https://www.cryptoninjas.net/2018/05/15/nebulabs-partners-with-certik-to-ensure-smart-contract-and-dapp-security/\">Nebulas</a>,&nbsp;<a href=\"https://medium.com/@inklabsfoundation/ink-and-certik-collaborate-to-enable-the-formal-verification-for-the-ink-cross-chain-protocol-568d64d4ebda\">Ink</a>,&nbsp;<a href=\"https://twitter.com/iostoken/status/1009988899018436608\">IOStoken</a>.</p>\r\n\r\n<p><br />\r\nTeam plans to reach&nbsp;<a href=\"http://prntscr.com/k8asdr\">30 partnerships</a>&nbsp;by the end of July 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Large investors and investment funds</strong></p>\r\n\r\n<p>Confirmed:&nbsp;<a href=\"http://prntscr.com/k8aeut\">NEO Global Capital, DHVC,</a>&nbsp;<a href=\"https://siliconangle.com/blog/2018/06/01/binance-unveils-1b-investment-fund-blockchain-cryptocurrency-startups/\">Binance Labs</a>,&nbsp;<a href=\"https://www.continue.capital/\">Continue Capital</a>,&nbsp;<a href=\"https://www.jenga.io/\">Jenga Solutions</a>,&nbsp;<a href=\"http://arringtonxrpcapital.com/companies/\">Arrington XRP Capital</a>,&nbsp;<a href=\"https://cryptoglobalist.com/2018/06/25/50-million-usd-raised-towards-supporting-development-on-iostoken-iost/\">Blue Hill</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not confirmed: FBG Capital, Bitmain</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MARKET</p>\r\n\r\n<p><strong>Competitive environment</strong></p>\r\n\r\n<p>According to the&nbsp;<a href=\"http://prntscr.com/k8cs2o\">market research by the team</a>, smart contracts/ dApps verification market can be as large as one trillion dollars.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Direct competitors in the blockchain space:</p>\r\n\r\n<ul>\r\n	<li>Quantstamp - raised $31,3M, capitalization &ndash; $ 48,8M, ROI USD - 1,1x;</li>\r\n	<li>Zeppelin &ndash; wasn&rsquo;t held, capitalization &ndash; not available.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Projects Quantstamp and Zeppelin are very human intensive and do not involve much automation, so they are far less scaleable than CertiK.&nbsp;Furthermore, libraries provided by OpenZeppelin are either not verified or do not offer mechanized proof objects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Companies Solidified and Security can only be used to check/verify a list of fixed properties rather than the functional correctness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Runtime Verification &ndash; work of this company still remains at the research stage and it is an unknown how their techniques can be applied to industry-grade systems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The project advantages</strong></p>\r\n\r\n<ul>\r\n	<li>Strong team;</li>\r\n	<li>Support of large investors;</li>\r\n	<li>Already established strategic partnerships;</li>\r\n	<li>There is a video demo of the MVP;</li>\r\n	<li>Well-developed infrastructure;</li>\r\n	<li>There are only a few companies on the market, who are working in the same niche, but team points out advantages of their project over the competitors;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SOCIAL ACTIVITY</p>\r\n\r\n<p><strong>The project popularity in the social networks and discussion forums</strong></p>\r\n\r\n<p>The project is detected on the radar of the next influencers: ICO Pantera, OhHeyMatty.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.youtube.com/channel/UCCcFr6FTUeWDIqUdY8i1W5w\">Youtube</a>: 206 subscribers, average number of views per video is 140, average number of comments under each video is 2, user activity is low.</p>\r\n\r\n<p><a href=\"https://medium.com/certik\">Medium</a>: 635 followers, the average number of likes per post is 70, without any discussion in the comment section, user activity is low.<br />\r\n<a href=\"https://t.me/certikorg\">Telegram</a>: 39,2k members, admins on the Telegram-channel are responding quickly, user activity is high.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Fraud risk - low. Community interest - high.</em></p>', 1),
(5, 'Argoland', 'argoland', 3.5, NULL, 2);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `icopool`
--

CREATE TABLE `icopool` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activeico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numofparticipants` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci,
  `idngpost` int(11) NOT NULL,
  `score` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `icopool`
--

INSERT INTO `icopool` (`id`, `name`, `slug`, `activeico`, `numofparticipants`, `lang`, `access`, `description`, `idngpost`, `score`) VALUES
(1, 'ICO Dach', 'ico-dach', 'Oasis Labs', '2775', 'EN', 'Unlock', '<p><strong>Category:</strong>&nbsp;<strong>Verification, Cybersecurity&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Country of incorporation:&nbsp;</strong>Singapore&nbsp;&nbsp;<strong>&nbsp; Date:&nbsp;</strong>19.07.2018</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>INTRO</p>\r\n\r\n<p><a href=\"https://certik.org/?utm_source=cryptodiffer\">Certik</a>&nbsp;- is a framework for automated verification/audit of smart contracts/dApps for building fully trustworthy smart contracts and blockchain ecosystems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TOKENOMICS</p>\r\n\r\n<p><strong>Metrics</strong></p>\r\n\r\n<ul>\r\n	<li>ICO Time: No data</li>\r\n	<li>Token: CTK</li>\r\n	<li>Token type: ERC-20</li>\r\n	<li>Hard cap: $ 30-40M</li>\r\n	<li>Price: $ 3,05 (not official)</li>\r\n	<li>Minimum investment: 0.1 ETH</li>\r\n	<li>Bonus: 5%</li>\r\n	<li>Bounty: No</li>\r\n	<li>Accepting: ETH</li>\r\n	<li>Сan&#39;t participate: China, USA</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Note:</em></p>\r\n\r\n<ul>\r\n	<li>Price is not official;</li>\r\n	<li>Current allocation is unknown, but estimated token sale allocation &nbsp;- 40%;</li>\r\n	<li>With this allocation estimated Hardcap is $ 120M!!!</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tokens distribution</strong></p>\r\n\r\n<p>No data</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Protective measures against the tokens depreciation</strong></p>\r\n\r\n<p>Lock up:</p>\r\n\r\n<ul>\r\n	<li>1/3 release before exchange;</li>\r\n	<li>1/3 release 1 month after exchange;</li>\r\n	<li>1/3 release 2 month after exchange.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PRODUCT</p>\r\n\r\n<p><strong>The relevance of market problems solved by the project</strong></p>\r\n\r\n<p>Smart contracts and dApps are needed an automated verification/ audit system, that will help to build trustworthy blockchain ecosystems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The description of key products and project technology</strong></p>\r\n\r\n<p>To solve this, CertiK developed a layer-based approach to&nbsp;<a href=\"http://prntscr.com/k8bvhi\">decompose such tasks</a>&nbsp;into smaller ones and&nbsp;<a href=\"http://prntscr.com/k8bv1s\">smart label them</a>for the specification. These smaller proof obligations can be encoded in the CertiK transactions and will then be proved and validated by the participants in a decentralized style. For their work participants will be rewarded in CTK tokens.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Decomposed proof obligations are much easier to untangle and can even be solved by some automatic verifiers (e.g., SMT solvers).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CertiK Platform offers a series of certified libraries</p>\r\n\r\n<p>and plug-ins to the integrated development environment (IDE) for building more trustworthy DApps.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CertiK Platform intends to provide customized certification services. In this case, verification experts will help specify/verify the programs and generate a detailed, comprehensive report.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The CertiK Platform constructs mechanized proof objects (or counterexamples) such that these proofs can be quickly checked by anyone using their own machine. These proof objects can be viewed as the &ldquo;certificates&rdquo; to the verified programs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By the team was developed Proo-of-Proof scheme, that unifies 5 roles for platform participants:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Customers can submit programs/systems that need verification or any proof obligations to the CertiK Platform&rsquo;s network. This is done by initiating and broadcasting a special &ldquo;proof request&rdquo; transaction associated with some CTK incentives offered for anyone who constructs the proofs.</li>\r\n	<li>Bounty hunters are the ones who aim for CTK incentives and would like to share their computation resources. They will construct and broadcast the proof objects, and then wait for the proofs to be validated. Due to the significant importance of this role, only users who possess a certain amount of CTKs are allowed to take this role.</li>\r\n	<li>Checkers can get CTK incentives by recording regular transactions or check the submitted proof objects. Bounty hunters can only receive their incentives once their proofs are validated and checkers can also get a small portion of these incentives.</li>\r\n	<li>Sages are the ones who plug in their proof engines via the CertiK Platform&rsquo;s open protocol. Their engines may be randomly used by bounty hunters and will be evaluated through A/B testing. They can also get some CTK incentives depending on the evaluation result of their engines.</li>\r\n	<li>Users can subscribe to all CertiK Platform&rsquo;s certified libraries and IDE plug-ins to build their own DApps/systems with some CTKs.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>These five roles will balance, guard, and improve the CertiK Platform. Value of CTK is generated by posing and solving proof obligations, validating proof objects, and creating advanced proof engines.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The stage progress and milestones of the project development (Roadmap)</strong></p>\r\n\r\n<p>The&nbsp;<a href=\"http://prntscr.com/k8ag7q\">Roadmap</a>&nbsp;provides a good technical overview of the development, yet there is no date of release of the final product. The project is developing according to the Roadmap.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>No Github.</p>\r\n\r\n<p><br />\r\nThere is a&nbsp;<a href=\"https://youtu.be/x3kaORlamMQ\">demo video</a>&nbsp;of the MVP.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The importance of blockchain in the project</strong></p>\r\n\r\n<p>Role of the blockchain in the project is not specified, but it can be assumed, that Ethereum blockchain will be used to store and perform transactions with CTK.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TEAM AND PARTNERS</p>\r\n\r\n<p><strong>Experience and the team achievements</strong></p>\r\n\r\n<p>The team consists of 3 employees, who are experienced in research in the tech field, engineering, verification, software development, system development, and cybersecurity. Members with experience in the blockchain development are not found.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/guronghui\">Ronghui Gu</a>, Co-Founder &ndash; He is a tenure-track Assistant Professor of Computer Science at Columbia University. He obtained his Ph.D. in Computer Science from Yale University in 2016, where his dissertation won the Distinction Dissertation Award at Yale and was nominated for the ACM Dissertation Award. He obtained his B.S. from Tsinghua University in 2011. Prof. Gu is an expert in formal verification of system software. He was the primary designer and developer of CertiKOS, the world&#39;s first fully verified concurrent OS kernel. His OSDI16 paper on CertiKOS has been nominated and selected for publication in the Research Highlights section of the CACM.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/zhong-shao-545b754\">Zhong Shao</a>, Co-Founder &ndash; He is Thomas L. Kempner Professor and Department Chair in the Department of Computer Science at Yale University. He earned his Ph.D. in Computer Science from Princeton University in 1994. During his early career, he was a key developer of the SML/NJ compiler and the main architect of its FLINT certifying infrastructure. In recent years, Shao has been a leading figure working on the highly visible research fields on cybersecurity, programming languages, operating systems, and certified software. He and his FLINT group at Yale have developed the world&#39;s first hacker-resistant concurrent operating system CertiKOS---a major milestone toward building cyber-physical systems that are probably free from software vulnerabilities. Shao is the author or co-author of 90 articles in top scientific journals and conferences</p>\r\n\r\n<p><br />\r\n<a href=\"https://www.linkedin.com/in/vilhelm-sj%C3%B6berg-9b667a94\">Vilhelm Sjoberg</a>, Co-Founder - He&nbsp;is an associate research scientist at Yale University. He received his Ph.D. in Computer Science from the University of Pennsylvania in 2015. He is an expert in software verification, programming languages, and type systems. His thesis research focused on making dependent type systems more attractive for general purpose programming languages by making it optional to prove that functions terminate, and by incorporating automatic theorem proving via congruence closure. Currently, he is interested in language support for layered verified systems like CertiKOS. Dr. Sj&ouml;berg is the winner of 2016 ACM SIGPLAN John C. Reynolds Doctoral Dissertation Award.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Advisory board</strong></p>\r\n\r\n<p>No data.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Strategic partners</p>\r\n\r\n<p>Confirmed:&nbsp;<a href=\"https://medium.com/iotex/iotex-certik-announce-partnership-focused-on-blockchain-and-smart-contract-security-954c422fca43\">IoTeX,</a>&nbsp;<a href=\"https://medium.com/ontologynetwork/ontology-partners-with-certik-to-build-reliable-blockchain-security-5faf7e681801\">Ontology</a>,&nbsp;<a href=\"https://www.cryptoninjas.net/2018/05/15/nebulabs-partners-with-certik-to-ensure-smart-contract-and-dapp-security/\">Nebulas</a>,&nbsp;<a href=\"https://medium.com/@inklabsfoundation/ink-and-certik-collaborate-to-enable-the-formal-verification-for-the-ink-cross-chain-protocol-568d64d4ebda\">Ink</a>,&nbsp;<a href=\"https://twitter.com/iostoken/status/1009988899018436608\">IOStoken</a>.</p>\r\n\r\n<p><br />\r\nTeam plans to reach&nbsp;<a href=\"http://prntscr.com/k8asdr\">30 partnerships</a>&nbsp;by the end of July 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Large investors and investment funds</strong></p>\r\n\r\n<p>Confirmed:&nbsp;<a href=\"http://prntscr.com/k8aeut\">NEO Global Capital, DHVC,</a>&nbsp;<a href=\"https://siliconangle.com/blog/2018/06/01/binance-unveils-1b-investment-fund-blockchain-cryptocurrency-startups/\">Binance Labs</a>,&nbsp;<a href=\"https://www.continue.capital/\">Continue Capital</a>,&nbsp;<a href=\"https://www.jenga.io/\">Jenga Solutions</a>,&nbsp;<a href=\"http://arringtonxrpcapital.com/companies/\">Arrington XRP Capital</a>,&nbsp;<a href=\"https://cryptoglobalist.com/2018/06/25/50-million-usd-raised-towards-supporting-development-on-iostoken-iost/\">Blue Hill</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not confirmed: FBG Capital, Bitmain</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MARKET</p>\r\n\r\n<p><strong>Competitive environment</strong></p>\r\n\r\n<p>According to the&nbsp;<a href=\"http://prntscr.com/k8cs2o\">market research by the team</a>, smart contracts/ dApps verification market can be as large as one trillion dollars.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Direct competitors in the blockchain space:</p>\r\n\r\n<ul>\r\n	<li>Quantstamp - raised $31,3M, capitalization &ndash; $ 48,8M, ROI USD - 1,1x;</li>\r\n	<li>Zeppelin &ndash; wasn&rsquo;t held, capitalization &ndash; not available.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Projects Quantstamp and Zeppelin are very human intensive and do not involve much automation, so they are far less scaleable than CertiK.&nbsp;Furthermore, libraries provided by OpenZeppelin are either not verified or do not offer mechanized proof objects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Companies Solidified and Security can only be used to check/verify a list of fixed properties rather than the functional correctness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Runtime Verification &ndash; work of this company still remains at the research stage and it is an unknown how their techniques can be applied to industry-grade systems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The project advantages</strong></p>\r\n\r\n<ul>\r\n	<li>Strong team;</li>\r\n	<li>Support of large investors;</li>\r\n	<li>Already established strategic partnerships;</li>\r\n	<li>There is a video demo of the MVP;</li>\r\n	<li>Well-developed infrastructure;</li>\r\n	<li>There are only a few companies on the market, who are working in the same niche, but team points out advantages of their project over the competitors;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SOCIAL ACTIVITY</p>\r\n\r\n<p><strong>The project popularity in the social networks and discussion forums</strong></p>\r\n\r\n<p>The project is detected on the radar of the next influencers: ICO Pantera, OhHeyMatty.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.youtube.com/channel/UCCcFr6FTUeWDIqUdY8i1W5w\">Youtube</a>: 206 subscribers, average number of views per video is 140, average number of comments under each video is 2, user activity is low.</p>\r\n\r\n<p><a href=\"https://medium.com/certik\">Medium</a>: 635 followers, the average number of likes per post is 70, without any discussion in the comment section, user activity is low.<br />\r\n<a href=\"https://t.me/certikorg\">Telegram</a>: 39,2k members, admins on the Telegram-channel are responding quickly, user activity is high.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Fraud risk - low. Community interest - high.</em></p>', 1, 6.7),
(2, 'test 1', 'test-1', 'Oasis Labs, CertiK', '1', '1', 'Unlock', NULL, 2, 3.3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `link`
--

CREATE TABLE `link` (
  `id` int(11) NOT NULL,
  `name` longtext NOT NULL,
  `link` longtext NOT NULL,
  `target` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `link`
--

INSERT INTO `link` (`id`, `name`, `link`, `target`) VALUES
(2, 'Test #2', 'https://google.com', '_blank'),
(3, 'My fb', 'http://fb.com/me', '_blank'),
(4, 'test #3', 'https://bing.com', '_self'),
(5, 'Test #4', 'http://binhle.dev', 'web'),
(6, 'Test #5', 'http://binhle.dev/test', 'web');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `logo`
--

CREATE TABLE `logo` (
  `thumnail` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `logo`
--

INSERT INTO `logo` (`thumnail`, `logo`, `id`) VALUES
('favicon.ico', 'Altmetric_rgb.png', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2019_07_24_065452_ico', 2),
(3, '2019_07_24_071831_admininfo', 3),
(4, '2019_07_24_082304_create_users', 4),
(6, '2019_07_24_084651_icopool', 5),
(7, '2019_07_24_090007_ico', 6),
(8, '2019_07_24_153249_ads', 7),
(9, '2019_08_04_104204_blog', 8);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `page`
--

CREATE TABLE `page` (
  `id` int(11) NOT NULL,
  `about` longtext NOT NULL,
  `faq` longtext NOT NULL,
  `adv` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `page`
--

INSERT INTO `page` (`id`, `about`, `faq`, `adv`) VALUES
(1, '<p>a&aacute;dfgchjkljhgfdghb</p>\r\n\r\n<p>tf</p>\r\n\r\n<p>ht</p>\r\n\r\n<p>h</p>\r\n\r\n<p>f</p>\r\n\r\n<p>g</p>', '<p>&acirc;</p>', '<p>a</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requestico`
--

CREATE TABLE `requestico` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `contact` varchar(255) NOT NULL,
  `cmt` longtext
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `requestico`
--

INSERT INTO `requestico` (`id`, `name`, `link`, `contact`, `cmt`) VALUES
(1, 'asd', NULL, 'asd', 'asd'),
(2, 'ád', 'http://localhost/icopool/icopoollisting/', 'ad', 'sad'),
(4, 'asdasd', NULL, '<b>fa</b>', 'asdsadsad'),
(5, 'Test #10', 'http://binhle.dev', 'binh27112004@gmail.com', 'abcxyz');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `requestpool`
--

CREATE TABLE `requestpool` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `link` varchar(255) DEFAULT NULL,
  `cmt` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `requestpool`
--

INSERT INTO `requestpool` (`id`, `name`, `contact`, `link`, `cmt`) VALUES
(1, 'test', 'xxx', NULL, 'xxx'),
(2, '<script>alert(\'test XSS\');</script>', 'áds', NULL, 'áds');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `view` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`, `view`) VALUES
(1, 'Admin', 'admin', '$2y$10$TPL/ltSJEWekpf7CLXW86eK01hPr8qVIFCYe4FuXBd.OGmmWEnDum', 'test@gmail.com', 'SpAvpM4K4xCFXLnLlu4KA3Rojs6OdkySXyPy7e0pqusUGTdjgDiP2iXdVQTc', NULL, '2019-09-25 06:49:32', 1053),
(3, 'Bình', 'binh', '$2y$10$TPL/ltSJEWekpf7CLXW86eK01hPr8qVIFCYe4FuXBd.OGmmWEnDum', 'binh271120@f.f', NULL, '2019-08-02 02:53:18', '2019-08-02 02:53:18', NULL),
(4, 'Test #!', 'xxx', '$2y$10$2HY8OnJSh.2KsKNJXnkUbeD5xjfemmjDpfoOPhl7B2gkOQ8yFJdDa', 'xxx@xxx.xxx', NULL, '2019-08-28 16:18:48', '2019-08-28 16:18:48', NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `blog`
--
ALTER TABLE `blog`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ico`
--
ALTER TABLE `ico`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icopool`
--
ALTER TABLE `icopool`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `link`
--
ALTER TABLE `link`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `logo`
--
ALTER TABLE `logo`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `page`
--
ALTER TABLE `page`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `requestico`
--
ALTER TABLE `requestico`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `requestpool`
--
ALTER TABLE `requestpool`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `blog`
--
ALTER TABLE `blog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ico`
--
ALTER TABLE `ico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `icopool`
--
ALTER TABLE `icopool`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `link`
--
ALTER TABLE `link`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `logo`
--
ALTER TABLE `logo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT cho bảng `page`
--
ALTER TABLE `page`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `requestico`
--
ALTER TABLE `requestico`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `requestpool`
--
ALTER TABLE `requestpool`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
