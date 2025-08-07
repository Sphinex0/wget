<!DOCTYPE html>
<html class="client-nojs skin-theme-clientpref-day mf-expand-sections-clientpref-0 mf-font-size-clientpref-small mw-mf-amc-clientpref-0" lang="en" dir="ltr">
<head>
<meta charset="UTF-8">
<title>Line search - Wikipedia</title>
<script>(function(){var className="client-js skin-theme-clientpref-day mf-expand-sections-clientpref-0 mf-font-size-clientpref-small mw-mf-amc-clientpref-0";var cookie=document.cookie.match(/(?:^|; )enwikimwclientpreferences=([^;]+)/);if(cookie){cookie[1].split('%2C').forEach(function(pref){className=className.replace(new RegExp('(^| )'+pref.replace(/-clientpref-\w+$|[^\w-]+/g,'')+'-clientpref-\\w+( |$)'),'$1'+pref+'$2');});}document.documentElement.className=className;}());RLCONF={"wgBreakFrames":false,"wgSeparatorTransformTable":["",""],"wgDigitTransformTable":["",""],"wgDefaultDateFormat":"dmy","wgMonthNames":["","January","February","March","April","May","June","July","August","September","October","November","December"],"wgRequestId":"5345821b-d232-4baf-b28a-71337a1330e1","wgCanonicalNamespace":"","wgCanonicalSpecialPageName":false,"wgNamespaceNumber":0,"wgPageName":"Line_search","wgTitle":"Line search","wgCurRevisionId":1239715615,"wgRevisionId":1239715615,"wgArticleId":1537058,"wgIsArticle":true,"wgIsRedirect":false,"wgAction":"view","wgUserName":null,"wgUserGroups":["*"],"wgPageViewLanguage":"en","wgPageContentLanguage":"en","wgPageContentModel":"wikitext","wgRelevantPageName":"Line_search","wgRelevantArticleId":1537058,"wgIsProbablyEditable":true,"wgRelevantPageIsProbablyEditable":true,"wgRestrictionEdit":[],"wgRestrictionMove":[],"wgNoticeProject":"wikipedia","wgCiteReferencePreviewsActive":false,"wgFlaggedRevsParams":{"tags":{"status":{"levels":1}}},"wgMediaViewerOnClick":true,"wgMediaViewerEnabledByDefault":true,"wgPopupsFlags":0,"wgVisualEditor":{"pageLanguageCode":"en","pageLanguageDir":"ltr","pageVariantFallbacks":"en"},"wgMFMode":"stable","wgMFAmc":false,"wgMFAmcOutreachActive":false,"wgMFAmcOutreachUserEligible":false,"wgMFLazyLoadImages":true,"wgMFEditNoticesFeatureConflict":false,"wgMFDisplayWikibaseDescriptions":{"search":true,"watchlist":true,"tagline":false,"nearby":true},"wgMFIsSupportedEditRequest":true,"wgMFScriptPath":"","wgWMESchemaEditAttemptStepOversample":false,"wgWMEPageLength":9000,"wgMetricsPlatformUserExperiments":{"active_experiments":[],"overrides":[],"enrolled":[],"assigned":[],"subject_ids":[],"sampling_units":[]},"wgEditSubmitButtonLabelPublish":true,"wgSectionTranslationMissingLanguages":[{"lang":"ab","domain":"ab","autonym":"аԥсшәа","dir":"ltr"},{"lang":"ace","domain":"ace","autonym":"Acèh","dir":"ltr"},{"lang":"ady","domain":"ady","autonym":"адыгабзэ","dir":"ltr"},{"lang":"af","domain":"af","autonym":"Afrikaans","dir":"ltr"},{"lang":"alt","domain":"alt","autonym":"алтай тил","dir":"ltr"},{"lang":"am","domain":"am","autonym":"አማርኛ","dir":"ltr"},{"lang":"ami","domain":"ami","autonym":"Pangcah","dir":"ltr"},{"lang":"an","domain":"an","autonym":"aragonés","dir":"ltr"},{"lang":"ang","domain":"ang","autonym":"Ænglisc","dir":"ltr"},{"lang":"ann","domain":"ann","autonym":"Obolo","dir":"ltr"},{"lang":"anp","domain":"anp","autonym":"अंगिका","dir":"ltr"},{"lang":"ar","domain":"ar","autonym":"العربية","dir":"rtl"},{"lang":"arc","domain":"arc","autonym":"ܐܪܡܝܐ","dir":"rtl"},{"lang":"ary","domain":"ary","autonym":"الدارجة","dir":"rtl"},{"lang":"arz","domain":"arz","autonym":"مصرى","dir":"rtl"},{"lang":"as","domain":"as","autonym":"অসমীয়া","dir":"ltr"},{"lang":"ast","domain":"ast","autonym":"asturianu","dir":"ltr"},{"lang":"atj","domain":"atj","autonym":"Atikamekw","dir":"ltr"},{"lang":"av","domain":"av","autonym":"авар","dir":"ltr"},{"lang":"avk","domain":"avk","autonym":"Kotava","dir":"ltr"},{"lang":"awa","domain":"awa","autonym":"अवधी","dir":"ltr"},{"lang":"ay","domain":"ay","autonym":"Aymar aru","dir":"ltr"},{"lang":"az","domain":"az","autonym":"azərbaycanca","dir":"ltr"},{"lang":"azb","domain":"azb","autonym":"تۆرکجه","dir":"rtl"},{"lang":"ba","domain":"ba","autonym":"башҡортса","dir":"ltr"},{"lang":"ban","domain":"ban","autonym":"Basa Bali","dir":"ltr"},{"lang":"bar","domain":"bar","autonym":"Boarisch","dir":"ltr"},{"lang":"bbc","domain":"bbc","autonym":"Batak Toba","dir":"ltr"},{"lang":"bcl","domain":"bcl","autonym":"Bikol Central","dir":"ltr"},{"lang":"bdr","domain":"bdr","autonym":"Bajau Sama","dir":"ltr"},{"lang":"be","domain":"be","autonym":"беларуская","dir":"ltr"},{"lang":"be-x-old","domain":"be-tarask","autonym":"беларуская (тарашкевіца)","dir":"ltr"},{"lang":"bew","domain":"bew","autonym":"Betawi","dir":"ltr"},{"lang":"bg","domain":"bg","autonym":"български","dir":"ltr"},{"lang":"bho","domain":"bh","autonym":"भोजपुरी","dir":"ltr"},{"lang":"bi","domain":"bi","autonym":"Bislama","dir":"ltr"},{"lang":"bjn","domain":"bjn","autonym":"Banjar","dir":"ltr"},{"lang":"blk","domain":"blk","autonym":"ပအိုဝ်ႏဘာႏသာႏ","dir":"ltr"},{"lang":"bm","domain":"bm","autonym":"bamanankan","dir":"ltr"},{"lang":"bn","domain":"bn","autonym":"বাংলা","dir":"ltr"},{"lang":"bo","domain":"bo","autonym":"བོད་ཡིག","dir":"ltr"},{"lang":"bpy","domain":"bpy","autonym":"বিষ্ণুপ্রিয়া মণিপুরী","dir":"ltr"},{"lang":"br","domain":"br","autonym":"brezhoneg","dir":"ltr"},{"lang":"bs","domain":"bs","autonym":"bosanski","dir":"ltr"},{"lang":"btm","domain":"btm","autonym":"Batak Mandailing","dir":"ltr"},{"lang":"bug","domain":"bug","autonym":"Basa Ugi","dir":"ltr"},{"lang":"bxr","domain":"bxr","autonym":"буряад","dir":"ltr"},{"lang":"ca","domain":"ca","autonym":"català","dir":"ltr"},{"lang":"cbk-zam","domain":"cbk-zam","autonym":"Chavacano de Zamboanga","dir":"ltr"},{"lang":"cdo","domain":"cdo","autonym":"閩東語 / Mìng-dĕ̤ng-ngṳ̄","dir":"ltr"},{"lang":"ce","domain":"ce","autonym":"нохчийн","dir":"ltr"},{"lang":"ceb","domain":"ceb","autonym":"Cebuano","dir":"ltr"},{"lang":"ch","domain":"ch","autonym":"Chamoru","dir":"ltr"},{"lang":"chr","domain":"chr","autonym":"ᏣᎳᎩ","dir":"ltr"},{"lang":"chy","domain":"chy","autonym":"Tsetsêhestâhese","dir":"ltr"},{"lang":"ckb","domain":"ckb","autonym":"کوردی","dir":"rtl"},{"lang":"co","domain":"co","autonym":"corsu","dir":"ltr"},{"lang":"cr","domain":"cr","autonym":"Nēhiyawēwin / ᓀᐦᐃᔭᐍᐏᐣ","dir":"ltr"},{"lang":"crh","domain":"crh","autonym":"qırımtatarca","dir":"ltr"},{"lang":"cs","domain":"cs","autonym":"čeština","dir":"ltr"},{"lang":"csb","domain":"csb","autonym":"kaszëbsczi","dir":"ltr"},{"lang":"cu","domain":"cu","autonym":"словѣньскъ / ⰔⰎⰑⰂⰡⰐⰠⰔⰍⰟ","dir":"ltr"},{"lang":"cv","domain":"cv","autonym":"чӑвашла","dir":"ltr"},{"lang":"cy","domain":"cy","autonym":"Cymraeg","dir":"ltr"},{"lang":"da","domain":"da","autonym":"dansk","dir":"ltr"},{"lang":"dag","domain":"dag","autonym":"dagbanli","dir":"ltr"},{"lang":"dga","domain":"dga","autonym":"Dagaare","dir":"ltr"},{"lang":"din","domain":"din","autonym":"Thuɔŋjäŋ","dir":"ltr"},{"lang":"diq","domain":"diq","autonym":"Zazaki","dir":"ltr"},{"lang":"dsb","domain":"dsb","autonym":"dolnoserbski","dir":"ltr"},{"lang":"dtp","domain":"dtp","autonym":"Kadazandusun","dir":"ltr"},{"lang":"dty","domain":"dty","autonym":"डोटेली","dir":"ltr"},{"lang":"dv","domain":"dv","autonym":"ދިވެހިބަސް","dir":"rtl"},{"lang":"dz","domain":"dz","autonym":"ཇོང་ཁ","dir":"ltr"},{"lang":"ee","domain":"ee","autonym":"eʋegbe","dir":"ltr"},{"lang":"el","domain":"el","autonym":"Ελληνικά","dir":"ltr"},{"lang":"eml","domain":"eml","autonym":"emiliàn e rumagnòl","dir":"ltr"},{"lang":"eo","domain":"eo","autonym":"Esperanto","dir":"ltr"},{"lang":"et","domain":"et","autonym":"eesti","dir":"ltr"},{"lang":"eu","domain":"eu","autonym":"euskara","dir":"ltr"},{"lang":"ext","domain":"ext","autonym":"estremeñu","dir":"ltr"},{"lang":"fat","domain":"fat","autonym":"mfantse","dir":"ltr"},{"lang":"ff","domain":"ff","autonym":"Fulfulde","dir":"ltr"},{"lang":"fi","domain":"fi","autonym":"suomi","dir":"ltr"},{"lang":"fj","domain":"fj","autonym":"Na Vosa Vakaviti","dir":"ltr"},{"lang":"fo","domain":"fo","autonym":"føroyskt","dir":"ltr"},{"lang":"fon","domain":"fon","autonym":"fɔ̀ngbè","dir":"ltr"},{"lang":"frp","domain":"frp","autonym":"arpetan","dir":"ltr"},{"lang":"frr","domain":"frr","autonym":"Nordfriisk","dir":"ltr"},{"lang":"fur","domain":"fur","autonym":"furlan","dir":"ltr"},{"lang":"fy","domain":"fy","autonym":"Frysk","dir":"ltr"},{"lang":"ga","domain":"ga","autonym":"Gaeilge","dir":"ltr"},{"lang":"gag","domain":"gag","autonym":"Gagauz","dir":"ltr"},{"lang":"gan","domain":"gan","autonym":"贛語","dir":"ltr"},{"lang":"gcr","domain":"gcr","autonym":"kriyòl gwiyannen","dir":"ltr"},{"lang":"gd","domain":"gd","autonym":"Gàidhlig","dir":"ltr"},{"lang":"gl","domain":"gl","autonym":"galego","dir":"ltr"},{"lang":"glk","domain":"glk","autonym":"گیلکی","dir":"rtl"},{"lang":"gn","domain":"gn","autonym":"Avañe'ẽ","dir":"ltr"},{"lang":"gom","domain":"gom","autonym":"गोंयची कोंकणी / Gõychi Konknni","dir":"ltr"},{"lang":"gor","domain":"gor","autonym":"Bahasa Hulontalo","dir":"ltr"},{"lang":"got","domain":"got","autonym":"𐌲𐌿𐍄𐌹𐍃𐌺","dir":"ltr"},{"lang":"gpe","domain":"gpe","autonym":"Ghanaian Pidgin","dir":"ltr"},{"lang":"gsw","domain":"als","autonym":"Alemannisch","dir":"ltr"},{"lang":"gu","domain":"gu","autonym":"ગુજરાતી","dir":"ltr"},{"lang":"guc","domain":"guc","autonym":"wayuunaiki","dir":"ltr"},{"lang":"gur","domain":"gur","autonym":"farefare","dir":"ltr"},{"lang":"guw","domain":"guw","autonym":"gungbe","dir":"ltr"},{"lang":"gv","domain":"gv","autonym":"Gaelg","dir":"ltr"},{"lang":"ha","domain":"ha","autonym":"Hausa","dir":"ltr"},{"lang":"hak","domain":"hak","autonym":"客家語 / Hak-kâ-ngî","dir":"ltr"},{"lang":"haw","domain":"haw","autonym":"Hawaiʻi","dir":"ltr"},{"lang":"he","domain":"he","autonym":"עברית","dir":"rtl"},{"lang":"hi","domain":"hi","autonym":"हिन्दी","dir":"ltr"},{"lang":"hif","domain":"hif","autonym":"Fiji Hindi","dir":"ltr"},{"lang":"hr","domain":"hr","autonym":"hrvatski","dir":"ltr"},{"lang":"hsb","domain":"hsb","autonym":"hornjoserbsce","dir":"ltr"},{"lang":"ht","domain":"ht","autonym":"Kreyòl ayisyen","dir":"ltr"},{"lang":"hu","domain":"hu","autonym":"magyar","dir":"ltr"},{"lang":"hy","domain":"hy","autonym":"հայերեն","dir":"ltr"},{"lang":"hyw","domain":"hyw","autonym":"Արեւմտահայերէն","dir":"ltr"},{"lang":"ia","domain":"ia","autonym":"interlingua","dir":"ltr"},{"lang":"iba","domain":"iba","autonym":"Jaku Iban","dir":"ltr"},{"lang":"id","domain":"id","autonym":"Bahasa Indonesia","dir":"ltr"},{"lang":"ie","domain":"ie","autonym":"Interlingue","dir":"ltr"},{"lang":"ig","domain":"ig","autonym":"Igbo","dir":"ltr"},{"lang":"igl","domain":"igl","autonym":"Igala","dir":"ltr"},{"lang":"ik","domain":"ik","autonym":"Iñupiatun","dir":"ltr"},{"lang":"ilo","domain":"ilo","autonym":"Ilokano","dir":"ltr"},{"lang":"inh","domain":"inh","autonym":"гӀалгӀай","dir":"ltr"},{"lang":"io","domain":"io","autonym":"Ido","dir":"ltr"},{"lang":"is","domain":"is","autonym":"íslenska","dir":"ltr"},{"lang":"it","domain":"it","autonym":"italiano","dir":"ltr"},{"lang":"iu","domain":"iu","autonym":"ᐃᓄᒃᑎᑐᑦ / inuktitut","dir":"ltr"},{"lang":"jam","domain":"jam","autonym":"Patois","dir":"ltr"},{"lang":"jbo","domain":"jbo","autonym":"la .lojban.","dir":"ltr"},{"lang":"jv","domain":"jv","autonym":"Jawa","dir":"ltr"},{"lang":"ka","domain":"ka","autonym":"ქართული","dir":"ltr"},{"lang":"kaa","domain":"kaa","autonym":"Qaraqalpaqsha","dir":"ltr"},{"lang":"kab","domain":"kab","autonym":"Taqbaylit","dir":"ltr"},{"lang":"kbd","domain":"kbd","autonym":"адыгэбзэ","dir":"ltr"},{"lang":"kbp","domain":"kbp","autonym":"Kabɩyɛ","dir":"ltr"},{"lang":"kcg","domain":"kcg","autonym":"Tyap","dir":"ltr"},{"lang":"kg","domain":"kg","autonym":"Kongo","dir":"ltr"},{"lang":"kge","domain":"kge","autonym":"Kumoring","dir":"ltr"},{"lang":"ki","domain":"ki","autonym":"Gĩkũyũ","dir":"ltr"},{"lang":"kk","domain":"kk","autonym":"қазақша","dir":"ltr"},{"lang":"kl","domain":"kl","autonym":"kalaallisut","dir":"ltr"},{"lang":"km","domain":"km","autonym":"ភាសាខ្មែរ","dir":"ltr"},{"lang":"kn","domain":"kn","autonym":"ಕನ್ನಡ","dir":"ltr"},{"lang":"knc","domain":"knc","autonym":"Yerwa Kanuri","dir":"ltr"},{"lang":"koi","domain":"koi","autonym":"перем коми","dir":"ltr"},{"lang":"krc","domain":"krc","autonym":"къарачай-малкъар","dir":"ltr"},{"lang":"ks","domain":"ks","autonym":"کٲشُر","dir":"rtl"},{"lang":"ksh","domain":"ksh","autonym":"Ripoarisch","dir":"ltr"},{"lang":"ku","domain":"ku","autonym":"kurdî","dir":"ltr"},{"lang":"kus","domain":"kus","autonym":"Kʋsaal","dir":"ltr"},{"lang":"kv","domain":"kv","autonym":"коми","dir":"ltr"},{"lang":"kw","domain":"kw","autonym":"kernowek","dir":"ltr"},{"lang":"ky","domain":"ky","autonym":"кыргызча","dir":"ltr"},{"lang":"la","domain":"la","autonym":"Latina","dir":"ltr"},{"lang":"lad","domain":"lad","autonym":"Ladino","dir":"ltr"},{"lang":"lb","domain":"lb","autonym":"Lëtzebuergesch","dir":"ltr"},{"lang":"lbe","domain":"lbe","autonym":"лакку","dir":"ltr"},{"lang":"lez","domain":"lez","autonym":"лезги","dir":"ltr"},{"lang":"lfn","domain":"lfn","autonym":"Lingua Franca Nova","dir":"ltr"},{"lang":"lg","domain":"lg","autonym":"Luganda","dir":"ltr"},{"lang":"li","domain":"li","autonym":"Limburgs","dir":"ltr"},{"lang":"lij","domain":"lij","autonym":"Ligure","dir":"ltr"},{"lang":"lld","domain":"lld","autonym":"Ladin","dir":"ltr"},{"lang":"lmo","domain":"lmo","autonym":"lombard","dir":"ltr"},{"lang":"ln","domain":"ln","autonym":"lingála","dir":"ltr"},{"lang":"lo","domain":"lo","autonym":"ລາວ","dir":"ltr"},{"lang":"lt","domain":"lt","autonym":"lietuvių","dir":"ltr"},{"lang":"ltg","domain":"ltg","autonym":"latgaļu","dir":"ltr"},{"lang":"lv","domain":"lv","autonym":"latviešu","dir":"ltr"},{"lang":"lzh","domain":"zh-classical","autonym":"文言","dir":"ltr"},{"lang":"mad","domain":"mad","autonym":"Madhurâ","dir":"ltr"},{"lang":"mai","domain":"mai","autonym":"मैथिली","dir":"ltr"},{"lang":"map-bms","domain":"map-bms","autonym":"Basa Banyumasan","dir":"ltr"},{"lang":"mdf","domain":"mdf","autonym":"мокшень","dir":"ltr"},{"lang":"mg","domain":"mg","autonym":"Malagasy","dir":"ltr"},{"lang":"mhr","domain":"mhr","autonym":"олык марий","dir":"ltr"},{"lang":"mi","domain":"mi","autonym":"Māori","dir":"ltr"},{"lang":"min","domain":"min","autonym":"Minangkabau","dir":"ltr"},{"lang":"mk","domain":"mk","autonym":"македонски","dir":"ltr"},{"lang":"ml","domain":"ml","autonym":"മലയാളം","dir":"ltr"},{"lang":"mn","domain":"mn","autonym":"монгол","dir":"ltr"},{"lang":"mni","domain":"mni","autonym":"ꯃꯤꯇꯩ ꯂꯣꯟ","dir":"ltr"},{"lang":"mnw","domain":"mnw","autonym":"ဘာသာမန်","dir":"ltr"},{"lang":"mos","domain":"mos","autonym":"moore","dir":"ltr"},{"lang":"mr","domain":"mr","autonym":"मराठी","dir":"ltr"},{"lang":"mrj","domain":"mrj","autonym":"кырык мары","dir":"ltr"},{"lang":"ms","domain":"ms","autonym":"Bahasa Melayu","dir":"ltr"},{"lang":"mt","domain":"mt","autonym":"Malti","dir":"ltr"},{"lang":"mwl","domain":"mwl","autonym":"Mirandés","dir":"ltr"},{"lang":"my","domain":"my","autonym":"မြန်မာဘာသာ","dir":"ltr"},{"lang":"myv","domain":"myv","autonym":"эрзянь","dir":"ltr"},{"lang":"mzn","domain":"mzn","autonym":"مازِرونی","dir":"rtl"},{"lang":"nah","domain":"nah","autonym":"Nāhuatl","dir":"ltr"},{"lang":"nan","domain":"zh-min-nan","autonym":"閩南語 / Bân-lâm-gí","dir":"ltr"},{"lang":"nap","domain":"nap","autonym":"Napulitano","dir":"ltr"},{"lang":"nb","domain":"no","autonym":"norsk bokmål","dir":"ltr"},{"lang":"nds","domain":"nds","autonym":"Plattdüütsch","dir":"ltr"},{"lang":"nds-nl","domain":"nds-nl","autonym":"Nedersaksies","dir":"ltr"},{"lang":"ne","domain":"ne","autonym":"नेपाली","dir":"ltr"},{"lang":"new","domain":"new","autonym":"नेपाल भाषा","dir":"ltr"},{"lang":"nia","domain":"nia","autonym":"Li Niha","dir":"ltr"},{"lang":"nl","domain":"nl","autonym":"Nederlands","dir":"ltr"},{"lang":"nn","domain":"nn","autonym":"norsk nynorsk","dir":"ltr"},{"lang":"nov","domain":"nov","autonym":"Novial","dir":"ltr"},{"lang":"nqo","domain":"nqo","autonym":"ߒߞߏ","dir":"rtl"},{"lang":"nr","domain":"nr","autonym":"isiNdebele seSewula","dir":"ltr"},{"lang":"nrm","domain":"nrm","autonym":"Nouormand","dir":"ltr"},{"lang":"nso","domain":"nso","autonym":"Sesotho sa Leboa","dir":"ltr"},{"lang":"nv","domain":"nv","autonym":"Diné bizaad","dir":"ltr"},{"lang":"ny","domain":"ny","autonym":"Chi-Chewa","dir":"ltr"},{"lang":"oc","domain":"oc","autonym":"occitan","dir":"ltr"},{"lang":"olo","domain":"olo","autonym":"livvinkarjala","dir":"ltr"},{"lang":"om","domain":"om","autonym":"Oromoo","dir":"ltr"},{"lang":"or","domain":"or","autonym":"ଓଡ଼ିଆ","dir":"ltr"},{"lang":"os","domain":"os","autonym":"ирон","dir":"ltr"},{"lang":"pa","domain":"pa","autonym":"ਪੰਜਾਬੀ","dir":"ltr"},{"lang":"pag","domain":"pag","autonym":"Pangasinan","dir":"ltr"},{"lang":"pam","domain":"pam","autonym":"Kapampangan","dir":"ltr"},{"lang":"pap","domain":"pap","autonym":"Papiamentu","dir":"ltr"},{"lang":"pcd","domain":"pcd","autonym":"Picard","dir":"ltr"},{"lang":"pcm","domain":"pcm","autonym":"Naijá","dir":"ltr"},{"lang":"pdc","domain":"pdc","autonym":"Deitsch","dir":"ltr"},{"lang":"pfl","domain":"pfl","autonym":"Pälzisch","dir":"ltr"},{"lang":"pi","domain":"pi","autonym":"पालि","dir":"ltr"},{"lang":"pih","domain":"pih","autonym":"Norfuk / Pitkern","dir":"ltr"},{"lang":"pl","domain":"pl","autonym":"polski","dir":"ltr"},{"lang":"pms","domain":"pms","autonym":"Piemontèis","dir":"ltr"},{"lang":"pnb","domain":"pnb","autonym":"پنجابی","dir":"rtl"},{"lang":"pnt","domain":"pnt","autonym":"Ποντιακά","dir":"ltr"},{"lang":"ps","domain":"ps","autonym":"پښتو","dir":"rtl"},{"lang":"pwn","domain":"pwn","autonym":"pinayuanan","dir":"ltr"},{"lang":"qu","domain":"qu","autonym":"Runa Simi","dir":"ltr"},{"lang":"rm","domain":"rm","autonym":"rumantsch","dir":"ltr"},{"lang":"rmy","domain":"rmy","autonym":"romani čhib","dir":"ltr"},{"lang":"rn","domain":"rn","autonym":"ikirundi","dir":"ltr"},{"lang":"ro","domain":"ro","autonym":"română","dir":"ltr"},{"lang":"roa-tara","domain":"roa-tara","autonym":"tarandíne","dir":"ltr"},{"lang":"rsk","domain":"rsk","autonym":"руски","dir":"ltr"},{"lang":"ru","domain":"ru","autonym":"русский","dir":"ltr"},{"lang":"rue","domain":"rue","autonym":"русиньскый","dir":"ltr"},{"lang":"rup","domain":"roa-rup","autonym":"armãneashti","dir":"ltr"},{"lang":"rw","domain":"rw","autonym":"Ikinyarwanda","dir":"ltr"},{"lang":"sa","domain":"sa","autonym":"संस्कृतम्","dir":"ltr"},{"lang":"sah","domain":"sah","autonym":"саха тыла","dir":"ltr"},{"lang":"sat","domain":"sat","autonym":"ᱥᱟᱱᱛᱟᱲᱤ","dir":"ltr"},{"lang":"sc","domain":"sc","autonym":"sardu","dir":"ltr"},{"lang":"scn","domain":"scn","autonym":"sicilianu","dir":"ltr"},{"lang":"sco","domain":"sco","autonym":"Scots","dir":"ltr"},{"lang":"sd","domain":"sd","autonym":"سنڌي","dir":"rtl"},{"lang":"se","domain":"se","autonym":"davvisámegiella","dir":"ltr"},{"lang":"sg","domain":"sg","autonym":"Sängö","dir":"ltr"},{"lang":"sgs","domain":"bat-smg","autonym":"žemaitėška","dir":"ltr"},{"lang":"sh","domain":"sh","autonym":"srpskohrvatski / српскохрватски","dir":"ltr"},{"lang":"shi","domain":"shi","autonym":"Taclḥit","dir":"ltr"},{"lang":"shn","domain":"shn","autonym":"တႆး","dir":"ltr"},{"lang":"si","domain":"si","autonym":"සිංහල","dir":"ltr"},{"lang":"en-simple","domain":"simple","autonym":"Simple English","dir":"ltr"},{"lang":"sk","domain":"sk","autonym":"slovenčina","dir":"ltr"},{"lang":"skr","domain":"skr","autonym":"سرائیکی","dir":"rtl"},{"lang":"sm","domain":"sm","autonym":"Gagana Samoa","dir":"ltr"},{"lang":"smn","domain":"smn","autonym":"anarâškielâ","dir":"ltr"},{"lang":"sn","domain":"sn","autonym":"chiShona","dir":"ltr"},{"lang":"so","domain":"so","autonym":"Soomaaliga","dir":"ltr"},{"lang":"sq","domain":"sq","autonym":"shqip","dir":"ltr"},{"lang":"sr","domain":"sr","autonym":"српски / srpski","dir":"ltr"},{"lang":"srn","domain":"srn","autonym":"Sranantongo","dir":"ltr"},{"lang":"ss","domain":"ss","autonym":"SiSwati","dir":"ltr"},{"lang":"st","domain":"st","autonym":"Sesotho","dir":"ltr"},{"lang":"stq","domain":"stq","autonym":"Seeltersk","dir":"ltr"},{"lang":"su","domain":"su","autonym":"Sunda","dir":"ltr"},{"lang":"sv","domain":"sv","autonym":"svenska","dir":"ltr"},{"lang":"sw","domain":"sw","autonym":"Kiswahili","dir":"ltr"},{"lang":"syl","domain":"syl","autonym":"ꠍꠤꠟꠐꠤ","dir":"ltr"},{"lang":"szl","domain":"szl","autonym":"ślůnski","dir":"ltr"},{"lang":"szy","domain":"szy","autonym":"Sakizaya","dir":"ltr"},{"lang":"ta","domain":"ta","autonym":"தமிழ்","dir":"ltr"},{"lang":"tay","domain":"tay","autonym":"Tayal","dir":"ltr"},{"lang":"tcy","domain":"tcy","autonym":"ತುಳು","dir":"ltr"},{"lang":"tdd","domain":"tdd","autonym":"ᥖᥭᥰ ᥖᥬᥲ ᥑᥨᥒᥰ","dir":"ltr"},{"lang":"te","domain":"te","autonym":"తెలుగు","dir":"ltr"},{"lang":"tet","domain":"tet","autonym":"tetun","dir":"ltr"},{"lang":"tg","domain":"tg","autonym":"тоҷикӣ","dir":"ltr"},{"lang":"th","domain":"th","autonym":"ไทย","dir":"ltr"},{"lang":"ti","domain":"ti","autonym":"ትግርኛ","dir":"ltr"},{"lang":"tig","domain":"tig","autonym":"ትግሬ","dir":"ltr"},{"lang":"tk","domain":"tk","autonym":"Türkmençe","dir":"ltr"},{"lang":"tl","domain":"tl","autonym":"Tagalog","dir":"ltr"},{"lang":"tly","domain":"tly","autonym":"tolışi","dir":"ltr"},{"lang":"tn","domain":"tn","autonym":"Setswana","dir":"ltr"},{"lang":"to","domain":"to","autonym":"lea faka-Tonga","dir":"ltr"},{"lang":"tpi","domain":"tpi","autonym":"Tok Pisin","dir":"ltr"},{"lang":"tr","domain":"tr","autonym":"Türkçe","dir":"ltr"},{"lang":"trv","domain":"trv","autonym":"Seediq","dir":"ltr"},{"lang":"ts","domain":"ts","autonym":"Xitsonga","dir":"ltr"},{"lang":"tt","domain":"tt","autonym":"татарча / tatarça","dir":"ltr"},{"lang":"tum","domain":"tum","autonym":"chiTumbuka","dir":"ltr"},{"lang":"tw","domain":"tw","autonym":"Twi","dir":"ltr"},{"lang":"ty","domain":"ty","autonym":"reo tahiti","dir":"ltr"},{"lang":"tyv","domain":"tyv","autonym":"тыва дыл","dir":"ltr"},{"lang":"udm","domain":"udm","autonym":"удмурт","dir":"ltr"},{"lang":"ug","domain":"ug","autonym":"ئۇيغۇرچە / Uyghurche","dir":"rtl"},{"lang":"ur","domain":"ur","autonym":"اردو","dir":"rtl"},{"lang":"uz","domain":"uz","autonym":"oʻzbekcha / ўзбекча","dir":"ltr"},{"lang":"ve","domain":"ve","autonym":"Tshivenda","dir":"ltr"},{"lang":"vec","domain":"vec","autonym":"vèneto","dir":"ltr"},{"lang":"vep","domain":"vep","autonym":"vepsän kel’","dir":"ltr"},{"lang":"vi","domain":"vi","autonym":"Tiếng Việt","dir":"ltr"},{"lang":"vls","domain":"vls","autonym":"West-Vlams","dir":"ltr"},{"lang":"vo","domain":"vo","autonym":"Volapük","dir":"ltr"},{"lang":"vro","domain":"fiu-vro","autonym":"võro","dir":"ltr"},{"lang":"wa","domain":"wa","autonym":"walon","dir":"ltr"},{"lang":"war","domain":"war","autonym":"Winaray","dir":"ltr"},{"lang":"wo","domain":"wo","autonym":"Wolof","dir":"ltr"},{"lang":"wuu","domain":"wuu","autonym":"吴语","dir":"ltr"},{"lang":"xal","domain":"xal","autonym":"хальмг","dir":"ltr"},{"lang":"xh","domain":"xh","autonym":"isiXhosa","dir":"ltr"},{"lang":"xmf","domain":"xmf","autonym":"მარგალური","dir":"ltr"},{"lang":"yi","domain":"yi","autonym":"ייִדיש","dir":"rtl"},{"lang":"yo","domain":"yo","autonym":"Yorùbá","dir":"ltr"},{"lang":"yue","domain":"zh-yue","autonym":"粵語","dir":"ltr"},{"lang":"za","domain":"za","autonym":"Vahcuengh","dir":"ltr"},{"lang":"zea","domain":"zea","autonym":"Zeêuws","dir":"ltr"},{"lang":"zgh","domain":"zgh","autonym":"ⵜⴰⵎⴰⵣⵉⵖⵜ ⵜⴰⵏⴰⵡⴰⵢⵜ","dir":"ltr"},{"lang":"zu","domain":"zu","autonym":"isiZulu","dir":"ltr"}],"wgSectionTranslationTargetLanguages":["ab","ace","ady","af","alt","am","ami","an","ang","ann","anp","ar","arc","ary","arz","as","ast","atj","av","avk","awa","ay","az","azb","ba","ban","bar","bbc","bcl","bdr","be","be-tarask","bew","bg","bho","bi","bjn","blk","bm","bn","bo","bpy","br","bs","btm","bug","bxr","ca","cbk-zam","cdo","ce","ceb","ch","chr","chy","ckb","co","cr","crh","cs","csb","cu","cv","cy","da","dag","de","dga","din","diq","dsb","dtp","dty","dv","dz","ee","el","eml","en","eo","es","et","eu","ext","fa","fat","ff","fi","fj","fo","fon","fr","frp","frr","fur","fy","ga","gag","gan","gcr","gd","gl","glk","gn","gom","gor","got","gpe","gsw","gu","guc","gur","guw","gv","ha","hak","haw","he","hi","hif","hr","hsb","ht","hu","hy","hyw","ia","iba","id","ie","ig","igl","ik","ilo","inh","io","is","it","iu","ja","jam","jbo","jv","ka","kaa","kab","kbd","kbp","kcg","kg","kge","ki","kk","kl","km","kn","knc","ko","koi","krc","ks","ksh","ku","kus","kv","kw","ky","la","lad","lb","lbe","lez","lfn","lg","li","lij","lld","lmo","ln","lo","lt","ltg","lv","lzh","mad","mai","map-bms","mdf","mg","mhr","mi","min","mk","ml","mn","mni","mnw","mos","mr","mrj","ms","mt","mwl","my","myv","mzn","nah","nan","nap","nb","nds","nds-nl","ne","new","nia","nl","nn","nov","nqo","nr","nrm","nso","nv","ny","oc","olo","om","or","os","pa","pag","pam","pap","pcd","pcm","pdc","pfl","pi","pih","pl","pms","pnb","pnt","ps","pt","pwn","qu","rm","rmy","rn","ro","roa-tara","rsk","ru","rue","rup","rw","sa","sah","sat","sc","scn","sco","sd","se","sg","sgs","sh","shi","shn","si","simple","sk","skr","sl","sm","smn","sn","so","sq","sr","srn","ss","st","stq","su","sv","sw","syl","szl","szy","ta","tay","tcy","tdd","te","tet","tg","th","ti","tig","tk","tl","tly","tn","to","tpi","tr","trv","ts","tt","tum","tw","ty","tyv","udm","ug","uk","ur","uz","ve","vec","vep","vi","vls","vo","vro","wa","war","wo","wuu","xal","xh","xmf","yi","yo","yue","za","zea","zgh","zh","zu"],"isLanguageSearcherCXEntrypointEnabled":true,"mintEntrypointLanguages":["tn","vec","ast","lmo"],"wgWikibaseItemId":"Q3278015","wgCheckUserClientHintsHeadersJsApi":["brands","architecture","bitness","fullVersionList","mobile","model","platform","platformVersion"],"GEHomepageSuggestedEditsEnableTopics":true,"wgGESuggestedEditsTaskTypes":{"taskTypes":["copyedit","link-recommendation"],"unavailableTaskTypes":[]},"wgGETopicsMatchModeEnabled":false,"wgGELevelingUpEnabledForUser":false,"wgMinervaPermissions":{"watchable":true,"watch":false},"wgMinervaFeatures":{"beta":false,"donateBanner":true,"donate":false,"mobileOptionsLink":true,"categories":false,"pageIssues":true,"talkAtTop":true,"historyInPageActions":false,"overflowSubmenu":false,"tabsOnSpecials":true,"personalMenu":false,"mainMenuExpanded":false,"nightMode":true},"wgMinervaDownloadNamespaces":[0]};
RLSTATE={"ext.globalCssJs.user.styles":"ready","site.styles":"ready","user.styles":"ready","ext.globalCssJs.user":"ready","user":"ready","user.options":"loading","ext.math.styles":"ready","ext.cite.styles":"ready","skins.minerva.styles":"ready","skins.minerva.content.styles.images":"ready","mediawiki.hlist":"ready","skins.minerva.codex.styles":"ready","skins.minerva.icons":"ready","skins.minerva.amc.styles":"ready","ext.wikimediamessages.styles":"ready","mobile.init.styles":"ready","ext.relatedArticles.styles":"ready","wikibase.client.init":"ready"};RLPAGEMODULES=["ext.xLab","ext.cite.ux-enhancements","site","mediawiki.page.ready","skins.minerva.scripts","ext.centralNotice.geoIP","ext.centralNotice.startUp","ext.gadget.switcher","ext.urlShortener.toolbar","ext.centralauth.centralautologin","ext.popups","mobile.init","ext.echo.centralauth","ext.relatedArticles.readMore.bootstrap","ext.eventLogging","ext.wikimediaEvents","ext.navigationTiming","ext.cx.eventlogging.campaigns","ext.cx.entrypoints.mffrequentlanguages","ext.cx.entrypoints.languagesearcher.init","mw.externalguidance.init","ext.checkUser.clientHints","ext.quicksurveys.init","ext.growthExperiments.SuggestedEditSession"];</script>
<script>(RLQ=window.RLQ||[]).push(function(){mw.loader.impl(function(){return["user.options@12s5i",function($,jQuery,require,module){mw.user.tokens.set({"patrolToken":"+\\","watchToken":"+\\","csrfToken":"+\\"});
}];});});</script>
<link rel="stylesheet" href="/w/load.php?lang=en&amp;modules=ext.cite.styles%7Cext.math.styles%7Cext.relatedArticles.styles%7Cext.wikimediamessages.styles%7Cmediawiki.hlist%7Cmobile.init.styles%7Cskins.minerva.amc.styles%7Cskins.minerva.codex.styles%7Cskins.minerva.content.styles.images%7Cskins.minerva.icons%2Cstyles%7Cwikibase.client.init&amp;only=styles&amp;skin=minerva">
<script async="" src="/w/load.php?lang=en&amp;modules=startup&amp;only=scripts&amp;raw=1&amp;skin=minerva"></script>
<meta name="ResourceLoaderDynamicStyles" content="">
<link rel="stylesheet" href="/w/load.php?lang=en&amp;modules=site.styles&amp;only=styles&amp;skin=minerva">
<meta name="generator" content="MediaWiki 1.45.0-wmf.12">
<meta name="referrer" content="origin">
<meta name="referrer" content="origin-when-cross-origin">
<meta name="robots" content="max-image-preview:standard">
<meta name="format-detection" content="telephone=no">
<meta name="theme-color" content="#eaecf0">
<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes, minimum-scale=0.25, maximum-scale=5.0">
<meta property="og:title" content="Line search - Wikipedia">
<meta property="og:type" content="website">
<link rel="preconnect" href="//upload.wikimedia.org">
<link rel="manifest" href="/w/api.php?action=webapp-manifest">
<link rel="alternate" type="application/x-wiki" title="Edit this page" href="/w/index.php?title=Line_search&amp;action=edit">
<link rel="apple-touch-icon" href="/static/apple-touch/wikipedia.png">
<link rel="icon" href="/static/favicon/wikipedia.ico">
<link rel="search" type="application/opensearchdescription+xml" href="/w/rest.php/v1/search" title="Wikipedia (en)">
<link rel="EditURI" type="application/rsd+xml" href="//en.wikipedia.org/w/api.php?action=rsd">
<link rel="canonical" href="https://en.wikipedia.org/wiki/Line_search">
<link rel="license" href="https://creativecommons.org/licenses/by-sa/4.0/deed.en">
<link rel="dns-prefetch" href="//meta.wikimedia.org" />
<link rel="dns-prefetch" href="auth.wikimedia.org">
</head>
<body class="mediawiki ltr sitedir-ltr mw-hide-empty-elt ns-0 ns-subject mw-editable page-Line_search rootpage-Line_search stable issues-group-B skin-minerva action-view skin--responsive mw-mf-amc-disabled mw-mf"><div id="mw-mf-viewport">
	<div id="mw-mf-page-center">
		<a class="mw-mf-page-center__mask" href="#"></a>
		<header class="header-container header-chrome">
			<div class="minerva-header">
				<nav class="navigation-drawer toggle-list view-border-box">
					<input type="checkbox" id="main-menu-input"
						data-event-name="ui.mainmenu"
						class="toggle-list__checkbox" role="button" aria-haspopup="true" aria-expanded="false" aria-labelledby="mw-mf-main-menu-button">
					<label for="main-menu-input" id="mw-mf-main-menu-button" aria-hidden="true" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet toggle-list__toggle">
    <span class="minerva-icon minerva-icon--menu"></span>
