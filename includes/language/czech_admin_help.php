<?php
$txt['help_on_folders'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Na této stránce můžete tvořit a spravovat SLOŽKY.<br /> Složky jsou nutné pro organizaci Vašich položek - podobně jako složky souborů ve Windows.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Počáteční úroveň hierarchie složek se nazývá KOŘEN.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Složky tvoří rozvětvenou strukturu (strom).<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>Každá složka je ve stromu zařazena na určitou úroveň.</div> <div id='accordion'> <h3><a href='#'>Přidat novou SLOŽKU</a></h3> <div> Klikněte na ikonu <img src='includes/images/folder--plus.png' alt='' />. Objeví se dialogové okno, v němž musíte zadat:<br /> - název složky<br /> - její nadřazenou (mateřskou) složku (každá složka je podřazená své mateřské složce)<br /> - stupeň komplexity (stupeň komplexity se vztahuje na kvalitu hesla. Tvoříte-li novou položku, nesmí být její heslo jednodušší než stanovený stupeň)<br /> - interval obnovení v měsících (je nutný, chcete-li zavést nucené obnovování hesel po uplynutí určité doby). </div> <h3><a href='#'>Změnit stávající složku</a></h3> <div> Chcete-li změnit u složky název, komplexitu, mateřskou složku či interval obnovení, musíte pouze kliknout do políčka.<br /> Tím se políčko stane měnitelným. Změňte žádanou hodnotu a klikněte pro uložení na ikonku <img src='includes/images/disk_black.png' alt='' /> , pro zrušení na ikonku <img src='includes/images/cross.png' alt='' /><br /> <p style='text-align:center;'> <img src='includes/images/help/folders_1.png' alt='' /> </p> <div style='margin:10px Opx 0px 20px;'> Pozor - pokud přesunete mateřskou složku, přesunou se tím zároveň i všechny její dceřinné složky. </div> </div> <h3><a href='#'>Odstranit složku</a></h3> <div> Složku můžete také odstranit. Klikněte jednoduše na ikonku <img src='includes/images/folder--minus.png' alt='' />.<br />  Tím odstraníte všechny položky ve složce i ve všech jejích dceřinných složkách... Buďte tedy opatrní!!!! <p style='text-align:center;'> <img src='includes/images/help/folders_2.png' alt='' /> </p> </div> <h3><a href='#'>Zvláštní nastaveni</a></h3> <div> Pro složky jsou možná dvě dodatečná nastaveni.<br /> 1. nastavení dovoluje vytvářet položky bez ohledu na vyžadovanou úroveň komplexity hesla.<br /> 2. nastavení dovoluje upravovat stávající položky bez ohledu na vyžadovanou úroveň komplexity hesla.<br /> Obě nastavení lze spolu kombinovat nebo je používat dočasně.<p style='text-align:center;'> <img src='includes/images/help/folders_3.png' alt='' /> </p> </div> </div>";
$txt['help_on_roles'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Na této stránce můžete tvořit a spravovat ROLE.<br /> Role je přiřazena skupině povolených a zakázaných složek.<br /> Jakmile jste definoval(a) několik rolí, můžete jim přiřadit UŽIVATELE. </div> <div id='accordion'> <h3><a href='#'>Přidat novou ROLI</a></h3> <div> Klikněte na ikonku <img src='includes/images/users--plus.png' alt='' />. Objeví se dialogové okno, v němž musíte zadat název této nové ROLE. </div> <h3><a href='#'>Povolit či zakázat složku</a></h3> <div> Pro definování přístupových práv můžete použít tabulky 'Role a Složky'. Je-li políčko tabulky červené, nemá role k této složce přístup. Je-li políčko zelené, pak role k této složce přístup má.<br /> Chcete-li změnit přístupová práva, klikněte na požadované políčko.<br/> <p style='text-align:center;'> <span style='text-align:center;'><img src='includes/images/help/roles_1.png' alt='' /></span> </p> Ve snímku nahoře je vidět, že složka 'Cleaner' je přístupná pro roli 'Dev', ale nikoliv pro roli 'Commercial'. </div> <h3><a href='#'>Manuelně aktualizovat tabulku</a></h3> <div> Klikněte na ikonku <img src='includes/images/arrow_refresh.png' alt='' />. </div> <h3><a href='#'>Upravit roli</a></h3> <div> Název role můžete měnit bez ohledu na ostatní zadané parametry.<br /> Vyberte roli, kterou chcete upravit a klikněte na ikonku <img src='includes/images/ui-tab--pencil.png' alt='' />.<br />  Objeví se dialogové okno, v němž musíte zadat nový název. </div> <h3><a href='#'>Odstranit roli</a></h3> <div> Stávající roli můžete odstranit. <br /> Vyberte roli, kterou chcete odsranit, a klikněte na ikonku <img src='includes/images/ui-tab--minus.png' alt='' />.<br /> Objeví se dialogové okno, v němž musíte potvrdit odstranění role.</div> </div>";
$txt['help_on_users'] = "<div class='ui-state-highlight ui-corner-all' style='padding:5px;font-weight:bold;'> Na této stránce můžete tvořit a spravovat UŽIVATELE.<br /> Každá osoba, která chce používat TeamPass musí mít svůj uživatelský účet.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>1. krokem ke stanovit, jaké role uživatel má.<br /> <span class='ui-icon ui-icon-lightbulb' style='float: left;'>&nbsp;</span>2. krokem je upravit přístup uživatele k určitým složkám.</div> <div id='accordion'> <h3><a href='#'>Přidat nového UŽIVATELE</a></h3> <div> Klikněte na ikonku <img src='includes/images/user--plus.png' alt='' />. Objeví se dialogové okno, v němž musíte zadat:<br /> - uživatelské jméno<br /> - uživatelské heslo (může být vytvořeno automaticky a změněno uživatelem po jeho 1. přihlášení)<br /> - platnou emailovou adresu<br /> - zda je uživatel Správce (s plným přístupem ke všem funkcím)<br /> - zda je uživatel Manažer (s plným přístupem ke všem položkám)<br /> - zda uživatel smí mít Osobní Složky </div> <h3><a href='#'>Přiřadit UŽIVATELI ROLI</a></h3> <div> UŽIVATELI můžete přiřadit libovolný počet ROLÍ. Pro toto klikněte na ikonku <img src='includes/images/cog_edit.png' alt='' />.<br /> Objeví se dialogové okno, v němž žádané role můžete (nebo nemusíte) přiřadit.<br /><br /> Jakmile je ROLE UŽIVATELI přiřazena, má UŽIVATEL přístup ke složkám povoleným pro tuto ROLI a nemá přístup ke složkám pro tuto ROLI zakázaným.<br /><br /> Nyní můžete přístupová práva UŽIVATELE upřesnit pomocí políček 'Povolené složky' a 'Zakázané složky'. Tím můžete povolit či zakázat složky i mimo rámec dané ROLE. <div style='margin:2px Opx 0px 20px;'> Například: <p style='margin-left:20px;margin-top: 2px;'> - Uživateli USER1 je přiřazena ROLE1 a ROLE2. <br /> - Roli ROLE1 je povolen přístup ke složce F1 a F2. <br /> - Složka F1 má 4 podsložky S1, S2, S3 a S4.<br /> - Tzn. uživatel USER1 má přístup k F1, F2, S1, S2, S3 a S4.<br /> - Na této stránce můžete dodatečně upravit práva uživatele USER1 o zákaz přístupu k podsložce S4. </p> </div> </div> <h3><a href='#'>Je Správce (VŠEMOHOUCÍ)</a></h3> <div> Uživateli můžete udělit práva Správce - zaklikněte prostě odpovídající políčko.<br /> VŠEMOHOUCÍ smí provádět v TeamPass cokoliv bez omezení... buďte tedy opatrní!!!! <p style='text-align:center;'> <img src='includes/images/help/users_1.png' alt='' /> </p> </div> <h3><a href='#'>Je Manažer</a></h3> <div> Uživateli můžete udělit práva Manažera - zaklikněte prostě odpovídající políčko.<br /> Manažer smí upravovat a odstraňovat položky a složky, včetně těch, které nevytvořil.<br /> Manažer má přístup pouze k jemu povoleným složkám. Můžete tedy vytvořit různé Manažery příslušné pro různá oddělení. <p style='text-align:center;'> <img src='includes/images/help/users_2.png' alt='' /> </p> </div> <h3><a href='#'>Odstranit UŽIVATELE</a></h3> <div> Uživatele můžete odstranit. Klikněte na ikonku <img src='includes/images/user--minus.png' alt='' />. <p style='text-align:center;'> <img src='includes/images/help/users_3.png' alt='' /> </p> </div> <h3><a href='#'>Změnit uživatelské heslo</a></h3> <div> Uživatelské heslo můžete změnit. Klikněte na ikonku <img src='includes/images/lock__pencil.png' alt='' />.<br /> Při prvním přihlášení bude muset uživatel své heslo změnit. <p style='text-align:center;'> <img src='includes/images/help/users_4.png' alt='' /> </p> </div> <h3><a href='#'>Změnit uživatelův email</a></h3> <div> Emailovou adresu uživatele můžete změnit. Klikněte na ikonku <img src='includes/images/mail--pencil.png' alt='' />.<br /> <p style='text-align:center;'> <img src='includes/images/help/users_5.png' alt='' /> </p> </div> </div>";
?>