-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th7 28, 2019 lúc 11:35 AM
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
-- Cấu trúc bảng cho bảng `ads`
--

CREATE TABLE `ads` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nguoithue` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tenhinh` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(254) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ads`
--

INSERT INTO `ads` (`id`, `name`, `nguoithue`, `tenhinh`, `description`) VALUES
(1, 'Kymco 50cc', 'bình', '54417682_333317927527839_5218924991705251840_n_1564306359.jpg', '<p>abc</p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `ico`
--

CREATE TABLE `ico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Product` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teamnpartner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `average` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Market` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `ico`
--

INSERT INTO `ico` (`id`, `name`, `slug`, `Product`, `teamnpartner`, `average`, `Market`, `Description`) VALUES
(1, 'Oasis Labs', 'oasis-labs', '8.1', '9.8', '8.5', '8.5', NULL),
(2, 'CertiK', 'certik', '8.5', '9.5', '8.7', '9.5', '<p>INTRO</p>\r\n\r\n<p><a href=\"https://certik.org/?utm_source=cryptodiffer\">Certik</a>&nbsp;- is a framework for automated verification/audit of smart contracts/dApps for building fully trustworthy smart contracts and blockchain ecosystems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TOKENOMICS</p>\r\n\r\n<p><strong>Metrics</strong></p>\r\n\r\n<ul>\r\n	<li>ICO Time: No data</li>\r\n	<li>Token: CTK</li>\r\n	<li>Token type: ERC-20</li>\r\n	<li>Hard cap: $ 30-40M</li>\r\n	<li>Price: $ 3,05 (not official)</li>\r\n	<li>Minimum investment: 0.1 ETH</li>\r\n	<li>Bonus: 5%</li>\r\n	<li>Bounty: No</li>\r\n	<li>Accepting: ETH</li>\r\n	<li>Сan&#39;t participate: China, USA</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Note:</em></p>\r\n\r\n<ul>\r\n	<li>Price is not official;</li>\r\n	<li>Current allocation is unknown, but estimated token sale allocation &nbsp;- 40%;</li>\r\n	<li>With this allocation estimated Hardcap is $ 120M!!!</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tokens distribution</strong></p>\r\n\r\n<p>No data</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Protective measures against the tokens depreciation</strong></p>\r\n\r\n<p>Lock up:</p>\r\n\r\n<ul>\r\n	<li>1/3 release before exchange;</li>\r\n	<li>1/3 release 1 month after exchange;</li>\r\n	<li>1/3 release 2 month after exchange.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PRODUCT</p>\r\n\r\n<p><strong>The relevance of market problems solved by the project</strong></p>\r\n\r\n<p>Smart contracts and dApps are needed an automated verification/ audit system, that will help to build trustworthy blockchain ecosystems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The description of key products and project technology</strong></p>\r\n\r\n<p>To solve this, CertiK developed a layer-based approach to&nbsp;<a href=\"http://prntscr.com/k8bvhi\">decompose such tasks</a>&nbsp;into smaller ones and&nbsp;<a href=\"http://prntscr.com/k8bv1s\">smart label them</a>for the specification. These smaller proof obligations can be encoded in the CertiK transactions and will then be proved and validated by the participants in a decentralized style. For their work participants will be rewarded in CTK tokens.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Decomposed proof obligations are much easier to untangle and can even be solved by some automatic verifiers (e.g., SMT solvers).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CertiK Platform offers a series of certified libraries</p>\r\n\r\n<p>and plug-ins to the integrated development environment (IDE) for building more trustworthy DApps.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>CertiK Platform intends to provide customized certification services. In this case, verification experts will help specify/verify the programs and generate a detailed, comprehensive report.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The CertiK Platform constructs mechanized proof objects (or counterexamples) such that these proofs can be quickly checked by anyone using their own machine. These proof objects can be viewed as the &ldquo;certificates&rdquo; to the verified programs.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>By the team was developed Proo-of-Proof scheme, that unifies 5 roles for platform participants:</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>Customers can submit programs/systems that need verification or any proof obligations to the CertiK Platform&rsquo;s network. This is done by initiating and broadcasting a special &ldquo;proof request&rdquo; transaction associated with some CTK incentives offered for anyone who constructs the proofs.</li>\r\n	<li>Bounty hunters are the ones who aim for CTK incentives and would like to share their computation resources. They will construct and broadcast the proof objects, and then wait for the proofs to be validated. Due to the significant importance of this role, only users who possess a certain amount of CTKs are allowed to take this role.</li>\r\n	<li>Checkers can get CTK incentives by recording regular transactions or check the submitted proof objects. Bounty hunters can only receive their incentives once their proofs are validated and checkers can also get a small portion of these incentives.</li>\r\n	<li>Sages are the ones who plug in their proof engines via the CertiK Platform&rsquo;s open protocol. Their engines may be randomly used by bounty hunters and will be evaluated through A/B testing. They can also get some CTK incentives depending on the evaluation result of their engines.</li>\r\n	<li>Users can subscribe to all CertiK Platform&rsquo;s certified libraries and IDE plug-ins to build their own DApps/systems with some CTKs.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>These five roles will balance, guard, and improve the CertiK Platform. Value of CTK is generated by posing and solving proof obligations, validating proof objects, and creating advanced proof engines.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The stage progress and milestones of the project development (Roadmap)</strong></p>\r\n\r\n<p>The&nbsp;<a href=\"http://prntscr.com/k8ag7q\">Roadmap</a>&nbsp;provides a good technical overview of the development, yet there is no date of release of the final product. The project is developing according to the Roadmap.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>No Github.</p>\r\n\r\n<p><br />\r\nThere is a&nbsp;<a href=\"https://youtu.be/x3kaORlamMQ\">demo video</a>&nbsp;of the MVP.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The importance of blockchain in the project</strong></p>\r\n\r\n<p>Role of the blockchain in the project is not specified, but it can be assumed, that Ethereum blockchain will be used to store and perform transactions with CTK.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TEAM AND PARTNERS</p>\r\n\r\n<p><strong>Experience and the team achievements</strong></p>\r\n\r\n<p>The team consists of 3 employees, who are experienced in research in the tech field, engineering, verification, software development, system development, and cybersecurity. Members with experience in the blockchain development are not found.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/guronghui\">Ronghui Gu</a>, Co-Founder &ndash; He is a tenure-track Assistant Professor of Computer Science at Columbia University. He obtained his Ph.D. in Computer Science from Yale University in 2016, where his dissertation won the Distinction Dissertation Award at Yale and was nominated for the ACM Dissertation Award. He obtained his B.S. from Tsinghua University in 2011. Prof. Gu is an expert in formal verification of system software. He was the primary designer and developer of CertiKOS, the world&#39;s first fully verified concurrent OS kernel. His OSDI16 paper on CertiKOS has been nominated and selected for publication in the Research Highlights section of the CACM.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/zhong-shao-545b754\">Zhong Shao</a>, Co-Founder &ndash; He is Thomas L. Kempner Professor and Department Chair in the Department of Computer Science at Yale University. He earned his Ph.D. in Computer Science from Princeton University in 1994. During his early career, he was a key developer of the SML/NJ compiler and the main architect of its FLINT certifying infrastructure. In recent years, Shao has been a leading figure working on the highly visible research fields on cybersecurity, programming languages, operating systems, and certified software. He and his FLINT group at Yale have developed the world&#39;s first hacker-resistant concurrent operating system CertiKOS---a major milestone toward building cyber-physical systems that are probably free from software vulnerabilities. Shao is the author or co-author of 90 articles in top scientific journals and conferences</p>\r\n\r\n<p><br />\r\n<a href=\"https://www.linkedin.com/in/vilhelm-sj%C3%B6berg-9b667a94\">Vilhelm Sjoberg</a>, Co-Founder - He&nbsp;is an associate research scientist at Yale University. He received his Ph.D. in Computer Science from the University of Pennsylvania in 2015. He is an expert in software verification, programming languages, and type systems. His thesis research focused on making dependent type systems more attractive for general purpose programming languages by making it optional to prove that functions terminate, and by incorporating automatic theorem proving via congruence closure. Currently, he is interested in language support for layered verified systems like CertiKOS. Dr. Sj&ouml;berg is the winner of 2016 ACM SIGPLAN John C. Reynolds Doctoral Dissertation Award.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Advisory board</strong></p>\r\n\r\n<p>No data.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Strategic partners</p>\r\n\r\n<p>Confirmed:&nbsp;<a href=\"https://medium.com/iotex/iotex-certik-announce-partnership-focused-on-blockchain-and-smart-contract-security-954c422fca43\">IoTeX,</a>&nbsp;<a href=\"https://medium.com/ontologynetwork/ontology-partners-with-certik-to-build-reliable-blockchain-security-5faf7e681801\">Ontology</a>,&nbsp;<a href=\"https://www.cryptoninjas.net/2018/05/15/nebulabs-partners-with-certik-to-ensure-smart-contract-and-dapp-security/\">Nebulas</a>,&nbsp;<a href=\"https://medium.com/@inklabsfoundation/ink-and-certik-collaborate-to-enable-the-formal-verification-for-the-ink-cross-chain-protocol-568d64d4ebda\">Ink</a>,&nbsp;<a href=\"https://twitter.com/iostoken/status/1009988899018436608\">IOStoken</a>.</p>\r\n\r\n<p><br />\r\nTeam plans to reach&nbsp;<a href=\"http://prntscr.com/k8asdr\">30 partnerships</a>&nbsp;by the end of July 2018.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Large investors and investment funds</strong></p>\r\n\r\n<p>Confirmed:&nbsp;<a href=\"http://prntscr.com/k8aeut\">NEO Global Capital, DHVC,</a>&nbsp;<a href=\"https://siliconangle.com/blog/2018/06/01/binance-unveils-1b-investment-fund-blockchain-cryptocurrency-startups/\">Binance Labs</a>,&nbsp;<a href=\"https://www.continue.capital/\">Continue Capital</a>,&nbsp;<a href=\"https://www.jenga.io/\">Jenga Solutions</a>,&nbsp;<a href=\"http://arringtonxrpcapital.com/companies/\">Arrington XRP Capital</a>,&nbsp;<a href=\"https://cryptoglobalist.com/2018/06/25/50-million-usd-raised-towards-supporting-development-on-iostoken-iost/\">Blue Hill</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Not confirmed: FBG Capital, Bitmain</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MARKET</p>\r\n\r\n<p><strong>Competitive environment</strong></p>\r\n\r\n<p>According to the&nbsp;<a href=\"http://prntscr.com/k8cs2o\">market research by the team</a>, smart contracts/ dApps verification market can be as large as one trillion dollars.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Direct competitors in the blockchain space:</p>\r\n\r\n<ul>\r\n	<li>Quantstamp - raised $31,3M, capitalization &ndash; $ 48,8M, ROI USD - 1,1x;</li>\r\n	<li>Zeppelin &ndash; wasn&rsquo;t held, capitalization &ndash; not available.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Projects Quantstamp and Zeppelin are very human intensive and do not involve much automation, so they are far less scaleable than CertiK.&nbsp;Furthermore, libraries provided by OpenZeppelin are either not verified or do not offer mechanized proof objects.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Companies Solidified and Security can only be used to check/verify a list of fixed properties rather than the functional correctness.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Runtime Verification &ndash; work of this company still remains at the research stage and it is an unknown how their techniques can be applied to industry-grade systems.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The project advantages</strong></p>\r\n\r\n<ul>\r\n	<li>Strong team;</li>\r\n	<li>Support of large investors;</li>\r\n	<li>Already established strategic partnerships;</li>\r\n	<li>There is a video demo of the MVP;</li>\r\n	<li>Well-developed infrastructure;</li>\r\n	<li>There are only a few companies on the market, who are working in the same niche, but team points out advantages of their project over the competitors;</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SOCIAL ACTIVITY</p>\r\n\r\n<p><strong>The project popularity in the social networks and discussion forums</strong></p>\r\n\r\n<p>The project is detected on the radar of the next influencers: ICO Pantera, OhHeyMatty.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.youtube.com/channel/UCCcFr6FTUeWDIqUdY8i1W5w\">Youtube</a>: 206 subscribers, average number of views per video is 140, average number of comments under each video is 2, user activity is low.</p>\r\n\r\n<p><a href=\"https://medium.com/certik\">Medium</a>: 635 followers, the average number of likes per post is 70, without any discussion in the comment section, user activity is low.<br />\r\n<a href=\"https://t.me/certikorg\">Telegram</a>: 39,2k members, admins on the Telegram-channel are responding quickly, user activity is high.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Fraud risk - low. Community interest - high.&nbsp;</em></p>'),
(3, 'Arcana', 'arcana', '5.9', '5.1', '6', '7', '<p>INTRO</p>\r\n\r\n<p><a href=\"https://arcanawallet.com/?utm_source=icodrops\">Arcana wallet</a>&nbsp;is an intuitively designed all-in-one hub where user can securely invest, track and store (in distributed cold storage) his his crypoassets.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TOKENOMICS</p>\r\n\r\n<p><strong>Metrics</strong></p>\r\n\r\n<p>Round 1 (Private Sale): March 2018</p>\r\n\r\n<p>Round 2 (Private Sale): ongoing</p>\r\n\r\n<p>Public Sale: no</p>\r\n\r\n<p>Token: ARCA</p>\r\n\r\n<p>Token type: Own specification</p>\r\n\r\n<p>Hard cap: $ 5M</p>\r\n\r\n<p>Soft cap: $ 4M</p>\r\n\r\n<p>Price: $ 0,01</p>\r\n\r\n<p>Minimum investment: no &nbsp;data</p>\r\n\r\n<p>Bonus: up to 25%</p>\r\n\r\n<p>Bounty: no</p>\r\n\r\n<p>Accepting: fiat, BTC, ETH, and EOS<br />\r\nСan&#39;t participate: China, US, and Singapore</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>Metrics have been&nbsp;<a href=\"http://prntscr.com/l9q93v\">changed sometime ago</a>. In particularly are changed Hard cap and Soft cap. Also, on the site of the ICO Drops was found ICO&nbsp;<a href=\"http://prntscr.com/l9q9zw\">price $ 2.04</a>&nbsp;(which is 99% discount).</li>\r\n	<li>On the Telegram, whitepaper and website sale periods named differently, and it&rsquo;s misleading.</li>\r\n	<li>The soft cap is too high for the current market (optimal is 1,5-2M and keep it ⅓ or &frac14;&nbsp;of Hard cap).</li>\r\n	<li>The sale is very time-stretched (optimal is up to 1 month).</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Tokens distribution</strong></p>\r\n\r\n<p>Token distribution:</p>\r\n\r\n<p><strong><img src=\"https://lh3.googleusercontent.com/nWjqlQNq0j63S550LkemO2GogG77SkprPVAA6Y3n1RmYmJurAP12YGihjqgWK8xtWLBx2WUI8mcHJWwxVKVZxrZxlZH1qRukUmIkM2niQs2zqRHC6hO0u6-Nu8a5yoarn_xwp4_-\" /></strong></p>\r\n\r\n<p>Crowdsale funds distribution:</p>\r\n\r\n<p><strong><img src=\"https://lh3.googleusercontent.com/2ywOfgyuxEv6CbxqtnIpqWaQOzhjRebBQdUoJU7F1Nf4XGv1XInxQJx2lzCz2hbHQE-Godhzxcx6pMhL47IV8VthqMHWKnQFC0t_dG2z-v5XN7vIRB2ECau6DAO6a7LaPapA3Jev\" /></strong></p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>Team aims to perform Token Sale every year until 2022. If for every sale should be raised 15%, then&nbsp;<a href=\"http://prntscr.com/l9urjr\">reserve</a>&nbsp;should start from 2019.</li>\r\n	<li>Allocation for Team is too high (optimal is up to 10%).</li>\r\n	<li>It would be better if allocation for R&amp;D would be separated from Operations and and remain 35%.</li>\r\n	<li>Total allocation for the sale is 80%</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Protective measures against the tokens depreciation</strong></p>\r\n\r\n<p>Tokens for the Team will have 4 year lockup, 25% will be vested yearly.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Tokens for Sale will be released: 33% immediate release, 6 month total lock up 11% monthly vesting</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>It&rsquo;s not clear are tokens for Angel Investors and Enterprise Investors included in 6 month lockup or not.</li>\r\n	<li>The address of the wallet of smart-contract ICO is not specified yet.</li>\r\n	<li>There is no escrow agreement, that could protect investors funds.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>PRODUCT</p>\r\n\r\n<p><strong>The relevance of market problems solved by the project</strong></p>\r\n\r\n<p>Private keys can be easily lost.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Hardware wallets are expensive and will always be subject to human negligence of losing the device or forgetting seed phrases.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Despite millions of dollars being lost on compromised exchanges, traders and HODLers have no choice but to accept the risk of holding cryptoassets in vulnerable hot wallets within the exchange. Most exchanges help us claim mainnet swaps, blockchain forks, and gas. The current alternative is to go through the cumbersome, slow process of transferring assets from the secure hardware wallets to exchanges in order to claim those profits.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The description of key products and project technology</strong></p>\r\n\r\n<p>Arcana has engineered a secure and scalable distributed cold storage solution called Arcana Smart Vault Technology (SVT). Arcana SVT integrates physically-secured hardware with digitally-secured multi-cloud platform into a global infrastructure. Arcana&rsquo;s entry product is a multicurrency wallet rooted in the SVT. Wallet will support cryptocurrencies&nbsp;<a href=\"http://prntscr.com/l9wgm2\">from various blockchains</a>. Currently supported: BTC, LTC, ETH, ERC20, NEO, NEP5. In development: EOS, ADA, XRP, Dash, ZEC, VEN</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Some features of Arcana wallet:</p>\r\n\r\n<ul>\r\n	<li>Free, instant P2P sending within Arcana network (assumably ARCA &lt;--&gt; ARCA) because all user activity is&nbsp;<a href=\"http://prntscr.com/l9wnxb\">handled off-chain</a>&nbsp;(excludes US users).</li>\r\n	<li>Masternode pooling. Arcana allows users to be included in a pool for master node staking for various Proof-of-Stake coins. According to team&rsquo;s statement, this is a major passive income generating option for our users when Ethereum switches from Proof-of-Work to Proof-of-Stake consensus with Casper. Details are not provided.</li>\r\n	<li>Arcana allows users to subscribe to pre-selected, high performing trading algorithms directly from their portal interface instead of self-managing dormant assets in a hardware wallet.</li>\r\n	<li>Lending.</li>\r\n	<li><a href=\"http://prntscr.com/l9wziq\">Multi-sig</a>.</li>\r\n	<li>Automatic claiming of forks.</li>\r\n	<li>For our users&rsquo; convenience, ERC20 tokens stored in Arcana are automatically swapped to Mainnet for supported blockchains.</li>\r\n	<li>Trade can be performed right in the wallet.</li>\r\n	<li>Enterprise investors will have&nbsp;<a href=\"http://prntscr.com/l9wwue\">customizable solutions</a>.</li>\r\n	<li>Use of micro-segmentation and containers to address compartmentalized API&rsquo;s.</li>\r\n	<li>Funds of enterprise investors&nbsp;<a href=\"http://prntscr.com/l9x1w5\">will be insured</a>&nbsp;(and amount of insurance will increase from $ 10k to $ 100k on Q2 2019).</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>The backbone of Arcana SVT is a network of net-gapped machines (computers with no direct access to any network). Arcana&rsquo;s net-gapped machines (NGM) are stored in an undisclosed number of fortified, nuclear-proof underground locations around the world. According to team&rsquo;s statement, while they cannot disclose the specific sites of their data centers, each center is enterprise-grade and is entrusted with securing the most sensitive data of Fortune 500 companies. Standard security measures include 24/7 surveillance and armed guards.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>According to team&rsquo;s&nbsp;<a href=\"http://prntscr.com/l9w9r0\">statement</a>&nbsp;their approach to security is to discourage attackers through an 3 layer architecture (<a href=\"http://prntscr.com/l9wd03\">one</a>,&nbsp;<a href=\"http://prntscr.com/l9wdwl\">two</a>,&nbsp;<a href=\"http://prntscr.com/l9we74\">three</a>) that makes the cost of any attack at any point far greater than the reward.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Users can use ARCA to pay for all transactional fees for all features on our platform. User will receive a 50% discount when using ARCA to pay for network transaction fees.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Arcana charges a fee for withdrawals and for various trades and transactions.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>It&rsquo;s not clear in what hardware structure project is integrating.</li>\r\n	<li>It&rsquo;s not clear on what money project aims to rent mentioned security resources. Also, there are not many places around the world with such security measures - so it&rsquo;s a step to a centralization.</li>\r\n	<li><a href=\"https://drive.google.com/drive/u/2/folders/1iaIG-FALPzSEUIii1A3xzM-IE76GJflZ\">ISO / IEC 27001 certificate</a>&nbsp;doesn&rsquo;t guarantee that code of the blockchain implementation doesn&rsquo;t have exploits. &nbsp;</li>\r\n	<li>It&rsquo;s not clear hardware wallets of what vendors Arcana aims to use.</li>\r\n	<li>It&rsquo;s not clear what project means by excluding US users in P2P sending.</li>\r\n	<li>Tech specs of ARCA blockchain are not disclosed.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The stage progress and milestones of the project development (Roadmap)</strong></p>\r\n\r\n<p>The&nbsp;<a href=\"https://prnt.sc/l9l1gs\">Roadmap</a>&nbsp;provides lite technical overview on the platform development. According to the Roadmap the public launch should be done on Q2 2018, but as of 24 October 2018 project&nbsp;<a href=\"http://prntscr.com/l9veya\">in a beta</a>&nbsp;and it&rsquo;s not clear when will be final release. Also, email with access to the beta wasn&rsquo;t received (granted to subscribers). So there is only&nbsp;<a href=\"https://www.youtube.com/watch?v=enK1mnUqmdY&amp;feature=youtu.be\">demo video</a>&nbsp;available.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Github is not provided.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>The codebase of the project is not provided.</li>\r\n	<li>Audit of the codebase by third-party is not provided.</li>\r\n	<li>Access to MVP is not provided.</li>\r\n	<li>Roadmap doesn&rsquo;t provide deep technological overview on the project development.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>The importance of blockchain in the project</strong></p>\r\n\r\n<p>ARCA blockchain will be used to perform activities with ARCA token, which will be used to lower withdrawal fees. It&rsquo;s not clear how this will be performed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>TEAM AND PARTNERS</p>\r\n\r\n<p><strong>Experience and the team achievements</strong></p>\r\n\r\n<p>The team consists of 10 employees.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/secr23/\">David Zhu, CEO</a>&nbsp;- Entrepreneur In Residence at Rokk3r (10 mths) / Co-Founder of Enplug (3 yrs 4 mths).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/craigkuang147/\">Craig Kuang, CFO &amp; Co-Founder</a>&nbsp;- Limited Partner at 500 Startups (3 yrs 7 mths) / Managing Director at Eversource Capital (3 yrs 7 mths).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/benjamin-tse/\">Benjamin Tse, CTO</a>&nbsp;- CTO at Travelmate (2 yrs 2 mths). His previously had mainly design and branding experience. He has no confirmed experience in Blockchain Development.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/jason-rudder/\">Jason Rudder, VP of Engineering</a>&nbsp;- CTO at Griddy (2 yrs 3 mths) / CTO at Trucoin (2 yrs) - service to buy Bitcoins (as of 24.10.2018 website is offline, last tweet dated 2015) / Senoir Infrastructure Engineer at BT (1 yr). His &nbsp;participation in the project is not confirmed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/mralbertchen/\">Albert Chen, Head of Blockchain</a>&nbsp;- Lead Developer at Chrysalis Blockchain Consulting (10 mths). His previously had mainly design and branding experience. He has no confirmed experience in Blockchain Development.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Additional members in DevTeam:&nbsp;<a href=\"https://www.linkedin.com/in/ryan-flynn-a9484042/\">Ryan Flynn</a>&nbsp;(Head of DevOps),&nbsp;<a href=\"https://www.linkedin.com/in/justinandersonca/\">Justin Anderson</a>&nbsp;(Sr Frontend Engineer),&nbsp;<a href=\"https://www.linkedin.com/in/grahamhaley/\">Graham Haley</a>(Software Engineer),&nbsp;<a href=\"https://www.linkedin.com/in/aaron-gooch-5887b313\">Aaron Gooch</a>&nbsp;(Senior Software Engineer). They have worked at various companies Trustify, Linkedin, DB Schenker, EnerNOC, etc. But confirmation to their experience in Blockchain Development is not found in open sources.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>Experience of developers in blockchain development is not confirmed.</li>\r\n	<li>Participation in the project of some team members is not confirmed.</li>\r\n	<li>Some team members on engineering posts have mainly experience in design and branding.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Advisory board</strong></p>\r\n\r\n<p>Advisory board consists of 4 people.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/rdavidwill/\">Ryan David Williams, Legal Advisor</a>&nbsp;- Advisor at Constellation Labs (1 yr 3 mths) / Founder of Experience Legal (2 yrs 1 mth). His participation in the project is not confirmed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/jesseratner/\">Jesse Ratner, Branding &amp; Marketing</a>&nbsp;- Founder of The Blockchain Agency (5 mths) / Co-Founder of LMNO STUDIOS, Managing Partner (1 yrs 1 mth) / Freelance Creative Director / Writer (20 yrs 10 mths). His participation in the project is not confirmed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/davidcatkinson/\">David Atkinson, Finance &amp; Legal Advisor&nbsp;</a>- Executive at Holo.Host (1 yrs 3 mths) / Co-Founder of Fetch (1 yrs 4 mths). His participation in the project is not confirmed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.linkedin.com/in/navdeepreddy/\">Navdeep Reddy, CIO/Advisor&nbsp;</a>- CIO at Enplug (7 yrs 10 mths) / Tech Advisor at Drink Pass (1 yr). His participation in the project is not confirmed.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>Participation in the project of all advisors is not confirmed.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Strategic partners</strong></p>\r\n\r\n<p>Not confirmed: BPM - is a compliance, IT and Systems Audit. Arcana has engaged with BPM and its related parties to perform regular audits on project&#39;s infrastructure.</p>\r\n\r\n<p>Not confirmed: Republic - crowdfunding platform.</p>\r\n\r\n<p>Not confirmed: Cryptolend - online margin lending.</p>\r\n\r\n<p>Not confirmed: IdentityMind Global - provides a SaaS platform that builds, maintains, and analyzes digital identities worldwide.</p>\r\n\r\n<p>Not confirmed: Native Ads - is the Leading Native Ad Exchange for Content Publishers, Brands and Agencies.</p>\r\n\r\n<p>Not confirmed: Experience Legal - is a Silicon Valley-based law firm helping entrepreneurs turn concepts into companies.</p>\r\n\r\n<p>Not confirmed: Cointaxes - a tax preparation tool for consumers and tax professionals.</p>\r\n\r\n<p>Not confirmed: Compound - is an open-source protocol for algorithmic, efficient Money Markets on the Ethereum blockchain.</p>\r\n\r\n<p>Not confirmed: Bitfinex - one of the biggest cryptocurrency exchanges.</p>\r\n\r\n<p>Not confirmed: BitMex - one of the biggest cryptocurrency exchanges.</p>\r\n\r\n<p>Not confirmed: Poloniex - one of the biggest cryptocurrency exchanges.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>Claimed strategic partnerships are not confirmed.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Large investors and investment funds</strong></p>\r\n\r\n<p>No data</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>There is no information about investments from large investors.</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>MARKET</p>\r\n\r\n<p><strong>Competitive environment</strong></p>\r\n\r\n<p>Dan Morehead, Founder, and CEO of cryptocurrency hedge fund Pantera Capital&nbsp;<a href=\"https://www.ccn.com/40-trillion-cryptocurrency-market-cap-definitely-possible-pantera-capital-ceo/\">said on CNN</a>&nbsp;that he believes the cryptocurrency market cap could one day be worth $40 trillion.&nbsp;<a href=\"https://www.ccn.com/cryptocurrency-will-become-a-20-trillion-market-billionaire-bull-mike-novogratz/\">Similar predictions</a>&nbsp;give billionaire investor Mike Novogratz.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>With that said, it&rsquo;s clear that investors will have to keep an eye on the security of their funds. So different wallets that are providing services to store funds will be in demand.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Direct competitor of Arcana Wallet is Vault12 (raised $ 32M during the ICO, m.c. is unavailable).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Most close competitors can be found in the segment of cold wallets.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Wallet provider Ledger was founded in 2014 and released their most successful product &nbsp;The Nano S in June 2016 with price &euro;69.60 before taxes (some time after that price were changed to the current &euro;94.80, which includes shipping costs). Since then company recorded revenue of $56 million in 2017, according to&nbsp;<a href=\"https://www.bloomberg.com/news/articles/2018-01-18/bitcoin-wallet-maker-ledger-raises-75-million-for-security-push\">Bloomberg</a>&nbsp;(paywall), and around $734,000 in 2016 according to filings in France. In january 2018 company announced, that there were sold&nbsp;<a href=\"https://twitter.com/LedgerHQ/status/953284896700751872\">more than 1 mln of wallets</a>, providing the company $116 million revenue. With offices in Paris and San Francisco, Ledger targets selling 3 to 6 million of its hardware wallets this year. Ledger wants to increase revenue by growing the software portion of its business, aimed at customers like hedge funds, banks and corporates, which doesn&rsquo;t rely on the physical dongle but instead on a more complex server-based structure. For this purposes they are building&nbsp;<a href=\"https://www.ledger.fr/2017/05/23/ledger-announces-the-vault-and-adds-ex-nyses-jean-michel-pailhon-as-vp-finance-strategy/\">Ledger Vault</a>.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>In case of the Trezor (founded 2012) information about the revenue of the company is not found in the public sources. Wallet provider selling two products for its customers: Trezor One for &euro;89 and since the end of the 2017 Trezor Model T for &euro;149.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>But all modern cold storage competitors are centralized - that means they can be be destroyed, lost or stolen. While Arcana Wallet brings decentralized solution for critical data storage.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Other competitors highlighted by the team:</p>\r\n\r\n<ul>\r\n	<li>Bitgo (strong team, well-developed infrastructure, lots of tools).</li>\r\n	<li>Xapo (custodial service, strong team, well-developed infrastructure, lots of tools)</li>\r\n	<li>Wallets on CEXs.</li>\r\n	<li>Exodus (convenient, number of coins is updating all the time, new software update each 2 weeks, not hacked yet).</li>\r\n	<li>Ethos (10,000+ installations on GooglePlay).</li>\r\n	<li>Ledger (already mentioned above).</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><strong>Technological advantages</strong></p>\r\n\r\n<p>The team has provided&nbsp;<a href=\"http://prntscr.com/l9q2y3\">comparison table of project&rsquo;s competitors</a>, but there is a misleading information (for example, Vault12 is a geographically distributed storage, while in the table stated an opposite).</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<ul>\r\n	<li>ARCA transactions will be free and instant.</li>\r\n	<li>ARCA token can be used to reduce withdrawal fees (It&rsquo;s not clear how this will be performed).</li>\r\n	<li>Masternode pooling (details are not provided).</li>\r\n	<li>Arcana allows users to subscribe to pre-selected, high performing trading algorithms directly from their portal interface instead of self-managing dormant assets in a hardware wallet.</li>\r\n	<li>Lending (partners are not confirmed).</li>\r\n	<li><a href=\"http://prntscr.com/l9wziq\">Multi-sig</a>.</li>\r\n	<li>Automatic claiming of forks.</li>\r\n	<li>Automatic swap of ERC20 tokens on Mainnet of supported blockchains.</li>\r\n	<li>Trade can be performed right in the wallet (partner is not confirmed).</li>\r\n	<li>Enterprise investors will have&nbsp;<a href=\"http://prntscr.com/l9wwue\">customizable solutions</a>.</li>\r\n	<li>Use of micro-segmentation and containers to address compartmentalized API&rsquo;s.</li>\r\n	<li>Funds of enterprise investors&nbsp;<a href=\"http://prntscr.com/l9x1w5\">will be insured</a>&nbsp;(and amount of insurance will increase from $ 10k to $ 100k on Q2 2019).</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>NOTE:</p>\r\n\r\n<ul>\r\n	<li>Some information about advantages is misleading (for example, Vault12 is a geographically distributed storage, while in the table stated an opposite).</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>SOCIAL ACTIVITY</p>\r\n\r\n<p><strong>The project popularity in the social networks and discussion forums</strong></p>\r\n\r\n<p>The project is detected on the radar of the influencer ICO Pantera, but rated low.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"http://www.twitter.com/getarcana\">Twitter&nbsp;</a>&ndash; 264 followers, an average number of likes per post is 3, and 1 repost per post on average, with 0 comments on average. The audience&rsquo;s activity is low.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://t.me/getarcana\">Telegram&nbsp;</a>&ndash; 3,3k members. The audience&rsquo;s activity is medium.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><a href=\"https://www.reddit.com/user/getarcana\">Reddit&nbsp;</a>- empty.</p>\r\n\r\n<p><br />\r\n<a href=\"http://www.medium.com/@getarcana\">Medium&nbsp;</a>&ndash; 73 followers, a number of likes per post vary from 0 to 151, with 0 comments on average. The audience&rsquo;s activity is low.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>RISK ASSESSMENT</p>\r\n\r\n<p><strong>Pros:</strong></p>\r\n\r\n<ul>\r\n	<li>Market problem is actual;</li>\r\n	<li>Decentralized storage for digital assets;</li>\r\n	<li>Atomatic deposit of coins on case of forks and mainnet releases of ERC20 derivatives;</li>\r\n	<li>Insurance for 100k (or higher) deposits;</li>\r\n	<li>Possibility to traderight in the wallet (additionally can be used algorithmic trading).</li>\r\n</ul>\r\n\r\n<p><strong>Cons:</strong></p>\r\n\r\n<ul>\r\n	<li>Most of team members have no experience in blockchain development;</li>\r\n	<li>Advisors are not confirmed;</li>\r\n	<li>Strategic partners are not confirmed and many of project functions are depending on those partnerships;</li>\r\n	<li>There is no investments from large investors;</li>\r\n	<li>The need in blockchain in the project is low;</li>\r\n	<li>Some of the project advantages are already implemented by competitors.</li>\r\n	<li>&nbsp;</li>\r\n</ul>\r\n\r\n<p><strong>CONCLUSION:</strong>&nbsp;Arcana Wallet is a decentralized multicurrency wallet with insurance of 100k investments (or higher) and automatic deposits in case of forks and mainnet releases of ERC20 derivatives. Claimed functional is promising, but it mostly depends on the integration of services of partners (which are not confirmed). Advisors are not confirmed too. Most of the team members doesn&#39;t have confirmed experience in blockchain development. Information of investments from large investors is not found in open sources. Model of annual ICO doesn&#39;t look financially attractive and justified enough.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p><em>Fraud risk - medium. Community interest - low.</em></p>');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `icoactive`
--