<span></span>
</label>

					<div id="mw-mf-page-left" class="menu view-border-box">
	<ul id="p-navigation" class="toggle-list__list">
			<li class="toggle-list-item ">
				<a class="toggle-list-item__anchor menu__item--home" href="/wiki/Main_Page" data-mw="interface">
					<span class="minerva-icon minerva-icon--home"></span>

					<span class="toggle-list-item__label">Home</span>
				</a>
			</li>
			<li class="toggle-list-item ">
				<a class="toggle-list-item__anchor menu__item--random" href="/wiki/Special:Random" data-mw="interface">
					<span class="minerva-icon minerva-icon--die"></span>

					<span class="toggle-list-item__label">Random</span>
				</a>
			</li>
			<li class="toggle-list-item skin-minerva-list-item-jsonly">
				<a class="toggle-list-item__anchor menu__item--nearby" href="/wiki/Special:Nearby" data-event-name="menu.nearby" data-mw="interface">
					<span class="minerva-icon minerva-icon--mapPin"></span>

					<span class="toggle-list-item__label">Nearby</span>
				</a>
			</li>
	</ul>
	<ul id="p-personal" class="toggle-list__list">
			<li class="toggle-list-item ">
				<a class="toggle-list-item__anchor mw-list-item menu__item--login" href="/w/index.php?title=Special:UserLogin&amp;returnto=Line+search" data-event-name="menu.login" data-mw="interface">
					<span class="minerva-icon minerva-icon--logIn"></span>

					<span class="toggle-list-item__label">Log in</span>
				</a>
			</li>
	</ul>
	<ul id="pt-preferences" class="toggle-list__list">
			<li class="toggle-list-item skin-minerva-list-item-jsonly">
				<a class="toggle-list-item__anchor menu__item--settings" href="/w/index.php?title=Special:MobileOptions&amp;returnto=Line+search" data-event-name="menu.settings" data-mw="interface">
					<span class="minerva-icon minerva-icon--settings"></span>

					<span class="toggle-list-item__label">Settings</span>
				</a>
			</li>
	</ul>
			<div class="donate-banner">
				<a href="https://donate.wikimedia.org/?wmf_source=donate&amp;wmf_medium=sidebar&amp;wmf_campaign=en.wikipedia.org&amp;uselang=en&amp;wmf_key=minerva" class="donate-banner__link"
					data-event-name="menu.donateBanner">
					<div class="donate-banner__text-container">
						<span class="donate-banner__text">Donate Now</span>
						<span class="donate-banner__subtitle">If Wikipedia is useful to you, please give today.</span>
					</div>
					<picture>
						<source
			    			srcset="https://en.wikipedia.org/static/images/donate/donate.png"
			   				media="(prefers-reduced-motion)" />
						<img src="https://en.wikipedia.org/static/images/donate/donate.gif" alt="" class="donate-banner__gif" loading="lazy">
					</picture>
				</a>
			</div>
	<ul class="hlist">
			<li class="toggle-list-item ">
				<a class="toggle-list-item__anchor menu__item--about" href="/wiki/Wikipedia:About" data-mw="interface">
					
					<span class="toggle-list-item__label">About Wikipedia</span>
				</a>
			</li>
			<li class="toggle-list-item ">
				<a class="toggle-list-item__anchor menu__item--disclaimers" href="/wiki/Wikipedia:General_disclaimer" data-mw="interface">
					
					<span class="toggle-list-item__label">Disclaimers</span>
				</a>
			</li>
	</ul>
</div>

					<label class="main-menu-mask" for="main-menu-input"></label>
				</nav>
				<div class="branding-box">
					<a href="/wiki/Main_Page">
						<span><img src="/static/images/mobile/copyright/wikipedia-wordmark-en.svg" alt="Wikipedia" width="120" height="18"
	style="width: 7.5em; height: 1.125em;"/>

</span>
						
					</a>
				</div>
					<form role="search" action="/w/index.php" method="get" class="minerva-search-form">
				<div class="search-box search-box--typeahead">
					<div class="cdx-typeahead-search cdx-typeahead-search--show-thumbnail cdx-typeahead-search--auto-expand-width">
						<div class="cdx-search-input">
							<div class="cdx-search-input__input-wrapper">
								<div class="cdx-text-input cdx-text-input--has-start-icon">
									<input type="hidden" name="title" value="Special:Search"/>
									<input class="search skin-minerva-search-trigger cdx-text-input__input" id="searchInput"
									 type="search" name="search" placeholder="Search Wikipedia" aria-label="Search Wikipedia" autocapitalize="sentences" spellcheck="false" title="Search Wikipedia [f]" accesskey="f" autocomplete="off">
									<span class="cdx-text-input__icon cdx-text-input__start-icon"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<button id="searchIcon" class="cdx-button cdx-button--size-large cdx-button--icon-only cdx-button--weight-quiet skin-minerva-search-trigger">
	    <span class="minerva-icon minerva-icon--search"></span>
<span>Search</span>
	</button>
</form>
		<nav class="minerva-user-navigation" aria-label="User navigation">
					
				</nav>
			</div>
		</header>
		<main id="content" class="mw-body">
			<div class="banner-container">
			<div id="siteNotice"></div>
			</div>
			
			<div class="pre-content heading-holder">
				<div class="page-heading">
					<h1 id="firstHeading" class="firstHeading mw-first-heading"><span class="mw-page-title-main">Line search</span></h1>
					<div class="tagline"></div>
				</div>
					<ul id="p-associated-pages" class="minerva__tab-container">
							<li class="minerva__tab selected mw-list-item">
								<a class="minerva__tab-text" href="/wiki/Line_search" rel="" data-event-name="tabs.main">Article</a>
							</li>
							<li class="minerva__tab mw-list-item">
								<a class="minerva__tab-text" href="/wiki/Talk:Line_search" rel="discussion" data-event-name="tabs.talk">Talk</a>
							</li>
					</ul>
				<nav class="page-actions-menu">
	<ul id="p-views" class="page-actions-menu__list minerva-icon-only-menu">
		<li id="language-selector" class="page-actions-menu__list-item">
				<a role="button" href="#p-lang" data-mw="interface" data-event-name="menu.languages" title="Language" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet language-selector">
				    <span class="minerva-icon minerva-icon--language"></span>
<span>Language</span>
				</a>
		</li>
		<li id="page-actions-watch" class="page-actions-menu__list-item">
				<a role="button" id="ca-watch" href="/w/index.php?title=Special:UserLogin&amp;returnto=Line+search" data-event-name="menu.watch" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet menu__item--page-actions-watch">
				    <span class="minerva-icon minerva-icon--star"></span>
<span>Watch</span>
				</a>
		</li>
		<li id="page-actions-edit" class="page-actions-menu__list-item">
				<a role="button" id="ca-edit" href="/w/index.php?title=Line_search&amp;action=edit" data-event-name="menu.edit" data-mw="interface" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet edit-page menu__item--page-actions-edit">
				    <span class="minerva-icon minerva-icon--edit"></span>
<span>Edit</span>
				</a>
		</li>
	</ul>
</nav>
				<div id="mw-content-subtitle"></div>
			</div>
			<div id="bodyContent" class="content">
				<div id="mw-content-text" class="mw-body-content"><script>function mfTempOpenSection(id){var block=document.getElementById("mf-section-"+id);block.className+=" open-block";block.previousSibling.className+=" open-block";}</script><div class="mw-content-ltr mw-parser-output" lang="en" dir="ltr"><section class="mf-section-0" id="mf-section-0">
<style data-mw-deduplicate="TemplateStyles:r1236090951">.mw-parser-output .hatnote{font-style:italic}.mw-parser-output div.hatnote{padding-left:1.6em;margin-bottom:0.5em}.mw-parser-output .hatnote i{font-style:normal}.mw-parser-output .hatnote+link+.hatnote{margin-top:-0.5em}@media print{body.ns-0 .mw-parser-output .hatnote{display:none!important}}</style><div role="note" class="hatnote navigation-not-searchable">Not to be confused with <a href="/wiki/Linear_search" title="Linear search">linear search</a>.</div>
<p>In <a href="/wiki/Optimization_(mathematics)" class="mw-redirect" title="Optimization (mathematics)">optimization</a>, <b>line search</b> is a basic <a href="/wiki/Iteration" title="Iteration">iterative</a> approach to find a <a href="/wiki/Maxima_and_minima" class="mw-redirect" title="Maxima and minima">local minimum</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \mathbf {x} ^{*}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mo>∗<!-- ∗ --></mo>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} ^{*}}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7854cd1cbbc521a6d45d17d621a9e4286ced0ddf" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.465ex; height:2.343ex;" alt="{\displaystyle \mathbf {x} ^{*}}"></span> of an <a href="/wiki/Objective_function" class="mw-redirect" title="Objective function">objective function</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo>:</mo>
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="double-struck">R</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msup>
        <mo stretchy="false">→<!-- → --></mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/306c097f43c91dce633d12cde024948d39e73752" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:11.404ex; height:2.676ex;" alt="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }"></span>. It first finds a <a href="/wiki/Descent_direction" title="Descent direction">descent direction</a> along which the objective function <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f}</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/132e57acb643253e7810ee9702d9581f159a1c61" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.279ex; height:2.509ex;" alt="{\displaystyle f}"></span> will be reduced, and then computes a step size that determines how far <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \mathbf {x} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="bold">x</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} }</annotation>
  </semantics>
</math></span><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/32adf004df5eb0a8c7fd8c0b6b7405183c5a5ef2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.411ex; height:1.676ex;" alt="{\displaystyle \mathbf {x} }"></span> should move along that direction. The descent direction can be computed by various methods, such as <a href="/wiki/Gradient_descent" title="Gradient descent">gradient descent</a> or <a href="/wiki/Quasi-Newton_method" title="Quasi-Newton method">quasi-Newton method</a>. The step size can be determined either exactly or inexactly.
</p>
<div id="toc" class="toc" role="navigation" aria-labelledby="mw-toc-heading"><input type="checkbox" role="button" id="toctogglecheckbox" class="toctogglecheckbox" style="display:none"><div class="toctitle" lang="en" dir="ltr"><h2 id="mw-toc-heading">Contents</h2><span class="toctogglespan"><label class="toctogglelabel" for="toctogglecheckbox"></label></span></div>
<ul>
<li class="toclevel-1 tocsection-1"><a href="#One-dimensional_line_search"><span class="tocnumber">1</span> <span class="toctext">One-dimensional line search</span></a>
<ul>
<li class="toclevel-2 tocsection-2"><a href="#Zero-order_methods"><span class="tocnumber">1.1</span> <span class="toctext">Zero-order methods</span></a></li>
<li class="toclevel-2 tocsection-3"><a href="#First-order_methods"><span class="tocnumber">1.2</span> <span class="toctext">First-order methods</span></a></li>
<li class="toclevel-2 tocsection-4"><a href="#Curve-fitting_methods"><span class="tocnumber">1.3</span> <span class="toctext">Curve-fitting methods</span></a></li>
</ul>
</li>
<li class="toclevel-1 tocsection-5"><a href="#Multi-dimensional_line_search"><span class="tocnumber">2</span> <span class="toctext">Multi-dimensional line search</span></a></li>
<li class="toclevel-1 tocsection-6"><a href="#Overcoming_local_minima"><span class="tocnumber">3</span> <span class="toctext">Overcoming local minima</span></a></li>
<li class="toclevel-1 tocsection-7"><a href="#See_also"><span class="tocnumber">4</span> <span class="toctext">See also</span></a></li>
<li class="toclevel-1 tocsection-8"><a href="#References"><span class="tocnumber">5</span> <span class="toctext">References</span></a></li>
<li class="toclevel-1 tocsection-9"><a href="#Further_reading"><span class="tocnumber">6</span> <span class="toctext">Further reading</span></a></li>
</ul>
</div>

</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(1)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="One-dimensional_line_search">One-dimensional line search</h2><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=1" title="Edit section: One-dimensional line search" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div><section class="mf-section-1 collapsible-block" id="mf-section-1">
<p>Suppose <i>f</i> is a one-dimensional function, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f:\mathbb {R} \to \mathbb {R} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo>:</mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
        <mo stretchy="false">→<!-- → --></mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f:\mathbb {R} \to \mathbb {R} }</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1e3a10a3ad05781f5cf9c2d875a02227e21a8448" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:10.186ex; height:2.509ex;" alt="{\displaystyle f:\mathbb {R} \to \mathbb {R} }"/></noscript><span class="lazy-image-placeholder" style="width: 10.186ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1e3a10a3ad05781f5cf9c2d875a02227e21a8448" data-alt="{\displaystyle f:\mathbb {R} \to \mathbb {R} }" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>, and assume that it is <a href="/wiki/Unimodal" class="mw-redirect" title="Unimodal">unimodal</a>, that is, contains exactly one local minimum <i>x</i>* in a given interval [<i>a</i>,<i>z</i>]. This means that <i>f</i> is strictly decreasing in [a,x*] and strictly increasing in [x*,<i>z</i>]. There are several ways to find an (approximate) minimum point in this case.<sup id="cite_ref-:0_1-0" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">[</span>1<span class="cite-bracket">]</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">: sec.5 </span></sup>
</p>
<div class="mw-heading mw-heading3"><h3 id="Zero-order_methods">Zero-order methods</h3><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=2" title="Edit section: Zero-order methods" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div>
<p>Zero-order methods use only function evaluations (i.e., a <a href="/wiki/Value_oracle" class="mw-redirect" title="Value oracle">value oracle</a>) - not derivatives:<sup id="cite_ref-:0_1-1" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">[</span>1<span class="cite-bracket">]</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">: sec.5 </span></sup>
</p>
<ul><li><a href="/wiki/Ternary_search" title="Ternary search">Ternary search</a>: pick some two points <i>b,c</i> such that <i>a</i>&lt;<i>b</i>&lt;<i>c</i>&lt;<i>z</i>. If f(<i>b</i>)≤f(<i>c</i>), then x* must be in [<i>a</i>,<i>c</i>]; if f(<i>b</i>)≥f(<i>c</i>), then x* must be in [<i>b</i>,<i>z</i>]. In both cases, we can replace the search interval with a smaller one. If we pick <i>b</i>,<i>c</i> very close to the interval center, then the interval shrinks by ~1/2 at each iteration, but we need two function evaluations per iteration. Therefore, the method has <a href="/wiki/Linear_convergence" class="mw-redirect" title="Linear convergence">linear convergence</a> with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\sqrt {0.5}}\approx 0.71}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <msqrt>
            <mn>0.5</mn>
          </msqrt>
        </mrow>
        <mo>≈<!-- ≈ --></mo>
        <mn>0.71</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\sqrt {0.5}}\approx 0.71}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f433c1dafe5943d58cd51d860ae5b11966761d6d" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:12.14ex; height:2.843ex;" alt="{\displaystyle {\sqrt {0.5}}\approx 0.71}"/></noscript><span class="lazy-image-placeholder" style="width: 12.14ex;height: 2.843ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f433c1dafe5943d58cd51d860ae5b11966761d6d" data-alt="{\displaystyle {\sqrt {0.5}}\approx 0.71}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>. If we pick b,c such that the partition a,b,c,z has three equal-length intervals, then the interval shrinks by 2/3 at each iteration, so the method has <a href="/wiki/Linear_convergence" class="mw-redirect" title="Linear convergence">linear convergence</a> with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\sqrt {2/3}}\approx 0.82}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <msqrt>
            <mn>2</mn>
            <mrow class="MJX-TeXAtom-ORD">
              <mo>/</mo>
            </mrow>
            <mn>3</mn>
          </msqrt>
        </mrow>
        <mo>≈<!-- ≈ --></mo>
        <mn>0.82</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\sqrt {2/3}}\approx 0.82}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b3588ce9f6ef2754be1c75e001bd6fcccfd73e81" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.838ex; width:13.044ex; height:4.843ex;" alt="{\displaystyle {\sqrt {2/3}}\approx 0.82}"/></noscript><span class="lazy-image-placeholder" style="width: 13.044ex;height: 4.843ex;vertical-align: -1.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b3588ce9f6ef2754be1c75e001bd6fcccfd73e81" data-alt="{\displaystyle {\sqrt {2/3}}\approx 0.82}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>.</li>
<li>Fibonacci search: This is a variant of ternary search in which the points <i>b</i>,<i>c</i> are selected based on the <a href="/wiki/Fibonacci_sequence" title="Fibonacci sequence">Fibonacci sequence</a>. At each iteration, only one function evaluation is needed, since the other point was already an endpoint of a previous interval. Therefore, the method has linear convergence with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle 1/\varphi \approx 0.618}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>1</mn>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mi>φ<!-- φ --></mi>
        <mo>≈<!-- ≈ --></mo>
        <mn>0.618</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 1/\varphi \approx 0.618}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ee2956736e09abd4c4d71925d61a4979d14025d2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.24ex; height:2.843ex;" alt="{\displaystyle 1/\varphi \approx 0.618}"/></noscript><span class="lazy-image-placeholder" style="width: 12.24ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ee2956736e09abd4c4d71925d61a4979d14025d2" data-alt="{\displaystyle 1/\varphi \approx 0.618}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> .</li>
<li><a href="/wiki/Golden-section_search" title="Golden-section search">Golden-section search</a>: This is a variant in which the points <i>b</i>,<i>c</i> are selected based on the <a href="/wiki/Golden_ratio" title="Golden ratio">golden ratio</a>. Again, only one function evaluation is needed in each iteration, and the method has linear convergence with rate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle 1/\varphi \approx 0.618}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>1</mn>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mi>φ<!-- φ --></mi>
        <mo>≈<!-- ≈ --></mo>
        <mn>0.618</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 1/\varphi \approx 0.618}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ee2956736e09abd4c4d71925d61a4979d14025d2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.24ex; height:2.843ex;" alt="{\displaystyle 1/\varphi \approx 0.618}"/></noscript><span class="lazy-image-placeholder" style="width: 12.24ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ee2956736e09abd4c4d71925d61a4979d14025d2" data-alt="{\displaystyle 1/\varphi \approx 0.618}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> . This ratio is optimal among the zero-order methods.</li></ul>
<p>Zero-order methods are very general - they do not assume differentiability or even continuity.
</p>
<div class="mw-heading mw-heading3"><h3 id="First-order_methods">First-order methods</h3><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=3" title="Edit section: First-order methods" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div>
<p>First-order methods assume that <i>f</i> is continuously differentiable, and that we can evaluate not only <i>f</i> but also its derivative.<sup id="cite_ref-:0_1-2" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">[</span>1<span class="cite-bracket">]</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">: sec.5 </span></sup>
</p>
<ul><li>The <a href="/wiki/Bisection_method" title="Bisection method">bisection method</a> computes the derivative of <i>f</i> at the center of the interval, <i>c</i>: if f'(c)=0, then this is the minimum point; if f'(<i>c</i>)&gt;0, then the minimum must be in [<i>a</i>,<i>c</i>]; if f'(<i>c</i>)&lt;0, then the minimum must be in [<i>c</i>,<i>z</i>]. This method has linear convergence with rate 0.5.</li></ul>
<div class="mw-heading mw-heading3"><h3 id="Curve-fitting_methods">Curve-fitting methods</h3><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=4" title="Edit section: Curve-fitting methods" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div>
<p>Curve-fitting methods try to attain <a href="/wiki/Superlinear_convergence" class="mw-redirect" title="Superlinear convergence">superlinear convergence</a> by assuming that <i>f</i> has some analytic form, e.g. a polynomial of finite degree. At each iteration, there is a set of "working points" in which we know the value of <i>f</i> (and possibly also its derivative). Based on these points, we can compute a polynomial that fits the known values, and find its minimum analytically. The minimum point becomes a new working point, and we proceed to the next iteration:<sup id="cite_ref-:0_1-3" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">[</span>1<span class="cite-bracket">]</span></a></sup><sup class="reference nowrap"><span title="Location: sec.5">: sec.5 </span></sup>
</p>
<ul><li><a href="/wiki/Newton%27s_method_in_optimization" title="Newton's method in optimization">Newton's method</a> is a special case of a curve-fitting method, in which the curve is a degree-two polynomial, constructed using the first and second derivatives of <i>f</i>. If the method is started close enough to a non-degenerate local minimum (= with a positive second derivative), then it has <a href="/wiki/Quadratic_convergence" class="mw-redirect" title="Quadratic convergence">quadratic convergence</a>.</li>
<li><a href="/wiki/Regula_falsi" title="Regula falsi">Regula falsi</a> is another method that fits the function to a degree-two polynomial, but it uses the first derivative at two points, rather than the first and second derivative at the same point. If the method is started close enough to a non-degenerate local minimum, then it has superlinear convergence of order <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \varphi \approx 1.618}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>φ<!-- φ --></mi>
        <mo>≈<!-- ≈ --></mo>
        <mn>1.618</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \varphi \approx 1.618}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/189ccc899fdcac3803990b85f63187e26335351e" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:9.915ex; height:2.676ex;" alt="{\displaystyle \varphi \approx 1.618}"/></noscript><span class="lazy-image-placeholder" style="width: 9.915ex;height: 2.676ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/189ccc899fdcac3803990b85f63187e26335351e" data-alt="{\displaystyle \varphi \approx 1.618}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>.</li>
<li><i>Cubic fit</i> fits to a degree-three polynomial, using both the function values and its derivative at the last two points. If the method is started close enough to a non-degenerate local minimum, then it has <a href="/wiki/Quadratic_convergence" class="mw-redirect" title="Quadratic convergence">quadratic convergence</a>.</li></ul>
<p>Curve-fitting methods have superlinear convergence when started close enough to the local minimum, but might diverge otherwise. <i>Safeguarded curve-fitting methods</i> simultaneously execute a linear-convergence method in parallel to the curve-fitting method. They check in each iteration whether the point found by the curve-fitting method is close enough to the interval maintained by safeguard method; if it is not, then the safeguard method is used to compute the next iterate.<sup id="cite_ref-:0_1-4" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">[</span>1<span class="cite-bracket">]</span></a></sup><sup class="reference nowrap"><span title="Location: 5.2.3.4">: 5.2.3.4 </span></sup>
</p>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(2)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="Multi-dimensional_line_search">Multi-dimensional line search</h2><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=5" title="Edit section: Multi-dimensional line search" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div><section class="mf-section-2 collapsible-block" id="mf-section-2">
<p>In general, we have a multi-dimensional <a href="/wiki/Objective_function" class="mw-redirect" title="Objective function">objective function</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo>:</mo>
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="double-struck">R</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msup>
        <mo stretchy="false">→<!-- → --></mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="double-struck">R</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/306c097f43c91dce633d12cde024948d39e73752" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:11.404ex; height:2.676ex;" alt="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }"/></noscript><span class="lazy-image-placeholder" style="width: 11.404ex;height: 2.676ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/306c097f43c91dce633d12cde024948d39e73752" data-alt="{\displaystyle f:\mathbb {R} ^{n}\to \mathbb {R} }" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>. The line-search method first finds a <a href="/wiki/Descent_direction" title="Descent direction">descent direction</a> along which the objective function <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/132e57acb643253e7810ee9702d9581f159a1c61" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.279ex; height:2.509ex;" alt="{\displaystyle f}"/></noscript><span class="lazy-image-placeholder" style="width: 1.279ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/132e57acb643253e7810ee9702d9581f159a1c61" data-alt="{\displaystyle f}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> will be reduced, and then computes a step size that determines how far <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \mathbf {x} }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mi mathvariant="bold">x</mi>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} }</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/32adf004df5eb0a8c7fd8c0b6b7405183c5a5ef2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.411ex; height:1.676ex;" alt="{\displaystyle \mathbf {x} }"/></noscript><span class="lazy-image-placeholder" style="width: 1.411ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/32adf004df5eb0a8c7fd8c0b6b7405183c5a5ef2" data-alt="{\displaystyle \mathbf {x} }" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> should move along that direction. The descent direction can be computed by various methods, such as <a href="/wiki/Gradient_descent" title="Gradient descent">gradient descent</a> or <a href="/wiki/Quasi-Newton_method" title="Quasi-Newton method">quasi-Newton method</a>. The step size can be determined either exactly or inexactly. Here is an example gradient method that uses a line search in step 5:
</p>
<ol><li>Set iteration counter <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k=0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
        <mo>=</mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k=0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6307c8a99dad7d0bcb712352ae0a748bd99a038b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:5.472ex; height:2.176ex;" alt="{\displaystyle k=0}"/></noscript><span class="lazy-image-placeholder" style="width: 5.472ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6307c8a99dad7d0bcb712352ae0a748bd99a038b" data-alt="{\displaystyle k=0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> and make an initial guess <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \mathbf {x} _{0}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>0</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} _{0}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/799c59f89751f24a2719c4da95f1acdd3e2faf52" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:2.465ex; height:2.009ex;" alt="{\displaystyle \mathbf {x} _{0}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.465ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/799c59f89751f24a2719c4da95f1acdd3e2faf52" data-alt="{\displaystyle \mathbf {x} _{0}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> for the minimum. Pick <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \epsilon }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>ϵ<!-- ϵ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \epsilon }</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3837cad72483d97bcdde49c85d3b7b859fb3fd2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.944ex; height:1.676ex;" alt="{\displaystyle \epsilon }"/></noscript><span class="lazy-image-placeholder" style="width: 0.944ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3837cad72483d97bcdde49c85d3b7b859fb3fd2" data-alt="{\displaystyle \epsilon }" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> a tolerance.</li>