CREATE TABLE `icoactive` (
  `id` int(11) NOT NULL,
  `icopool` varchar(255) NOT NULL,
  `ico` varchar(255) NOT NULL,
  `mincap` varchar(255) NOT NULL,
  `bonus` varchar(255) NOT NULL,
  `comm` varchar(255) NOT NULL,
  `raised` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `icoactive`
--

INSERT INTO `icoactive` (`id`, `icopool`, `ico`, `mincap`, `bonus`, `comm`, `raised`) VALUES
(1, 'ICO Dach', 'Oasis Labs', '-', '-', '-', 'ND'),
(2, 'ICO Dach', 'CertiK', '123', '321', '123', '321123'),
(3, 'Omega Block', 'Arcana', '0.15 ETH', '40%', '4%', '56 / 310 ETH');

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
  `tok_distr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addr` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `icopool`
--

INSERT INTO `icopool` (`id`, `name`, `slug`, `activeico`, `numofparticipants`, `tok_distr`, `rating`, `lang`, `access`, `created`, `addr`, `description`) VALUES
(1, 'ICO Dach', 'ico-dach', 'Oasis Labs, CertiK', '2779', '46', '9', 'EN', 'unlock', '17.06.17', 'https://t.me/ICODACH_EN', '<p>asdawd</p>\r\n\r\n<p><s>hello</s></p>\r\n\r\n<p><s><strong><em>bitch</em></strong></s></p>'),
(2, 'Omega Block', 'omega-block', 'Arcana', '1215', '11', '7', 'EN', 'unlock', '03.01.18', 'https://t.me/joinchat/AAAAAEX3tQyJhu2pxAoF3Q', '<p><strong>Rating = log(1.29, (16/17+11/17)*0.5*0.6*10+(K*11/50)+(3*5066/36121)+D+E) = log(1.29, 6.84) = 7.55 = 7</strong><br />\r\n17 - number of finished ICO raising rounds (successful and unsuccessful)<br />\r\n16 - number of successful ICO raising rounds<br />\r\n11 - number of token distribution rounds<br />\r\n0.6 - &laquo;weight&raquo; of the pool&rsquo;s history<br />\r\n5066 - funds raised in successful rounds of current ICO Pool<br />\r\n36121 - maximum of the funds raised in successful rounds of the leading by this value ICO Pool<br />\r\nK=3 - the limit for token distribution acceleration (the more rounds of token distribution pool has the more rating it gets)<br />\r\nD=1 - having additional links to the pool<br />\r\nE=0 - supporting kyc procedure</p>\r\n\r\n<p><strong>Our review on Omega Block</strong></p>\r\n\r\n<p>Starting its activity in early 2018 under the name of Interchain Ventures, participating in promising ICO projects, Omega Block attracted the attention of many new participants, forming a friendly community of investors.&nbsp;<br />\r\nChanging the name, the pool remained true to its principles and continues to open new horizons.</p>\r\n\r\n<p>&nbsp;</p>');

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
(8, '2019_07_24_153249_ads', 7);

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
  `view` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `password`, `email`, `remember_token`, `created_at`, `updated_at`, `view`) VALUES
(1, 'Admin', 'admin', '$2y$10$O8N1uncd7nOyVMHBD1onwOHR/WSs566NgsoZYC23l60qMDu.uul7.', 'admin@gmail.com', NULL, NULL, '2019-07-26 05:49:11', 4);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `ico`
--
ALTER TABLE `ico`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icoactive`
--
ALTER TABLE `icoactive`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `icopool`
--
ALTER TABLE `icopool`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
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
-- AUTO_INCREMENT cho bảng `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `ico`
--
ALTER TABLE `ico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `icoactive`
--
ALTER TABLE `icoactive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `icopool`
--
ALTER TABLE `icopool`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