<li>Loop:
<ol><li>Compute a <a href="/wiki/Descent_direction" title="Descent direction">descent direction</a> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \mathbf {p} _{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">p</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {p} _{k}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/06b38cae31fcc9a4db19b6ac10e053f708135b9c" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:2.574ex; height:2.176ex;" alt="{\displaystyle \mathbf {p} _{k}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.574ex;height: 2.176ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/06b38cae31fcc9a4db19b6ac10e053f708135b9c" data-alt="{\displaystyle \mathbf {p} _{k}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>.</li>
<li>Define a one-dimensional function <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>h</mi>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>α<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>+</mo>
        <msub>
          <mi>α<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">p</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/773b5e7e24ca489eb1c1b7163abae9041821c448" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:22.401ex; height:2.843ex;" alt="{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}"/></noscript><span class="lazy-image-placeholder" style="width: 22.401ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/773b5e7e24ca489eb1c1b7163abae9041821c448" data-alt="{\displaystyle h(\alpha _{k})=f(\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k})}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>, representing the function value on the descent direction given the step-size.</li>
<li>Find an <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \displaystyle \alpha _{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mstyle displaystyle="true" scriptlevel="0">
          <msub>
            <mi>α<!-- α --></mi>
            <mrow class="MJX-TeXAtom-ORD">
              <mi>k</mi>
            </mrow>
          </msub>
        </mstyle>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \displaystyle \alpha _{k}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a1cf71ffaddbc2ccc62d247dcf3ff5d05111b57a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:2.576ex; height:2.009ex;" alt="{\displaystyle \displaystyle \alpha _{k}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.576ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a1cf71ffaddbc2ccc62d247dcf3ff5d05111b57a" data-alt="{\displaystyle \displaystyle \alpha _{k}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> that minimizes <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle h}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>h</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle h}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b26be3e694314bc90c3215047e4a2010c6ee184a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.339ex; height:2.176ex;" alt="{\displaystyle h}"/></noscript><span class="lazy-image-placeholder" style="width: 1.339ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b26be3e694314bc90c3215047e4a2010c6ee184a" data-alt="{\displaystyle h}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span> over <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>α<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>∈<!-- ∈ --></mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="double-struck">R</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mo>+</mo>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/9ba78b43d4f8a98d0fed30318bce3d0d663a49b0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:8.606ex; height:2.509ex;" alt="{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}"/></noscript><span class="lazy-image-placeholder" style="width: 8.606ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/9ba78b43d4f8a98d0fed30318bce3d0d663a49b0" data-alt="{\displaystyle \alpha _{k}\in \mathbb {R} _{+}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>.</li>
<li>Update <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>=</mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>+</mo>
        <msub>
          <mi>α<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">p</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d0f5e232bb17280f8f4283662122a495e26af47a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:18.189ex; height:2.509ex;" alt="{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}"/></noscript><span class="lazy-image-placeholder" style="width: 18.189ex;height: 2.509ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d0f5e232bb17280f8f4283662122a495e26af47a" data-alt="{\displaystyle \mathbf {x} _{k+1}=\mathbf {x} _{k}+\alpha _{k}\mathbf {p} _{k}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>, and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\textstyle k=k+1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="false" scriptlevel="0">
        <mi>k</mi>
        <mo>=</mo>
        <mi>k</mi>
        <mo>+</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\textstyle k=k+1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b3849a006cd2d99c2d43959c3731d819581e6cce" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:9.524ex; height:2.343ex;" alt="{\textstyle k=k+1}"/></noscript><span class="lazy-image-placeholder" style="width: 9.524ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b3849a006cd2d99c2d43959c3731d819581e6cce" data-alt="{\textstyle k=k+1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span></li></ol></li>
<li>Until <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|<\epsilon }">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo fence="false" stretchy="false">‖<!-- ‖ --></mo>
        <mi mathvariant="normal">∇<!-- ∇ --></mi>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <msub>
          <mrow class="MJX-TeXAtom-ORD">
            <mi mathvariant="bold">x</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo fence="false" stretchy="false">‖<!-- ‖ --></mo>
        <mo>&lt;</mo>
        <mi>ϵ<!-- ϵ --></mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|&lt;\epsilon }</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4745a06540e649c42d4153f507cc79546c7ae8b6" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:15.991ex; height:2.843ex;" alt="{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|&lt;\epsilon }"/></noscript><span class="lazy-image-placeholder" style="width: 15.991ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4745a06540e649c42d4153f507cc79546c7ae8b6" data-alt="{\displaystyle \|\nabla f(\mathbf {x} _{k+1})\|<\epsilon }" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span></li></ol>
<p>At the line search step (2.3), the algorithm may minimize <i>h</i> <i>exactly</i>, by solving <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle h'(\alpha _{k})=0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mi>h</mi>
          <mo>′</mo>
        </msup>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>α<!-- α --></mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle h'(\alpha _{k})=0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a8d861a7502b6228c2f4d2191d743bb5308a9311" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:10.67ex; height:3.009ex;" alt="{\displaystyle h'(\alpha _{k})=0}"/></noscript><span class="lazy-image-placeholder" style="width: 10.67ex;height: 3.009ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a8d861a7502b6228c2f4d2191d743bb5308a9311" data-alt="{\displaystyle h'(\alpha _{k})=0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert">&nbsp;</span></span>, or <i>approximately</i>, by using one of the one-dimensional line-search methods mentioned above. It can also be solved <i>loosely</i>, by asking for a sufficient decrease in <i>h</i> that does not necessarily approximate the optimum. One example of the former is <a href="/wiki/Conjugate_gradient_method" title="Conjugate gradient method">conjugate gradient method</a>. The latter is called inexact line search and may be performed in a number of ways, such as a <a href="/wiki/Backtracking_line_search" title="Backtracking line search">backtracking line search</a> or using the <a href="/wiki/Wolfe_conditions" title="Wolfe conditions">Wolfe conditions</a>.
</p>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(3)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="Overcoming_local_minima">Overcoming local minima</h2><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=6" title="Edit section: Overcoming local minima" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div><section class="mf-section-3 collapsible-block" id="mf-section-3">
<p>Like other optimization methods, line search may be combined with <a href="/wiki/Simulated_annealing" title="Simulated annealing">simulated annealing</a> to allow it to jump over some <a href="/wiki/Local_minimum" class="mw-redirect" title="Local minimum">local minima</a>.
</p>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(4)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="See_also">See also</h2><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=7" title="Edit section: See also" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div><section class="mf-section-4 collapsible-block" id="mf-section-4">
<ul><li><a href="/wiki/Trust_region" title="Trust region">Trust region</a> - a dual approach for finding a local minimum: it first computes a step size, and then determines the descent direction.</li>
<li><a href="/wiki/Grid_search" class="mw-redirect" title="Grid search">Grid search</a></li>
<li><a href="/wiki/Learning_rate" title="Learning rate">Learning rate</a></li>
<li><a href="/wiki/Pattern_search_(optimization)" title="Pattern search (optimization)">Pattern search (optimization)</a></li>
<li><a href="/wiki/Secant_method" title="Secant method">Secant method</a></li></ul>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(5)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="References">References</h2><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=8" title="Edit section: References" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div><section class="mf-section-5 collapsible-block" id="mf-section-5">
<style data-mw-deduplicate="TemplateStyles:r1239543626">.mw-parser-output .reflist{margin-bottom:0.5em;list-style-type:decimal}@media screen{.mw-parser-output .reflist{font-size:90%}}.mw-parser-output .reflist .references{font-size:100%;margin-bottom:0;list-style-type:inherit}.mw-parser-output .reflist-columns-2{column-width:30em}.mw-parser-output .reflist-columns-3{column-width:25em}.mw-parser-output .reflist-columns{margin-top:0.3em}.mw-parser-output .reflist-columns ol{margin-top:0}.mw-parser-output .reflist-columns li{page-break-inside:avoid;break-inside:avoid-column}.mw-parser-output .reflist-upper-alpha{list-style-type:upper-alpha}.mw-parser-output .reflist-upper-roman{list-style-type:upper-roman}.mw-parser-output .reflist-lower-alpha{list-style-type:lower-alpha}.mw-parser-output .reflist-lower-greek{list-style-type:lower-greek}.mw-parser-output .reflist-lower-roman{list-style-type:lower-roman}</style><div class="reflist">
<div class="mw-references-wrap"><ol class="references">
<li id="cite_note-:0-1"><span class="mw-cite-backlink">^ <a href="#cite_ref-:0_1-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-:0_1-1"><sup><i><b>b</b></i></sup></a> <a href="#cite_ref-:0_1-2"><sup><i><b>c</b></i></sup></a> <a href="#cite_ref-:0_1-3"><sup><i><b>d</b></i></sup></a> <a href="#cite_ref-:0_1-4"><sup><i><b>e</b></i></sup></a></span> <span class="reference-text"><style data-mw-deduplicate="TemplateStyles:r1238218222">.mw-parser-output cite.citation{font-style:inherit;word-wrap:break-word}.mw-parser-output .citation q{quotes:"\"""\"""'""'"}.mw-parser-output .citation:target{background-color:rgba(0,127,255,0.133)}.mw-parser-output .id-lock-free.id-lock-free a{background:url("//upload.wikimedia.org/wikipedia/commons/6/65/Lock-green.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-limited.id-lock-limited a,.mw-parser-output .id-lock-registration.id-lock-registration a{background:url("//upload.wikimedia.org/wikipedia/commons/d/d6/Lock-gray-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-subscription.id-lock-subscription a{background:url("//upload.wikimedia.org/wikipedia/commons/a/aa/Lock-red-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .cs1-ws-icon a{background:url("//upload.wikimedia.org/wikipedia/commons/4/4c/Wikisource-logo.svg")right 0.1em center/12px no-repeat}body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-free a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-limited a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-registration a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-subscription a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .cs1-ws-icon a{background-size:contain;padding:0 1em 0 0}.mw-parser-output .cs1-code{color:inherit;background:inherit;border:none;padding:inherit}.mw-parser-output .cs1-hidden-error{display:none;color:var(--color-error,#d33)}.mw-parser-output .cs1-visible-error{color:var(--color-error,#d33)}.mw-parser-output .cs1-maint{display:none;color:#085;margin-left:0.3em}.mw-parser-output .cs1-kern-left{padding-left:0.2em}.mw-parser-output .cs1-kern-right{padding-right:0.2em}.mw-parser-output .citation .mw-selflink{font-weight:inherit}@media screen{.mw-parser-output .cs1-format{font-size:95%}html.skin-theme-clientpref-night .mw-parser-output .cs1-maint{color:#18911f}}@media screen and (prefers-color-scheme:dark){html.skin-theme-clientpref-os .mw-parser-output .cs1-maint{color:#18911f}}</style><cite id="CITEREFNemirovsky_and_Ben-Tal2023" class="citation web cs1">Nemirovsky and Ben-Tal (2023). <a rel="nofollow" class="external text" href="http://www2.isye.gatech.edu/~nemirovs/OPTIIILN2023Spring.pdf">"Optimization III: Convex Optimization"</a> <span class="cs1-format">(PDF)</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Optimization+III%3A+Convex+Optimization&amp;rft.date=2023&amp;rft.au=Nemirovsky+and+Ben-Tal&amp;rft_id=http%3A%2F%2Fwww2.isye.gatech.edu%2F~nemirovs%2FOPTIIILN2023Spring.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></span>
</li>
</ol></div></div>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(6)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="Further_reading">Further reading</h2><span class="mw-editsection">
<a role="button" href="/w/index.php?title=Line_search&amp;action=edit&amp;section=9" title="Edit section: Further reading" class="cdx-button cdx-button--size-large cdx-button--fake-button cdx-button--fake-button--enabled cdx-button--icon-only cdx-button--weight-quiet ">
    <span class="minerva-icon minerva-icon--edit"></span>
<span>edit</span>
</a>

</span>

</div><section class="mf-section-6 collapsible-block" id="mf-section-6">
<ul><li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"><cite id="CITEREFDennisSchnabel1983" class="citation book cs1">Dennis, J. E. Jr.; Schnabel, Robert B. (1983). "Globally Convergent Modifications of Newton's Method". <i>Numerical Methods for Unconstrained Optimization and Nonlinear Equations</i>. Englewood Cliffs: Prentice-Hall. pp.&nbsp;<span class="nowrap">111–</span>154. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/0-13-627216-9" title="Special:BookSources/0-13-627216-9"><bdi>0-13-627216-9</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Globally+Convergent+Modifications+of+Newton%27s+Method&amp;rft.btitle=Numerical+Methods+for+Unconstrained+Optimization+and+Nonlinear+Equations&amp;rft.place=Englewood+Cliffs&amp;rft.pages=111-154&amp;rft.pub=Prentice-Hall&amp;rft.date=1983&amp;rft.isbn=0-13-627216-9&amp;rft.aulast=Dennis&amp;rft.aufirst=J.+E.+Jr.&amp;rft.au=Schnabel%2C+Robert+B.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"><cite id="CITEREFNocedalWright1999" class="citation book cs1">Nocedal, Jorge; Wright, Stephen J. (1999). "Line Search Methods". <i>Numerical Optimization</i>. New York: Springer. pp.&nbsp;<span class="nowrap">34–</span>63. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/0-387-98793-2" title="Special:BookSources/0-387-98793-2"><bdi>0-387-98793-2</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Line+Search+Methods&amp;rft.btitle=Numerical+Optimization&amp;rft.place=New+York&amp;rft.pages=34-63&amp;rft.pub=Springer&amp;rft.date=1999&amp;rft.isbn=0-387-98793-2&amp;rft.aulast=Nocedal&amp;rft.aufirst=Jorge&amp;rft.au=Wright%2C+Stephen+J.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"><cite id="CITEREFSunYuan2006" class="citation book cs1">Sun, Wenyu; Yuan, Ya-Xiang (2006). "Line Search". <i>Optimization Theory and Methods: Nonlinear Programming</i>. New York: Springer. pp.&nbsp;<span class="nowrap">71–</span>117. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a>&nbsp;<a href="/wiki/Special:BookSources/0-387-24975-3" title="Special:BookSources/0-387-24975-3"><bdi>0-387-24975-3</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=bookitem&amp;rft.atitle=Line+Search&amp;rft.btitle=Optimization+Theory+and+Methods%3A+Nonlinear+Programming&amp;rft.place=New+York&amp;rft.pages=71-117&amp;rft.pub=Springer&amp;rft.date=2006&amp;rft.isbn=0-387-24975-3&amp;rft.aulast=Sun&amp;rft.aufirst=Wenyu&amp;rft.au=Yuan%2C+Ya-Xiang&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ALine+search" class="Z3988"></span></li></ul>
<div class="navbox-styles"><style data-mw-deduplicate="TemplateStyles:r1129693374">.mw-parser-output .hlist dl,.mw-parser-output .hlist ol,.mw-parser-output .hlist ul{margin:0;padding:0}.mw-parser-output .hlist dd,.mw-parser-output .hlist dt,.mw-parser-output .hlist li{margin:0;display:inline}.mw-parser-output .hlist.inline,.mw-parser-output .hlist.inline dl,.mw-parser-output .hlist.inline ol,.mw-parser-output .hlist.inline ul,.mw-parser-output .hlist dl dl,.mw-parser-output .hlist dl ol,.mw-parser-output .hlist dl ul,.mw-parser-output .hlist ol dl,.mw-parser-output .hlist ol ol,.mw-parser-output .hlist ol ul,.mw-parser-output .hlist ul dl,.mw-parser-output .hlist ul ol,.mw-parser-output .hlist ul ul{display:inline}.mw-parser-output .hlist .mw-empty-li{display:none}.mw-parser-output .hlist dt::after{content:": "}.mw-parser-output .hlist dd::after,.mw-parser-output .hlist li::after{content:" · ";font-weight:bold}.mw-parser-output .hlist dd:last-child::after,.mw-parser-output .hlist dt:last-child::after,.mw-parser-output .hlist li:last-child::after{content:none}.mw-parser-output .hlist dd dd:first-child::before,.mw-parser-output .hlist dd dt:first-child::before,.mw-parser-output .hlist dd li:first-child::before,.mw-parser-output .hlist dt dd:first-child::before,.mw-parser-output .hlist dt dt:first-child::before,.mw-parser-output .hlist dt li:first-child::before,.mw-parser-output .hlist li dd:first-child::before,.mw-parser-output .hlist li dt:first-child::before,.mw-parser-output .hlist li li:first-child::before{content:" (";font-weight:normal}.mw-parser-output .hlist dd dd:last-child::after,.mw-parser-output .hlist dd dt:last-child::after,.mw-parser-output .hlist dd li:last-child::after,.mw-parser-output .hlist dt dd:last-child::after,.mw-parser-output .hlist dt dt:last-child::after,.mw-parser-output .hlist dt li:last-child::after,.mw-parser-output .hlist li dd:last-child::after,.mw-parser-output .hlist li dt:last-child::after,.mw-parser-output .hlist li li:last-child::after{content:")";font-weight:normal}.mw-parser-output .hlist ol{counter-reset:listitem}.mw-parser-output .hlist ol>li{counter-increment:listitem}.mw-parser-output .hlist ol>li::before{content:" "counter(listitem)"\a0 "}.mw-parser-output .hlist dd ol>li:first-child::before,.mw-parser-output .hlist dt ol>li:first-child::before,.mw-parser-output .hlist li ol>li:first-child::before{content:" ("counter(listitem)"\a0 "}</style><style data-mw-deduplicate="TemplateStyles:r1236075235">.mw-parser-output .navbox{box-sizing:border-box;border:1px solid #a2a9b1;width:100%;clear:both;font-size:88%;text-align:center;padding:1px;margin:1em auto 0}.mw-parser-output .navbox .navbox{margin-top:0}.mw-parser-output .navbox+.navbox,.mw-parser-output .navbox+.navbox-styles+.navbox{margin-top:-1px}.mw-parser-output .navbox-inner,.mw-parser-output .navbox-subgroup{width:100%}.mw-parser-output .navbox-group,.mw-parser-output .navbox-title,.mw-parser-output .navbox-abovebelow{padding:0.25em 1em;line-height:1.5em;text-align:center}.mw-parser-output .navbox-group{white-space:nowrap;text-align:right}.mw-parser-output .navbox,.mw-parser-output .navbox-subgroup{background-color:#fdfdfd}.mw-parser-output .navbox-list{line-height:1.5em;border-color:#fdfdfd}.mw-parser-output .navbox-list-with-group{text-align:left;border-left-width:2px;border-left-style:solid}.mw-parser-output tr+tr>.navbox-abovebelow,.mw-parser-output tr+tr>.navbox-group,.mw-parser-output tr+tr>.navbox-image,.mw-parser-output tr+tr>.navbox-list{border-top:2px solid #fdfdfd}.mw-parser-output .navbox-title{background-color:#ccf}.mw-parser-output .navbox-abovebelow,.mw-parser-output .navbox-group,.mw-parser-output .navbox-subgroup .navbox-title{background-color:#ddf}.mw-parser-output .navbox-subgroup .navbox-group,.mw-parser-output .navbox-subgroup .navbox-abovebelow{background-color:#e6e6ff}.mw-parser-output .navbox-even{background-color:#f7f7f7}.mw-parser-output .navbox-odd{background-color:transparent}.mw-parser-output .navbox .hlist td dl,.mw-parser-output .navbox .hlist td ol,.mw-parser-output .navbox .hlist td ul,.mw-parser-output .navbox td.hlist dl,.mw-parser-output .navbox td.hlist ol,.mw-parser-output .navbox td.hlist ul{padding:0.125em 0}.mw-parser-output .navbox .navbar{display:block;font-size:100%}.mw-parser-output .navbox-title .navbar{float:left;text-align:left;margin-right:0.5em}body.skin--responsive .mw-parser-output .navbox-image img{max-width:none!important}@media print{body.ns-0 .mw-parser-output .navbox{display:none!important}}</style></div>
<!-- 
NewPP limit report
Parsed by mw‐web.eqiad.main‐5f99d748c‐7z2rx
Cached time: 20250728150647
Cache expiry: 2592000
Reduced expiry: false
Complications: [vary‐revision‐sha1, show‐toc]
CPU time usage: 0.418 seconds
Real time usage: 0.545 seconds
Preprocessor visited node count: 2108/1000000
Revision size: 8820/2097152 bytes
Post‐expand include size: 65636/2097152 bytes
Template argument size: 838/2097152 bytes
Highest expansion depth: 16/100
Expensive parser function count: 2/500
Unstrip recursion depth: 1/20
Unstrip post‐expand size: 21285/5000000 bytes
Lua time usage: 0.250/10.000 seconds
Lua memory usage: 4908171/52428800 bytes
Number of Wikibase entities loaded: 0/500
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00%  427.129      1 -total
 26.62%  113.714      1 Template:Reflist
 22.13%   94.536      1 Template:Cite_web
 22.01%   94.024      1 Template:Optimization_algorithms
 21.45%   91.600      1 Template:Navbox_with_collapsible_groups
 20.62%   88.084      1 Template:Short_description
 15.10%   64.508      5 Template:Rp
 13.37%   57.109      5 Template:R/superscript
 11.75%   50.176      2 Template:Pagetype
  6.98%   29.834      3 Template:Cite_book
-->

<!-- Saved in parser cache with key enwiki:pcache:1537058:|#|:idhash:canonical and timestamp 20250728150647 and revision id 1239715615. Rendering was triggered because: page-view
 -->
</section></div>
<!-- MobileFormatter took 0.006 seconds --><!--esi <esi:include src="/esitest-fa8a495983347898/content" /> --><noscript><img src="https://en.m.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1&amp;usesul3=1" alt="" width="1" height="1" style="border: none; position: absolute;"></noscript>
<div class="printfooter" data-nosnippet="">Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/w/index.php?title=Line_search&amp;oldid=1239715615">https://en.wikipedia.org/w/index.php?title=Line_search&amp;oldid=1239715615</a>"</div></div>
				
			</div>
			<div class="post-content" id="page-secondary-actions">
			</div>
		</main>
		<footer class="mw-footer minerva-footer" role="contentinfo">
		  <a class="last-modified-bar" href="/w/index.php?title=Line_search&amp;action=history">
  	<div class="post-content last-modified-bar__content">
  		 <span class="minerva-icon minerva-icon-size-medium minerva-icon--modified-history"></span>
 
  		<span class="last-modified-bar__text modified-enhancement"
  				data-user-name="Simonedl"
  				data-user-gender="unknown"
  				data-timestamp="1723341590">
  				<span>Last edited on 11 August 2024, at 01:59</span>
  		</span>
  		 <span class="minerva-icon minerva-icon-size-small minerva-icon--expand"></span>
 
  	</div>
  </a>
	<div class="post-content footer-content">
			<div id='mw-data-after-content'>
	<div class="read-more-container"></div>
</div>

			<div id="p-lang">
	    <h4>Languages</h4>
	    <section>
	        <ul id="p-variants" class="minerva-languages"></ul>
	        <ul class="minerva-languages"><li class="interlanguage-link interwiki-de mw-list-item"><a href="https://de.wikipedia.org/wiki/Liniensuchverfahren" title="Liniensuchverfahren – German" lang="de" hreflang="de" data-title="Liniensuchverfahren" data-language-autonym="Deutsch" data-language-local-name="German" class="interlanguage-link-target"><span>Deutsch</span></a></li><li class="interlanguage-link interwiki-es mw-list-item"><a href="https://es.wikipedia.org/wiki/B%C3%BAsqueda_lineal_(matem%C3%A1ticas)" title="Búsqueda lineal (matemáticas) – Spanish" lang="es" hreflang="es" data-title="Búsqueda lineal (matemáticas)" data-language-autonym="Español" data-language-local-name="Spanish" class="interlanguage-link-target"><span>Español</span></a></li><li class="interlanguage-link interwiki-fa mw-list-item"><a href="https://fa.wikipedia.org/wiki/%D8%AC%D8%B3%D8%AA%D8%AC%D9%88%DB%8C_%D8%AE%D8%B7" title="جستجوی خط – Persian" lang="fa" hreflang="fa" data-title="جستجوی خط" data-language-autonym="فارسی" data-language-local-name="Persian" class="interlanguage-link-target"><span>فارسی</span></a></li><li class="interlanguage-link interwiki-fr mw-list-item"><a href="https://fr.wikipedia.org/wiki/Recherche_lin%C3%A9aire_(optimisation)" title="Recherche linéaire (optimisation) – French" lang="fr" hreflang="fr" data-title="Recherche linéaire (optimisation)" data-language-autonym="Français" data-language-local-name="French" class="interlanguage-link-target"><span>Français</span></a></li><li class="interlanguage-link interwiki-ko mw-list-item"><a href="https://ko.wikipedia.org/wiki/%EC%A7%81%EC%84%A0_%ED%83%90%EC%83%89" title="직선 탐색 – Korean" lang="ko" hreflang="ko" data-title="직선 탐색" data-language-autonym="한국어" data-language-local-name="Korean" class="interlanguage-link-target"><span>한국어</span></a></li><li class="interlanguage-link interwiki-ja mw-list-item"><a href="https://ja.wikipedia.org/wiki/%E7%9B%B4%E7%B7%9A%E6%8E%A2%E7%B4%A2" title="直線探索 – Japanese" lang="ja" hreflang="ja" data-title="直線探索" data-language-autonym="日本語" data-language-local-name="Japanese" class="interlanguage-link-target"><span>日本語</span></a></li><li class="interlanguage-link interwiki-pt mw-list-item"><a href="https://pt.wikipedia.org/wiki/Pesquisa_linear" title="Pesquisa linear – Portuguese" lang="pt" hreflang="pt" data-title="Pesquisa linear" data-language-autonym="Português" data-language-local-name="Portuguese" class="interlanguage-link-target"><span>Português</span></a></li><li class="interlanguage-link interwiki-sl mw-list-item"><a href="https://sl.wikipedia.org/wiki/Minimizacija_v_dani_smeri" title="Minimizacija v dani smeri – Slovenian" lang="sl" hreflang="sl" data-title="Minimizacija v dani smeri" data-language-autonym="Slovenščina" data-language-local-name="Slovenian" class="interlanguage-link-target"><span>Slovenščina</span></a></li><li class="interlanguage-link interwiki-uk mw-list-item"><a href="https://uk.wikipedia.org/wiki/%D0%9B%D1%96%D0%BD%D1%96%D0%B9%D0%BD%D0%B8%D0%B9_%D0%BF%D0%BE%D1%88%D1%83%D0%BA_%D0%B2_%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D1%96%D0%B7%D0%B0%D1%86%D1%96%D1%97" title="Лінійний пошук в оптимізації – Ukrainian" lang="uk" hreflang="uk" data-title="Лінійний пошук в оптимізації" data-language-autonym="Українська" data-language-local-name="Ukrainian" class="interlanguage-link-target"><span>Українська</span></a></li><li class="interlanguage-link interwiki-zh mw-list-item"><a href="https://zh.wikipedia.org/wiki/%E7%BA%BF%E6%90%9C%E7%B4%A2" title="线搜索 – Chinese" lang="zh" hreflang="zh" data-title="线搜索" data-language-autonym="中文" data-language-local-name="Chinese" class="interlanguage-link-target"><span>中文</span></a></li></ul>
	    </section>
	</div>
	<div class="minerva-footer-logo">
				<img src="/static/images/mobile/copyright/wikipedia-wordmark-en.svg" alt="Wikipedia" width="120" height="18"
	style="width: 7.5em; height: 1.125em;"/>


				<ul id="footer-icons" class="footer-icons">
	<li id="footer-copyrightico"><a href="https://www.wikimedia.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/static/images/footer/wikimedia-button.svg" width="84" height="29"><img src="/static/images/footer/wikimedia.svg" width="25" height="25" alt="Wikimedia Foundation" lang="en" loading="lazy"></picture></a></li>
	<li id="footer-poweredbyico"><a href="https://www.mediawiki.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/w/resources/assets/poweredby_mediawiki.svg" width="88" height="31"><img src="/w/resources/assets/mediawiki_compact.svg" alt="Powered by MediaWiki" lang="en" width="25" height="25" loading="lazy"></picture></a></li>
</ul>
			</div>
			<ul id="footer-info" class="footer-info hlist hlist-separated">
	<li id="footer-info-lastmod"> This page was last edited on 11 August 2024, at 01:59<span class="anonymous-show">&#160;(UTC)</span>.</li>
	<li id="footer-info-copyright">Content is available under <a class="external" rel="nofollow" href="https://creativecommons.org/licenses/by-sa/4.0/deed.en">CC BY-SA 4.0</a> unless otherwise noted.</li>
</ul>

			<ul id="footer-places" class="footer-places hlist hlist-separated">
	<li id="footer-places-privacy"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy">Privacy policy</a></li>
	<li id="footer-places-about"><a href="/wiki/Wikipedia:About">About Wikipedia</a></li>
	<li id="footer-places-disclaimers"><a href="/wiki/Wikipedia:General_disclaimer">Disclaimers</a></li>
	<li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
	<li id="footer-places-wm-codeofconduct"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Universal_Code_of_Conduct">Code of Conduct</a></li>
	<li id="footer-places-developers"><a href="https://developer.wikimedia.org">Developers</a></li>
	<li id="footer-places-statslink"><a href="https://stats.wikimedia.org/#/en.wikipedia.org">Statistics</a></li>
	<li id="footer-places-cookiestatement"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Cookie_statement">Cookie statement</a></li>
	<li id="footer-places-terms-use"><a href="https://foundation.m.wikimedia.org/wiki/Special:MyLanguage/Policy:Terms_of_Use">Terms of Use</a></li>
	<li id="footer-places-desktop-toggle"><a id="mw-mf-display-toggle" href="//en.wikipedia.org/w/index.php?title=Line_search&amp;mobileaction=toggle_view_desktop" data-event-name="switch_to_desktop">Desktop</a></li>
</ul>

			</div>
		</footer>
			</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
        <ul>
                
        </ul>
</div>
<div class="mw-notification-area" data-mw="interface"></div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-78f6484c-7p4pj","wgBackendResponseTime":219,"wgPageParseReport":{"limitreport":{"cputime":"0.418","walltime":"0.545","ppvisitednodes":{"value":2108,"limit":1000000},"revisionsize":{"value":8820,"limit":2097152},"postexpandincludesize":{"value":65636,"limit":2097152},"templateargumentsize":{"value":838,"limit":2097152},"expansiondepth":{"value":16,"limit":100},"expensivefunctioncount":{"value":2,"limit":500},"unstrip-depth":{"value":1,"limit":20},"unstrip-size":{"value":21285,"limit":5000000},"entityaccesscount":{"value":0,"limit":500},"timingprofile":["100.00%  427.129      1 -total"," 26.62%  113.714      1 Template:Reflist"," 22.13%   94.536      1 Template:Cite_web"," 22.01%   94.024      1 Template:Optimization_algorithms"," 21.45%   91.600      1 Template:Navbox_with_collapsible_groups"," 20.62%   88.084      1 Template:Short_description"," 15.10%   64.508      5 Template:Rp"," 13.37%   57.109      5 Template:R/superscript"," 11.75%   50.176      2 Template:Pagetype","  6.98%   29.834      3 Template:Cite_book"]},"scribunto":{"limitreport-timeusage":{"value":"0.250","limit":"10.000"},"limitreport-memusage":{"value":4908171,"limit":52428800}},"cachereport":{"origin":"mw-web.eqiad.main-5f99d748c-7z2rx","timestamp":"20250728150647","ttl":2592000,"transientcontent":false}}});});</script>
<script>(window.NORLQ=window.NORLQ||[]).push(function(){var ns,i,p,img;ns=document.getElementsByTagName('noscript');for(i=0;i<ns.length;i++){p=ns[i].nextSibling;if(p&&p.className&&p.className.indexOf('lazy-image-placeholder')>-1){img=document.createElement('img');img.setAttribute('src',p.getAttribute('data-mw-src'));img.setAttribute('width',p.getAttribute('data-width'));img.setAttribute('height',p.getAttribute('data-height'));img.setAttribute('alt',p.getAttribute('data-alt'));p.parentNode.replaceChild(img,p);}}});</script><script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","name":"Line search","url":"https:\/\/en.wikipedia.org\/wiki\/Line_search","sameAs":"http:\/\/www.wikidata.org\/entity\/Q3278015","mainEntity":"http:\/\/www.wikidata.org\/entity\/Q3278015","author":{"@type":"Organization","name":"Contributors to Wikimedia projects"},"publisher":{"@type":"Organization","name":"Wikimedia Foundation, Inc.","logo":{"@type":"ImageObject","url":"https:\/\/www.wikimedia.org\/static\/images\/wmf-hor-googpub.png"}},"datePublished":"2005-02-16T16:26:40Z","dateModified":"2024-08-11T01:59:50Z","headline":"optimization algorithm"}</script>
</body>
</html>    <mi>t</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>=</mo>
        <mi>A</mi>
        <msubsup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>a</mi>
          </mrow>
        </msubsup>
        <mo>−<!-- − --></mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8fbaf9ec3c03a2530e63919cbfa0f16d5f6d5d24" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:15.966ex; height:2.843ex;" alt="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}}"/></noscript><span class="lazy-image-placeholder" style="width: 15.966ex;height: 2.843ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8fbaf9ec3c03a2530e63919cbfa0f16d5f6d5d24" data-alt="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, where <span class="texhtml mvar" style="font-style:italic;">A</span> is a positive constant and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle 0&lt;a&lt;1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>0</mn>
        <mo>&lt;</mo>
        <mi>a</mi>
        <mo>&lt;</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 0&lt;a&lt;1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7cfd02fa239e3f0b03bda321fdc6f309e6b1d915" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:9.752ex; height:2.176ex;" alt="{\displaystyle 0&lt;a&lt;1}"/></noscript><span class="lazy-image-placeholder" style="width: 9.752ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7cfd02fa239e3f0b03bda321fdc6f309e6b1d915" data-alt="{\displaystyle 0&lt;a&lt;1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>. Assume capital cannot be negative. Then the consumer's decision problem can be written as follows:
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \max \sum _{t=0}^{T}b^{t}\ln(c_{t})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo movablelimits="true" form="prefix">max</mo>
        <munderover>
          <mo>∑<!-- ∑ --></mo>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
            <mo>=</mo>
            <mn>0</mn>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
          </mrow>
        </munderover>
        <msup>
          <mi>b</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msup>
        <mi>ln</mi>
        <mo>⁡<!-- ⁡ --></mo>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \max \sum _{t=0}^{T}b^{t}\ln(c_{t})}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3708ec350fe3b3d2b808439d5a36403532fc670f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.005ex; width:16.247ex; height:7.343ex;" alt="{\displaystyle \max \sum _{t=0}^{T}b^{t}\ln(c_{t})}"/></noscript><span class="lazy-image-placeholder" style="width: 16.247ex;height: 7.343ex;vertical-align: -3.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3708ec350fe3b3d2b808439d5a36403532fc670f" data-alt="{\displaystyle \max \sum _{t=0}^{T}b^{t}\ln(c_{t})}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> subject to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>=</mo>
        <mi>A</mi>
        <msubsup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>a</mi>
          </mrow>
        </msubsup>
        <mo>−<!-- − --></mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
        <mo>≥<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b4e82a36b50b985c6d5e7d3b766c47c0c145767" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:20.226ex; height:2.843ex;" alt="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}"/></noscript><span class="lazy-image-placeholder" style="width: 20.226ex;height: 2.843ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b4e82a36b50b985c6d5e7d3b766c47c0c145767" data-alt="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t=0,1,2,\ldots ,T}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>=</mo>
        <mn>0</mn>
        <mo>,</mo>
        <mn>1</mn>
        <mo>,</mo>
        <mn>2</mn>
        <mo>,</mo>
        <mo>…<!-- … --></mo>
        <mo>,</mo>
        <mi>T</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t=0,1,2,\ldots ,T}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/822463c3aa8dc826ed1e78c4e68a48be0e11240d" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:16.308ex; height:2.509ex;" alt="{\displaystyle t=0,1,2,\ldots ,T}"/></noscript><span class="lazy-image-placeholder" style="width: 16.308ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/822463c3aa8dc826ed1e78c4e68a48be0e11240d" data-alt="{\displaystyle t=0,1,2,\ldots ,T}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>Written this way, the problem looks complicated, because it involves solving for all the choice variables <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle c_{0},c_{1},c_{2},\ldots ,c_{T}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>0</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <mo>…<!-- … --></mo>
        <mo>,</mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle c_{0},c_{1},c_{2},\ldots ,c_{T}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1765ec0a05b964c6705adc51371395b41d3f151b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:15.825ex; height:2.009ex;" alt="{\displaystyle c_{0},c_{1},c_{2},\ldots ,c_{T}}"/></noscript><span class="lazy-image-placeholder" style="width: 15.825ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1765ec0a05b964c6705adc51371395b41d3f151b" data-alt="{\displaystyle c_{0},c_{1},c_{2},\ldots ,c_{T}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>. (The capital <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k_{0}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>0</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{0}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/eafdfeca4ead3960fca92311910970eba7ec48a1" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:2.265ex; height:2.509ex;" alt="{\displaystyle k_{0}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.265ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/eafdfeca4ead3960fca92311910970eba7ec48a1" data-alt="{\displaystyle k_{0}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is not a choice variable—the consumer's initial capital is taken as given.)
</p><p>The dynamic programming approach to solve this problem involves breaking it apart into a sequence of smaller decisions. To do so, we define a sequence of <i>value functions</i> <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{t}(k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{t}(k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/407a1673f8e20e9c13125eeb44aa463c150ac756" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:5.202ex; height:2.843ex;" alt="{\displaystyle V_{t}(k)}"/></noscript><span class="lazy-image-placeholder" style="width: 5.202ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/407a1673f8e20e9c13125eeb44aa463c150ac756" data-alt="{\displaystyle V_{t}(k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, for <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t=0,1,2,\ldots ,T,T+1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>=</mo>
        <mn>0</mn>
        <mo>,</mo>
        <mn>1</mn>
        <mo>,</mo>
        <mn>2</mn>
        <mo>,</mo>
        <mo>…<!-- … --></mo>
        <mo>,</mo>
        <mi>T</mi>
        <mo>,</mo>
        <mi>T</mi>
        <mo>+</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t=0,1,2,\ldots ,T,T+1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/2d53c4539a603e5e4696dafaa6ef98470c7658e8" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:22.981ex; height:2.509ex;" alt="{\displaystyle t=0,1,2,\ldots ,T,T+1}"/></noscript><span class="lazy-image-placeholder" style="width: 22.981ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/2d53c4539a603e5e4696dafaa6ef98470c7658e8" data-alt="{\displaystyle t=0,1,2,\ldots ,T,T+1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> which represent the value of having any amount of capital <span class="texhtml mvar" style="font-style:italic;">k</span> at each time <span class="texhtml mvar" style="font-style:italic;">t</span>. There is (by assumption) no utility from having capital after death, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{T+1}(k)=0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{T+1}(k)=0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6a883a897edf0530feb7d060b9ab860df7013dcb" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.126ex; height:2.843ex;" alt="{\displaystyle V_{T+1}(k)=0}"/></noscript><span class="lazy-image-placeholder" style="width: 12.126ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6a883a897edf0530feb7d060b9ab860df7013dcb" data-alt="{\displaystyle V_{T+1}(k)=0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>The value of any quantity of capital at any previous time can be calculated by <a href="/wiki/Backward_induction" title="Backward induction">backward induction</a> using the <a href="/wiki/Bellman_equation" title="Bellman equation">Bellman equation</a>. In this problem, for each <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t=0,1,2,\ldots ,T}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>=</mo>
        <mn>0</mn>
        <mo>,</mo>
        <mn>1</mn>
        <mo>,</mo>
        <mn>2</mn>
        <mo>,</mo>
        <mo>…<!-- … --></mo>
        <mo>,</mo>
        <mi>T</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t=0,1,2,\ldots ,T}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/822463c3aa8dc826ed1e78c4e68a48be0e11240d" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:16.308ex; height:2.509ex;" alt="{\displaystyle t=0,1,2,\ldots ,T}"/></noscript><span class="lazy-image-placeholder" style="width: 16.308ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/822463c3aa8dc826ed1e78c4e68a48be0e11240d" data-alt="{\displaystyle t=0,1,2,\ldots ,T}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, the Bellman equation is
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{t}(k_{t})\,=\,\max \left(\ln(c_{t})+bV_{t+1}(k_{t+1})\right)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mspace width="thinmathspace"></mspace>
        <mo>=</mo>
        <mspace width="thinmathspace"></mspace>
        <mo movablelimits="true" form="prefix">max</mo>
        <mrow>
          <mo>(</mo>
          <mrow>
            <mi>ln</mi>
            <mo>⁡<!-- ⁡ --></mo>
            <mo stretchy="false">(</mo>
            <msub>
              <mi>c</mi>
              <mrow class="MJX-TeXAtom-ORD">
                <mi>t</mi>
              </mrow>
            </msub>
            <mo stretchy="false">)</mo>
            <mo>+</mo>
            <mi>b</mi>
            <msub>
              <mi>V</mi>
              <mrow class="MJX-TeXAtom-ORD">
                <mi>t</mi>
                <mo>+</mo>
                <mn>1</mn>
              </mrow>
            </msub>
            <mo stretchy="false">(</mo>
            <msub>
              <mi>k</mi>
              <mrow class="MJX-TeXAtom-ORD">
                <mi>t</mi>
                <mo>+</mo>
                <mn>1</mn>
              </mrow>
            </msub>
            <mo stretchy="false">)</mo>
          </mrow>
          <mo>)</mo>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{t}(k_{t})\,=\,\max \left(\ln(c_{t})+bV_{t+1}(k_{t+1})\right)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/199fcd39d2bf305a41b419b99f971e0512fcf07f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:36.071ex; height:2.843ex;" alt="{\displaystyle V_{t}(k_{t})\,=\,\max \left(\ln(c_{t})+bV_{t+1}(k_{t+1})\right)}"/></noscript><span class="lazy-image-placeholder" style="width: 36.071ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/199fcd39d2bf305a41b419b99f971e0512fcf07f" data-alt="{\displaystyle V_{t}(k_{t})\,=\,\max \left(\ln(c_{t})+bV_{t+1}(k_{t+1})\right)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> subject to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>=</mo>
        <mi>A</mi>
        <msubsup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>a</mi>
          </mrow>
        </msubsup>
        <mo>−<!-- − --></mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
        <mo>≥<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b4e82a36b50b985c6d5e7d3b766c47c0c145767" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:20.226ex; height:2.843ex;" alt="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}"/></noscript><span class="lazy-image-placeholder" style="width: 20.226ex;height: 2.843ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b4e82a36b50b985c6d5e7d3b766c47c0c145767" data-alt="{\displaystyle k_{t+1}=Ak_{t}^{a}-c_{t}\geq 0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>This problem is much simpler than the one we wrote down before, because it involves only two decision variables, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle c_{t}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle c_{t}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/93578e37f3234419a34df79845836bc0ec5ef76c" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.833ex; height:2.009ex;" alt="{\displaystyle c_{t}}"/></noscript><span class="lazy-image-placeholder" style="width: 1.833ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/93578e37f3234419a34df79845836bc0ec5ef76c" data-alt="{\displaystyle c_{t}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k_{t+1}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{t+1}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/deb47bc888092c00440588520f39cd7674fc67f3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:4.138ex; height:2.509ex;" alt="{\displaystyle k_{t+1}}"/></noscript><span class="lazy-image-placeholder" style="width: 4.138ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/deb47bc888092c00440588520f39cd7674fc67f3" data-alt="{\displaystyle k_{t+1}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>. Intuitively, instead of choosing his whole lifetime plan at birth, the consumer can take things one step at a time. At time <span class="texhtml mvar" style="font-style:italic;">t</span>, his current capital <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k_{t}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{t}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/352386366dcb1dcc184d82669513975561f2d2ae" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:2.037ex; height:2.509ex;" alt="{\displaystyle k_{t}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.037ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/352386366dcb1dcc184d82669513975561f2d2ae" data-alt="{\displaystyle k_{t}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is given, and he only needs to choose current consumption <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle c_{t}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle c_{t}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/93578e37f3234419a34df79845836bc0ec5ef76c" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.833ex; height:2.009ex;" alt="{\displaystyle c_{t}}"/></noscript><span class="lazy-image-placeholder" style="width: 1.833ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/93578e37f3234419a34df79845836bc0ec5ef76c" data-alt="{\displaystyle c_{t}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> and saving <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k_{t+1}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>t</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k_{t+1}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/deb47bc888092c00440588520f39cd7674fc67f3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:4.138ex; height:2.509ex;" alt="{\displaystyle k_{t+1}}"/></noscript><span class="lazy-image-placeholder" style="width: 4.138ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/deb47bc888092c00440588520f39cd7674fc67f3" data-alt="{\displaystyle k_{t+1}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>To actually solve this problem, we work backwards. For simplicity, the current level of capital is denoted as <span class="texhtml mvar" style="font-style:italic;">k</span>. <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{T+1}(k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{T+1}(k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b9a196ac77d6b616a927f71c12b66d017e2c3004" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:7.866ex; height:2.843ex;" alt="{\displaystyle V_{T+1}(k)}"/></noscript><span class="lazy-image-placeholder" style="width: 7.866ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b9a196ac77d6b616a927f71c12b66d017e2c3004" data-alt="{\displaystyle V_{T+1}(k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is already known, so using the Bellman equation once we can calculate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{T}(k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{T}(k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/44b6a3f91c5038973c2804154a674e41d0879630" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:5.765ex; height:2.843ex;" alt="{\displaystyle V_{T}(k)}"/></noscript><span class="lazy-image-placeholder" style="width: 5.765ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/44b6a3f91c5038973c2804154a674e41d0879630" data-alt="{\displaystyle V_{T}(k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, and so on until we get to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{0}(k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>0</mn>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{0}(k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a003db4fee0c2a9a4ec194326d05685c7477efbb" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:5.43ex; height:2.843ex;" alt="{\displaystyle V_{0}(k)}"/></noscript><span class="lazy-image-placeholder" style="width: 5.43ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a003db4fee0c2a9a4ec194326d05685c7477efbb" data-alt="{\displaystyle V_{0}(k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, which is the <i>value</i> of the initial decision problem for the whole lifetime. In other words, once we know <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{T-j+1}(k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{T-j+1}(k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6db8f2132e654ab70410558a4a4a524f21acde17" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:9.822ex; height:3.009ex;" alt="{\displaystyle V_{T-j+1}(k)}"/></noscript><span class="lazy-image-placeholder" style="width: 9.822ex;height: 3.009ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6db8f2132e654ab70410558a4a4a524f21acde17" data-alt="{\displaystyle V_{T-j+1}(k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, we can calculate <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{T-j}(k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{T-j}(k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/513588d928426d584bf5710fee429551b10d6882" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:7.721ex; height:3.009ex;" alt="{\displaystyle V_{T-j}(k)}"/></noscript><span class="lazy-image-placeholder" style="width: 7.721ex;height: 3.009ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/513588d928426d584bf5710fee429551b10d6882" data-alt="{\displaystyle V_{T-j}(k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, which is the maximum of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \ln(c_{T-j})+bV_{T-j+1}(Ak^{a}-c_{T-j})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>ln</mi>
        <mo>⁡<!-- ⁡ --></mo>
        <mo stretchy="false">(</mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>+</mo>
        <mi>b</mi>
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
            <mo>+</mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>A</mi>
        <msup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>a</mi>
          </mrow>
        </msup>
        <mo>−<!-- − --></mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \ln(c_{T-j})+bV_{T-j+1}(Ak^{a}-c_{T-j})}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/2eb6fce0ec9aa1381de35a04fb87ede7bab1953f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:31.798ex; height:3.009ex;" alt="{\displaystyle \ln(c_{T-j})+bV_{T-j+1}(Ak^{a}-c_{T-j})}"/></noscript><span class="lazy-image-placeholder" style="width: 31.798ex;height: 3.009ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/2eb6fce0ec9aa1381de35a04fb87ede7bab1953f" data-alt="{\displaystyle \ln(c_{T-j})+bV_{T-j+1}(Ak^{a}-c_{T-j})}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, where <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle c_{T-j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle c_{T-j}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ce06086b5fb73811c5cdf149a757d26d17b8e05c" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:4.352ex; height:2.343ex;" alt="{\displaystyle c_{T-j}}"/></noscript><span class="lazy-image-placeholder" style="width: 4.352ex;height: 2.343ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ce06086b5fb73811c5cdf149a757d26d17b8e05c" data-alt="{\displaystyle c_{T-j}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is the choice variable and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle Ak^{a}-c_{T-j}\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>A</mi>
        <msup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>a</mi>
          </mrow>
        </msup>
        <mo>−<!-- − --></mo>
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
        <mo>≥<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle Ak^{a}-c_{T-j}\geq 0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f79d9899e1fae38097ce8bd58636ff6d2aa104bf" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:15.51ex; height:3.009ex;" alt="{\displaystyle Ak^{a}-c_{T-j}\geq 0}"/></noscript><span class="lazy-image-placeholder" style="width: 15.51ex;height: 3.009ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f79d9899e1fae38097ce8bd58636ff6d2aa104bf" data-alt="{\displaystyle Ak^{a}-c_{T-j}\geq 0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>Working backwards, it can be shown that the value function at time <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t=T-j}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>=</mo>
        <mi>T</mi>
        <mo>−<!-- − --></mo>
        <mi>j</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t=T-j}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1caddd302995dfccfcbb960068d9ff11e1da718d" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:9.373ex; height:2.509ex;" alt="{\displaystyle t=T-j}"/></noscript><span class="lazy-image-placeholder" style="width: 9.373ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1caddd302995dfccfcbb960068d9ff11e1da718d" data-alt="{\displaystyle t=T-j}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle V_{T-j}(k)\,=\,a\sum _{i=0}^{j}a^{i}b^{i}\ln k+v_{T-j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>V</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
        <mspace width="thinmathspace"></mspace>
        <mo>=</mo>
        <mspace width="thinmathspace"></mspace>
        <mi>a</mi>
        <munderover>
          <mo>∑<!-- ∑ --></mo>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>=</mo>
            <mn>0</mn>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </munderover>
        <msup>
          <mi>a</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
          </mrow>
        </msup>
        <msup>
          <mi>b</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
          </mrow>
        </msup>
        <mi>ln</mi>
        <mo>⁡<!-- ⁡ --></mo>
        <mi>k</mi>
        <mo>+</mo>
        <msub>
          <mi>v</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle V_{T-j}(k)\,=\,a\sum _{i=0}^{j}a^{i}b^{i}\ln k+v_{T-j}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5281df6ca448fd68a12e5b5926b7994fac524e47" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.005ex; width:32.017ex; height:7.343ex;" alt="{\displaystyle V_{T-j}(k)\,=\,a\sum _{i=0}^{j}a^{i}b^{i}\ln k+v_{T-j}}"/></noscript><span class="lazy-image-placeholder" style="width: 32.017ex;height: 7.343ex;vertical-align: -3.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5281df6ca448fd68a12e5b5926b7994fac524e47" data-alt="{\displaystyle V_{T-j}(k)\,=\,a\sum _{i=0}^{j}a^{i}b^{i}\ln k+v_{T-j}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>where each <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle v_{T-j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>v</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle v_{T-j}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/005245baed781ad4a253caaed4fb8dc23899e5d9" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; width:4.473ex; height:2.343ex;" alt="{\displaystyle v_{T-j}}"/></noscript><span class="lazy-image-placeholder" style="width: 4.473ex;height: 2.343ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/005245baed781ad4a253caaed4fb8dc23899e5d9" data-alt="{\displaystyle v_{T-j}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is a constant, and the optimal amount to consume at time <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t=T-j}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>=</mo>
        <mi>T</mi>
        <mo>−<!-- − --></mo>
        <mi>j</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t=T-j}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1caddd302995dfccfcbb960068d9ff11e1da718d" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:9.373ex; height:2.509ex;" alt="{\displaystyle t=T-j}"/></noscript><span class="lazy-image-placeholder" style="width: 9.373ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1caddd302995dfccfcbb960068d9ff11e1da718d" data-alt="{\displaystyle t=T-j}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle c_{T-j}(k)\,=\,{\frac {1}{\sum _{i=0}^{j}a^{i}b^{i}}}Ak^{a}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>c</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>T</mi>
            <mo>−<!-- − --></mo>
            <mi>j</mi>
          </mrow>
        </msub>
        <mo stretchy="false">(</mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
        <mspace width="thinmathspace"></mspace>
        <mo>=</mo>
        <mspace width="thinmathspace"></mspace>
        <mrow class="MJX-TeXAtom-ORD">
          <mfrac>
            <mn>1</mn>
            <mrow>
              <munderover>
                <mo>∑<!-- ∑ --></mo>
                <mrow class="MJX-TeXAtom-ORD">
                  <mi>i</mi>
                  <mo>=</mo>
                  <mn>0</mn>
                </mrow>
                <mrow class="MJX-TeXAtom-ORD">
                  <mi>j</mi>
                </mrow>
              </munderover>
              <msup>
                <mi>a</mi>
                <mrow class="MJX-TeXAtom-ORD">
                  <mi>i</mi>
                </mrow>
              </msup>
              <msup>
                <mi>b</mi>
                <mrow class="MJX-TeXAtom-ORD">
                  <mi>i</mi>
                </mrow>
              </msup>
            </mrow>
          </mfrac>
        </mrow>
        <mi>A</mi>
        <msup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>a</mi>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle c_{T-j}(k)\,=\,{\frac {1}{\sum _{i=0}^{j}a^{i}b^{i}}}Ak^{a}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c392e9197f93e4385350c862d6b9df90de376173" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.338ex; width:25.705ex; height:6.676ex;" alt="{\displaystyle c_{T-j}(k)\,=\,{\frac {1}{\sum _{i=0}^{j}a^{i}b^{i}}}Ak^{a}}"/></noscript><span class="lazy-image-placeholder" style="width: 25.705ex;height: 6.676ex;vertical-align: -3.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c392e9197f93e4385350c862d6b9df90de376173" data-alt="{\displaystyle c_{T-j}(k)\,=\,{\frac {1}{\sum _{i=0}^{j}a^{i}b^{i}}}Ak^{a}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>which can be simplified to
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\begin{aligned}c_{T}(k)&amp;=Ak^{a}\\c_{T-1}(k)&amp;={\frac {Ak^{a}}{1+ab}}\\c_{T-2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}}}\\&amp;\dots \\c_{2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}}}\\c_{1}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}}}\\c_{0}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}+a^{T}b^{T}}}\end{aligned}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mtable columnalign="right left right left right left right left right left right left" rowspacing="3pt" columnspacing="0em 2em 0em 2em 0em 2em 0em 2em 0em 2em 0em" displaystyle="true">
            <mtr>
              <mtd>
                <msub>
                  <mi>c</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mi>T</mi>
                  </mrow>
                </msub>
                <mo stretchy="false">(</mo>
                <mi>k</mi>
                <mo stretchy="false">)</mo>
              </mtd>
              <mtd>
                <mi></mi>
                <mo>=</mo>
                <mi>A</mi>
                <msup>
                  <mi>k</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mi>a</mi>
                  </mrow>
                </msup>
              </mtd>
            </mtr>
            <mtr>
              <mtd>
                <msub>
                  <mi>c</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mi>T</mi>
                    <mo>−<!-- − --></mo>
                    <mn>1</mn>
                  </mrow>
                </msub>
                <mo stretchy="false">(</mo>
                <mi>k</mi>
                <mo stretchy="false">)</mo>
              </mtd>
              <mtd>
                <mi></mi>
                <mo>=</mo>
                <mrow class="MJX-TeXAtom-ORD">
                  <mfrac>
                    <mrow>
                      <mi>A</mi>
                      <msup>
                        <mi>k</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>a</mi>
                        </mrow>
                      </msup>
                    </mrow>
                    <mrow>
                      <mn>1</mn>
                      <mo>+</mo>
                      <mi>a</mi>
                      <mi>b</mi>
                    </mrow>
                  </mfrac>
                </mrow>
              </mtd>
            </mtr>
            <mtr>
              <mtd>
                <msub>
                  <mi>c</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mi>T</mi>
                    <mo>−<!-- − --></mo>
                    <mn>2</mn>
                  </mrow>
                </msub>
                <mo stretchy="false">(</mo>
                <mi>k</mi>
                <mo stretchy="false">)</mo>
              </mtd>
              <mtd>
                <mi></mi>
                <mo>=</mo>
                <mrow class="MJX-TeXAtom-ORD">
                  <mfrac>
                    <mrow>
                      <mi>A</mi>
                      <msup>
                        <mi>k</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>a</mi>
                        </mrow>
                      </msup>
                    </mrow>
                    <mrow>
                      <mn>1</mn>
                      <mo>+</mo>
                      <mi>a</mi>
                      <mi>b</mi>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                    </mrow>
                  </mfrac>
                </mrow>
              </mtd>
            </mtr>
            <mtr>
              <mtd></mtd>
              <mtd>
                <mi></mi>
                <mo>…<!-- … --></mo>
              </mtd>
            </mtr>
            <mtr>
              <mtd>
                <msub>
                  <mi>c</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mn>2</mn>
                  </mrow>
                </msub>
                <mo stretchy="false">(</mo>
                <mi>k</mi>
                <mo stretchy="false">)</mo>
              </mtd>
              <mtd>
                <mi></mi>
                <mo>=</mo>
                <mrow class="MJX-TeXAtom-ORD">
                  <mfrac>
                    <mrow>
                      <mi>A</mi>
                      <msup>
                        <mi>k</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>a</mi>
                        </mrow>
                      </msup>
                    </mrow>
                    <mrow>
                      <mn>1</mn>
                      <mo>+</mo>
                      <mi>a</mi>
                      <mi>b</mi>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <mo>+</mo>
                      <mo>…<!-- … --></mo>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>2</mn>
                        </mrow>
                      </msup>
                    </mrow>
                  </mfrac>
                </mrow>
              </mtd>
            </mtr>
            <mtr>
              <mtd>
                <msub>
                  <mi>c</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mn>1</mn>
                  </mrow>
                </msub>
                <mo stretchy="false">(</mo>
                <mi>k</mi>
                <mo stretchy="false">)</mo>
              </mtd>
              <mtd>
                <mi></mi>
                <mo>=</mo>
                <mrow class="MJX-TeXAtom-ORD">
                  <mfrac>
                    <mrow>
                      <mi>A</mi>
                      <msup>
                        <mi>k</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>a</mi>
                        </mrow>
                      </msup>
                    </mrow>
                    <mrow>
                      <mn>1</mn>
                      <mo>+</mo>
                      <mi>a</mi>
                      <mi>b</mi>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <mo>+</mo>
                      <mo>…<!-- … --></mo>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>1</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>1</mn>
                        </mrow>
                      </msup>
                    </mrow>
                  </mfrac>
                </mrow>
              </mtd>
            </mtr>
            <mtr>
              <mtd>
                <msub>
                  <mi>c</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mn>0</mn>
                  </mrow>
                </msub>
                <mo stretchy="false">(</mo>
                <mi>k</mi>
                <mo stretchy="false">)</mo>
              </mtd>
              <mtd>
                <mi></mi>
                <mo>=</mo>
                <mrow class="MJX-TeXAtom-ORD">
                  <mfrac>
                    <mrow>
                      <mi>A</mi>
                      <msup>
                        <mi>k</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>a</mi>
                        </mrow>
                      </msup>
                    </mrow>
                    <mrow>
                      <mn>1</mn>
                      <mo>+</mo>
                      <mi>a</mi>
                      <mi>b</mi>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <mo>+</mo>
                      <mo>…<!-- … --></mo>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>2</mn>
                        </mrow>
                      </msup>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>1</mn>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                          <mo>−<!-- − --></mo>
                          <mn>1</mn>
                        </mrow>
                      </msup>
                      <mo>+</mo>
                      <msup>
                        <mi>a</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                        </mrow>
                      </msup>
                      <msup>
                        <mi>b</mi>
                        <mrow class="MJX-TeXAtom-ORD">
                          <mi>T</mi>
                        </mrow>
                      </msup>
                    </mrow>
                  </mfrac>
                </mrow>
              </mtd>
            </mtr>
          </mtable>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\begin{aligned}c_{T}(k)&amp;=Ak^{a}\\c_{T-1}(k)&amp;={\frac {Ak^{a}}{1+ab}}\\c_{T-2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}}}\\&amp;\dots \\c_{2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}}}\\c_{1}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}}}\\c_{0}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}+a^{T}b^{T}}}\end{aligned}}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/605bed9d2072cc5b33e51d486f946a77470f50b0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -17.171ex; width:63.114ex; height:35.509ex;" alt="{\displaystyle {\begin{aligned}c_{T}(k)&amp;=Ak^{a}\\c_{T-1}(k)&amp;={\frac {Ak^{a}}{1+ab}}\\c_{T-2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}}}\\&amp;\dots \\c_{2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}}}\\c_{1}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}}}\\c_{0}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}+a^{T}b^{T}}}\end{aligned}}}"/></noscript><span class="lazy-image-placeholder" style="width: 63.114ex;height: 35.509ex;vertical-align: -17.171ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/605bed9d2072cc5b33e51d486f946a77470f50b0" data-alt="{\displaystyle {\begin{aligned}c_{T}(k)&amp;=Ak^{a}\\c_{T-1}(k)&amp;={\frac {Ak^{a}}{1+ab}}\\c_{T-2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}}}\\&amp;\dots \\c_{2}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}}}\\c_{1}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}}}\\c_{0}(k)&amp;={\frac {Ak^{a}}{1+ab+a^{2}b^{2}+\ldots +a^{T-2}b^{T-2}+a^{T-1}b^{T-1}+a^{T}b^{T}}}\end{aligned}}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>We see that it is optimal to consume a larger fraction of current wealth as one gets older, finally consuming all remaining wealth in period <span class="texhtml mvar" style="font-style:italic;">T</span>, the last period of life.
</p>
<div class="mw-heading mw-heading3"><h3 id="Computer_science">Computer science</h3></div>
<p>There are two key attributes that a problem must have in order for dynamic programming to be applicable: <a href="/wiki/Optimal_substructure" title="Optimal substructure">optimal substructure</a> and <a href="/wiki/Overlapping_subproblem" class="mw-redirect" title="Overlapping subproblem">overlapping sub-problems</a>. If a problem can be solved by combining optimal solutions to <i>non-overlapping</i> sub-problems, the strategy is called "<a href="/wiki/Divide_and_conquer_algorithm" class="mw-redirect" title="Divide and conquer algorithm">divide and conquer</a>" instead.<sup id="cite_ref-:0_1-1" class="reference"><a href="#cite_note-:0-1"><span class="cite-bracket">[</span>1<span class="cite-bracket">]</span></a></sup>  This is why <a href="/wiki/Mergesort" class="mw-redirect" title="Mergesort">merge sort</a> and <a href="/wiki/Quicksort" title="Quicksort">quick sort</a> are not classified as dynamic programming problems.
</p><p><i>Optimal substructure</i> means that the solution to a given optimization problem can be obtained by the combination of optimal solutions to its sub-problems. Such optimal substructures are usually described by means of <a href="/wiki/Recursion" title="Recursion">recursion</a>. For example, given a graph <i>G=(V,E)</i>, the shortest path <i>p</i> from a vertex <i>u</i> to a vertex <i>v</i> exhibits optimal substructure: take any intermediate vertex <i>w</i> on this shortest path <i>p</i>. If <i>p</i> is truly the shortest path, then it can be split into sub-paths <i>p<sub>1</sub></i> from <i>u</i> to <i>w</i> and <i>p<sub>2</sub></i> from <i>w</i> to <i>v</i> such that these, in turn, are indeed the shortest paths between the corresponding vertices (by the simple cut-and-paste argument described in <i><a href="/wiki/Introduction_to_Algorithms" title="Introduction to Algorithms">Introduction to Algorithms</a></i>). Hence, one can easily formulate the solution for finding shortest paths in a recursive manner, which is what the <a href="/wiki/Bellman%E2%80%93Ford_algorithm" title="Bellman–Ford algorithm">Bellman–Ford algorithm</a> or the <a href="/wiki/Floyd%E2%80%93Warshall_algorithm" title="Floyd–Warshall algorithm">Floyd–Warshall algorithm</a> does.
</p><p><i>Overlapping</i> sub-problems means that the space of sub-problems must be small, that is, any recursive algorithm solving the problem should solve the same sub-problems over and over, rather than generating new sub-problems. For example, consider the recursive formulation for generating the Fibonacci sequence: <i>F</i><sub><i>i</i></sub> = <i>F</i><sub><i>i</i>−1</sub> + <i>F</i><sub><i>i</i>−2</sub>, with base case <i>F</i><sub>1</sub> = <i>F</i><sub>2</sub> = 1. Then <i>F</i><sub>43</sub> = <i>F</i><sub>42</sub> + <i>F</i><sub>41</sub>, and <i>F</i><sub>42</sub> = <i>F</i><sub>41</sub> + <i>F</i><sub>40</sub>. Now <i>F</i><sub>41</sub> is being solved in the recursive sub-trees of both <i>F</i><sub>43</sub> as well as <i>F</i><sub>42</sub>. Even though the total number of sub-problems is actually small (only 43 of them), we end up solving the same problems over and over if we adopt a naive recursive solution such as this. Dynamic programming takes account of this fact and solves each sub-problem only once.
</p>
<figure typeof="mw:File/Thumb"><a href="/wiki/File:Fibonacci_dynamic_programming.svg" class="mw-file-description"><noscript><img src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Fibonacci_dynamic_programming.svg/108px-Fibonacci_dynamic_programming.svg.png" decoding="async" width="108" height="149" class="mw-file-element" data-file-width="108" data-file-height="149"/></noscript><span class="lazy-image-placeholder" style="width: 108px;height: 149px;" data-mw-src="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Fibonacci_dynamic_programming.svg/108px-Fibonacci_dynamic_programming.svg.png" data-width="108" data-height="149" data-mw-srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/06/Fibonacci_dynamic_programming.svg/162px-Fibonacci_dynamic_programming.svg.png 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/06/Fibonacci_dynamic_programming.svg/216px-Fibonacci_dynamic_programming.svg.png 2x" data-class="mw-file-element"> </span></a><figcaption><b>Figure 2.</b> The subproblem graph for the Fibonacci sequence. The fact that it is not a <a href="/wiki/Tree_structure" title="Tree structure">tree</a> indicates overlapping subproblems.</figcaption></figure>
<p>This can be achieved in either of two ways:<sup id="cite_ref-4" class="reference"><a href="#cite_note-4"><span class="cite-bracket">[</span>4<span class="cite-bracket">]</span></a></sup>
</p>
<ul><li><i><a href="/wiki/Top-down_and_bottom-up_design" class="mw-redirect" title="Top-down and bottom-up design">Top-down approach</a></i>: This is the direct fall-out of the recursive formulation of any problem. If the solution to any problem can be formulated recursively using the solution to its sub-problems, and if its sub-problems are overlapping, then one can easily <a href="/wiki/Memoize" class="mw-redirect" title="Memoize">memoize</a> or store the solutions to the sub-problems in a table (often an <a href="/wiki/Array_(data_structure)" title="Array (data structure)">array</a> or <a href="/wiki/Hash_table" title="Hash table">hashtable</a> in practice). Whenever we attempt to solve a new sub-problem, we first check the table to see if it is already solved. If a solution has been recorded, we can use it directly, otherwise we solve the sub-problem and add its solution to the table.</li>
<li><i><a href="/wiki/Top-down_and_bottom-up_design" class="mw-redirect" title="Top-down and bottom-up design">Bottom-up approach</a></i>: Once we formulate the solution to a problem recursively as in terms of its sub-problems, we can try reformulating the problem in a bottom-up fashion: try solving the sub-problems first and use their solutions to build-on and arrive at solutions to bigger sub-problems. This is also usually done in a tabular form by iteratively generating solutions to bigger and bigger sub-problems by using the solutions to small sub-problems. For example, if we already know the values of <i>F</i><sub>41</sub> and <i>F</i><sub>40</sub>, we can directly calculate the value of <i>F</i><sub>42</sub>.</li></ul>
<p>Some <a href="/wiki/Programming_language" title="Programming language">programming languages</a> can automatically <a href="/wiki/Memoization" title="Memoization">memoize</a> the result of a function call with a particular set of arguments, in order to speed up <a href="/wiki/Call-by-name" class="mw-redirect" title="Call-by-name">call-by-name</a> evaluation (this mechanism is referred to as <i><a href="/wiki/Call-by-need" class="mw-redirect" title="Call-by-need">call-by-need</a></i>). Some languages make it possible portably (e.g. <a href="/wiki/Scheme_(programming_language)" title="Scheme (programming language)">Scheme</a>, <a href="/wiki/Common_Lisp" title="Common Lisp">Common Lisp</a>, <a href="/wiki/Perl" title="Perl">Perl</a> or <a href="/wiki/D_(programming_language)" title="D (programming language)">D</a>). Some languages have automatic <a href="/wiki/Memoization" title="Memoization">memoization</a>  built in, such as tabled <a href="/wiki/Prolog" title="Prolog">Prolog</a> and <a href="/wiki/J_(programming_language)" title="J (programming language)">J</a>, which supports memoization with the <i>M.</i> adverb.<sup id="cite_ref-5" class="reference"><a href="#cite_note-5"><span class="cite-bracket">[</span>5<span class="cite-bracket">]</span></a></sup> In any case, this is only possible for a <a href="/wiki/Referentially_transparent" class="mw-redirect" title="Referentially transparent">referentially transparent</a> function. Memoization is also encountered as an easily accessible design pattern within term-rewrite based languages such as <a href="/wiki/Wolfram_Language" title="Wolfram Language">Wolfram Language</a>.
</p>
<div class="mw-heading mw-heading3"><h3 id="Bioinformatics">Bioinformatics</h3></div>
<p>Dynamic programming is widely used in bioinformatics for tasks such as <a href="/wiki/Sequence_alignment" title="Sequence alignment">sequence alignment</a>, <a href="/wiki/Protein_folding" title="Protein folding">protein folding</a>, RNA structure prediction and protein-DNA binding. The first dynamic programming algorithms for protein-DNA binding were developed in the 1970s independently by <a href="/wiki/Charles_DeLisi" title="Charles DeLisi">Charles DeLisi</a> in the US<sup id="cite_ref-6" class="reference"><a href="#cite_note-6"><span class="cite-bracket">[</span>6<span class="cite-bracket">]</span></a></sup> and by Georgii Gurskii and Alexander Zasedatelev in the <a href="/wiki/Soviet_Union" title="Soviet Union">Soviet Union</a>.<sup id="cite_ref-7" class="reference"><a href="#cite_note-7"><span class="cite-bracket">[</span>7<span class="cite-bracket">]</span></a></sup> Recently these algorithms have become very popular in bioinformatics and <a href="/wiki/Computational_biology" title="Computational biology">computational biology</a>, particularly in the studies of <a href="/wiki/Nucleosome" title="Nucleosome">nucleosome</a> positioning and <a href="/wiki/Transcription_factor" title="Transcription factor">transcription factor</a> binding.
</p>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(2)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="Examples:_computer_algorithms">Examples: computer algorithms</h2></div><section class="mf-section-2 collapsible-block" id="mf-section-2">
<div class="mw-heading mw-heading3"><h3 id="Dijkstra's_algorithm_for_the_shortest_path_problem"><span id="Dijkstra.27s_algorithm_for_the_shortest_path_problem"></span>Dijkstra's algorithm for the shortest path problem</h3></div>
<p>From a dynamic programming point of view, <a href="/wiki/Dijkstra%27s_algorithm" title="Dijkstra's algorithm">Dijkstra's algorithm</a> for the <a href="/wiki/Shortest_path_problem" title="Shortest path problem">shortest path problem</a>  is a successive approximation scheme that solves the dynamic programming functional equation for the shortest path problem by the <b>Reaching</b> method.<sup id="cite_ref-sniedovich_06_8-0" class="reference"><a href="#cite_note-sniedovich_06-8"><span class="cite-bracket">[</span>8<span class="cite-bracket">]</span></a></sup><sup id="cite_ref-denardo_03_9-0" class="reference"><a href="#cite_note-denardo_03-9"><span class="cite-bracket">[</span>9<span class="cite-bracket">]</span></a></sup><sup id="cite_ref-sniedovich_10_10-0" class="reference"><a href="#cite_note-sniedovich_10-10"><span class="cite-bracket">[</span>10<span class="cite-bracket">]</span></a></sup>
</p><p>In fact, Dijkstra's explanation of the logic behind the algorithm,<sup id="cite_ref-11" class="reference"><a href="#cite_note-11"><span class="cite-bracket">[</span>11<span class="cite-bracket">]</span></a></sup> namely
</p>
<style data-mw-deduplicate="TemplateStyles:r1244412712">.mw-parser-output .templatequote{overflow:hidden;margin:1em 0;padding:0 32px}.mw-parser-output .templatequotecite{line-height:1.5em;text-align:left;margin-top:0}@media(min-width:500px){.mw-parser-output .templatequotecite{padding-left:1.6em}}</style><blockquote class="templatequote">
<p><b>Problem 2.</b> Find the path of minimum total length between two given nodes <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle P}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>P</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle P}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4dc73bf40314945ff376bd363916a738548d40a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.745ex; height:2.176ex;" alt="{\displaystyle P}"/></noscript><span class="lazy-image-placeholder" style="width: 1.745ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4dc73bf40314945ff376bd363916a738548d40a" data-alt="{\displaystyle P}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle Q}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>Q</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle Q}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8752c7023b4b3286800fe3238271bbca681219ed" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.838ex; height:2.509ex;" alt="{\displaystyle Q}"/></noscript><span class="lazy-image-placeholder" style="width: 1.838ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8752c7023b4b3286800fe3238271bbca681219ed" data-alt="{\displaystyle Q}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>We use the fact that, if <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle R}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>R</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle R}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b0bfb3769bf24d80e15374dc37b0441e2616e33" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.764ex; height:2.176ex;" alt="{\displaystyle R}"/></noscript><span class="lazy-image-placeholder" style="width: 1.764ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b0bfb3769bf24d80e15374dc37b0441e2616e33" data-alt="{\displaystyle R}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is a node on the minimal path from <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle P}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>P</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle P}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4dc73bf40314945ff376bd363916a738548d40a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.745ex; height:2.176ex;" alt="{\displaystyle P}"/></noscript><span class="lazy-image-placeholder" style="width: 1.745ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4dc73bf40314945ff376bd363916a738548d40a" data-alt="{\displaystyle P}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle Q}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>Q</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle Q}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8752c7023b4b3286800fe3238271bbca681219ed" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:1.838ex; height:2.509ex;" alt="{\displaystyle Q}"/></noscript><span class="lazy-image-placeholder" style="width: 1.838ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8752c7023b4b3286800fe3238271bbca681219ed" data-alt="{\displaystyle Q}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, knowledge of the latter implies the knowledge of the minimal path from <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle P}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>P</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle P}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4dc73bf40314945ff376bd363916a738548d40a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.745ex; height:2.176ex;" alt="{\displaystyle P}"/></noscript><span class="lazy-image-placeholder" style="width: 1.745ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b4dc73bf40314945ff376bd363916a738548d40a" data-alt="{\displaystyle P}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle R}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>R</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle R}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b0bfb3769bf24d80e15374dc37b0441e2616e33" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.764ex; height:2.176ex;" alt="{\displaystyle R}"/></noscript><span class="lazy-image-placeholder" style="width: 1.764ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/4b0bfb3769bf24d80e15374dc37b0441e2616e33" data-alt="{\displaystyle R}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p>
</blockquote>
<p>is a paraphrasing of <a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Bellman's</a> famous <a href="/wiki/Principle_of_Optimality" class="mw-redirect" title="Principle of Optimality">Principle of Optimality</a> in the context of the <a href="/wiki/Shortest_path_problem" title="Shortest path problem">shortest path problem</a>.
</p>
<div class="mw-heading mw-heading3"><h3 id="Fibonacci_sequence">Fibonacci sequence</h3></div>
<p>Using dynamic programming in the calculation of the <i>n</i>th member of the <a href="/wiki/Fibonacci_sequence" title="Fibonacci sequence">Fibonacci sequence</a> improves its performance greatly. Here is a naïve implementation, based directly on the mathematical definition:
</p>
<pre><b>function</b> fib(n)
    <b>if</b> n &lt;= 1 <b>return</b> n
    <b>return</b> fib(n − 1) + fib(n − 2)
</pre>
<p>Notice that if we call, say, <code>fib(5)</code>, we produce a call tree that calls the function on the same value many different times:
</p>
<ol><li><code>fib(5)</code></li>
<li><code>fib(4) + fib(3)</code></li>
<li><code>(fib(3) + fib(2)) + (fib(2) + fib(1))</code></li>
<li><code>((fib(2) + fib(1)) + (fib(1) + fib(0))) + ((fib(1) + fib(0)) + fib(1))</code></li>
<li><code>(((fib(1) + fib(0)) + fib(1)) + (fib(1) + fib(0))) + ((fib(1) + fib(0)) + fib(1))</code></li></ol>
<p>In particular, <code>fib(2)</code> was calculated three times from scratch. In larger examples, many more values of <code>fib</code>, or <i>subproblems</i>, are recalculated, leading to an exponential time algorithm.
</p><p>Now, suppose we have a simple <a href="/wiki/Associative_array" title="Associative array">map</a> object, <i>m</i>, which maps each value of <code>fib</code> that has already been calculated to its result, and we modify our function to use it and update it. The resulting function requires only <a href="/wiki/Big-O_notation" class="mw-redirect" title="Big-O notation">O</a>(<i>n</i>) time instead of exponential time (but requires <a href="/wiki/Big-O_notation" class="mw-redirect" title="Big-O notation">O</a>(<i>n</i>) space):
</p>
<pre><b>var</b> m := <i><b>map</b></i>(0 → 0, 1 → 1)
<b>function</b> fib(n)
    <b>if <i>key</i></b> n <b>is not in <i>map</i></b> m 
        m[n] := fib(n − 1) + fib(n − 2)
    <b>return</b> m[n]
</pre>
<p>This technique of saving values that have already been calculated is called <i><a href="/wiki/Memoization" title="Memoization">memoization</a></i>;  this is the top-down approach, since we first break the problem into subproblems and then calculate and store values.
</p><p>In the <b>bottom-up</b> approach, we calculate the smaller values of <code>fib</code> first, then build larger values from them. This method also uses O(<i>n</i>) time since it contains a loop that repeats n − 1 times, but it only takes constant (O(1)) space, in contrast to the top-down approach which requires O(<i>n</i>) space to store the map.
</p>
<pre><b>function</b> fib(n)
    <b>if</b> n = 0
        <b>return</b> 0
    <b>else</b>
        <b>var</b> previousFib := 0, currentFib := 1
        <b>repeat</b> n − 1 <b>times</b> <i>// loop is skipped if n = 1</i>
            <b>var</b> newFib := previousFib + currentFib
            previousFib := currentFib
            currentFib  := newFib
        <b>return</b> currentFib
</pre>
<p>In both examples, we only calculate <code>fib(2)</code> one time, and then use it to calculate both <code>fib(4)</code> and <code>fib(3)</code>, instead of computing it every time either of them is evaluated.
</p>
<div class="mw-heading mw-heading3"><h3 id="A_type_of_balanced_0–1_matrix"><span id="A_type_of_balanced_0.E2.80.931_matrix"></span>A type of balanced 0–1 matrix</h3></div>
<style data-mw-deduplicate="TemplateStyles:r1251242444">.mw-parser-output .ambox{border:1px solid #a2a9b1;border-left:10px solid #36c;background-color:#fbfbfb;box-sizing:border-box}.mw-parser-output .ambox+link+.ambox,.mw-parser-output .ambox+link+style+.ambox,.mw-parser-output .ambox+link+link+.ambox,.mw-parser-output .ambox+.mw-empty-elt+link+.ambox,.mw-parser-output .ambox+.mw-empty-elt+link+style+.ambox,.mw-parser-output .ambox+.mw-empty-elt+link+link+.ambox{margin-top:-1px}html body.mediawiki .mw-parser-output .ambox.mbox-small-left{margin:4px 1em 4px 0;overflow:hidden;width:238px;border-collapse:collapse;font-size:88%;line-height:1.25em}.mw-parser-output .ambox-speedy{border-left:10px solid #b32424;background-color:#fee7e6}.mw-parser-output .ambox-delete{border-left:10px solid #b32424}.mw-parser-output .ambox-content{border-left:10px solid #f28500}.mw-parser-output .ambox-style{border-left:10px solid #fc3}.mw-parser-output .ambox-move{border-left:10px solid #9932cc}.mw-parser-output .ambox-protection{border-left:10px solid #a2a9b1}.mw-parser-output .ambox .mbox-text{border:none;padding:0.25em 0.5em;width:100%}.mw-parser-output .ambox .mbox-image{border:none;padding:2px 0 2px 0.5em;text-align:center}.mw-parser-output .ambox .mbox-imageright{border:none;padding:2px 0.5em 2px 0;text-align:center}.mw-parser-output .ambox .mbox-empty-cell{border:none;padding:0;width:1px}.mw-parser-output .ambox .mbox-image-div{width:52px}@media(min-width:720px){.mw-parser-output .ambox{margin:0 10%}}@media print{body.ns-0 .mw-parser-output .ambox{display:none!important}}</style><table class="box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced" role="presentation"><tbody><tr><td class="mbox-text"><div class="mbox-text-span">This section <b>does not <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">cite</a> any <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">sources</a></b>.<span class="hide-when-compact"> Please help <a href="/wiki/Special:EditPage/Dynamic_programming" title="Special:EditPage/Dynamic programming">improve this section</a> by <a href="/wiki/Help:Referencing_for_beginners" title="Help:Referencing for beginners">adding citations to reliable sources</a>. Unsourced material may be challenged and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>.</span>  <span class="date-container"><i>(<span class="date">May 2013</span>)</i></span><span class="hide-when-compact"><i> (<small><a href="/wiki/Help:Maintenance_template_removal" title="Help:Maintenance template removal">Learn how and when to remove this message</a></small>)</i></span></div></td></tr></tbody></table>
<p>Consider the problem of assigning values, either zero or one, to the positions of an <span class="texhtml"><var>n</var> × <var>n</var></span> matrix, with <span class="texhtml"><var>n</var></span> even, so that each row and each column contains exactly <span class="texhtml"><var>n</var> / 2</span> zeros and <span class="texhtml"><var>n</var> / 2</span> ones. We ask how many different assignments there are for a given <span class="texhtml mvar" style="font-style:italic;">n</span>. For example, when <span class="texhtml"><var>n</var> = 4</span>, five possible solutions are
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext> and </mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext> and </mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext> and </mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mtext> and </mtext>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>[</mo>
            <mtable rowspacing="4pt" columnspacing="1em">
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>0</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
                <mtd>
                  <mn>1</mn>
                </mtd>
              </mtr>
            </mtable>
            <mo>]</mo>
          </mrow>
        </mrow>
        <mo>.</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b94984f348b2c2fd826c47dd123ea607a7d8f13b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -5.671ex; width:97.631ex; height:12.509ex;" alt="{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}"/></noscript><span class="lazy-image-placeholder" style="width: 97.631ex;height: 12.509ex;vertical-align: -5.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/b94984f348b2c2fd826c47dd123ea607a7d8f13b" data-alt="{\displaystyle {\begin{bmatrix}0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\\0&amp;1&amp;0&amp;1\\1&amp;0&amp;1&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;0&amp;0&amp;1\\0&amp;1&amp;1&amp;0\\0&amp;1&amp;1&amp;0\\1&amp;0&amp;0&amp;1\end{bmatrix}}{\text{ and }}{\begin{bmatrix}1&amp;1&amp;0&amp;0\\1&amp;1&amp;0&amp;0\\0&amp;0&amp;1&amp;1\\0&amp;0&amp;1&amp;1\end{bmatrix}}.}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>There are at least three possible approaches: <a href="/wiki/Brute-force_search" title="Brute-force search">brute force</a>, <a href="/wiki/Backtracking" title="Backtracking">backtracking</a>, and dynamic programming.
</p><p>Brute force consists of checking all assignments of zeros and ones and counting those that have balanced rows and columns (<span class="texhtml"><var>n</var> / 2</span> zeros and <span class="texhtml"><var>n</var> / 2</span> ones). As there are <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle 2^{n^{2}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mn>2</mn>
          <mrow class="MJX-TeXAtom-ORD">
            <msup>
              <mi>n</mi>
              <mrow class="MJX-TeXAtom-ORD">
                <mn>2</mn>
              </mrow>
            </msup>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 2^{n^{2}}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e736acf2e0b9a29d97b91a1413af326c7175f117" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:3.212ex; height:3.009ex;" alt="{\displaystyle 2^{n^{2}}}"/></noscript><span class="lazy-image-placeholder" style="width: 3.212ex;height: 3.009ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e736acf2e0b9a29d97b91a1413af326c7175f117" data-alt="{\displaystyle 2^{n^{2}}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> possible assignments and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\tbinom {n}{n/2}}^{n}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msup>
          <mrow class="MJX-TeXAtom-ORD">
            <mstyle displaystyle="false" scriptlevel="0">
              <mrow>
                <mrow class="MJX-TeXAtom-OPEN">
                  <mo maxsize="1.2em" minsize="1.2em">(</mo>
                </mrow>
                <mfrac linethickness="0">
                  <mi>n</mi>
                  <mrow>
                    <mi>n</mi>
                    <mrow class="MJX-TeXAtom-ORD">
                      <mo>/</mo>
                    </mrow>
                    <mn>2</mn>
                  </mrow>
                </mfrac>
                <mrow class="MJX-TeXAtom-CLOSE">
                  <mo maxsize="1.2em" minsize="1.2em">)</mo>
                </mrow>
              </mrow>
            </mstyle>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msup>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\tbinom {n}{n/2}}^{n}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f5f6229cccb7cb1ee2591bf551375fbc4d1b8eda" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.505ex; width:5.978ex; height:3.843ex;" alt="{\displaystyle {\tbinom {n}{n/2}}^{n}}"/></noscript><span class="lazy-image-placeholder" style="width: 5.978ex;height: 3.843ex;vertical-align: -1.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f5f6229cccb7cb1ee2591bf551375fbc4d1b8eda" data-alt="{\displaystyle {\tbinom {n}{n/2}}^{n}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> sensible assignments, this strategy is not practical except maybe up to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n=6}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mo>=</mo>
        <mn>6</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n=6}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f0365f0b9f2721ed3ebb488a96d7348d978acf8f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:5.656ex; height:2.176ex;" alt="{\displaystyle n=6}"/></noscript><span class="lazy-image-placeholder" style="width: 5.656ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/f0365f0b9f2721ed3ebb488a96d7348d978acf8f" data-alt="{\displaystyle n=6}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>Backtracking for this problem consists of choosing some order of the matrix elements and recursively placing ones or zeros, while checking that in every row and column the number of elements that have not been assigned plus the number of ones or zeros are both at least <span class="texhtml"><var>n</var> / 2</span>. While more sophisticated than brute force, this approach will visit every solution once, making it impractical for <span class="texhtml"><var>n</var></span> larger than six, since the number of solutions is already <span class="nowrap"><span data-sort-value="7011116963796250000♠"></span>116<span style="margin-left:.25em;">963</span><span style="margin-left:.25em;">796</span><span style="margin-left:.25em;">250</span></span> for <span class="texhtml"><var>n</var></span> = 8, as we shall see.
</p><p>Dynamic programming makes it possible to count the number of solutions without visiting them all. Imagine backtracking values for the first row – what information would we require about the remaining rows, in order to be able to accurately count the solutions obtained for each first row value? We consider <span class="texhtml"><var>k</var> × <var>n</var></span> boards, where <span class="texhtml">1 ≤ <var>k</var> ≤ <var>n</var></span>, whose <span class="texhtml mvar" style="font-style:italic;">k</span> rows contain <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n/2}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n/2}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/95c3931a3fa03cc98cfacd2c49a7ca35b96eaa9b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:3.72ex; height:2.843ex;" alt="{\displaystyle n/2}"/></noscript><span class="lazy-image-placeholder" style="width: 3.72ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/95c3931a3fa03cc98cfacd2c49a7ca35b96eaa9b" data-alt="{\displaystyle n/2}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> zeros and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n/2}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n/2}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/95c3931a3fa03cc98cfacd2c49a7ca35b96eaa9b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:3.72ex; height:2.843ex;" alt="{\displaystyle n/2}"/></noscript><span class="lazy-image-placeholder" style="width: 3.72ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/95c3931a3fa03cc98cfacd2c49a7ca35b96eaa9b" data-alt="{\displaystyle n/2}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> ones. The function <i>f</i> to which <a href="/wiki/Memoization" title="Memoization">memoization</a> is applied maps vectors of <i>n</i> pairs of integers to the number of admissible boards (solutions). There is one pair for each column, and its two components indicate respectively the number of zeros and ones that have yet to be placed in that column. We seek the value of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mo>…<!-- … --></mo>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <mo>/</mo>
        </mrow>
        <mn>2</mn>
        <mo stretchy="false">)</mo>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/472f2ef0a06a78167a040a874abfc17904f47aa0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:39.114ex; height:2.843ex;" alt="{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}"/></noscript><span class="lazy-image-placeholder" style="width: 39.114ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/472f2ef0a06a78167a040a874abfc17904f47aa0" data-alt="{\displaystyle f((n/2,n/2),(n/2,n/2),\ldots (n/2,n/2))}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> (<span class="texhtml mvar" style="font-style:italic;">n</span> arguments or one vector of <span class="texhtml mvar" style="font-style:italic;">n</span> elements). The process of subproblem creation involves iterating over every one of  <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\tbinom {n}{n/2}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mstyle displaystyle="false" scriptlevel="0">
            <mrow>
              <mrow class="MJX-TeXAtom-OPEN">
                <mo maxsize="1.2em" minsize="1.2em">(</mo>
              </mrow>
              <mfrac linethickness="0">
                <mi>n</mi>
                <mrow>
                  <mi>n</mi>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mo>/</mo>
                  </mrow>
                  <mn>2</mn>
                </mrow>
              </mfrac>
              <mrow class="MJX-TeXAtom-CLOSE">
                <mo maxsize="1.2em" minsize="1.2em">)</mo>
              </mrow>
            </mrow>
          </mstyle>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\tbinom {n}{n/2}}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a06cfa2b8e18128d5642221d7347ee97cb3ba0bd" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.505ex; width:4.76ex; height:3.676ex;" alt="{\displaystyle {\tbinom {n}{n/2}}}"/></noscript><span class="lazy-image-placeholder" style="width: 4.76ex;height: 3.676ex;vertical-align: -1.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a06cfa2b8e18128d5642221d7347ee97cb3ba0bd" data-alt="{\displaystyle {\tbinom {n}{n/2}}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> possible assignments for the top row of the board, and going through every column, subtracting one from the appropriate element of the pair for that column, depending on whether the assignment for the top row contained a zero or a one at that position. If any one of the results is negative, then the assignment is invalid and does not contribute to the set of solutions (recursion stops). Otherwise, we have an assignment for the top row of the <span class="texhtml"><var>k</var> × <var>n</var></span> board and recursively compute the number of solutions to the remaining <span class="texhtml">(<var>k</var> − 1) × <var>n</var></span> board, adding the numbers of solutions for every admissible assignment of the top row and returning the sum, which is being memoized. The base case is the trivial subproblem, which occurs for a <span class="texhtml">1 × <var>n</var></span> board. The number of solutions for this board is either zero or one, depending on whether the vector is a permutation of <span class="texhtml"><var>n</var> / 2</span> <span class="texhtml">(0, 1)</span> and <span class="texhtml"><var>n</var> / 2</span> <span class="texhtml">(1, 0)</span> pairs or not.
</p><p>For example, in the first two boards shown above the sequences of vectors would be
</p>
<pre>((2, 2) (2, 2) (2, 2) (2, 2))       ((2, 2) (2, 2) (2, 2) (2, 2))     k = 4
  0      1      0      1              0      0      1      1

((1, 2) (2, 1) (1, 2) (2, 1))       ((1, 2) (1, 2) (2, 1) (2, 1))     k = 3
  1      0      1      0              0      0      1      1

((1, 1) (1, 1) (1, 1) (1, 1))       ((0, 2) (0, 2) (2, 0) (2, 0))     k = 2
  0      1      0      1              1      1      0      0

((0, 1) (1, 0) (0, 1) (1, 0))       ((0, 1) (0, 1) (1, 0) (1, 0))     k = 1
  1      0      1      0              1      1      0      0

((0, 0) (0, 0) (0, 0) (0, 0))       ((0, 0) (0, 0), (0, 0) (0, 0))
</pre>
<p>The number of solutions (sequence <span class="nowrap external"><a href="//oeis.org/A058527" class="extiw" title="oeis:A058527">A058527</a></span> in the <a href="/wiki/On-Line_Encyclopedia_of_Integer_Sequences" title="On-Line Encyclopedia of Integer Sequences">OEIS</a>) is
</p>
<dl><dd><span class="nowrap"> 1, 2, 90, <span class="nowrap"><span data-sort-value="7005297200000000000♠"></span>297<span style="margin-left:.25em;">200</span></span>, <span class="nowrap"><span data-sort-value="7011116963796250000♠"></span>116<span style="margin-left:.25em;">963</span><span style="margin-left:.25em;">796</span><span style="margin-left:.25em;">250</span></span>, <span class="nowrap"><span data-sort-value="7018673621828743046♠"></span>6<span style="margin-left:.25em;">736</span><span style="margin-left:.25em;">218</span><span style="margin-left:.25em;">287</span><span style="margin-left:.25em;">430</span><span style="margin-left:.25em;">460</span><span style="margin-left:.25em;">752</span></span>, ...</span></dd></dl>
<p>Links to the MAPLE implementation of the dynamic programming approach may be found among the <a href="#External_links">external links</a>.
</p>
<div class="mw-heading mw-heading3"><h3 id="Checkerboard">Checkerboard</h3></div>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1251242444"/><table class="box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced" role="presentation"><tbody><tr><td class="mbox-text"><div class="mbox-text-span">This section <b>does not <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">cite</a> any <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">sources</a></b>.<span class="hide-when-compact"> Please help <a href="/wiki/Special:EditPage/Dynamic_programming" title="Special:EditPage/Dynamic programming">improve this section</a> by <a href="/wiki/Help:Referencing_for_beginners" title="Help:Referencing for beginners">adding citations to reliable sources</a>. Unsourced material may be challenged and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>.</span>  <span class="date-container"><i>(<span class="date">May 2013</span>)</i></span><span class="hide-when-compact"><i> (<small><a href="/wiki/Help:Maintenance_template_removal" title="Help:Maintenance template removal">Learn how and when to remove this message</a></small>)</i></span></div></td></tr></tbody></table>
<p>Consider a <a href="/wiki/Checkerboard" title="Checkerboard">checkerboard</a> with <i>n</i> × <i>n</i> squares and a cost function <code>c(i, j)</code> which returns a cost associated with square <code>(i,j)</code> (<code><i>i</i></code> being the row, <code><i>j</i></code> being the column). For instance (on a 5 × 5 checkerboard),
</p>
<table class="wikitable" style="text-align:center">

<tbody><tr>
<th>5
</th>
<td>6</td>
<td>7</td>
<td>4</td>
<td>7</td>
<td>8
</td></tr>
<tr>
<th>4
</th>
<td>7</td>
<td>6</td>
<td>1</td>
<td>1</td>
<td>4
</td></tr>
<tr>
<th>3
</th>
<td>3</td>
<td>5</td>
<td>7</td>
<td>8</td>
<td>2
</td></tr>
<tr>
<th>2
</th>
<td>–</td>
<td>6</td>
<td>7</td>
<td>0</td>
<td>–
</td></tr>
<tr>
<th>1
</th>
<td>–</td>
<td>–</td>
<td><b>5</b></td>
<td>–</td>
<td>–
</td></tr>
<tr>
<th width="15"></th>
<th style="width:15px;">1</th>
<th style="width:15px;">2</th>
<th style="width:15px;">3</th>
<th style="width:15px;">4</th>
<th style="width:15px;">5
</th></tr></tbody></table>
<p>Thus <code>c(1, 3) = 5</code>
</p><p>Let us say there was a checker that could start at any square on the first rank (i.e., row) and you wanted to know the shortest path (the sum of the minimum costs at each visited rank) to get to the last rank; assuming the checker could move only diagonally left forward, diagonally right forward, or straight forward. That is, a checker on <code>(1,3)</code> can move to <code>(2,2)</code>, <code>(2,3)</code> or <code>(2,4)</code>.
</p>
<table class="wikitable" style="text-align:center">

<tbody><tr>
<th>5
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>4
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>3
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>2
</th>
<td></td>
<td>x</td>
<td>x</td>
<td>x</td>
<td>
</td></tr>
<tr>
<th>1
</th>
<td></td>
<td></td>
<td>o</td>
<td></td>
<td>
</td></tr>
<tr>
<th width="15"></th>
<th style="width:15px;">1</th>
<th style="width:15px;">2</th>
<th style="width:15px;">3</th>
<th style="width:15px;">4</th>
<th style="width:15px;">5
</th></tr></tbody></table>
<p>This problem exhibits <b>optimal substructure</b>. That is, the solution to the entire problem relies on solutions to subproblems. Let us define a function <code>q(i, j)</code> as
</p>
<dl><dd><i>q</i>(<i>i</i>, <i>j</i>) = the minimum cost to reach square (<i>i</i>, <i>j</i>).</dd></dl>
<p>Starting at rank <code>n</code> and descending to rank <code>1</code>, we compute the value of this function for all the squares at each successive rank. Picking the square that holds the minimum value at each rank gives us the shortest path between rank <code>n</code> and rank <code>1</code>.
</p><p>The function <code>q(i, j)</code> is equal to the minimum cost to get to any of the three squares below it (since those are the only squares that can reach it) plus <code>c(i, j)</code>. For instance:
</p>
<table class="wikitable" style="text-align:center">

<tbody><tr>
<th>5
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>4
</th>
<td></td>
<td></td>
<td>A</td>
<td></td>
<td>
</td></tr>
<tr>
<th>3
</th>
<td></td>
<td>B</td>
<td>C</td>
<td>D</td>
<td>
</td></tr>
<tr>
<th>2
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th>1
</th>
<td></td>
<td></td>
<td></td>
<td></td>
<td>
</td></tr>
<tr>
<th width="15"></th>
<th style="width:15px;">1</th>
<th style="width:15px;">2</th>
<th style="width:15px;">3</th>
<th style="width:15px;">4</th>
<th style="width:15px;">5
</th></tr></tbody></table>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>A</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mo movablelimits="true" form="prefix">min</mo>
        <mo stretchy="false">(</mo>
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>B</mi>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>C</mi>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>D</mi>
        <mo stretchy="false">)</mo>
        <mo stretchy="false">)</mo>
        <mo>+</mo>
        <mi>c</mi>
        <mo stretchy="false">(</mo>
        <mi>A</mi>
        <mo stretchy="false">)</mo>
        <mspace width="thinmathspace"></mspace>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1f87cb5d1cb0b215fc90cb7057249c12ead674d6" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:37.351ex; height:2.843ex;" alt="{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}"/></noscript><span class="lazy-image-placeholder" style="width: 37.351ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1f87cb5d1cb0b215fc90cb7057249c12ead674d6" data-alt="{\displaystyle q(A)=\min(q(B),q(C),q(D))+c(A)\,}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>Now, let us define <code>q(i, j)</code> in somewhat more general terms:
</p>
<dl><dd><span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j>n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>q</mi>
        <mo stretchy="false">(</mo>
        <mi>i</mi>
        <mo>,</mo>
        <mi>j</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mo>{</mo>
            <mtable columnalign="left left" rowspacing=".2em" columnspacing="1em" displaystyle="false">
              <mtr>
                <mtd>
                  <mi mathvariant="normal">∞<!-- ∞ --></mi>
                </mtd>
                <mtd>
                  <mi>j</mi>
                  <mo>&lt;</mo>
                  <mn>1</mn>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mtext> or </mtext>
                  </mrow>
                  <mi>j</mi>
                  <mo>></mo>
                  <mi>n</mi>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mi>c</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo stretchy="false">)</mo>
                </mtd>
                <mtd>
                  <mi>i</mi>
                  <mo>=</mo>
                  <mn>1</mn>
                </mtd>
              </mtr>
              <mtr>
                <mtd>
                  <mo movablelimits="true" form="prefix">min</mo>
                  <mo stretchy="false">(</mo>
                  <mi>q</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>−<!-- − --></mo>
                  <mn>1</mn>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo>−<!-- − --></mo>
                  <mn>1</mn>
                  <mo stretchy="false">)</mo>
                  <mo>,</mo>
                  <mi>q</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>−<!-- − --></mo>
                  <mn>1</mn>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo stretchy="false">)</mo>
                  <mo>,</mo>
                  <mi>q</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>−<!-- − --></mo>
                  <mn>1</mn>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo>+</mo>
                  <mn>1</mn>
                  <mo stretchy="false">)</mo>
                  <mo stretchy="false">)</mo>
                  <mo>+</mo>
                  <mi>c</mi>
                  <mo stretchy="false">(</mo>
                  <mi>i</mi>
                  <mo>,</mo>
                  <mi>j</mi>
                  <mo stretchy="false">)</mo>
                </mtd>
                <mtd>
                  <mrow class="MJX-TeXAtom-ORD">
                    <mtext>otherwise.</mtext>
                  </mrow>
                </mtd>
              </mtr>
            </mtable>
            <mo fence="true" stretchy="true" symmetric="true"></mo>
          </mrow>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j>n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3ce1c92a173a4aa6e57116cd8a77069c4e87cff0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.671ex; width:81.055ex; height:8.509ex;" alt="{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j>n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}"/></noscript><span class="lazy-image-placeholder" style="width: 81.055ex;height: 8.509ex;vertical-align: -3.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3ce1c92a173a4aa6e57116cd8a77069c4e87cff0" data-alt="{\displaystyle q(i,j)={\begin{cases}\infty &amp;j&lt;1{\text{ or }}j>n\\c(i,j)&amp;i=1\\\min(q(i-1,j-1),q(i-1,j),q(i-1,j+1))+c(i,j)&amp;{\text{otherwise.}}\end{cases}}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></dd></dl>
<p>The first line of this equation deals with a board modeled as squares indexed on <code>1</code> at the lowest bound and <code>n</code> at the highest bound. The second line specifies what happens at the first rank; providing a base case. The third line, the recursion, is the important part. It represents the <code>A,B,C,D</code> terms in the example. From this definition we can derive straightforward recursive code for <code>q(i, j)</code>. In the following pseudocode, <code>n</code> is the size of the board, <code>c(i, j)</code> is the cost function, and <code>min()</code> returns the minimum of a number of values:
</p>
<pre><b>function</b> minCost(i, j)
    <b>if</b> j &lt; 1 <b>or</b> j > n
        <b>return</b> infinity
    <b>else if</b> i = 1
        <b>return</b> c(i, j)
    <b>else</b>
        <b>return</b> <b>min</b>( minCost(i-1, j-1), minCost(i-1, j), minCost(i-1, j+1) ) + c(i, j)
</pre>
<p>This function only computes the path cost, not the actual path. We discuss the actual path below. This, like the Fibonacci-numbers example, is horribly slow because it too exhibits the <b>overlapping sub-problems</b> attribute. That is, it recomputes the same path costs over and over. However, we can compute it much faster in a bottom-up fashion if we store path costs in a two-dimensional array <code>q[i, j]</code> rather than using a function. This avoids recomputation; all the values needed for array <code>q[i, j]</code> are computed ahead of time only once. Precomputed values for <code>(i,j)</code> are simply looked up whenever needed.
</p><p>We also need to know what the actual shortest path is. To do this, we use another array <code>p[i, j]</code>; a <i>predecessor array</i>. This array records the path to any square <code>s</code>. The predecessor of <code>s</code> is modeled as an offset relative to the index (in <code>q[i, j]</code>) of the precomputed path cost of <code>s</code>. To reconstruct the complete path, we lookup the predecessor of <code>s</code>, then the predecessor of that square, then the predecessor of that square, and so on recursively, until we reach the starting square. Consider the following pseudocode:
</p>
<pre><b>function</b> computeShortestPathArrays()
    <b>for</b> x <b>from</b> 1 <b>to</b> n
        q[1, x] := c(1, x)
    <b>for</b> y <b>from</b> 1 <b>to</b> n
        q[y, 0]     := infinity
        q[y, n + 1] := infinity
    <b>for</b> y <b>from</b> 2 <b>to</b> n
        <b>for</b> x <b>from</b> 1 <b>to</b> n
            m := min(q[y-1, x-1], q[y-1, x], q[y-1, x+1])
            q[y, x] := m + c(y, x)
            <b>if</b> m = q[y-1, x-1]
                p[y, x] := -1
            <b>else if</b> m = q[y-1, x]
                p[y, x] :=  0
            <b>else</b>
                p[y, x] :=  1
</pre>
<p>Now the rest is a simple matter of finding the minimum and printing it.
</p>
<pre><b>function</b> computeShortestPath()
    computeShortestPathArrays()
    minIndex := 1
    min := q[n, 1]
    <b>for</b> i <b>from</b> 2 <b>to</b> n
        <b>if</b> q[n, i] &lt; min
            minIndex := i
            min := q[n, i]
    printPath(n, minIndex)
</pre>
<pre><b>function</b> printPath(y, x)
    <b>print</b>(x)
    <b>print</b>("&lt;-")
    <b>if</b> y = 2
        <b>print</b>(x + p[y, x])
    <b>else</b>
        printPath(y-1, x + p[y, x])
</pre>
<div class="mw-heading mw-heading3"><h3 id="Sequence_alignment">Sequence alignment</h3></div>
<p>In <a href="/wiki/Genetics" title="Genetics">genetics</a>, <a href="/wiki/Sequence_alignment" title="Sequence alignment">sequence alignment</a> is an important application where dynamic programming is essential.<sup id="cite_ref-Eddy_12-0" class="reference"><a href="#cite_note-Eddy-12"><span class="cite-bracket">[</span>12<span class="cite-bracket">]</span></a></sup>  Typically, the problem consists of transforming one sequence into another using edit operations that replace, insert, or remove an element.  Each operation has an associated cost, and the goal is to find the <a href="/wiki/Edit_distance" title="Edit distance">sequence of edits with the lowest total cost</a>.
</p><p>The problem can be stated naturally as a recursion, a sequence A is optimally edited into a sequence B by either:
</p>
<ol><li>inserting the first character of B, and performing an optimal alignment of A and the tail of B</li>
<li>deleting the first character of A, and performing the optimal alignment of the tail of A and B</li>
<li>replacing the first character of A with the first character of B, and performing optimal alignments of the tails of A and B.</li></ol>
<p>The partial alignments can be tabulated in a matrix, where cell (i,j) contains the cost of the optimal alignment of A[1..i] to B[1..j].  The cost in cell (i,j) can be calculated by adding the cost of the relevant operations to the cost of its neighboring cells, and selecting the optimum.
</p><p>Different variants exist, see <a href="/wiki/Smith%E2%80%93Waterman_algorithm" title="Smith–Waterman algorithm">Smith–Waterman algorithm</a> and <a href="/wiki/Needleman%E2%80%93Wunsch_algorithm" title="Needleman–Wunsch algorithm">Needleman–Wunsch algorithm</a>.
</p>
<div class="mw-heading mw-heading3"><h3 id="Tower_of_Hanoi_puzzle">Tower of Hanoi puzzle</h3></div>
<figure class="mw-default-size" typeof="mw:File/Thumb"><a href="/wiki/File:Tower_of_Hanoi.jpeg" class="mw-file-description"><noscript><img src="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/330px-Tower_of_Hanoi.jpeg" decoding="async" width="300" height="132" class="mw-file-element" data-file-width="677" data-file-height="298"/></noscript><span class="lazy-image-placeholder" style="width: 300px;height: 132px;" data-mw-src="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/330px-Tower_of_Hanoi.jpeg" data-width="300" data-height="132" data-mw-srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/500px-Tower_of_Hanoi.jpeg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/07/Tower_of_Hanoi.jpeg/600px-Tower_of_Hanoi.jpeg 2x" data-class="mw-file-element"> </span></a><figcaption>A model set of the Towers of Hanoi (with 8 disks)</figcaption></figure>
<figure class="mw-default-size" typeof="mw:File/Thumb"><a href="/wiki/File:Tower_of_Hanoi_4.gif" class="mw-file-description"><noscript><img src="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Tower_of_Hanoi_4.gif/300px-Tower_of_Hanoi_4.gif" decoding="async" width="300" height="117" class="mw-file-element" data-file-width="320" data-file-height="125"/></noscript><span class="lazy-image-placeholder" style="width: 300px;height: 117px;" data-mw-src="//upload.wikimedia.org/wikipedia/commons/thumb/6/60/Tower_of_Hanoi_4.gif/300px-Tower_of_Hanoi_4.gif" data-width="300" data-height="117" data-mw-srcset="//upload.wikimedia.org/wikipedia/commons/6/60/Tower_of_Hanoi_4.gif 1.5x" data-class="mw-file-element"> </span></a><figcaption>An animated solution of the Tower of Hanoi puzzle for <i>T(4,3)</i></figcaption></figure>
<p>The <b><a href="/wiki/Tower_of_Hanoi" title="Tower of Hanoi">Tower of Hanoi</a></b> or <b>Towers of <a href="/wiki/Hanoi" title="Hanoi">Hanoi</a></b> is a <a href="/wiki/Mathematical_game" title="Mathematical game">mathematical game</a> or <a href="/wiki/Puzzle" title="Puzzle">puzzle</a>. It consists of three rods, and a number of disks of different sizes which can slide onto any rod. The puzzle starts with the disks in a neat stack in ascending order of size on one rod, the smallest at the top, thus making a conical shape.
</p><p>The objective of the puzzle is to move the entire stack to another rod, obeying the following rules:
</p>
<ul><li>Only one disk may be moved at a time.</li>
<li>Each move consists of taking the upper disk from one of the rods and sliding it onto another rod, on top of the other disks that may already be present on that rod.</li>
<li>No disk may be placed on top of a smaller disk.</li></ul>
<p>The dynamic programming solution consists of solving the <a href="/wiki/Bellman_equation" title="Bellman equation">functional equation</a>
</p>
<dl><dd>S(n,h,t) = S(n-1,h, not(h,t)) ; S(1,h,t) ; S(n-1,not(h,t),t)</dd></dl>
<p>where n denotes the number of disks to be moved, h denotes the home rod, t denotes the target rod, not(h,t) denotes the third rod (neither h nor t), ";" denotes concatenation, and
</p>
<dl><dd>S(n, h, t) := solution to a problem consisting of n disks that are to be moved from rod h to rod t.</dd></dl>
<p>For n=1 the problem is trivial, namely S(1,h,t) = "move a disk from rod h to rod t" (there is only one disk left).
</p><p>The  number of moves required by this solution is 2<sup><i>n</i></sup> − 1. If the objective is to <b>maximize</b> the number of moves (without cycling) then the dynamic programming <a href="/wiki/Bellman_equation" title="Bellman equation">functional equation</a>  is slightly more complicated and  3<sup><i>n</i></sup> − 1 moves are required.<sup id="cite_ref-13" class="reference"><a href="#cite_note-13"><span class="cite-bracket">[</span>13<span class="cite-bracket">]</span></a></sup>
</p>
<div class="mw-heading mw-heading3"><h3 id="Egg_dropping_puzzle">Egg dropping puzzle</h3></div>
<p>A famous <a href="/wiki/Puzzle" title="Puzzle">puzzle</a> relates to dropping eggs from a building to determine at which height they start to break. The following is a description involving N=2 eggs and a building with H=36 floors:<sup id="cite_ref-14" class="reference"><a href="#cite_note-14"><span class="cite-bracket">[</span>14<span class="cite-bracket">]</span></a></sup> 
</p>
<dl><dd>Suppose that we wish to know which stories in a 36-story building are safe to drop eggs from, and which will cause the eggs to break on landing (using <a href="/wiki/U.S._English" class="mw-redirect" title="U.S. English">U.S. English</a> terminology, in which the first floor is at ground level). We make a few assumptions:</dd></dl>
<dl><dd><ul><li>An egg that survives a fall can be used again.</li>
<li>A broken egg must be discarded.</li>
<li>The effect of a fall is the same for all eggs.</li>
<li>If an egg breaks when dropped, then it would break if dropped from a higher window.</li>
<li>If an egg survives a fall, then it would survive a shorter fall.</li>
<li>It is not ruled out that the first-floor windows break eggs, nor is it ruled out that eggs can survive the 36th-floor windows.</li></ul></dd></dl>
<dl><dd>If only one egg is available and we wish to be sure of obtaining the right result, the experiment can be carried out in only one way. Drop the egg from the first-floor window; if it survives, drop it from the second-floor window. Continue upward until it breaks. In the worst case, this method may require 36 droppings. Suppose 2 eggs are available. What is the lowest number of egg-droppings that is guaranteed to work in all cases?</dd></dl>
<p>To derive a dynamic programming <a href="/wiki/Bellman_equation" title="Bellman equation">functional equation</a> for this puzzle, let the <b>state</b> of the dynamic programming model be a pair s = (n,k), where
</p>
<dl><dd><i>n</i> = number of test eggs available, <i>n</i> = 0, 1, 2, 3, ..., <i>N</i> − 1.</dd>
<dd><i>k</i> = number of (consecutive) floors yet to be tested, <i>k</i> = 0, 1, 2, ..., <i>H</i> − 1.</dd></dl>
<p>For instance, <i>s</i> = (2,6) indicates that two test eggs are available and 6 (consecutive) floors are yet to be tested. The initial state of the process is <i>s</i> = (<i>N</i>,<i>H</i>) where <i>N</i> denotes the number of test eggs available at the commencement of the experiment. The process terminates either when there are no more test eggs (<i>n</i> = 0) or when <i>k</i> = 0, whichever occurs first. If termination occurs at state <i>s</i> = (0,<i>k</i>) and <i>k</i> > 0, then the test failed.
</p><p>Now, let
</p>
<dl><dd><i>W</i>(<i>n</i>,<i>k</i>) = minimum number of trials required to identify the value of the critical floor under the worst-case scenario given that the process is in state <i>s</i> = (<i>n</i>,<i>k</i>).</dd></dl>
<p>Then it can be shown that<sup id="cite_ref-sniedovich_03_15-0" class="reference"><a href="#cite_note-sniedovich_03-15"><span class="cite-bracket">[</span>15<span class="cite-bracket">]</span></a></sup>
</p>
<dl><dd><i>W</i>(<i>n</i>,<i>k</i>) = 1 + min{max(<i>W</i>(<i>n</i> − 1, <i>x</i> − 1), <i>W</i>(<i>n</i>,<i>k</i> − <i>x</i>)): <i>x</i> = 1, 2, ..., <i>k</i> }</dd></dl>
<p>with <i>W</i>(<i>n</i>,0) = 0 for all <i>n</i> > 0 and <i>W</i>(1,<i>k</i>) = <i>k</i> for all <i>k</i>. It is easy to solve this equation iteratively by systematically increasing the values of <i>n</i> and <i>k</i>.
</p>
<div class="mw-heading mw-heading4"><h4 id="Faster_DP_solution_using_a_different_parametrization">Faster DP solution using a different parametrization</h4></div>
<p>Notice that the above solution takes <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(nk^{2})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <msup>
          <mi>k</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msup>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nk^{2})}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e60f5fcc5716f6e45e3431be1a095d2cf2334c31" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:7.243ex; height:3.176ex;" alt="{\displaystyle O(nk^{2})}"/></noscript><span class="lazy-image-placeholder" style="width: 7.243ex;height: 3.176ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e60f5fcc5716f6e45e3431be1a095d2cf2334c31" data-alt="{\displaystyle O(nk^{2})}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> time with a DP solution. This can be improved to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(nk\log k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>k</mi>
        <mi>log</mi>
        <mo>⁡<!-- ⁡ --></mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nk\log k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/33f75ae11c64ad33234553ea222991a80503247b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:11.146ex; height:2.843ex;" alt="{\displaystyle O(nk\log k)}"/></noscript><span class="lazy-image-placeholder" style="width: 11.146ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/33f75ae11c64ad33234553ea222991a80503247b" data-alt="{\displaystyle O(nk\log k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> time by binary searching on the optimal <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> in the above recurrence, since <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle W(n-1,x-1)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>x</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle W(n-1,x-1)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a53848e9b3dd05012ea8b5477347646f6b8ef43f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:16.009ex; height:2.843ex;" alt="{\displaystyle W(n-1,x-1)}"/></noscript><span class="lazy-image-placeholder" style="width: 16.009ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a53848e9b3dd05012ea8b5477347646f6b8ef43f" data-alt="{\displaystyle W(n-1,x-1)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is increasing in <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> while <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle W(n,k-x)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>,</mo>
        <mi>k</mi>
        <mo>−<!-- − --></mo>
        <mi>x</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle W(n,k-x)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fac88404ea16085c78fc2e3fcae7c1fb52dcd367" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:12.054ex; height:2.843ex;" alt="{\displaystyle W(n,k-x)}"/></noscript><span class="lazy-image-placeholder" style="width: 12.054ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fac88404ea16085c78fc2e3fcae7c1fb52dcd367" data-alt="{\displaystyle W(n,k-x)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is decreasing in <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, thus a local minimum of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \max(W(n-1,x-1),W(n,k-x))}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo movablelimits="true" form="prefix">max</mo>
        <mo stretchy="false">(</mo>
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>x</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo stretchy="false">)</mo>
        <mo>,</mo>
        <mi>W</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo>,</mo>
        <mi>k</mi>
        <mo>−<!-- − --></mo>
        <mi>x</mi>
        <mo stretchy="false">)</mo>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \max(W(n-1,x-1),W(n,k-x))}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1c7a3a09b5c5deb068627bafdef14084f84edfb3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:35.232ex; height:2.843ex;" alt="{\displaystyle \max(W(n-1,x-1),W(n,k-x))}"/></noscript><span class="lazy-image-placeholder" style="width: 35.232ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/1c7a3a09b5c5deb068627bafdef14084f84edfb3" data-alt="{\displaystyle \max(W(n-1,x-1),W(n,k-x))}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is a global minimum. Also, by storing the optimal <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> for each cell in the DP table and referring to its value for the previous cell, the optimal <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> for each cell can be found in constant time, improving it to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(nk)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nk)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/16feb8341ea75a7bb8b3445959360dde7686db10" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:6.189ex; height:2.843ex;" alt="{\displaystyle O(nk)}"/></noscript><span class="lazy-image-placeholder" style="width: 6.189ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/16feb8341ea75a7bb8b3445959360dde7686db10" data-alt="{\displaystyle O(nk)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> time. However, there is an even faster solution that involves a different parametrization of the problem:
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.211ex; height:2.176ex;" alt="{\displaystyle k}"/></noscript><span class="lazy-image-placeholder" style="width: 1.211ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" data-alt="{\displaystyle k}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> be the total number of floors such that the eggs break when dropped from the <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.211ex; height:2.176ex;" alt="{\displaystyle k}"/></noscript><span class="lazy-image-placeholder" style="width: 1.211ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" data-alt="{\displaystyle k}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>th floor (The example above is equivalent to taking <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k=37}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
        <mo>=</mo>
        <mn>37</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k=37}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/74c4bbfe0af3dae49f18c3bf3bdec17521863b78" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:6.635ex; height:2.176ex;" alt="{\displaystyle k=37}"/></noscript><span class="lazy-image-placeholder" style="width: 6.635ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/74c4bbfe0af3dae49f18c3bf3bdec17521863b78" data-alt="{\displaystyle k=37}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>).
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"/></noscript><span class="lazy-image-placeholder" style="width: 2.04ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" data-alt="{\displaystyle m}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> be the minimum floor from which the egg must be dropped to be broken.
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f(t,n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e7804efe26a61f9352144d98bd351881de5eb4f3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:6.356ex; height:2.843ex;" alt="{\displaystyle f(t,n)}"/></noscript><span class="lazy-image-placeholder" style="width: 6.356ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/e7804efe26a61f9352144d98bd351881de5eb4f3" data-alt="{\displaystyle f(t,n)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> be the maximum number of values of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"/></noscript><span class="lazy-image-placeholder" style="width: 2.04ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" data-alt="{\displaystyle m}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> that are distinguishable using <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.84ex; height:2.009ex;" alt="{\displaystyle t}"/></noscript><span class="lazy-image-placeholder" style="width: 0.84ex;height: 2.009ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" data-alt="{\displaystyle t}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> tries and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.395ex; height:1.676ex;" alt="{\displaystyle n}"/></noscript><span class="lazy-image-placeholder" style="width: 1.395ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b" data-alt="{\displaystyle n}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> eggs.
</p><p>Then <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f(t,0)=f(0,n)=1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mn>0</mn>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mn>0</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,0)=f(0,n)=1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7e9a652befc857d8b7dbb9d22f5ddc4d65115034" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:20.162ex; height:2.843ex;" alt="{\displaystyle f(t,0)=f(0,n)=1}"/></noscript><span class="lazy-image-placeholder" style="width: 20.162ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/7e9a652befc857d8b7dbb9d22f5ddc4d65115034" data-alt="{\displaystyle f(t,0)=f(0,n)=1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t,n\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo>≥<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t,n\geq 0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3ba436d0fd3d25a6dbacc7e227a0e4558c12736a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:7.529ex; height:2.509ex;" alt="{\displaystyle t,n\geq 0}"/></noscript><span class="lazy-image-placeholder" style="width: 7.529ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/3ba436d0fd3d25a6dbacc7e227a0e4558c12736a" data-alt="{\displaystyle t,n\geq 0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>Let <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle a}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>a</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle a}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ffd2487510aa438433a2579450ab2b3d557e5edc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.23ex; height:1.676ex;" alt="{\displaystyle a}"/></noscript><span class="lazy-image-placeholder" style="width: 1.23ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ffd2487510aa438433a2579450ab2b3d557e5edc" data-alt="{\displaystyle a}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> be the floor from which the first egg is dropped in the optimal strategy.
</p><p>If the first egg broke, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"/></noscript><span class="lazy-image-placeholder" style="width: 2.04ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" data-alt="{\displaystyle m}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is from <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle 1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle 1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/92d98b82a3778f043108d4e20960a9193df57cbf" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.162ex; height:2.176ex;" alt="{\displaystyle 1}"/></noscript><span class="lazy-image-placeholder" style="width: 1.162ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/92d98b82a3778f043108d4e20960a9193df57cbf" data-alt="{\displaystyle 1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle a}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>a</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle a}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ffd2487510aa438433a2579450ab2b3d557e5edc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.23ex; height:1.676ex;" alt="{\displaystyle a}"/></noscript><span class="lazy-image-placeholder" style="width: 1.23ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ffd2487510aa438433a2579450ab2b3d557e5edc" data-alt="{\displaystyle a}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> and distinguishable using at most <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t-1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t-1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a215d9553945bb84b3b5a79cc796fb7d6e0629f0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:4.842ex; height:2.343ex;" alt="{\displaystyle t-1}"/></noscript><span class="lazy-image-placeholder" style="width: 4.842ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a215d9553945bb84b3b5a79cc796fb7d6e0629f0" data-alt="{\displaystyle t-1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> tries and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n-1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n-1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fbd0b0f32b28f51962943ee9ede4fb34198a2521" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.398ex; height:2.343ex;" alt="{\displaystyle n-1}"/></noscript><span class="lazy-image-placeholder" style="width: 5.398ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/fbd0b0f32b28f51962943ee9ede4fb34198a2521" data-alt="{\displaystyle n-1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> eggs.
</p><p>If the first egg did not break, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle m}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>m</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle m}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:2.04ex; height:1.676ex;" alt="{\displaystyle m}"/></noscript><span class="lazy-image-placeholder" style="width: 2.04ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/0a07d98bb302f3856cbabc47b2b9016692e3f7bc" data-alt="{\displaystyle m}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> is from <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle a+1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>a</mi>
        <mo>+</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle a+1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8028f23cfdcb108712e2bc53369305574afe820b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.233ex; height:2.343ex;" alt="{\displaystyle a+1}"/></noscript><span class="lazy-image-placeholder" style="width: 5.233ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8028f23cfdcb108712e2bc53369305574afe820b" data-alt="{\displaystyle a+1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> to <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle k}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.211ex; height:2.176ex;" alt="{\displaystyle k}"/></noscript><span class="lazy-image-placeholder" style="width: 1.211ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/c3c9a2c7b599b37105512c5d570edc034056dd40" data-alt="{\displaystyle k}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> and distinguishable using <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t-1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t-1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a215d9553945bb84b3b5a79cc796fb7d6e0629f0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:4.842ex; height:2.343ex;" alt="{\displaystyle t-1}"/></noscript><span class="lazy-image-placeholder" style="width: 4.842ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a215d9553945bb84b3b5a79cc796fb7d6e0629f0" data-alt="{\displaystyle t-1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> tries and <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.395ex; height:1.676ex;" alt="{\displaystyle n}"/></noscript><span class="lazy-image-placeholder" style="width: 1.395ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a601995d55609f2d9f5e233e36fbe9ea26011b3b" data-alt="{\displaystyle n}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> eggs.
</p><p>Therefore, <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo stretchy="false">)</mo>
        <mo>+</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>−<!-- − --></mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31dff5e6c571fd709b1291926c85d0f83a3cc4a0" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:37.016ex; height:2.843ex;" alt="{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}"/></noscript><span class="lazy-image-placeholder" style="width: 37.016ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31dff5e6c571fd709b1291926c85d0f83a3cc4a0" data-alt="{\displaystyle f(t,n)=f(t-1,n-1)+f(t-1,n)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>Then the problem is equivalent to finding the minimum <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> such that <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f(x,n)\geq k}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>x</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>≥<!-- ≥ --></mo>
        <mi>k</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(x,n)\geq k}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6d6a70ba7ff177596a4734983a7bd9bd6eabcc77" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:11.156ex; height:2.843ex;" alt="{\displaystyle f(x,n)\geq k}"/></noscript><span class="lazy-image-placeholder" style="width: 11.156ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6d6a70ba7ff177596a4734983a7bd9bd6eabcc77" data-alt="{\displaystyle f(x,n)\geq k}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>To do so, we could compute <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle \{f(t,i):0\leq i\leq n\}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo fence="false" stretchy="false">{</mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>i</mi>
        <mo stretchy="false">)</mo>
        <mo>:</mo>
        <mn>0</mn>
        <mo>≤<!-- ≤ --></mo>
        <mi>i</mi>
        <mo>≤<!-- ≤ --></mo>
        <mi>n</mi>
        <mo fence="false" stretchy="false">}</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle \{f(t,i):0\leq i\leq n\}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/15748c7135a71c9a615b1791257f385c465f1f8f" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:19.583ex; height:2.843ex;" alt="{\displaystyle \{f(t,i):0\leq i\leq n\}}"/></noscript><span class="lazy-image-placeholder" style="width: 19.583ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/15748c7135a71c9a615b1791257f385c465f1f8f" data-alt="{\displaystyle \{f(t,i):0\leq i\leq n\}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> in order of increasing <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.84ex; height:2.009ex;" alt="{\displaystyle t}"/></noscript><span class="lazy-image-placeholder" style="width: 0.84ex;height: 2.009ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" data-alt="{\displaystyle t}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, which would take <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(nx)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>x</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(nx)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8f99a08f754120e54250a58ad896644c9e03a3a7" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:6.307ex; height:2.843ex;" alt="{\displaystyle O(nx)}"/></noscript><span class="lazy-image-placeholder" style="width: 6.307ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8f99a08f754120e54250a58ad896644c9e03a3a7" data-alt="{\displaystyle O(nx)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> time.
</p><p>Thus, if we separately handle the case of <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle n=1}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>n</mi>
        <mo>=</mo>
        <mn>1</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle n=1}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d9ec7e1edc2e6d98f5aec2a39ae5f1c99d1e1425" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:5.656ex; height:2.176ex;" alt="{\displaystyle n=1}"/></noscript><span class="lazy-image-placeholder" style="width: 5.656ex;height: 2.176ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/d9ec7e1edc2e6d98f5aec2a39ae5f1c99d1e1425" data-alt="{\displaystyle n=1}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, the algorithm would take <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(n{\sqrt {k}})}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mrow class="MJX-TeXAtom-ORD">
          <msqrt>
            <mi>k</mi>
          </msqrt>
        </mrow>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(n{\sqrt {k}})}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6e9eeb287cc1a095077af75af07ec794472f1e56" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:8.124ex; height:3.176ex;" alt="{\displaystyle O(n{\sqrt {k}})}"/></noscript><span class="lazy-image-placeholder" style="width: 8.124ex;height: 3.176ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/6e9eeb287cc1a095077af75af07ec794472f1e56" data-alt="{\displaystyle O(n{\sqrt {k}})}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> time.
</p><p>But the recurrence relation can in fact be solved, giving <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>=</mo>
        <munderover>
          <mo>∑<!-- ∑ --></mo>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>=</mo>
            <mn>0</mn>
          </mrow>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </munderover>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mrow class="MJX-TeXAtom-OPEN">
              <mo maxsize="2.047em" minsize="2.047em">(</mo>
            </mrow>
            <mfrac linethickness="0">
              <mi>t</mi>
              <mi>i</mi>
            </mfrac>
            <mrow class="MJX-TeXAtom-CLOSE">
              <mo maxsize="2.047em" minsize="2.047em">)</mo>
            </mrow>
          </mrow>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a4fa894a4458ee513e6188f9ecdc20ca32c6d700" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -3.005ex; width:17.457ex; height:6.843ex;" alt="{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}"/></noscript><span class="lazy-image-placeholder" style="width: 17.457ex;height: 6.843ex;vertical-align: -3.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/a4fa894a4458ee513e6188f9ecdc20ca32c6d700" data-alt="{\displaystyle f(t,n)=\sum _{i=0}^{n}{\binom {t}{i}}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, which can be computed in <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(n)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/34109fe397fdcff370079185bfdb65826cb5565a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:4.977ex; height:2.843ex;" alt="{\displaystyle O(n)}"/></noscript><span class="lazy-image-placeholder" style="width: 4.977ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/34109fe397fdcff370079185bfdb65826cb5565a" data-alt="{\displaystyle O(n)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> time using the identity <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mrow class="MJX-TeXAtom-OPEN">
              <mo maxsize="2.047em" minsize="2.047em">(</mo>
            </mrow>
            <mfrac linethickness="0">
              <mi>t</mi>
              <mrow>
                <mi>i</mi>
                <mo>+</mo>
                <mn>1</mn>
              </mrow>
            </mfrac>
            <mrow class="MJX-TeXAtom-CLOSE">
              <mo maxsize="2.047em" minsize="2.047em">)</mo>
            </mrow>
          </mrow>
        </mrow>
        <mo>=</mo>
        <mrow class="MJX-TeXAtom-ORD">
          <mrow>
            <mrow class="MJX-TeXAtom-OPEN">
              <mo maxsize="2.047em" minsize="2.047em">(</mo>
            </mrow>
            <mfrac linethickness="0">
              <mi>t</mi>
              <mi>i</mi>
            </mfrac>
            <mrow class="MJX-TeXAtom-CLOSE">
              <mo maxsize="2.047em" minsize="2.047em">)</mo>
            </mrow>
          </mrow>
        </mrow>
        <mrow class="MJX-TeXAtom-ORD">
          <mfrac>
            <mrow>
              <mi>t</mi>
              <mo>−<!-- − --></mo>
              <mi>i</mi>
            </mrow>
            <mrow>
              <mi>i</mi>
              <mo>+</mo>
              <mn>1</mn>
            </mrow>
          </mfrac>
        </mrow>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ed0349d190cb4f5f7e913e1aec7a402cc4236a53" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -2.505ex; width:21.227ex; height:6.176ex;" alt="{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}"/></noscript><span class="lazy-image-placeholder" style="width: 21.227ex;height: 6.176ex;vertical-align: -2.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/ed0349d190cb4f5f7e913e1aec7a402cc4236a53" data-alt="{\displaystyle {\binom {t}{i+1}}={\binom {t}{i}}{\frac {t-i}{i+1}}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle i\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>i</mi>
        <mo>≥<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle i\geq 0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/405e1424cb9c4fc171c433a8e8f04b3e5938e366" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.063ex; height:2.343ex;" alt="{\displaystyle i\geq 0}"/></noscript><span class="lazy-image-placeholder" style="width: 5.063ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/405e1424cb9c4fc171c433a8e8f04b3e5938e366" data-alt="{\displaystyle i\geq 0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>.
</p><p>Since <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle f(t,n)\leq f(t+1,n)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
        <mo>≤<!-- ≤ --></mo>
        <mi>f</mi>
        <mo stretchy="false">(</mo>
        <mi>t</mi>
        <mo>+</mo>
        <mn>1</mn>
        <mo>,</mo>
        <mi>n</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle f(t,n)\leq f(t+1,n)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/55590dc7d5f4e32400bb982d37a3ac34b13f0ac6" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:19.814ex; height:2.843ex;" alt="{\displaystyle f(t,n)\leq f(t+1,n)}"/></noscript><span class="lazy-image-placeholder" style="width: 19.814ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/55590dc7d5f4e32400bb982d37a3ac34b13f0ac6" data-alt="{\displaystyle f(t,n)\leq f(t+1,n)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> for all <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t\geq 0}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
        <mo>≥<!-- ≥ --></mo>
        <mn>0</mn>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t\geq 0}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/248525429e9cd266f53ab8c52d17bc206c546060" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.505ex; width:5.101ex; height:2.343ex;" alt="{\displaystyle t\geq 0}"/></noscript><span class="lazy-image-placeholder" style="width: 5.101ex;height: 2.343ex;vertical-align: -0.505ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/248525429e9cd266f53ab8c52d17bc206c546060" data-alt="{\displaystyle t\geq 0}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, we can binary search on <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle t}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>t</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle t}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:0.84ex; height:2.009ex;" alt="{\displaystyle t}"/></noscript><span class="lazy-image-placeholder" style="width: 0.84ex;height: 2.009ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/65658b7b223af9e1acc877d848888ecdb4466560" data-alt="{\displaystyle t}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> to find <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle x}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>x</mi>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle x}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.338ex; width:1.33ex; height:1.676ex;" alt="{\displaystyle x}"/></noscript><span class="lazy-image-placeholder" style="width: 1.33ex;height: 1.676ex;vertical-align: -0.338ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/87f9e315fd7e2ba406057a97300593c4802b53e4" data-alt="{\displaystyle x}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>, giving an <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle O(n\log k)}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mi>O</mi>
        <mo stretchy="false">(</mo>
        <mi>n</mi>
        <mi>log</mi>
        <mo>⁡<!-- ⁡ --></mo>
        <mi>k</mi>
        <mo stretchy="false">)</mo>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle O(n\log k)}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/99e71cfbbb1dbd170050e63d7b342b07b4b014e2" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:9.934ex; height:2.843ex;" alt="{\displaystyle O(n\log k)}"/></noscript><span class="lazy-image-placeholder" style="width: 9.934ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/99e71cfbbb1dbd170050e63d7b342b07b4b014e2" data-alt="{\displaystyle O(n\log k)}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span> algorithm.<sup id="cite_ref-16" class="reference"><a href="#cite_note-16"><span class="cite-bracket">[</span>16<span class="cite-bracket">]</span></a></sup>
</p>
<div class="mw-heading mw-heading3"><h3 id="Matrix_chain_multiplication">Matrix chain multiplication</h3></div>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1251242444"/><table class="box-Unreferenced_section plainlinks metadata ambox ambox-content ambox-Unreferenced" role="presentation"><tbody><tr><td class="mbox-text"><div class="mbox-text-span">This section <b>does not <a href="/wiki/Wikipedia:Citing_sources" title="Wikipedia:Citing sources">cite</a> any <a href="/wiki/Wikipedia:Verifiability" title="Wikipedia:Verifiability">sources</a></b>.<span class="hide-when-compact"> Please help <a href="/wiki/Special:EditPage/Dynamic_programming" title="Special:EditPage/Dynamic programming">improve this section</a> by <a href="/wiki/Help:Referencing_for_beginners" title="Help:Referencing for beginners">adding citations to reliable sources</a>. Unsourced material may be challenged and <a href="/wiki/Wikipedia:Verifiability#Burden_of_evidence" title="Wikipedia:Verifiability">removed</a>.</span>  <span class="date-container"><i>(<span class="date">May 2013</span>)</i></span><span class="hide-when-compact"><i> (<small><a href="/wiki/Help:Maintenance_template_removal" title="Help:Maintenance template removal">Learn how and when to remove this message</a></small>)</i></span></div></td></tr></tbody></table>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236090951"/><div role="note" class="hatnote navigation-not-searchable">Main article: <a href="/wiki/Matrix_chain_multiplication" title="Matrix chain multiplication">Matrix chain multiplication</a></div>
<p>Matrix chain multiplication is a well-known example that demonstrates utility of dynamic programming. For example,  engineering applications often have to multiply a chain of matrices. It is not surprising to find matrices of large dimensions, for example 100×100. Therefore, our task is to multiply matrices <span class="nowrap">⁠<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle A_{1},A_{2},....A_{n}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <mo>.</mo>
        <mo>.</mo>
        <mo>.</mo>
        <mo>.</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle A_{1},A_{2},....A_{n}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/700b99631b28d2edc6f6cbaa915154130b0af155" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:14.76ex; height:2.509ex;" alt="{\displaystyle A_{1},A_{2},....A_{n}}"/></noscript><span class="lazy-image-placeholder" style="width: 14.76ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/700b99631b28d2edc6f6cbaa915154130b0af155" data-alt="{\displaystyle A_{1},A_{2},....A_{n}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>⁠</span>. Matrix multiplication is not commutative, but is associative; and we can multiply only two matrices at a time. So, we can multiply this chain of matrices in many different ways, for example:
</p>
<dl><dd><span class="texhtml">((<i>A</i><sub>1</sub> × <i>A</i><sub>2</sub>) × <i>A</i><sub>3</sub>) × ... <i>A<sub>n</sub></i></span></dd></dl>
<dl><dd><span class="texhtml"><i>A</i><sub>1</sub>×(((<i>A</i><sub>2</sub>×<i>A</i><sub>3</sub>)× ... ) × <i>A<sub>n</sub></i>)</span></dd></dl>
<dl><dd><span class="texhtml">(<i>A</i><sub>1</sub> × <i>A</i><sub>2</sub>) × (<i>A</i><sub>3</sub> × ... <i>A<sub>n</sub></i>)</span></dd></dl>
<p>and so on. There are numerous ways to multiply this chain of matrices. They will all produce the same final result, however they will take more or less time to compute, based on which particular matrices are multiplied. If matrix A has dimensions m×n and matrix B has dimensions n×q, then matrix C=A×B will have dimensions m×q, and will require m*n*q scalar multiplications (using a simplistic <a href="/wiki/Matrix_multiplication_algorithm" title="Matrix multiplication algorithm">matrix multiplication algorithm</a> for purposes of illustration).
</p><p>For example, let us multiply matrices A, B and C. Let us assume that their dimensions are m×n, n×p, and p×s, respectively. Matrix A×B×C will be of size m×s and can be calculated in two ways shown below:
</p>
<ol><li>Ax(B×C)    This order of matrix multiplication will require nps + mns scalar multiplications.</li>
<li>(A×B)×C    This order of matrix multiplication will require mnp + mps scalar calculations.</li></ol>
<p>Let us assume that m = 10, n = 100, p = 10 and s = 1000. So, the first way to multiply the chain will require 1,000,000 + 1,000,000 calculations. The second way will require only 10,000 + 100,000 calculations. Obviously, the second way is faster, and we should multiply the matrices using that arrangement of parenthesis.
</p><p>Therefore, our conclusion is that the order of parenthesis matters, and that our task is to find the optimal order of parenthesis.
</p><p>At this point, we have several choices, one of which is to design a dynamic programming algorithm that will split the problem into overlapping problems and calculate the optimal arrangement of parenthesis. The dynamic programming solution is presented below.
</p><p>Let's call m[i,j] the minimum number of scalar multiplications needed to multiply a chain of matrices from matrix i to matrix j (i.e. A<sub>i</sub> × .... × A<sub>j</sub>, i.e. i&lt;=j). We split the chain at some matrix k, such that i &lt;= k &lt; j, and try to find out which combination produces minimum m[i,j].
</p><p>The formula is:
</p>
<pre>       <b>if</b> i = j, m[i,j]= 0
       <b>if</b> i &lt; j, m[i,j]= min over all possible values of k <span class="nowrap">(m[i,k]+m[k+1,j] + <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle p_{i-1}*p_{k}*p_{j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>−<!-- − --></mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>∗<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>∗<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{i-1}*p_{k}*p_{j}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d0233aa2b12fda27441c58ace6c6508c917459e" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; margin-left: -0.089ex; width:12.886ex; height:2.343ex;" alt="{\displaystyle p_{i-1}*p_{k}*p_{j}}"/></noscript><span class="lazy-image-placeholder" style="width: 12.886ex;height: 2.343ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d0233aa2b12fda27441c58ace6c6508c917459e" data-alt="{\displaystyle p_{i-1}*p_{k}*p_{j}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>)</span> 
</pre>
<p>where <i>k</i> ranges from <i>i</i> to <i>j</i> − 1.
</p>
<ul><li><span class="nowrap">⁠<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle p_{i-1}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>−<!-- − --></mo>
            <mn>1</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{i-1}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5b2743340775af529f3dc57879ef1b2c1170e5fc" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; margin-left: -0.089ex; width:4.159ex; height:2.009ex;" alt="{\displaystyle p_{i-1}}"/></noscript><span class="lazy-image-placeholder" style="width: 4.159ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/5b2743340775af529f3dc57879ef1b2c1170e5fc" data-alt="{\displaystyle p_{i-1}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>⁠</span> is the row dimension of matrix i,</li>
<li><span class="nowrap">⁠<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle p_{k}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{k}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/01084a31964201514f3e6bd0136989e11ea6e58a" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; margin-left: -0.089ex; width:2.348ex; height:2.009ex;" alt="{\displaystyle p_{k}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.348ex;height: 2.009ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/01084a31964201514f3e6bd0136989e11ea6e58a" data-alt="{\displaystyle p_{k}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>⁠</span> is the column dimension of matrix k,</li>
<li><span class="nowrap">⁠<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle p_{j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{j}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/499e0821b28c43e9bc2a6360b937de535057bc62" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; margin-left: -0.089ex; width:2.169ex; height:2.343ex;" alt="{\displaystyle p_{j}}"/></noscript><span class="lazy-image-placeholder" style="width: 2.169ex;height: 2.343ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/499e0821b28c43e9bc2a6360b937de535057bc62" data-alt="{\displaystyle p_{j}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>⁠</span> is the column dimension of matrix j.</li></ul>
<p>This formula can be coded as shown below, where input parameter "chain" is the chain of matrices, i.e. <span class="nowrap">⁠<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle A_{1},A_{2},...A_{n}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo>,</mo>
        <mo>.</mo>
        <mo>.</mo>
        <mo>.</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>n</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle A_{1},A_{2},...A_{n}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31c02495cac84da30921b34c436a691ce1593868" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.671ex; width:13.726ex; height:2.509ex;" alt="{\displaystyle A_{1},A_{2},...A_{n}}"/></noscript><span class="lazy-image-placeholder" style="width: 13.726ex;height: 2.509ex;vertical-align: -0.671ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/31c02495cac84da30921b34c436a691ce1593868" data-alt="{\displaystyle A_{1},A_{2},...A_{n}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>⁠</span>:
</p>
<pre><b>function</b> OptimalMatrixChainParenthesis(chain)
    n = length(chain)
    <b>for</b> i = 1, n
        m[i,i] = 0    <i>// Since it takes no calculations to multiply one matrix</i>
    <b>for</b> len = 2, n
        <b>for</b> i = 1, n - len + 1
            j = i + len -1
            m[i,j] = infinity      <i>// So that the first calculation updates</i>
            <b>for</b> k = i, j-1
                <span class="nowrap">q = m[i, k] + m[k+1, j] + <span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle p_{i-1}*p_{k}*p_{j}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>i</mi>
            <mo>−<!-- − --></mo>
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>∗<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>k</mi>
          </mrow>
        </msub>
        <mo>∗<!-- ∗ --></mo>
        <msub>
          <mi>p</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mi>j</mi>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle p_{i-1}*p_{k}*p_{j}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d0233aa2b12fda27441c58ace6c6508c917459e" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -1.005ex; margin-left: -0.089ex; width:12.886ex; height:2.343ex;" alt="{\displaystyle p_{i-1}*p_{k}*p_{j}}"/></noscript><span class="lazy-image-placeholder" style="width: 12.886ex;height: 2.343ex;vertical-align: -1.005ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/8d0233aa2b12fda27441c58ace6c6508c917459e" data-alt="{\displaystyle p_{i-1}*p_{k}*p_{j}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span></span>
                <b>if</b> q &lt; m[i, j]     <i>// The new order of parentheses is better than what we had</i>
                    m[i, j] = q    <i>// Update</i>
                    s[i, j] = k    <i>// Record which k to split on, i.e. where to place the parenthesis</i>
</pre>
<p>So far, we have calculated values for all possible <span class="texhtml"><i>m</i>[<i>i</i>, <i>j</i>]</span>, the minimum number of calculations to multiply a chain from matrix <i>i</i> to matrix <i>j</i>, and we have recorded the corresponding "split point"<span class="texhtml"><i>s</i>[<i>i</i>, <i>j</i>]</span>. For example, if we are multiplying chain <span class="texhtml"><i>A</i><sub>1</sub>×<i>A</i><sub>2</sub>×<i>A</i><sub>3</sub>×<i>A</i><sub>4</sub></span>, and it turns out that <span class="texhtml"><i>m</i>[1, 3] = 100</span> and <span class="texhtml"><i>s</i>[1, 3] = 2</span>, that means that the optimal placement of parenthesis for matrices 1 to 3 is <span class="nowrap">⁠<span class="mwe-math-element mwe-math-element-inline"><span class="mwe-math-mathml-inline mwe-math-mathml-a11y" style="display: none;"><math xmlns="http://www.w3.org/1998/Math/MathML" alttext="{\displaystyle (A_{1}\times A_{2})\times A_{3}}">
  <semantics>
    <mrow class="MJX-TeXAtom-ORD">
      <mstyle displaystyle="true" scriptlevel="0">
        <mo stretchy="false">(</mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>1</mn>
          </mrow>
        </msub>
        <mo>×<!-- × --></mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>2</mn>
          </mrow>
        </msub>
        <mo stretchy="false">)</mo>
        <mo>×<!-- × --></mo>
        <msub>
          <mi>A</mi>
          <mrow class="MJX-TeXAtom-ORD">
            <mn>3</mn>
          </mrow>
        </msub>
      </mstyle>
    </mrow>
    <annotation encoding="application/x-tex">{\displaystyle (A_{1}\times A_{2})\times A_{3}}</annotation>
  </semantics>
</math></span><noscript><img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/823afb23c31ccd1845769469c22be709f757b1a3" class="mwe-math-fallback-image-inline mw-invert skin-invert" aria-hidden="true" style="vertical-align: -0.838ex; width:15.882ex; height:2.843ex;" alt="{\displaystyle (A_{1}\times A_{2})\times A_{3}}"/></noscript><span class="lazy-image-placeholder" style="width: 15.882ex;height: 2.843ex;vertical-align: -0.838ex;" data-mw-src="https://wikimedia.org/api/rest_v1/media/math/render/svg/823afb23c31ccd1845769469c22be709f757b1a3" data-alt="{\displaystyle (A_{1}\times A_{2})\times A_{3}}" data-class="mwe-math-fallback-image-inline mw-invert skin-invert"> </span></span>⁠</span> and to multiply those matrices will require 100 scalar calculations.
</p><p>This algorithm will produce "tables" <i>m</i>[, ] and <i>s</i>[, ] that will have entries for all possible values of i and j. The final solution for the entire chain is m[1, n], with corresponding split at s[1, n]. Unraveling the solution will be recursive, starting from the top and continuing until we reach the base case, i.e. multiplication of single matrices.
</p><p>Therefore, the next step is to actually split the chain, i.e. to place the parenthesis where they (optimally) belong. For this purpose we could use the following algorithm:
</p>
<pre><b>function</b> PrintOptimalParenthesis(s, i, j)
    <b>if</b> i = j
        print "A"i
    <b>else</b>
        print "(" 
        PrintOptimalParenthesis(s, i, s[i, j]) 
        PrintOptimalParenthesis(s, s[i, j] + 1, j) 
        print ")"
</pre>
<p>Of course, this algorithm is not useful for actual multiplication. This algorithm is just a user-friendly way to see what the result looks like.
</p><p>To actually multiply the matrices using the proper splits, we need the following algorithm:
</p>
<div class="mw-highlight mw-highlight-lang-javascript mw-content-ltr" dir="ltr"><pre><span></span><span class="w">   </span><span class="kd">function</span><span class="w"> </span><span class="nx">MatrixChainMultiply</span><span class="p">(</span><span class="nx">chain</span><span class="w"> </span><span class="kr">from</span><span class="w"> </span><span class="mf">1</span><span class="w"> </span><span class="nx">to</span><span class="w"> </span><span class="nx">n</span><span class="p">)</span><span class="w">       </span><span class="c1">// returns the final matrix, i.e. A1×A2×... ×An</span>
<span class="w">      </span><span class="nx">OptimalMatrixChainParenthesis</span><span class="p">(</span><span class="nx">chain</span><span class="w"> </span><span class="kr">from</span><span class="w"> </span><span class="mf">1</span><span class="w"> </span><span class="nx">to</span><span class="w"> </span><span class="nx">n</span><span class="p">)</span><span class="w">   </span><span class="c1">// this will produce s[ . ] and m[ . ] "tables"</span>
<span class="w">      </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">chain</span><span class="w"> </span><span class="kr">from</span><span class="w"> </span><span class="mf">1</span><span class="w"> </span><span class="nx">to</span><span class="w"> </span><span class="nx">n</span><span class="p">)</span><span class="w">  </span><span class="c1">// actually multiply</span>

<span class="w">   </span><span class="kd">function</span><span class="w"> </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">)</span><span class="w">   </span><span class="c1">// returns the result of multiplying a chain of matrices from Ai to Aj in optimal way</span>
<span class="w">      </span><span class="k">if</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">&lt;</span><span class="w"> </span><span class="nx">j</span>
<span class="w">         </span><span class="c1">// keep on splitting the chain and multiplying the matrices in left and right sides</span>
<span class="w">         </span><span class="nx">LeftSide</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">s</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">])</span>
<span class="w">         </span><span class="nx">RightSide</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">OptimalMatrixMultiplication</span><span class="p">(</span><span class="nx">s</span><span class="p">,</span><span class="w"> </span><span class="nx">s</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">)</span>
<span class="w">         </span><span class="k">return</span><span class="w"> </span><span class="nx">MatrixMultiply</span><span class="p">(</span><span class="nx">LeftSide</span><span class="p">,</span><span class="w"> </span><span class="nx">RightSide</span><span class="p">)</span><span class="w"> </span>
<span class="w">      </span><span class="k">else</span><span class="w"> </span><span class="k">if</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">j</span>
<span class="w">         </span><span class="k">return</span><span class="w"> </span><span class="nx">Ai</span><span class="w">   </span><span class="c1">// matrix at position i</span>
<span class="w">      </span><span class="k">else</span><span class="w"> </span>
<span class="w">         </span><span class="nx">print</span><span class="w"> </span><span class="s2">"error, i &lt;= j must hold"</span>

<span class="w">    </span><span class="kd">function</span><span class="w"> </span><span class="nx">MatrixMultiply</span><span class="p">(</span><span class="nx">A</span><span class="p">,</span><span class="w"> </span><span class="nx">B</span><span class="p">)</span><span class="w">    </span><span class="c1">// function that multiplies two matrices</span>
<span class="w">      </span><span class="k">if</span><span class="w"> </span><span class="nx">columns</span><span class="p">(</span><span class="nx">A</span><span class="p">)</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">rows</span><span class="p">(</span><span class="nx">B</span><span class="p">)</span><span class="w"> </span>
<span class="w">         </span><span class="k">for</span><span class="w"> </span><span class="nx">i</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">rows</span><span class="p">(</span><span class="nx">A</span><span class="p">)</span>
<span class="w">            </span><span class="k">for</span><span class="w"> </span><span class="nx">j</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">columns</span><span class="p">(</span><span class="nx">B</span><span class="p">)</span>
<span class="w">               </span><span class="nx">C</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">0</span>
<span class="w">               </span><span class="k">for</span><span class="w"> </span><span class="nx">k</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="mf">1</span><span class="p">,</span><span class="w"> </span><span class="nx">columns</span><span class="p">(</span><span class="nx">A</span><span class="p">)</span>
<span class="w">                   </span><span class="nx">C</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">=</span><span class="w"> </span><span class="nx">C</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span><span class="o">+</span><span class="w"> </span><span class="nx">A</span><span class="p">[</span><span class="nx">i</span><span class="p">,</span><span class="w"> </span><span class="nx">k</span><span class="p">]</span><span class="o">*</span><span class="nx">B</span><span class="p">[</span><span class="nx">k</span><span class="p">,</span><span class="w"> </span><span class="nx">j</span><span class="p">]</span><span class="w"> </span>
<span class="w">               </span><span class="k">return</span><span class="w"> </span><span class="nx">C</span><span class="w"> </span>
<span class="w">      </span><span class="k">else</span><span class="w"> </span>
<span class="w">          </span><span class="nx">print</span><span class="w"> </span><span class="s2">"error, incompatible dimensions."</span>
</pre></div>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(3)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="History_of_the_name">History of the name</h2></div><section class="mf-section-3 collapsible-block" id="mf-section-3">
<p>The term <i>dynamic programming</i> was originally used in the 1940s by <a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Richard Bellman</a> to describe the process of solving problems where one needs to find the best decisions one after another.  By 1953, he refined this to the modern meaning, referring specifically to nesting smaller decision problems inside larger decisions,<sup id="cite_ref-17" class="reference"><a href="#cite_note-17"><span class="cite-bracket">[</span>17<span class="cite-bracket">]</span></a></sup>  and the field was thereafter recognized by the <a href="/wiki/IEEE" class="mw-redirect" title="IEEE">IEEE</a> as a <a href="/wiki/Systems_analysis" title="Systems analysis">systems analysis</a> and <a href="/wiki/Engineering" title="Engineering">engineering</a> topic.  Bellman's contribution is remembered in the name of the <a href="/wiki/Bellman_equation" title="Bellman equation">Bellman equation</a>, a central result of dynamic programming which restates an optimization problem in <a href="/wiki/Recursion_(computer_science)" title="Recursion (computer science)">recursive</a> form.
</p><p>Bellman explains the reasoning behind the term <i>dynamic programming</i> in his autobiography, <i>Eye of the Hurricane: An Autobiography</i>:
</p>
<link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1244412712"/><blockquote class="templatequote"><p>I spent the Fall quarter (of 1950) at <a href="/wiki/RAND_Corporation" title="RAND Corporation">RAND</a>. My first task was to find a name for multistage decision processes. An interesting question is, "Where did the name, dynamic programming, come from?" The 1950s were not good years for mathematical research. We had a very interesting gentleman in Washington named <a href="/wiki/Charles_Erwin_Wilson" title="Charles Erwin Wilson">Wilson</a>. He was Secretary of Defense, and he actually had a pathological fear and hatred of the word "research". I'm not using the term lightly; I'm using it precisely. His face would suffuse, he would turn red, and he would get violent if people used the term research in his presence. You can imagine how he felt, then, about the term mathematical. The RAND Corporation was employed by the Air Force, and the Air Force had Wilson as its boss, essentially. Hence, I felt I had to do something to shield Wilson and the Air Force from the fact that I was really doing mathematics inside the RAND Corporation. What title, what name, could I choose? In the first place I was interested in planning, in decision making, in thinking. But planning, is not a good word for various reasons. I decided therefore to use the word "programming". I wanted to get across the idea that this was dynamic, this was multistage, this was time-varying. I thought, let's kill two birds with one stone. Let's take a word that has an absolutely precise meaning, namely dynamic, in the classical physical sense. It also has a very interesting property as an adjective, and that is it's impossible to use the word dynamic in a pejorative sense. Try thinking of some combination that will possibly give it a pejorative meaning. It's impossible. Thus, I thought dynamic programming was a good name. It was something not even a Congressman could object to. So I used it as an umbrella for my activities.</p></blockquote><div class="templatequotecite"><p style="display: inline; padding-left: 2.3em;">— Richard Bellman, <i>Eye of the Hurricane: An Autobiography</i> (1984, page 159)</p></div>
<p>The word <i>dynamic</i> was chosen by Bellman to capture the time-varying aspect of the problems, and because it sounded impressive.<sup id="cite_ref-Eddy_12-1" class="reference"><a href="#cite_note-Eddy-12"><span class="cite-bracket">[</span>12<span class="cite-bracket">]</span></a></sup> The word <i>programming</i> referred to the use of the method to find an optimal <i>program</i>, in the sense of a military schedule for training or logistics.  This usage is the same as that in the phrases <i><a href="/wiki/Linear_programming" title="Linear programming">linear programming</a></i> and <i>mathematical programming</i>, a synonym for <a href="/wiki/Mathematical_optimization" title="Mathematical optimization">mathematical optimization</a>.<sup id="cite_ref-18" class="reference"><a href="#cite_note-18"><span class="cite-bracket">[</span>18<span class="cite-bracket">]</span></a></sup>
</p><p>The above explanation of the origin of the term may be inaccurate: According to Russell and Norvig, the above story "cannot be strictly true, because his first paper using the term (Bellman, 1952) appeared before Wilson became Secretary of Defense in 1953."<sup id="cite_ref-19" class="reference"><a href="#cite_note-19"><span class="cite-bracket">[</span>19<span class="cite-bracket">]</span></a></sup> Also, <a href="/wiki/Harold_J._Kushner" title="Harold J. Kushner">Harold J. Kushner</a> stated in a speech that, "On the other hand, when I asked [Bellman] the same question, he replied that he was trying to upstage <a href="/wiki/George_Dantzig" title="George Dantzig">Dantzig's</a> linear programming by adding dynamic. Perhaps both motivations were true."<sup id="cite_ref-20" class="reference"><a href="#cite_note-20"><span class="cite-bracket">[</span>20<span class="cite-bracket">]</span></a></sup>
</p>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(4)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="See_also">See also</h2></div><section class="mf-section-4 collapsible-block" id="mf-section-4">
<style data-mw-deduplicate="TemplateStyles:r1266661725">.mw-parser-output .portalbox{padding:0;margin:0.5em 0;display:table;box-sizing:border-box;max-width:175px;list-style:none}.mw-parser-output .portalborder{border:1px solid var(--border-color-base,#a2a9b1);padding:0.1em;background:var(--background-color-neutral-subtle,#f8f9fa)}.mw-parser-output .portalbox-entry{display:table-row;font-size:85%;line-height:110%;height:1.9em;font-style:italic;font-weight:bold}.mw-parser-output .portalbox-image{display:table-cell;padding:0.2em;vertical-align:middle;text-align:center}.mw-parser-output .portalbox-link{display:table-cell;padding:0.2em 0.2em 0.2em 0.3em;vertical-align:middle}@media(min-width:720px){.mw-parser-output .portalleft{margin:0.5em 1em 0.5em 0}.mw-parser-output .portalright{clear:right;float:right;margin:0.5em 0 0.5em 1em}}</style><ul role="navigation" aria-label="Portals" class="noprint portalbox portalborder portalright">
<li class="portalbox-entry"><span class="portalbox-image"><span class="noviewer" typeof="mw:File"><span><noscript><img alt="diagram" src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/40px-Complex-adaptive-system.jpg" decoding="async" width="32" height="23" class="mw-file-element" data-file-width="2100" data-file-height="1500"/></noscript><span class="lazy-image-placeholder" style="width: 32px;height: 23px;" data-mw-src="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/40px-Complex-adaptive-system.jpg" data-alt="diagram" data-width="32" data-height="23" data-mw-srcset="//upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/60px-Complex-adaptive-system.jpg 1.5x, //upload.wikimedia.org/wikipedia/commons/thumb/0/00/Complex-adaptive-system.jpg/120px-Complex-adaptive-system.jpg 2x" data-class="mw-file-element"> </span></span></span></span><span class="portalbox-link"><a href="/wiki/Portal:Systems_science" title="Portal:Systems science">Systems science portal</a></span></li><li class="portalbox-entry"><span class="portalbox-image"><span class="skin-invert-image noviewer" typeof="mw:File"><a href="/wiki/File:Nuvola_apps_edu_mathematics_blue-p.svg" class="mw-file-description"><noscript><img alt="icon" src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Nuvola_apps_edu_mathematics_blue-p.svg/40px-Nuvola_apps_edu_mathematics_blue-p.svg.png" decoding="async" width="28" height="28" class="mw-file-element" data-file-width="128" data-file-height="128"/></noscript><span class="lazy-image-placeholder" style="width: 28px;height: 28px;" data-mw-src="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Nuvola_apps_edu_mathematics_blue-p.svg/40px-Nuvola_apps_edu_mathematics_blue-p.svg.png" data-alt="icon" data-width="28" data-height="28" data-mw-srcset="//upload.wikimedia.org/wikipedia/commons/thumb/3/3e/Nuvola_apps_edu_mathematics_blue-p.svg/60px-Nuvola_apps_edu_mathematics_blue-p.svg.png 1.5x" data-class="mw-file-element"> </span></a></span></span><span class="portalbox-link"><a href="/wiki/Portal:Mathematics" title="Portal:Mathematics">Mathematics portal</a></span></li></ul>
<style data-mw-deduplicate="TemplateStyles:r1184024115">.mw-parser-output .div-col{margin-top:0.3em;column-width:30em}.mw-parser-output .div-col-small{font-size:90%}.mw-parser-output .div-col-rules{column-rule:1px solid #aaa}.mw-parser-output .div-col dl,.mw-parser-output .div-col ol,.mw-parser-output .div-col ul{margin-top:0}.mw-parser-output .div-col li,.mw-parser-output .div-col dd{page-break-inside:avoid;break-inside:avoid-column}</style><div class="div-col" style="column-width: 30em;">
<ul><li><a href="/wiki/Convexity_in_economics" title="Convexity in economics">Convexity in economics</a> – Significant topic in economics</li>
<li><a href="/wiki/Greedy_algorithm" title="Greedy algorithm">Greedy algorithm</a> – Sequence of locally optimal choices</li>
<li><a href="/wiki/Non-convexity_(economics)" title="Non-convexity (economics)">Non-convexity (economics)</a> – Violations of the convexity assumptions of elementary economics</li>
<li><a href="/wiki/Stochastic_programming" title="Stochastic programming">Stochastic programming</a> – Framework for modeling optimization problems that involve uncertainty</li>
<li><a href="/wiki/Stochastic_dynamic_programming" title="Stochastic dynamic programming">Stochastic dynamic programming</a> – 1957 technique for modelling problems of decision making under uncertainty</li>
<li><a href="/wiki/Reinforcement_learning" title="Reinforcement learning">Reinforcement learning</a> – Field of machine learning</li></ul>
</div>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(5)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="References">References</h2></div><section class="mf-section-5 collapsible-block" id="mf-section-5">
<style data-mw-deduplicate="TemplateStyles:r1239543626">.mw-parser-output .reflist{margin-bottom:0.5em;list-style-type:decimal}@media screen{.mw-parser-output .reflist{font-size:90%}}.mw-parser-output .reflist .references{font-size:100%;margin-bottom:0;list-style-type:inherit}.mw-parser-output .reflist-columns-2{column-width:30em}.mw-parser-output .reflist-columns-3{column-width:25em}.mw-parser-output .reflist-columns{margin-top:0.3em}.mw-parser-output .reflist-columns ol{margin-top:0}.mw-parser-output .reflist-columns li{page-break-inside:avoid;break-inside:avoid-column}.mw-parser-output .reflist-upper-alpha{list-style-type:upper-alpha}.mw-parser-output .reflist-upper-roman{list-style-type:upper-roman}.mw-parser-output .reflist-lower-alpha{list-style-type:lower-alpha}.mw-parser-output .reflist-lower-greek{list-style-type:lower-greek}.mw-parser-output .reflist-lower-roman{list-style-type:lower-roman}</style><div class="reflist">
<div class="mw-references-wrap mw-references-columns"><ol class="references">
<li id="cite_note-:0-1"><span class="mw-cite-backlink">^ <a href="#cite_ref-:0_1-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-:0_1-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text">Cormen, T. H.; Leiserson, C. E.; Rivest, R. L.; Stein, C. (2001), Introduction to Algorithms (2nd ed.), MIT Press &amp; McGraw–Hill, <style data-mw-deduplicate="TemplateStyles:r1238218222">.mw-parser-output cite.citation{font-style:inherit;word-wrap:break-word}.mw-parser-output .citation q{quotes:"\"""\"""'""'"}.mw-parser-output .citation:target{background-color:rgba(0,127,255,0.133)}.mw-parser-output .id-lock-free.id-lock-free a{background:url("//upload.wikimedia.org/wikipedia/commons/6/65/Lock-green.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-limited.id-lock-limited a,.mw-parser-output .id-lock-registration.id-lock-registration a{background:url("//upload.wikimedia.org/wikipedia/commons/d/d6/Lock-gray-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .id-lock-subscription.id-lock-subscription a{background:url("//upload.wikimedia.org/wikipedia/commons/a/aa/Lock-red-alt-2.svg")right 0.1em center/9px no-repeat}.mw-parser-output .cs1-ws-icon a{background:url("//upload.wikimedia.org/wikipedia/commons/4/4c/Wikisource-logo.svg")right 0.1em center/12px no-repeat}body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-free a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-limited a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-registration a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .id-lock-subscription a,body:not(.skin-timeless):not(.skin-minerva) .mw-parser-output .cs1-ws-icon a{background-size:contain;padding:0 1em 0 0}.mw-parser-output .cs1-code{color:inherit;background:inherit;border:none;padding:inherit}.mw-parser-output .cs1-hidden-error{display:none;color:var(--color-error,#d33)}.mw-parser-output .cs1-visible-error{color:var(--color-error,#d33)}.mw-parser-output .cs1-maint{display:none;color:#085;margin-left:0.3em}.mw-parser-output .cs1-kern-left{padding-left:0.2em}.mw-parser-output .cs1-kern-right{padding-right:0.2em}.mw-parser-output .citation .mw-selflink{font-weight:inherit}@media screen{.mw-parser-output .cs1-format{font-size:95%}html.skin-theme-clientpref-night .mw-parser-output .cs1-maint{color:#18911f}}@media screen and (prefers-color-scheme:dark){html.skin-theme-clientpref-os .mw-parser-output .cs1-maint{color:#18911f}}</style><a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/0-262-03293-7" title="Special:BookSources/0-262-03293-7"><bdi>0-262-03293-7</bdi></a> . pp. 344.</span>
</li>
<li id="cite_note-2"><span class="mw-cite-backlink"><b><a href="#cite_ref-2">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFKamienSchwartz1991" class="citation book cs1"><a href="/wiki/Morton_Kamien" title="Morton Kamien">Kamien, M. I.</a>; <a href="/wiki/Nancy_Schwartz" class="mw-redirect" title="Nancy Schwartz">Schwartz, N. L.</a> (1991). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=0IoGUn8wjDQC&amp;pg=PA261"><i>Dynamic Optimization: The Calculus of Variations and Optimal Control in Economics and Management</i></a> (Second ed.). New York: Elsevier. p. 261. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-444-01609-6" title="Special:BookSources/978-0-444-01609-6"><bdi>978-0-444-01609-6</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Optimization%3A+The+Calculus+of+Variations+and+Optimal+Control+in+Economics+and+Management&amp;rft.place=New+York&amp;rft.pages=261&amp;rft.edition=Second&amp;rft.pub=Elsevier&amp;rft.date=1991&amp;rft.isbn=978-0-444-01609-6&amp;rft.aulast=Kamien&amp;rft.aufirst=M.+I.&amp;rft.au=Schwartz%2C+N.+L.&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3D0IoGUn8wjDQC%26pg%3DPA261&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-3"><span class="mw-cite-backlink"><b><a href="#cite_ref-3">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFKirk1970" class="citation book cs1">Kirk, Donald E. (1970). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=fCh2SAtWIdwC&amp;pg=PA94"><i>Optimal Control Theory: An Introduction</i></a>. Englewood Cliffs, NJ: Prentice-Hall. pp. <span class="nowrap">94–</span>95. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-13-638098-6" title="Special:BookSources/978-0-13-638098-6"><bdi>978-0-13-638098-6</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Optimal+Control+Theory%3A+An+Introduction&amp;rft.place=Englewood+Cliffs%2C+NJ&amp;rft.pages=94-95&amp;rft.pub=Prentice-Hall&amp;rft.date=1970&amp;rft.isbn=978-0-13-638098-6&amp;rft.aulast=Kirk&amp;rft.aufirst=Donald+E.&amp;rft_id=https%3A%2F%2Fbooks.google.com%2Fbooks%3Fid%3DfCh2SAtWIdwC%26pg%3DPA94&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-4"><span class="mw-cite-backlink"><b><a href="#cite_ref-4">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite class="citation web cs1"><a rel="nofollow" class="external text" href="https://jeffe.cs.illinois.edu/teaching/algorithms/">"Algorithms by Jeff Erickson"</a>. <i>jeffe.cs.illinois.edu</i><span class="reference-accessdate">. Retrieved <span class="nowrap">2024-12-06</span></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=jeffe.cs.illinois.edu&amp;rft.atitle=Algorithms+by+Jeff+Erickson&amp;rft_id=https%3A%2F%2Fjeffe.cs.illinois.edu%2Fteaching%2Falgorithms%2F&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-5"><span class="mw-cite-backlink"><b><a href="#cite_ref-5">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite class="citation web cs1"><a rel="nofollow" class="external text" href="http://www.jsoftware.com/help/dictionary/dmcapdot.htm">"M. Memo"</a>. <i>J Vocabulary</i>. J Software<span class="reference-accessdate">. Retrieved <span class="nowrap">28 October</span> 2011</span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=unknown&amp;rft.jtitle=J+Vocabulary&amp;rft.atitle=M.+Memo&amp;rft_id=http%3A%2F%2Fwww.jsoftware.com%2Fhelp%2Fdictionary%2Fdmcapdot.htm&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-6"><span class="mw-cite-backlink"><b><a href="#cite_ref-6">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFDelisi1974" class="citation cs2">Delisi, Charles (July 1974), "Cooperative phenomena in homopolymers: An alternative formulation of the partition function", <i>Biopolymers</i>, <b>13</b> (7): <span class="nowrap">1511–</span>1512, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1002%2Fbip.1974.360130719">10.1002/bip.1974.360130719</a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Biopolymers&amp;rft.atitle=Cooperative+phenomena+in+homopolymers%3A+An+alternative+formulation+of+the+partition+function&amp;rft.volume=13&amp;rft.issue=7&amp;rft.pages=1511-1512&amp;rft.date=1974-07&amp;rft_id=info%3Adoi%2F10.1002%2Fbip.1974.360130719&amp;rft.aulast=Delisi&amp;rft.aufirst=Charles&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-7"><span class="mw-cite-backlink"><b><a href="#cite_ref-7">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFGurskiĭZasedatelev1978" class="citation cs2">Gurskiĭ, G. V.; Zasedatelev, A. S. (September 1978), "Precise relationships for calculating the binding of regulatory proteins and other lattice ligands in double-stranded polynucleotides", <i>Biofizika</i>, <b>23</b> (5): <span class="nowrap">932–</span>946, <a href="/wiki/PMID_(identifier)" class="mw-redirect" title="PMID (identifier)">PMID</a> <a rel="nofollow" class="external text" href="https://pubmed.ncbi.nlm.nih.gov/698271">698271</a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Biofizika&amp;rft.atitle=Precise+relationships+for+calculating+the+binding+of+regulatory+proteins+and+other+lattice+ligands+in+double-stranded+polynucleotides&amp;rft.volume=23&amp;rft.issue=5&amp;rft.pages=932-946&amp;rft.date=1978-09&amp;rft_id=info%3Apmid%2F698271&amp;rft.aulast=Gurski%C4%AD&amp;rft.aufirst=G.+V.&amp;rft.au=Zasedatelev%2C+A.+S.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-sniedovich_06-8"><span class="mw-cite-backlink"><b><a href="#cite_ref-sniedovich_06_8-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFSniedovich2006" class="citation cs2">Sniedovich, M. (2006), <a rel="nofollow" class="external text" href="http://matwbn.icm.edu.pl/ksiazki/cc/cc35/cc3536.pdf">"Dijkstra's algorithm revisited: the dynamic programming connexion"</a> <span class="cs1-format">(PDF)</span>, <i>Journal of Control and Cybernetics</i>, <b>35</b> (3): <span class="nowrap">599–</span>620.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Journal+of+Control+and+Cybernetics&amp;rft.atitle=Dijkstra%27s+algorithm+revisited%3A+the+dynamic+programming+connexion&amp;rft.volume=35&amp;rft.issue=3&amp;rft.pages=599-620&amp;rft.date=2006&amp;rft.aulast=Sniedovich&amp;rft.aufirst=M.&amp;rft_id=http%3A%2F%2Fmatwbn.icm.edu.pl%2Fksiazki%2Fcc%2Fcc35%2Fcc3536.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span> <a rel="nofollow" class="external text" href="http://www.ifors.ms.unimelb.edu.au/tutorial/dijkstra_new/index.html">Online version of the paper with interactive computational modules.</a></span>
</li>
<li id="cite_note-denardo_03-9"><span class="mw-cite-backlink"><b><a href="#cite_ref-denardo_03_9-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFDenardo2003" class="citation cs2">Denardo, E.V. (2003), <i>Dynamic Programming: Models and Applications</i>, Mineola, NY: <a href="/wiki/Dover_Publications" title="Dover Publications">Dover Publications</a>, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-486-42810-9" title="Special:BookSources/978-0-486-42810-9"><bdi>978-0-486-42810-9</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Programming%3A+Models+and+Applications&amp;rft.place=Mineola%2C+NY&amp;rft.pub=Dover+Publications&amp;rft.date=2003&amp;rft.isbn=978-0-486-42810-9&amp;rft.aulast=Denardo&amp;rft.aufirst=E.V.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-sniedovich_10-10"><span class="mw-cite-backlink"><b><a href="#cite_ref-sniedovich_10_10-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFSniedovich2010" class="citation cs2">Sniedovich, M. (2010), <i>Dynamic Programming: Foundations and Principles</i>, <a href="/wiki/Taylor_%26_Francis" title="Taylor &amp; Francis">Taylor &amp; Francis</a>, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-8247-4099-3" title="Special:BookSources/978-0-8247-4099-3"><bdi>978-0-8247-4099-3</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Programming%3A+Foundations+and+Principles&amp;rft.pub=Taylor+%26+Francis&amp;rft.date=2010&amp;rft.isbn=978-0-8247-4099-3&amp;rft.aulast=Sniedovich&amp;rft.aufirst=M.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-11"><span class="mw-cite-backlink"><b><a href="#cite_ref-11">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFDijkstra1959" class="citation journal cs1"><a href="/wiki/Edsger_W._Dijkstra" title="Edsger W. Dijkstra">Dijkstra, E. W.</a> (December 1959). "A note on two problems in connexion with graphs". <i>Numerische Mathematik</i>. <b>1</b> (1): <span class="nowrap">269–</span>271. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1007%2FBF01386390">10.1007/BF01386390</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Numerische+Mathematik&amp;rft.atitle=A+note+on+two+problems+in+connexion+with+graphs&amp;rft.volume=1&amp;rft.issue=1&amp;rft.pages=269-271&amp;rft.date=1959-12&amp;rft_id=info%3Adoi%2F10.1007%2FBF01386390&amp;rft.aulast=Dijkstra&amp;rft.aufirst=E.+W.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-Eddy-12"><span class="mw-cite-backlink">^ <a href="#cite_ref-Eddy_12-0"><sup><i><b>a</b></i></sup></a> <a href="#cite_ref-Eddy_12-1"><sup><i><b>b</b></i></sup></a></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFEddy2004" class="citation journal cs1"><a href="/wiki/Sean_Eddy" title="Sean Eddy">Eddy, S. R.</a> (2004). "What is Dynamic Programming?". <i>Nature Biotechnology</i>. <b>22</b> (7): <span class="nowrap">909–</span>910. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1038%2Fnbt0704-909">10.1038/nbt0704-909</a>. <a href="/wiki/PMID_(identifier)" class="mw-redirect" title="PMID (identifier)">PMID</a> <a rel="nofollow" class="external text" href="https://pubmed.ncbi.nlm.nih.gov/15229554">15229554</a>. <a href="/wiki/S2CID_(identifier)" class="mw-redirect" title="S2CID (identifier)">S2CID</a> <a rel="nofollow" class="external text" href="https://api.semanticscholar.org/CorpusID:5352062">5352062</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Nature+Biotechnology&amp;rft.atitle=What+is+Dynamic+Programming%3F&amp;rft.volume=22&amp;rft.issue=7&amp;rft.pages=909-910&amp;rft.date=2004&amp;rft_id=https%3A%2F%2Fapi.semanticscholar.org%2FCorpusID%3A5352062%23id-name%3DS2CID&amp;rft_id=info%3Apmid%2F15229554&amp;rft_id=info%3Adoi%2F10.1038%2Fnbt0704-909&amp;rft.aulast=Eddy&amp;rft.aufirst=S.+R.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-13"><span class="mw-cite-backlink"><b><a href="#cite_ref-13">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFMoshe_Sniedovich2002" class="citation cs2">Moshe Sniedovich (2002), "OR/MS Games: 2. The Towers of Hanoi Problem", <i>INFORMS Transactions on Education</i>, <b>3</b> (1): <span class="nowrap">34–</span>51, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1287%2Fited.3.1.45">10.1287/ited.3.1.45</a></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=INFORMS+Transactions+on+Education&amp;rft.atitle=OR%2FMS+Games%3A+2.+The+Towers+of+Hanoi+Problem&amp;rft.volume=3&amp;rft.issue=1&amp;rft.pages=34-51&amp;rft.date=2002&amp;rft_id=info%3Adoi%2F10.1287%2Fited.3.1.45&amp;rft.au=Moshe+Sniedovich&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-14"><span class="mw-cite-backlink"><b><a href="#cite_ref-14">^</a></b></span> <span class="reference-text">Konhauser J.D.E., Velleman, D., and Wagon, S. (1996). <a rel="nofollow" class="external text" href="https://books.google.com/books?id=ElSi5V5uS2MC">Which way did the Bicycle Go?</a> Dolciani Mathematical Expositions – No 18.  <a href="/wiki/The_Mathematical_Association_of_America" class="mw-redirect" title="The Mathematical Association of America">The Mathematical Association of America</a>.</span>
</li>
<li id="cite_note-sniedovich_03-15"><span class="mw-cite-backlink"><b><a href="#cite_ref-sniedovich_03_15-0">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFSniedovich2003" class="citation journal cs1">Sniedovich, Moshe (2003). <a rel="nofollow" class="external text" href="https://doi.org/10.1287%2Fited.4.1.48">"OR/MS Games: 4. The Joy of Egg-Dropping in Braunschweig and Hong Kong"</a>. <i>INFORMS Transactions on Education</i>. <b>4</b> (1): <span class="nowrap">48–</span>64. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1287%2Fited.4.1.48">10.1287/ited.4.1.48</a></span>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=INFORMS+Transactions+on+Education&amp;rft.atitle=OR%2FMS+Games%3A+4.+The+Joy+of+Egg-Dropping+in+Braunschweig+and+Hong+Kong&amp;rft.volume=4&amp;rft.issue=1&amp;rft.pages=48-64&amp;rft.date=2003&amp;rft_id=info%3Adoi%2F10.1287%2Fited.4.1.48&amp;rft.aulast=Sniedovich&amp;rft.aufirst=Moshe&amp;rft_id=https%3A%2F%2Fdoi.org%2F10.1287%252Fited.4.1.48&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-16"><span class="mw-cite-backlink"><b><a href="#cite_ref-16">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFDean_Connable_Wills" class="citation cs2">Dean Connable Wills, <a rel="nofollow" class="external text" href="https://ir.library.oregonstate.edu/xmlui/handle/1957/11929?show=full"><i>Connections between combinatorics of permutations and algorithms and geometry</i></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Connections+between+combinatorics+of+permutations+and+algorithms+and+geometry&amp;rft.au=Dean+Connable+Wills&amp;rft_id=https%3A%2F%2Fir.library.oregonstate.edu%2Fxmlui%2Fhandle%2F1957%2F11929%3Fshow%3Dfull&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-17"><span class="mw-cite-backlink"><b><a href="#cite_ref-17">^</a></b></span> <span class="reference-text">Stuart Dreyfus. <a rel="nofollow" class="external text" href="https://web.archive.org/web/20050110161049/http://www.wu-wien.ac.at/usr/h99c/h9951826/bellman_dynprog.pdf">"Richard Bellman on the birth of Dynamical Programming"</a>.</span>
</li>
<li id="cite_note-18"><span class="mw-cite-backlink"><b><a href="#cite_ref-18">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFNocedalWright2006" class="citation book cs1">Nocedal, J.; Wright, S. J. (2006). <span class="id-lock-limited" title="Free access subject to limited trial, subscription normally required"><a rel="nofollow" class="external text" href="https://archive.org/details/numericaloptimiz00noce_639"><i>Numerical Optimization</i></a></span>. Springer. p. <a rel="nofollow" class="external text" href="https://archive.org/details/numericaloptimiz00noce_639/page/n21">9</a>. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/9780387303031" title="Special:BookSources/9780387303031"><bdi>9780387303031</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Numerical+Optimization&amp;rft.pages=9&amp;rft.pub=Springer&amp;rft.date=2006&amp;rft.isbn=9780387303031&amp;rft.aulast=Nocedal&amp;rft.aufirst=J.&amp;rft.au=Wright%2C+S.+J.&amp;rft_id=https%3A%2F%2Farchive.org%2Fdetails%2Fnumericaloptimiz00noce_639&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-19"><span class="mw-cite-backlink"><b><a href="#cite_ref-19">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFRussellNorvig2009" class="citation book cs1">Russell, S.; Norvig, P. (2009). <i>Artificial Intelligence: A Modern Approach</i> (3rd ed.). Prentice Hall. <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-13-207148-2" title="Special:BookSources/978-0-13-207148-2"><bdi>978-0-13-207148-2</bdi></a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Artificial+Intelligence%3A+A+Modern+Approach&amp;rft.edition=3rd&amp;rft.pub=Prentice+Hall&amp;rft.date=2009&amp;rft.isbn=978-0-13-207148-2&amp;rft.aulast=Russell&amp;rft.aufirst=S.&amp;rft.au=Norvig%2C+P.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
<li id="cite_note-20"><span class="mw-cite-backlink"><b><a href="#cite_ref-20">^</a></b></span> <span class="reference-text"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFKushner2004" class="citation web cs1"><a href="/wiki/Harold_J._Kushner" title="Harold J. Kushner">Kushner, Harold J.</a> (2004-07-01). <a rel="nofollow" class="external text" href="https://web.archive.org/web/20141019015133/http://a2c2.org/awards/richard-e-bellman-control-heritage-award/2004-00-00t000000/harold-j-kushner">"Richard E. Bellman Control Heritage Award"</a>. Archived from <a rel="nofollow" class="external text" href="http://a2c2.org/awards/richard-e-bellman-control-heritage-award-0">the original</a> on 2014-10-19.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=unknown&amp;rft.btitle=Richard+E.+Bellman+Control+Heritage+Award&amp;rft.date=2004-07-01&amp;rft.aulast=Kushner&amp;rft.aufirst=Harold+J.&amp;rft_id=http%3A%2F%2Fa2c2.org%2Fawards%2Frichard-e-bellman-control-heritage-award-0&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></span>
</li>
</ol></div></div>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(6)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="Further_reading">Further reading</h2></div><section class="mf-section-6 collapsible-block" id="mf-section-6">
<ul><li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFAddaCooper2003" class="citation cs2">Adda, Jerome; Cooper, Russell (2003), <a rel="nofollow" class="external text" href="https://mitpress.mit.edu/books/dynamic-economics"><i>Dynamic Economics</i></a>, MIT Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/9780262012010" title="Special:BookSources/9780262012010"><bdi>9780262012010</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Economics&amp;rft.pub=MIT+Press&amp;rft.date=2003&amp;rft.isbn=9780262012010&amp;rft.aulast=Adda&amp;rft.aufirst=Jerome&amp;rft.au=Cooper%2C+Russell&amp;rft_id=https%3A%2F%2Fmitpress.mit.edu%2Fbooks%2Fdynamic-economics&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. An accessible introduction to dynamic programming in economics. <a rel="nofollow" class="external text" href="https://sites.google.com/site/coopereconomics/matlab-programs">MATLAB code for the book</a> <a rel="nofollow" class="external text" href="https://web.archive.org/web/20201009085820/https://sites.google.com/site/coopereconomics/matlab-programs">Archived</a> 2020-10-09 at the <a href="/wiki/Wayback_Machine" title="Wayback Machine">Wayback Machine</a>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFBellman1954" class="citation cs2"><a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Bellman, Richard</a> (1954), "The theory of dynamic programming", <i><a href="/wiki/Bulletin_of_the_American_Mathematical_Society" title="Bulletin of the American Mathematical Society">Bulletin of the American Mathematical Society</a></i>, <b>60</b> (6): <span class="nowrap">503–</span>516, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1090%2FS0002-9904-1954-09848-8">10.1090/S0002-9904-1954-09848-8</a></span>, <a href="/wiki/MR_(identifier)" class="mw-redirect" title="MR (identifier)">MR</a> <a rel="nofollow" class="external text" href="https://mathscinet.ams.org/mathscinet-getitem?mr=0067459">0067459</a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Bulletin+of+the+American+Mathematical+Society&amp;rft.atitle=The+theory+of+dynamic+programming&amp;rft.volume=60&amp;rft.issue=6&amp;rft.pages=503-516&amp;rft.date=1954&amp;rft_id=info%3Adoi%2F10.1090%2FS0002-9904-1954-09848-8&amp;rft_id=https%3A%2F%2Fmathscinet.ams.org%2Fmathscinet-getitem%3Fmr%3D0067459%23id-name%3DMR&amp;rft.aulast=Bellman&amp;rft.aufirst=Richard&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. Includes an extensive bibliography of the literature in the area, up to the year 1954.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFBellman1957" class="citation cs2"><a href="/wiki/Richard_Bellman" class="mw-redirect" title="Richard Bellman">Bellman, Richard</a> (1957), <i>Dynamic Programming</i>, Princeton University Press</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Dynamic+Programming&amp;rft.pub=Princeton+University+Press&amp;rft.date=1957&amp;rft.aulast=Bellman&amp;rft.aufirst=Richard&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. Dover paperback edition (2003), <link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/0-486-42809-5" title="Special:BookSources/0-486-42809-5"><bdi>0-486-42809-5</bdi></a>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFCormenLeisersonRivestStein2001" class="citation cs2"><a href="/wiki/Thomas_H._Cormen" title="Thomas H. Cormen">Cormen, Thomas H.</a>; <a href="/wiki/Charles_E._Leiserson" title="Charles E. Leiserson">Leiserson, Charles E.</a>; <a href="/wiki/Ronald_L._Rivest" class="mw-redirect" title="Ronald L. Rivest">Rivest, Ronald L.</a>; <a href="/wiki/Clifford_Stein" title="Clifford Stein">Stein, Clifford</a> (2001), <a href="/wiki/Introduction_to_Algorithms" title="Introduction to Algorithms"><i>Introduction to Algorithms</i></a> (2nd ed.), MIT Press &amp; McGraw–Hill, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-262-03293-3" title="Special:BookSources/978-0-262-03293-3"><bdi>978-0-262-03293-3</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Introduction+to+Algorithms&amp;rft.edition=2nd&amp;rft.pub=MIT+Press+%26+McGraw%E2%80%93Hill&amp;rft.date=2001&amp;rft.isbn=978-0-262-03293-3&amp;rft.aulast=Cormen&amp;rft.aufirst=Thomas+H.&amp;rft.au=Leiserson%2C+Charles+E.&amp;rft.au=Rivest%2C+Ronald+L.&amp;rft.au=Stein%2C+Clifford&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>. Especially pp. 323–69.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFDreyfusLaw1977" class="citation cs2">Dreyfus, Stuart E.; Law, Averill M. (1977), <i>The Art and Theory of Dynamic Programming</i>, Academic Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-12-221860-6" title="Special:BookSources/978-0-12-221860-6"><bdi>978-0-12-221860-6</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=The+Art+and+Theory+of+Dynamic+Programming&amp;rft.pub=Academic+Press&amp;rft.date=1977&amp;rft.isbn=978-0-12-221860-6&amp;rft.aulast=Dreyfus&amp;rft.aufirst=Stuart+E.&amp;rft.au=Law%2C+Averill+M.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFGiegerichMeyerSteffen2004" class="citation cs2">Giegerich, R.; Meyer, C.; Steffen, P. (2004), <a rel="nofollow" class="external text" href="http://bibiserv.techfak.uni-bielefeld.de/adp/ps/GIE-MEY-STE-2004.pdf">"A Discipline of Dynamic Programming over Sequence Data"</a> <span class="cs1-format">(PDF)</span>, <i>Science of Computer Programming</i>, <b>51</b> (3): <span class="nowrap">215–</span>263, <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<span class="id-lock-free" title="Freely accessible"><a rel="nofollow" class="external text" href="https://doi.org/10.1016%2Fj.scico.2003.12.005">10.1016/j.scico.2003.12.005</a></span></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Science+of+Computer+Programming&amp;rft.atitle=A+Discipline+of+Dynamic+Programming+over+Sequence+Data&amp;rft.volume=51&amp;rft.issue=3&amp;rft.pages=215-263&amp;rft.date=2004&amp;rft_id=info%3Adoi%2F10.1016%2Fj.scico.2003.12.005&amp;rft.aulast=Giegerich&amp;rft.aufirst=R.&amp;rft.au=Meyer%2C+C.&amp;rft.au=Steffen%2C+P.&amp;rft_id=http%3A%2F%2Fbibiserv.techfak.uni-bielefeld.de%2Fadp%2Fps%2FGIE-MEY-STE-2004.pdf&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFMeyn2007" class="citation cs2">Meyn, Sean (2007), <a rel="nofollow" class="external text" href="https://web.archive.org/web/20100619011046/https://netfiles.uiuc.edu/meyn/www/spm_files/CTCN/CTCN.html"><i>Control Techniques for Complex Networks</i></a>, Cambridge University Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-521-88441-9" title="Special:BookSources/978-0-521-88441-9"><bdi>978-0-521-88441-9</bdi></a>, archived from <a rel="nofollow" class="external text" href="https://netfiles.uiuc.edu/meyn/www/spm_files/CTCN/CTCN.html">the original</a> on 2010-06-19</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Control+Techniques+for+Complex+Networks&amp;rft.pub=Cambridge+University+Press&amp;rft.date=2007&amp;rft.isbn=978-0-521-88441-9&amp;rft.aulast=Meyn&amp;rft.aufirst=Sean&amp;rft_id=https%3A%2F%2Fnetfiles.uiuc.edu%2Fmeyn%2Fwww%2Fspm_files%2FCTCN%2FCTCN.html&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFSritharan1991" class="citation journal cs1">Sritharan, S. S. (1991). "Dynamic Programming of the Navier-Stokes Equations". <i>Systems and Control Letters</i>. <b>16</b> (4): <span class="nowrap">299–</span>307. <a href="/wiki/Doi_(identifier)" class="mw-redirect" title="Doi (identifier)">doi</a>:<a rel="nofollow" class="external text" href="https://doi.org/10.1016%2F0167-6911%2891%2990020-f">10.1016/0167-6911(91)90020-f</a>.</cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Ajournal&amp;rft.genre=article&amp;rft.jtitle=Systems+and+Control+Letters&amp;rft.atitle=Dynamic+Programming+of+the+Navier-Stokes+Equations&amp;rft.volume=16&amp;rft.issue=4&amp;rft.pages=299-307&amp;rft.date=1991&amp;rft_id=info%3Adoi%2F10.1016%2F0167-6911%2891%2990020-f&amp;rft.aulast=Sritharan&amp;rft.aufirst=S.+S.&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span></li>
<li><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1238218222"/><cite id="CITEREFStokeyLucasPrescott1989" class="citation cs2"><a href="/wiki/Nancy_Stokey" title="Nancy Stokey">Stokey, Nancy</a>; <a href="/wiki/Robert_E._Lucas" class="mw-redirect" title="Robert E. Lucas">Lucas, Robert E.</a>; <a href="/wiki/Edward_Prescott" class="mw-redirect" title="Edward Prescott">Prescott, Edward</a> (1989), <i>Recursive Methods in Economic Dynamics</i>, Harvard Univ. Press, <a href="/wiki/ISBN_(identifier)" class="mw-redirect" title="ISBN (identifier)">ISBN</a> <a href="/wiki/Special:BookSources/978-0-674-75096-8" title="Special:BookSources/978-0-674-75096-8"><bdi>978-0-674-75096-8</bdi></a></cite><span title="ctx_ver=Z39.88-2004&amp;rft_val_fmt=info%3Aofi%2Ffmt%3Akev%3Amtx%3Abook&amp;rft.genre=book&amp;rft.btitle=Recursive+Methods+in+Economic+Dynamics&amp;rft.pub=Harvard+Univ.+Press&amp;rft.date=1989&amp;rft.isbn=978-0-674-75096-8&amp;rft.aulast=Stokey&amp;rft.aufirst=Nancy&amp;rft.au=Lucas%2C+Robert+E.&amp;rft.au=Prescott%2C+Edward&amp;rfr_id=info%3Asid%2Fen.wikipedia.org%3ADynamic+programming" class="Z3988"></span>.</li></ul>
</section><div class="mw-heading mw-heading2 section-heading" onclick="mfTempOpenSection(7)"><span class="indicator mf-icon mf-icon-expand mf-icon--small"></span><h2 id="External_links">External links</h2></div><section class="mf-section-7 collapsible-block" id="mf-section-7">
<ul><li>King, Ian, 2002 (1987), "<a rel="nofollow" class="external text" href="https://researchspace.auckland.ac.nz/bitstream/handle/2292/190/230.pdf">A Simple Introduction to Dynamic Programming in Macroeconomic Models.</a>" An introduction to dynamic programming as an important tool in economic theory.</li></ul>
<p><br/>
</p><p><br/>
</p>
<div class="navbox-styles"><style data-mw-deduplicate="TemplateStyles:r1129693374">.mw-parser-output .hlist dl,.mw-parser-output .hlist ol,.mw-parser-output .hlist ul{margin:0;padding:0}.mw-parser-output .hlist dd,.mw-parser-output .hlist dt,.mw-parser-output .hlist li{margin:0;display:inline}.mw-parser-output .hlist.inline,.mw-parser-output .hlist.inline dl,.mw-parser-output .hlist.inline ol,.mw-parser-output .hlist.inline ul,.mw-parser-output .hlist dl dl,.mw-parser-output .hlist dl ol,.mw-parser-output .hlist dl ul,.mw-parser-output .hlist ol dl,.mw-parser-output .hlist ol ol,.mw-parser-output .hlist ol ul,.mw-parser-output .hlist ul dl,.mw-parser-output .hlist ul ol,.mw-parser-output .hlist ul ul{display:inline}.mw-parser-output .hlist .mw-empty-li{display:none}.mw-parser-output .hlist dt::after{content:": "}.mw-parser-output .hlist dd::after,.mw-parser-output .hlist li::after{content:" · ";font-weight:bold}.mw-parser-output .hlist dd:last-child::after,.mw-parser-output .hlist dt:last-child::after,.mw-parser-output .hlist li:last-child::after{content:none}.mw-parser-output .hlist dd dd:first-child::before,.mw-parser-output .hlist dd dt:first-child::before,.mw-parser-output .hlist dd li:first-child::before,.mw-parser-output .hlist dt dd:first-child::before,.mw-parser-output .hlist dt dt:first-child::before,.mw-parser-output .hlist dt li:first-child::before,.mw-parser-output .hlist li dd:first-child::before,.mw-parser-output .hlist li dt:first-child::before,.mw-parser-output .hlist li li:first-child::before{content:" (";font-weight:normal}.mw-parser-output .hlist dd dd:last-child::after,.mw-parser-output .hlist dd dt:last-child::after,.mw-parser-output .hlist dd li:last-child::after,.mw-parser-output .hlist dt dd:last-child::after,.mw-parser-output .hlist dt dt:last-child::after,.mw-parser-output .hlist dt li:last-child::after,.mw-parser-output .hlist li dd:last-child::after,.mw-parser-output .hlist li dt:last-child::after,.mw-parser-output .hlist li li:last-child::after{content:")";font-weight:normal}.mw-parser-output .hlist ol{counter-reset:listitem}.mw-parser-output .hlist ol>li{counter-increment:listitem}.mw-parser-output .hlist ol>li::before{content:" "counter(listitem)"\a0 "}.mw-parser-output .hlist dd ol>li:first-child::before,.mw-parser-output .hlist dt ol>li:first-child::before,.mw-parser-output .hlist li ol>li:first-child::before{content:" ("counter(listitem)"\a0 "}</style><style data-mw-deduplicate="TemplateStyles:r1236075235">.mw-parser-output .navbox{box-sizing:border-box;border:1px solid #a2a9b1;width:100%;clear:both;font-size:88%;text-align:center;padding:1px;margin:1em auto 0}.mw-parser-output .navbox .navbox{margin-top:0}.mw-parser-output .navbox+.navbox,.mw-parser-output .navbox+.navbox-styles+.navbox{margin-top:-1px}.mw-parser-output .navbox-inner,.mw-parser-output .navbox-subgroup{width:100%}.mw-parser-output .navbox-group,.mw-parser-output .navbox-title,.mw-parser-output .navbox-abovebelow{padding:0.25em 1em;line-height:1.5em;text-align:center}.mw-parser-output .navbox-group{white-space:nowrap;text-align:right}.mw-parser-output .navbox,.mw-parser-output .navbox-subgroup{background-color:#fdfdfd}.mw-parser-output .navbox-list{line-height:1.5em;border-color:#fdfdfd}.mw-parser-output .navbox-list-with-group{text-align:left;border-left-width:2px;border-left-style:solid}.mw-parser-output tr+tr>.navbox-abovebelow,.mw-parser-output tr+tr>.navbox-group,.mw-parser-output tr+tr>.navbox-image,.mw-parser-output tr+tr>.navbox-list{border-top:2px solid #fdfdfd}.mw-parser-output .navbox-title{background-color:#ccf}.mw-parser-output .navbox-abovebelow,.mw-parser-output .navbox-group,.mw-parser-output .navbox-subgroup .navbox-title{background-color:#ddf}.mw-parser-output .navbox-subgroup .navbox-group,.mw-parser-output .navbox-subgroup .navbox-abovebelow{background-color:#e6e6ff}.mw-parser-output .navbox-even{background-color:#f7f7f7}.mw-parser-output .navbox-odd{background-color:transparent}.mw-parser-output .navbox .hlist td dl,.mw-parser-output .navbox .hlist td ol,.mw-parser-output .navbox .hlist td ul,.mw-parser-output .navbox td.hlist dl,.mw-parser-output .navbox td.hlist ol,.mw-parser-output .navbox td.hlist ul{padding:0.125em 0}.mw-parser-output .navbox .navbar{display:block;font-size:100%}.mw-parser-output .navbox-title .navbar{float:left;text-align:left;margin-right:0.5em}body.skin--responsive .mw-parser-output .navbox-image img{max-width:none!important}@media print{body.ns-0 .mw-parser-output .navbox{display:none!important}}</style></div>
<div class="navbox-styles"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374"/><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236075235"/></div>
<div class="navbox-styles"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374"/><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236075235"/></div>
<div class="navbox-styles"><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1129693374"/><link rel="mw-deduplicated-inline-style" href="mw-data:TemplateStyles:r1236075235"/></div>
<!-- 
NewPP limit report
Parsed by mw‐web.eqiad.main‐5f578674cf‐h8w5h
Cached time: 20250806223825
Cache expiry: 2592000
Reduced expiry: false
Complications: [vary‐revision‐sha1, show‐toc]
CPU time usage: 1.202 seconds
Real time usage: 1.636 seconds
Preprocessor visited node count: 5686/1000000
Revision size: 60633/2097152 bytes
Post‐expand include size: 158033/2097152 bytes
Template argument size: 6914/2097152 bytes
Highest expansion depth: 12/100
Expensive parser function count: 9/500
Unstrip recursion depth: 1/20
Unstrip post‐expand size: 137143/5000000 bytes
Lua time usage: 0.697/10.000 seconds
Lua memory usage: 21467189/52428800 bytes
Number of Wikibase entities loaded: 1/500
-->
<!--
Transclusion expansion time report (%,ms,calls,template)
100.00% 1089.396      1 -total
 24.35%  265.225      1 Template:Reflist
 15.00%  163.456      6 Template:Annotated_link
 13.35%  145.452     15 Template:Citation
 11.12%  121.121      1 Template:Short_description
 10.94%  119.212      1 Template:Optimization_algorithms
 10.65%  115.967      1 Template:Navbox_with_collapsible_groups
  7.89%   85.940      2 Template:Pagetype
  6.84%   74.559      1 Template:ISBN
  4.98%   54.223      4 Template:Cite_book
-->

<!-- Saved in parser cache with key enwiki:pcache:125297:|#|:idhash:canonical and timestamp 20250806223825 and revision id 1302979653. Rendering was triggered because: page-view
 -->
</section></div>
<!-- MobileFormatter took 0.036 seconds --><noscript><img src="https://en.m.wikipedia.org/wiki/Special:CentralAutoLogin/start?type=1x1&amp;usesul3=1" alt="" width="1" height="1" style="border: none; position: absolute;"></noscript>
<div class="printfooter" data-nosnippet="">Retrieved from "<a dir="ltr" href="https://en.wikipedia.org/w/index.php?title=Dynamic_programming&amp;oldid=1302979653">https://en.wikipedia.org/w/index.php?title=Dynamic_programming&amp;oldid=1302979653</a>"</div></div>
				
			</div>
			<div class="post-content" id="page-secondary-actions">
			</div>
		</main>
		<footer class="mw-footer minerva-footer" role="contentinfo">
		  <a class="last-modified-bar" href="/w/index.php?title=Dynamic_programming&amp;action=history">
  	<div class="post-content last-modified-bar__content">
  		 <span class="minerva-icon minerva-icon-size-medium minerva-icon--modified-history"></span>
 
  		<span class="last-modified-bar__text modified-enhancement"
  				data-user-name="Cedar101"
  				data-user-gender="unknown"
  				data-timestamp="1753707635">
  				<span>Last edited on 28 July 2025, at 13:00</span>
  		</span>
  		 <span class="minerva-icon minerva-icon-size-small minerva-icon--expand"></span>
 
  	</div>
  </a>
	<div class="post-content footer-content">
			<div id='mw-data-after-content'>
	<div class="read-more-container"></div>
</div>

			<div id="p-lang">
	    <h4>Languages</h4>
	    <section>
	        <ul id="p-variants" class="minerva-languages"></ul>
	        <ul class="minerva-languages"><li class="interlanguage-link interwiki-ar mw-list-item"><a href="https://ar.wikipedia.org/wiki/%D8%A8%D8%B1%D9%85%D8%AC%D8%A9_%D8%AF%D9%8A%D9%86%D8%A7%D9%85%D9%8A%D9%83%D9%8A%D8%A9" title="برمجة ديناميكية – Arabic" lang="ar" hreflang="ar" data-title="برمجة ديناميكية" data-language-autonym="العربية" data-language-local-name="Arabic" class="interlanguage-link-target"><span>العربية</span></a></li><li class="interlanguage-link interwiki-bn mw-list-item"><a href="https://bn.wikipedia.org/wiki/%E0%A6%A1%E0%A6%BE%E0%A6%87%E0%A6%A8%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%95_%E0%A6%AA%E0%A7%8D%E0%A6%B0%E0%A7%8B%E0%A6%97%E0%A7%8D%E0%A6%B0%E0%A6%BE%E0%A6%AE%E0%A6%BF%E0%A6%82" title="ডাইনামিক প্রোগ্রামিং – Bangla" lang="bn" hreflang="bn" data-title="ডাইনামিক প্রোগ্রামিং" data-language-autonym="বাংলা" data-language-local-name="Bangla" class="interlanguage-link-target"><span>বাংলা</span></a></li><li class="interlanguage-link interwiki-bg mw-list-item"><a href="https://bg.wikipedia.org/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%BD%D0%BE_%D0%BE%D0%BF%D1%82%D0%B8%D0%BC%D0%B8%D1%80%D0%B0%D0%BD%D0%B5" title="Динамично оптимиране – Bulgarian" lang="bg" hreflang="bg" data-title="Динамично оптимиране" data-language-autonym="Български" data-language-local-name="Bulgarian" class="interlanguage-link-target"><span>Български</span></a></li><li class="interlanguage-link interwiki-ca mw-list-item"><a href="https://ca.wikipedia.org/wiki/Programaci%C3%B3_din%C3%A0mica" title="Programació dinàmica – Catalan" lang="ca" hreflang="ca" data-title="Programació dinàmica" data-language-autonym="Català" data-language-local-name="Catalan" class="interlanguage-link-target"><span>Català</span></a></li><li class="interlanguage-link interwiki-cs mw-list-item"><a href="https://cs.wikipedia.org/wiki/Dynamick%C3%A9_programov%C3%A1n%C3%AD" title="Dynamické programování – Czech" lang="cs" hreflang="cs" data-title="Dynamické programování" data-language-autonym="Čeština" data-language-local-name="Czech" class="interlanguage-link-target"><span>Čeština</span></a></li><li class="interlanguage-link interwiki-da mw-list-item"><a href="https://da.wikipedia.org/wiki/Dynamisk_programmering" title="Dynamisk programmering – Danish" lang="da" hreflang="da" data-title="Dynamisk programmering" data-language-autonym="Dansk" data-language-local-name="Danish" class="interlanguage-link-target"><span>Dansk</span></a></li><li class="interlanguage-link interwiki-de mw-list-item"><a href="https://de.wikipedia.org/wiki/Dynamische_Programmierung" title="Dynamische Programmierung – German" lang="de" hreflang="de" data-title="Dynamische Programmierung" data-language-autonym="Deutsch" data-language-local-name="German" class="interlanguage-link-target"><span>Deutsch</span></a></li><li class="interlanguage-link interwiki-et mw-list-item"><a href="https://et.wikipedia.org/wiki/D%C3%BCnaamiline_programmeerimine" title="Dünaamiline programmeerimine – Estonian" lang="et" hreflang="et" data-title="Dünaamiline programmeerimine" data-language-autonym="Eesti" data-language-local-name="Estonian" class="interlanguage-link-target"><span>Eesti</span></a></li><li class="interlanguage-link interwiki-el mw-list-item"><a href="https://el.wikipedia.org/wiki/%CE%94%CF%85%CE%BD%CE%B1%CE%BC%CE%B9%CE%BA%CF%8C%CF%82_%CF%80%CF%81%CE%BF%CE%B3%CF%81%CE%B1%CE%BC%CE%BC%CE%B1%CF%84%CE%B9%CF%83%CE%BC%CF%8C%CF%82" title="Δυναμικός προγραμματισμός – Greek" lang="el" hreflang="el" data-title="Δυναμικός προγραμματισμός" data-language-autonym="Ελληνικά" data-language-local-name="Greek" class="interlanguage-link-target"><span>Ελληνικά</span></a></li><li class="interlanguage-link interwiki-es mw-list-item"><a href="https://es.wikipedia.org/wiki/Programaci%C3%B3n_din%C3%A1mica" title="Programación dinámica – Spanish" lang="es" hreflang="es" data-title="Programación dinámica" data-language-autonym="Español" data-language-local-name="Spanish" class="interlanguage-link-target"><span>Español</span></a></li><li class="interlanguage-link interwiki-eu mw-list-item"><a href="https://eu.wikipedia.org/wiki/Programazio_dinamiko" title="Programazio dinamiko – Basque" lang="eu" hreflang="eu" data-title="Programazio dinamiko" data-language-autonym="Euskara" data-language-local-name="Basque" class="interlanguage-link-target"><span>Euskara</span></a></li><li class="interlanguage-link interwiki-fa mw-list-item"><a href="https://fa.wikipedia.org/wiki/%D8%A8%D8%B1%D9%86%D8%A7%D9%85%D9%87%E2%80%8C%D9%86%D9%88%DB%8C%D8%B3%DB%8C_%D9%BE%D9%88%DB%8C%D8%A7" title="برنامه‌نویسی پویا – Persian" lang="fa" hreflang="fa" data-title="برنامه‌نویسی پویا" data-language-autonym="فارسی" data-language-local-name="Persian" class="interlanguage-link-target"><span>فارسی</span></a></li><li class="interlanguage-link interwiki-fr mw-list-item"><a href="https://fr.wikipedia.org/wiki/Programmation_dynamique" title="Programmation dynamique – French" lang="fr" hreflang="fr" data-title="Programmation dynamique" data-language-autonym="Français" data-language-local-name="French" class="interlanguage-link-target"><span>Français</span></a></li><li class="interlanguage-link interwiki-gl mw-list-item"><a href="https://gl.wikipedia.org/wiki/Programaci%C3%B3n_din%C3%A1mica_(computaci%C3%B3n)" title="Programación dinámica (computación) – Galician" lang="gl" hreflang="gl" data-title="Programación dinámica (computación)" data-language-autonym="Galego" data-language-local-name="Galician" class="interlanguage-link-target"><span>Galego</span></a></li><li class="interlanguage-link interwiki-ko mw-list-item"><a href="https://ko.wikipedia.org/wiki/%EB%8F%99%EC%A0%81_%EA%B3%84%ED%9A%8D%EB%B2%95" title="동적 계획법 – Korean" lang="ko" hreflang="ko" data-title="동적 계획법" data-language-autonym="한국어" data-language-local-name="Korean" class="interlanguage-link-target"><span>한국어</span></a></li><li class="interlanguage-link interwiki-hi mw-list-item"><a href="https://hi.wikipedia.org/wiki/%E0%A4%97%E0%A4%A4%E0%A4%BF%E0%A4%95_%E0%A4%95%E0%A5%8D%E0%A4%B0%E0%A4%AE%E0%A4%BE%E0%A4%A6%E0%A5%87%E0%A4%B6%E0%A4%A8" title="गतिक क्रमादेशन – Hindi" lang="hi" hreflang="hi" data-title="गतिक क्रमादेशन" data-language-autonym="हिन्दी" data-language-local-name="Hindi" class="interlanguage-link-target"><span>हिन्दी</span></a></li><li class="interlanguage-link interwiki-id mw-list-item"><a href="https://id.wikipedia.org/wiki/Pemrograman_dinamis" title="Pemrograman dinamis – Indonesian" lang="id" hreflang="id" data-title="Pemrograman dinamis" data-language-autonym="Bahasa Indonesia" data-language-local-name="Indonesian" class="interlanguage-link-target"><span>Bahasa Indonesia</span></a></li><li class="interlanguage-link interwiki-it mw-list-item"><a href="https://it.wikipedia.org/wiki/Programmazione_dinamica" title="Programmazione dinamica – Italian" lang="it" hreflang="it" data-title="Programmazione dinamica" data-language-autonym="Italiano" data-language-local-name="Italian" class="interlanguage-link-target"><span>Italiano</span></a></li><li class="interlanguage-link interwiki-he mw-list-item"><a href="https://he.wikipedia.org/wiki/%D7%AA%D7%9B%D7%A0%D7%95%D7%9F_%D7%93%D7%99%D7%A0%D7%9E%D7%99" title="תכנון דינמי – Hebrew" lang="he" hreflang="he" data-title="תכנון דינמי" data-language-autonym="עברית" data-language-local-name="Hebrew" class="interlanguage-link-target"><span>עברית</span></a></li><li class="interlanguage-link interwiki-ka mw-list-item"><a href="https://ka.wikipedia.org/wiki/%E1%83%93%E1%83%98%E1%83%9C%E1%83%90%E1%83%9B%E1%83%98%E1%83%99%E1%83%A3%E1%83%A0%E1%83%98_%E1%83%9E%E1%83%A0%E1%83%9D%E1%83%92%E1%83%A0%E1%83%90%E1%83%9B%E1%83%98%E1%83%A0%E1%83%94%E1%83%91%E1%83%90" title="დინამიკური პროგრამირება – Georgian" lang="ka" hreflang="ka" data-title="დინამიკური პროგრამირება" data-language-autonym="ქართული" data-language-local-name="Georgian" class="interlanguage-link-target"><span>ქართული</span></a></li><li class="interlanguage-link interwiki-kk mw-list-item"><a href="https://kk.wikipedia.org/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D0%BA%D0%B0%D0%BB%D1%8B%D2%9B_%D0%B1%D0%B0%D2%93%D0%B4%D0%B0%D1%80%D0%BB%D0%B0%D0%BC%D0%B0%D0%BB%D0%B0%D1%83" title="Динамикалық бағдарламалау – Kazakh" lang="kk" hreflang="kk" data-title="Динамикалық бағдарламалау" data-language-autonym="Қазақша" data-language-local-name="Kazakh" class="interlanguage-link-target"><span>Қазақша</span></a></li><li class="interlanguage-link interwiki-lt mw-list-item"><a href="https://lt.wikipedia.org/wiki/Dinaminis_programavimas" title="Dinaminis programavimas – Lithuanian" lang="lt" hreflang="lt" data-title="Dinaminis programavimas" data-language-autonym="Lietuvių" data-language-local-name="Lithuanian" class="interlanguage-link-target"><span>Lietuvių</span></a></li><li class="interlanguage-link interwiki-ml mw-list-item"><a href="https://ml.wikipedia.org/wiki/%E0%B4%A1%E0%B5%88%E0%B4%A8%E0%B4%BE%E0%B4%AE%E0%B4%BF%E0%B4%95%E0%B5%8D_%E0%B4%AA%E0%B5%8D%E0%B4%B0%E0%B5%8B%E0%B4%97%E0%B5%8D%E0%B4%B0%E0%B4%BE%E0%B4%AE%E0%B4%BF%E0%B4%99%E0%B5%8D" title="ഡൈനാമിക് പ്രോഗ്രാമിങ് – Malayalam" lang="ml" hreflang="ml" data-title="ഡൈനാമിക് പ്രോഗ്രാമിങ്" data-language-autonym="മലയാളം" data-language-local-name="Malayalam" class="interlanguage-link-target"><span>മലയാളം</span></a></li><li class="interlanguage-link interwiki-ja mw-list-item"><a href="https://ja.wikipedia.org/wiki/%E5%8B%95%E7%9A%84%E8%A8%88%E7%94%BB%E6%B3%95" title="動的計画法 – Japanese" lang="ja" hreflang="ja" data-title="動的計画法" data-language-autonym="日本語" data-language-local-name="Japanese" class="interlanguage-link-target"><span>日本語</span></a></li><li class="interlanguage-link interwiki-no mw-list-item"><a href="https://no.wikipedia.org/wiki/Dynamisk_programmering" title="Dynamisk programmering – Norwegian Bokmål" lang="nb" hreflang="nb" data-title="Dynamisk programmering" data-language-autonym="Norsk bokmål" data-language-local-name="Norwegian Bokmål" class="interlanguage-link-target"><span>Norsk bokmål</span></a></li><li class="interlanguage-link interwiki-uz mw-list-item"><a href="https://uz.wikipedia.org/wiki/Dinamik_dasturlash" title="Dinamik dasturlash – Uzbek" lang="uz" hreflang="uz" data-title="Dinamik dasturlash" data-language-autonym="Oʻzbekcha / ўзбекча" data-language-local-name="Uzbek" class="interlanguage-link-target"><span>Oʻzbekcha / ўзбекча</span></a></li><li class="interlanguage-link interwiki-pl mw-list-item"><a href="https://pl.wikipedia.org/wiki/Programowanie_dynamiczne" title="Programowanie dynamiczne – Polish" lang="pl" hreflang="pl" data-title="Programowanie dynamiczne" data-language-autonym="Polski" data-language-local-name="Polish" class="interlanguage-link-target"><span>Polski</span></a></li><li class="interlanguage-link interwiki-pt mw-list-item"><a href="https://pt.wikipedia.org/wiki/Programa%C3%A7%C3%A3o_din%C3%A2mica" title="Programação dinâmica – Portuguese" lang="pt" hreflang="pt" data-title="Programação dinâmica" data-language-autonym="Português" data-language-local-name="Portuguese" class="interlanguage-link-target"><span>Português</span></a></li><li class="interlanguage-link interwiki-ru mw-list-item"><a href="https://ru.wikipedia.org/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%B5%D1%81%D0%BA%D0%BE%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%BC%D0%B8%D1%80%D0%BE%D0%B2%D0%B0%D0%BD%D0%B8%D0%B5" title="Динамическое программирование – Russian" lang="ru" hreflang="ru" data-title="Динамическое программирование" data-language-autonym="Русский" data-language-local-name="Russian" class="interlanguage-link-target"><span>Русский</span></a></li><li class="interlanguage-link interwiki-simple mw-list-item"><a href="https://simple.wikipedia.org/wiki/Dynamic_programming" title="Dynamic programming – Simple English" lang="en-simple" hreflang="en-simple" data-title="Dynamic programming" data-language-autonym="Simple English" data-language-local-name="Simple English" class="interlanguage-link-target"><span>Simple English</span></a></li><li class="interlanguage-link interwiki-sl mw-list-item"><a href="https://sl.wikipedia.org/wiki/Dinami%C4%8Dno_programiranje" title="Dinamično programiranje – Slovenian" lang="sl" hreflang="sl" data-title="Dinamično programiranje" data-language-autonym="Slovenščina" data-language-local-name="Slovenian" class="interlanguage-link-target"><span>Slovenščina</span></a></li><li class="interlanguage-link interwiki-sr mw-list-item"><a href="https://sr.wikipedia.org/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D0%B8%D1%87%D0%BA%D0%BE_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D0%B8%D1%80%D0%B0%D1%9A%D0%B5" title="Динамичко програмирање – Serbian" lang="sr" hreflang="sr" data-title="Динамичко програмирање" data-language-autonym="Српски / srpski" data-language-local-name="Serbian" class="interlanguage-link-target"><span>Српски / srpski</span></a></li><li class="interlanguage-link interwiki-sh mw-list-item"><a href="https://sh.wikipedia.org/wiki/Dinami%C4%8Dko_programiranje" title="Dinamičko programiranje – Serbo-Croatian" lang="sh" hreflang="sh" data-title="Dinamičko programiranje" data-language-autonym="Srpskohrvatski / српскохрватски" data-language-local-name="Serbo-Croatian" class="interlanguage-link-target"><span>Srpskohrvatski / српскохрватски</span></a></li><li class="interlanguage-link interwiki-sv mw-list-item"><a href="https://sv.wikipedia.org/wiki/Dynamisk_programmering" title="Dynamisk programmering – Swedish" lang="sv" hreflang="sv" data-title="Dynamisk programmering" data-language-autonym="Svenska" data-language-local-name="Swedish" class="interlanguage-link-target"><span>Svenska</span></a></li><li class="interlanguage-link interwiki-tl mw-list-item"><a href="https://tl.wikipedia.org/wiki/Dinamikang_pagpoprograma" title="Dinamikang pagpoprograma – Tagalog" lang="tl" hreflang="tl" data-title="Dinamikang pagpoprograma" data-language-autonym="Tagalog" data-language-local-name="Tagalog" class="interlanguage-link-target"><span>Tagalog</span></a></li><li class="interlanguage-link interwiki-th mw-list-item"><a href="https://th.wikipedia.org/wiki/%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9E%E0%B8%A5%E0%B8%A7%E0%B8%B1%E0%B8%95" title="กำหนดการพลวัต – Thai" lang="th" hreflang="th" data-title="กำหนดการพลวัต" data-language-autonym="ไทย" data-language-local-name="Thai" class="interlanguage-link-target"><span>ไทย</span></a></li><li class="interlanguage-link interwiki-tr mw-list-item"><a href="https://tr.wikipedia.org/wiki/Dinamik_programlama" title="Dinamik programlama – Turkish" lang="tr" hreflang="tr" data-title="Dinamik programlama" data-language-autonym="Türkçe" data-language-local-name="Turkish" class="interlanguage-link-target"><span>Türkçe</span></a></li><li class="interlanguage-link interwiki-uk mw-list-item"><a href="https://uk.wikipedia.org/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D1%96%D1%87%D0%BD%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D1%83%D0%B2%D0%B0%D0%BD%D0%BD%D1%8F" title="Динамічне програмування – Ukrainian" lang="uk" hreflang="uk" data-title="Динамічне програмування" data-language-autonym="Українська" data-language-local-name="Ukrainian" class="interlanguage-link-target"><span>Українська</span></a></li><li class="interlanguage-link interwiki-ur mw-list-item"><a href="https://ur.wikipedia.org/wiki/%DA%88%D8%A7%D8%A6%D9%86%D8%A7%D9%85%DA%A9_%D9%BE%D8%B1%D9%88%DA%AF%D8%B1%D8%A7%D9%85%D9%86%DA%AF" title="ڈائنامک پروگرامنگ – Urdu" lang="ur" hreflang="ur" data-title="ڈائنامک پروگرامنگ" data-language-autonym="اردو" data-language-local-name="Urdu" class="interlanguage-link-target"><span>اردو</span></a></li><li class="interlanguage-link interwiki-vi mw-list-item"><a href="https://vi.wikipedia.org/wiki/Quy_ho%E1%BA%A1ch_%C4%91%E1%BB%99ng" title="Quy hoạch động – Vietnamese" lang="vi" hreflang="vi" data-title="Quy hoạch động" data-language-autonym="Tiếng Việt" data-language-local-name="Vietnamese" class="interlanguage-link-target"><span>Tiếng Việt</span></a></li><li class="interlanguage-link interwiki-zh mw-list-item"><a href="https://zh.wikipedia.org/wiki/%E5%8A%A8%E6%80%81%E8%A7%84%E5%88%92" title="动态规划 – Chinese" lang="zh" hreflang="zh" data-title="动态规划" data-language-autonym="中文" data-language-local-name="Chinese" class="interlanguage-link-target"><span>中文</span></a></li></ul>
	    </section>
	</div>
	<div class="minerva-footer-logo">
				<img src="/static/images/mobile/copyright/wikipedia-wordmark-en.svg" alt="Wikipedia" width="120" height="18"
	style="width: 7.5em; height: 1.125em;"/>


				<ul id="footer-icons" class="footer-icons">
	<li id="footer-copyrightico"><a href="https://www.wikimedia.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/static/images/footer/wikimedia-button.svg" width="84" height="29"><img src="/static/images/footer/wikimedia.svg" width="25" height="25" alt="Wikimedia Foundation" lang="en" loading="lazy"></picture></a></li>
	<li id="footer-poweredbyico"><a href="https://www.mediawiki.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/w/resources/assets/poweredby_mediawiki.svg" width="88" height="31"><img src="/w/resources/assets/mediawiki_compact.svg" alt="Powered by MediaWiki" lang="en" width="25" height="25" loading="lazy"></picture></a></li>
</ul>
			</div>
			<ul id="footer-info" class="footer-info hlist hlist-separated">
	<li id="footer-info-lastmod"> This page was last edited on 28 July 2025, at 13:00<span class="anonymous-show">&#160;(UTC)</span>.</li>
	<li id="footer-info-copyright">Content is available under <a class="external" rel="nofollow" href="https://creativecommons.org/licenses/by-sa/4.0/deed.en">CC BY-SA 4.0</a> unless otherwise noted.</li>
</ul>

			<ul id="footer-places" class="footer-places hlist hlist-separated">
	<li id="footer-places-privacy"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy">Privacy policy</a></li>
	<li id="footer-places-about"><a href="/wiki/Wikipedia:About">About Wikipedia</a></li>
	<li id="footer-places-disclaimers"><a href="/wiki/Wikipedia:General_disclaimer">Disclaimers</a></li>
	<li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
	<li id="footer-places-wm-codeofconduct"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Universal_Code_of_Conduct">Code of Conduct</a></li>
	<li id="footer-places-developers"><a href="https://developer.wikimedia.org">Developers</a></li>
	<li id="footer-places-statslink"><a href="https://stats.wikimedia.org/#/en.wikipedia.org">Statistics</a></li>
	<li id="footer-places-cookiestatement"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Cookie_statement">Cookie statement</a></li>
	<li id="footer-places-terms-use"><a href="https://foundation.m.wikimedia.org/wiki/Special:MyLanguage/Policy:Terms_of_Use">Terms of Use</a></li>
	<li id="footer-places-desktop-toggle"><a id="mw-mf-display-toggle" href="//en.wikipedia.org/w/index.php?title=Dynamic_programming&amp;printable=yes&amp;mobileaction=toggle_view_desktop" data-event-name="switch_to_desktop">Desktop</a></li>
</ul>

			</div>
		</footer>
			</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
        <ul>
                
        </ul>
</div>
<div class="mw-notification-area" data-mw="interface"></div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-5f84f56cbb-bhxkb","wgBackendResponseTime":540,"wgPageParseReport":{"limitreport":{"cputime":"1.202","walltime":"1.636","ppvisitednodes":{"value":5686,"limit":1000000},"revisionsize":{"value":60633,"limit":2097152},"postexpandincludesize":{"value":158033,"limit":2097152},"templateargumentsize":{"value":6914,"limit":2097152},"expansiondepth":{"value":12,"limit":100},"expensivefunctioncount":{"value":9,"limit":500},"unstrip-depth":{"value":1,"limit":20},"unstrip-size":{"value":137143,"limit":5000000},"entityaccesscount":{"value":1,"limit":500},"timingprofile":["100.00% 1089.396      1 -total"," 24.35%  265.225      1 Template:Reflist"," 15.00%  163.456      6 Template:Annotated_link"," 13.35%  145.452     15 Template:Citation"," 11.12%  121.121      1 Template:Short_description"," 10.94%  119.212      1 Template:Optimization_algorithms"," 10.65%  115.967      1 Template:Navbox_with_collapsible_groups","  7.89%   85.940      2 Template:Pagetype","  6.84%   74.559      1 Template:ISBN","  4.98%   54.223      4 Template:Cite_book"]},"scribunto":{"limitreport-timeusage":{"value":"0.697","limit":"10.000"},"limitreport-memusage":{"value":21467189,"limit":52428800}},"cachereport":{"origin":"mw-web.eqiad.main-5f578674cf-h8w5h","timestamp":"20250806223825","ttl":2592000,"transientcontent":false}}});});</script>
<script>(window.NORLQ=window.NORLQ||[]).push(function(){var ns,i,p,img;ns=document.getElementsByTagName('noscript');for(i=0;i<ns.length;i++){p=ns[i].nextSibling;if(p&&p.className&&p.className.indexOf('lazy-image-placeholder')>-1){img=document.createElement('img');img.setAttribute('src',p.getAttribute('data-mw-src'));img.setAttribute('width',p.getAttribute('data-width'));img.setAttribute('height',p.getAttribute('data-height'));img.setAttribute('alt',p.getAttribute('data-alt'));p.parentNode.replaceChild(img,p);}}});</script><script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","name":"Dynamic programming","url":"https:\/\/en.wikipedia.org\/wiki\/Dynamic_programming","sameAs":"http:\/\/www.wikidata.org\/entity\/Q380679","mainEntity":"http:\/\/www.wikidata.org\/entity\/Q380679","author":{"@type":"Organization","name":"Contributors to Wikimedia projects"},"publisher":{"@type":"Organization","name":"Wikimedia Foundation, Inc.","logo":{"@type":"ImageObject","url":"https:\/\/www.wikimedia.org\/static\/images\/wmf-hor-googpub.png"}},"datePublished":"2002-10-22T15:29:26Z","dateModified":"2025-07-28T13:00:35Z","image":"https:\/\/upload.wikimedia.org\/wikipedia\/commons\/0\/03\/Shortest_path_optimal_substructure.svg","headline":"problem optimization method that simplifies a complicated problem by decomposing it into simpler subproblems recursively"}</script>
</body>
</html>" lang="sv" hreflang="sv" data-title="Dynamisk programmering" data-language-autonym="Svenska" data-language-local-name="Swedish" class="interlanguage-link-target"><span>Svenska</span></a></li><li class="interlanguage-link interwiki-tl mw-list-item"><a href="https://tl.wikipedia.org/wiki/Dinamikang_pagpoprograma" title="Dinamikang pagpoprograma – Tagalog" lang="tl" hreflang="tl" data-title="Dinamikang pagpoprograma" data-language-autonym="Tagalog" data-language-local-name="Tagalog" class="interlanguage-link-target"><span>Tagalog</span></a></li><li class="interlanguage-link interwiki-th mw-list-item"><a href="https://th.wikipedia.org/wiki/%E0%B8%81%E0%B8%B3%E0%B8%AB%E0%B8%99%E0%B8%94%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%9E%E0%B8%A5%E0%B8%A7%E0%B8%B1%E0%B8%95" title="กำหนดการพลวัต – Thai" lang="th" hreflang="th" data-title="กำหนดการพลวัต" data-language-autonym="ไทย" data-language-local-name="Thai" class="interlanguage-link-target"><span>ไทย</span></a></li><li class="interlanguage-link interwiki-tr mw-list-item"><a href="https://tr.wikipedia.org/wiki/Dinamik_programlama" title="Dinamik programlama – Turkish" lang="tr" hreflang="tr" data-title="Dinamik programlama" data-language-autonym="Türkçe" data-language-local-name="Turkish" class="interlanguage-link-target"><span>Türkçe</span></a></li><li class="interlanguage-link interwiki-uk mw-list-item"><a href="https://uk.wikipedia.org/wiki/%D0%94%D0%B8%D0%BD%D0%B0%D0%BC%D1%96%D1%87%D0%BD%D0%B5_%D0%BF%D1%80%D0%BE%D0%B3%D1%80%D0%B0%D0%BC%D1%83%D0%B2%D0%B0%D0%BD%D0%BD%D1%8F" title="Динамічне програмування – Ukrainian" lang="uk" hreflang="uk" data-title="Динамічне програмування" data-language-autonym="Українська" data-language-local-name="Ukrainian" class="interlanguage-link-target"><span>Українська</span></a></li><li class="interlanguage-link interwiki-ur mw-list-item"><a href="https://ur.wikipedia.org/wiki/%DA%88%D8%A7%D8%A6%D9%86%D8%A7%D9%85%DA%A9_%D9%BE%D8%B1%D9%88%DA%AF%D8%B1%D8%A7%D9%85%D9%86%DA%AF" title="ڈائنامک پروگرامنگ – Urdu" lang="ur" hreflang="ur" data-title="ڈائنامک پروگرامنگ" data-language-autonym="اردو" data-language-local-name="Urdu" class="interlanguage-link-target"><span>اردو</span></a></li><li class="interlanguage-link interwiki-vi mw-list-item"><a href="https://vi.wikipedia.org/wiki/Quy_ho%E1%BA%A1ch_%C4%91%E1%BB%99ng" title="Quy hoạch động – Vietnamese" lang="vi" hreflang="vi" data-title="Quy hoạch động" data-language-autonym="Tiếng Việt" data-language-local-name="Vietnamese" class="interlanguage-link-target"><span>Tiếng Việt</span></a></li><li class="interlanguage-link interwiki-zh mw-list-item"><a href="https://zh.wikipedia.org/wiki/%E5%8A%A8%E6%80%81%E8%A7%84%E5%88%92" title="动态规划 – Chinese" lang="zh" hreflang="zh" data-title="动态规划" data-language-autonym="中文" data-language-local-name="Chinese" class="interlanguage-link-target"><span>中文</span></a></li></ul>
	    </section>
	</div>
	<div class="minerva-footer-logo">
				<img src="/static/images/mobile/copyright/wikipedia-wordmark-en.svg" alt="Wikipedia" width="120" height="18"
	style="width: 7.5em; height: 1.125em;"/>


				<ul id="footer-icons" class="footer-icons">
	<li id="footer-copyrightico"><a href="https://www.wikimedia.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/static/images/footer/wikimedia-button.svg" width="84" height="29"><img src="/static/images/footer/wikimedia.svg" width="25" height="25" alt="Wikimedia Foundation" lang="en" loading="lazy"></picture></a></li>
	<li id="footer-poweredbyico"><a href="https://www.mediawiki.org/" class="cdx-button cdx-button--fake-button cdx-button--size-large cdx-button--fake-button--enabled"><picture><source media="(min-width: 500px)" srcset="/w/resources/assets/poweredby_mediawiki.svg" width="88" height="31"><img src="/w/resources/assets/mediawiki_compact.svg" alt="Powered by MediaWiki" lang="en" width="25" height="25" loading="lazy"></picture></a></li>
</ul>
			</div>
			<ul id="footer-info" class="footer-info hlist hlist-separated">
	<li id="footer-info-lastmod"> This page was last edited on 28 July 2025, at 13:00<span class="anonymous-show">&#160;(UTC)</span>.</li>
	<li id="footer-info-copyright">Content is available under <a class="external" rel="nofollow" href="https://creativecommons.org/licenses/by-sa/4.0/deed.en">CC BY-SA 4.0</a> unless otherwise noted.</li>
</ul>

			<ul id="footer-places" class="footer-places hlist hlist-separated">
	<li id="footer-places-privacy"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Privacy_policy">Privacy policy</a></li>
	<li id="footer-places-about"><a href="/wiki/Wikipedia:About">About Wikipedia</a></li>
	<li id="footer-places-disclaimers"><a href="/wiki/Wikipedia:General_disclaimer">Disclaimers</a></li>
	<li id="footer-places-contact"><a href="//en.wikipedia.org/wiki/Wikipedia:Contact_us">Contact Wikipedia</a></li>
	<li id="footer-places-wm-codeofconduct"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Universal_Code_of_Conduct">Code of Conduct</a></li>
	<li id="footer-places-developers"><a href="https://developer.wikimedia.org">Developers</a></li>
	<li id="footer-places-statslink"><a href="https://stats.wikimedia.org/#/en.wikipedia.org">Statistics</a></li>
	<li id="footer-places-cookiestatement"><a href="https://foundation.wikimedia.org/wiki/Special:MyLanguage/Policy:Cookie_statement">Cookie statement</a></li>
	<li id="footer-places-terms-use"><a href="https://foundation.m.wikimedia.org/wiki/Special:MyLanguage/Policy:Terms_of_Use">Terms of Use</a></li>
	<li id="footer-places-desktop-toggle"><a id="mw-mf-display-toggle" href="//en.wikipedia.org/w/index.php?title=Dynamic_programming&amp;mobileaction=toggle_view_desktop" data-event-name="switch_to_desktop">Desktop</a></li>
</ul>

			</div>
		</footer>
			</div>
</div>
<div class="mw-portlet mw-portlet-dock-bottom emptyPortlet" id="p-dock-bottom">
        <ul>
                
        </ul>
</div>
<div class="mw-notification-area" data-mw="interface"></div>
<script>(RLQ=window.RLQ||[]).push(function(){mw.config.set({"wgHostname":"mw-web.eqiad.main-5f578674cf-jzll8","wgBackendResponseTime":719,"wgPageParseReport":{"limitreport":{"cputime":"1.202","walltime":"1.636","ppvisitednodes":{"value":5686,"limit":1000000},"revisionsize":{"value":60633,"limit":2097152},"postexpandincludesize":{"value":158033,"limit":2097152},"templateargumentsize":{"value":6914,"limit":2097152},"expansiondepth":{"value":12,"limit":100},"expensivefunctioncount":{"value":9,"limit":500},"unstrip-depth":{"value":1,"limit":20},"unstrip-size":{"value":137143,"limit":5000000},"entityaccesscount":{"value":1,"limit":500},"timingprofile":["100.00% 1089.396      1 -total"," 24.35%  265.225      1 Template:Reflist"," 15.00%  163.456      6 Template:Annotated_link"," 13.35%  145.452     15 Template:Citation"," 11.12%  121.121      1 Template:Short_description"," 10.94%  119.212      1 Template:Optimization_algorithms"," 10.65%  115.967      1 Template:Navbox_with_collapsible_groups","  7.89%   85.940      2 Template:Pagetype","  6.84%   74.559      1 Template:ISBN","  4.98%   54.223      4 Template:Cite_book"]},"scribunto":{"limitreport-timeusage":{"value":"0.697","limit":"10.000"},"limitreport-memusage":{"value":21467189,"limit":52428800}},"cachereport":{"origin":"mw-web.eqiad.main-5f578674cf-h8w5h","timestamp":"20250806223825","ttl":2592000,"transientcontent":false}}});});</script>
<script>(window.NORLQ=window.NORLQ||[]).push(function(){var ns,i,p,img;ns=document.getElementsByTagName('noscript');for(i=0;i<ns.length;i++){p=ns[i].nextSibling;if(p&&p.className&&p.className.indexOf('lazy-image-placeholder')>-1){img=document.createElement('img');img.setAttribute('src',p.getAttribute('data-mw-src'));img.setAttribute('width',p.getAttribute('data-width'));img.setAttribute('height',p.getAttribute('data-height'));img.setAttribute('alt',p.getAttribute('data-alt'));p.parentNode.replaceChild(img,p);}}});</script><script type="application/ld+json">{"@context":"https:\/\/schema.org","@type":"Article","name":"Dynamic programming","url":"https:\/\/en.wikipedia.org\/wiki\/Dynamic_programming","sameAs":"http:\/\/www.wikidata.org\/entity\/Q380679","mainEntity":"http:\/\/www.wikidata.org\/entity\/Q380679","author":{"@type":"Organization","name":"Contributors to Wikimedia projects"},"publisher":{"@type":"Organization","name":"Wikimedia Foundation, Inc.","logo":{"@type":"ImageObject","url":"https:\/\/www.wikimedia.org\/static\/images\/wmf-hor-googpub.png"}},"datePublished":"2002-10-22T15:29:26Z","dateModified":"2025-07-28T13:00:35Z","image":"https:\/\/upload.wikimedia.org\/wikipedia\/commons\/0\/03\/Shortest_path_optimal_substructure.svg","headline":"problem optimization method that simplifies a complicated problem by decomposing it into simpler subproblems recursively"}</script>
</body>
</html>