<?php
header('Content-type: text/plain');
/*
//CONFIGURE YOUR DB HERE
$username = "[YOUR USERNAME]";
$password = "[YOUR PASSWORD]";
$hostname = "localhost";	
$database = "[YOUR DB NAME]";

$dbh=mysql_connect ($hostname, $username, $password) or die ('I cannot connect to the database because: ' . mysql_error());
mysql_select_db ($database);

//REPLACE "hoods4" IN THE QUERY BELOW WITH YOUR TABLE NAME
$query = 'SELECT json FROM hoods4';
$data = mysql_query($query);
$i = 0;
if (!$data) {
	echo "Error";
} else {
	echo '{
';
	echo '  "type": "FeatureCollection",
';
	echo '  "features": [
';
	while ( $row = mysql_fetch_array($data) ){
		if ( $i > 0 ) echo ',
';
*/
		$str = 'OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.332475662231445CO50.84751876135782CSCOOS4.331488609313965CO50.846353611765366CSCOOS4.3114471435546875CO50.851583008867884CSCOOS4.307928085327148CO50.850336677277205CSCOOS4.303979873657227CO50.84925288360703CSCOOS4.299473762512207CO50.850363771796324CSCOOS4.297113418579102CO50.84946964435557CSCOOS4.295788574963808CO50.84986368487478CSCOOS4.2933237086981535CO50.85016908250941CSCOOS4.291662122122943CO50.8495631274095CSCOOS4.289973021950573CO50.849205956571645CSCOOS4.28831308032386CO50.849162846367975CSCOOS4.28831995872315CO50.84808456565007CSCOOS4.287253953516483CO50.84773785873007CSCOOS4.285956455860287CO50.84900980713844CSCOOS4.283628989942372CO50.84846635009384CSCOOS4.2842955607920885CO50.84591619684959CSCOOS4.280307199805975CO50.845476449154134CSCOOS4.2819836642593145CO50.84368179736915CSCOOS4.282478573732078CO50.83839421506555CSCOOS4.276202896144241CO50.839219254125844CSCOOS4.273236718727276CO50.839956975987576CSCOOS4.26883538661059CO50.83902499802228CSCOOS4.260111588228028CO50.836716072672985CSCOOS4.249398218089482CO50.836862498227354CSCOOS4.245071501281927CO50.83801979065393CSCOOS4.242564820124244CO50.83697231709161CSCOOS4.238135744071769CO50.83460555876296CSCOOS4.232144655752563CO50.83591566825024CSCOOS4.228634127462101CO50.83039092500424CSCOOS4.228213503956795CO50.826275191121255CSCOOS4.22617569565773CO50.822104955007156CSCOOS4.226391613483429CO50.819836901824814CSCOOS4.225793480873108CO50.81877103975512CSCOOS4.229571372270584CO50.81864479533897CSCOOS4.2323192954063416CO50.821121326494136CSCOOS4.2398737370967865CO50.821049311534026CSCOOS4.2433083057403564CO50.81935057350074CSCOOS4.2482878267765045CO50.818844752779896CSCOOS4.254983961582184CO50.81779666125211CSCOOS4.257733225822449CO50.81396503837207CSCOOS4.264344871044159CO50.814146373918476CSCOOS4.270956516265869CO50.812375356434686CSCOOS4.2761170864105225CO50.81011784732554CSCOOS4.289002418518066CO50.80959582518356CSCOOS4.3019843101501465CO50.813215962579385CSCOOS4.307445287704468CO50.81470054454259CSCOOS4.308115839958191CO50.81652739685145CSCOOS4.305361211299896CO50.819718285627445CSCOOS4.308786392211914CO50.822800514428636CSCOOS4.316339492797852CO50.82477954033801CSCOOS4.326467514038086CO50.82957765215156CSCOOS4.333291053771973CO50.83548651329067CSCOOS4.340028762817383CO50.84096102886437CSCOOS4.337196350097656CO50.84827744777398CSCOOS4.334278106689453CO50.84830454348922CSCSCSCBCOQpropertiesQ:OBQnameQ:QAnderlechtQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.436159133911133CO50.82561089575604CSCOOS4.447126686573029CO50.82458244103988CSCOOS4.449339509010315CO50.822686433015605CSCOOS4.454022645950317CO50.819599113113284CSCOOS4.456179141998291CO50.817436850963546CSCOOS4.442811012268066CO50.8139797348394CSCOOS4.447660446166992CO50.811837550169024CSCOOS4.452043175697327CO50.81340013444182CSCOOS4.452735185623169CO50.81263071227635CSCOOS4.446394443511963CO50.809247816009034CSCOOS4.476628303527832CO50.79564596524283CSCOOS4.467229843139648CO50.79523906923724CSCOOS4.459075927734375CO50.796812380825635CSCOOS4.455695567085058CO50.799920187006904CSCOOS4.444590444472851CO50.797711572579864CSCOOS4.440061321074609CO50.799044738001335CSCOOS4.431518058408983CO50.80225340683856CSCOOS4.428507765987888CO50.804005430437066CSCOOS4.429954451043159CO50.80821437952659CSCOOS4.430015408433974CO50.81234691580348CSCOOS4.425330804660916CO50.81247664625173CSCOOS4.418021533638239CO50.812519174668864CSCOOS4.415762610733509CO50.81325502137439CSCOOS4.408498182892799CO50.812557413137924CSCOOS4.4070155918598175CO50.81430766345735CSCOOS4.405767023563385CO50.8150965469022CSCOOS4.397433400154114CO50.814179712255026CSCOOS4.39472571015358CO50.81755801485254CSCOOS4.395622909069061CO50.81800792836081CSCOOS4.398447275161743CO50.816901353647175CSCOOS4.403221607208252CO50.81800623377944CSCOOS4.403328895568848CO50.820541258720304CSCOOS4.398221969604492CO50.82420121236657CSCOOS4.399766901042312CO50.824960277942225CSCOOS4.407362916972488CO50.82824038371169CSCOOS4.41330669214949CO50.82559734131078CSCOOS4.423370340373367CO50.83152025902249CSCSCSCBCOQpropertiesQ:OBQnameQ:QAuderghemQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.281921407673508CO50.851686885969755CSCOOS4.277801534626633CO50.851686885969755CSCOOS4.275054952595383CO50.851903635407716CSCOOS4.272651693318039CO50.85927251700872CSCOOS4.261665365193039CO50.86230642395949CSCOOS4.254798910114914CO50.86967366186897CSCOOS4.257202169392258CO50.877906255941504CSCOOS4.269905111286789CO50.88288843538418CSCOOS4.287071248982102CO50.88223861610213CSCOOS4.298744222614914CO50.87422343309175CSCOOS4.301490804646164CO50.87054031919995CSCOOS4.292907735798508CO50.86664023431542CSCOOS4.292221090290695CO50.86143961354539CSCOOS4.293937704060227CO50.856238412651656CSCOOS4.28535463521257CO50.85060312367127CSCSCSCBCOQpropertiesQ:OBQnameQ:QBerchem Sainte AgatheQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.334621429443359CO50.84974059387478CSCOOS4.334621429443359CO50.84844002182927CSCOOS4.337882995605469CO50.84822325629631CSCOOS4.343204498291016CO50.8332640019135CSCOOS4.3485260009765625CO50.83261349075742CSCOOS4.35359001159668CO50.83526968757138CSCOOS4.370884895324707CO50.809975478228964CSCOOS4.374790191650391CO50.80528383479102CSCOOS4.382396936416626CO50.79646199828064CSCOOS4.395727515220642CO50.79530574638398CSCOOS4.395326524972916CO50.79783776513827CSCOOS4.393208920955658CO50.79928469249712CSCOOS4.387858584523201CO50.801147323005914CSCOOS4.380963295698166CO50.810169540759155CSCOOS4.37484048306942CO50.81691250107776CSCOOS4.371607415378094CO50.818331512838725CSCOOS4.361751135438681CO50.830101674525686CSCOOS4.355449704453349CO50.83587723111712CSCOOS4.367533936165273CO50.84082439081444CSCOOS4.376528263092041CO50.840242874064984CSCOOS4.3749189376831055CO50.836380908734625CSCOOS4.379231929779053CO50.83625894672885CSCOOS4.380701780319214CO50.83790540691404CSCOOS4.380876123905182CO50.84003792691814CSCOOS4.38654363155365CO50.83924353649548CSCOOS4.396162033081055CO50.83830515597278CSCOOS4.397127628326416CO50.84203146550232CSCOOS4.392085075378418CO50.84727489524648CSCOOS4.386173486709595CO50.85144076618505CSCOOS4.381463527679443CO50.85029603546903CSCOOS4.374350309371948CO50.84823003023452CSCOOS4.3732452392578125CO50.85385883280001CSCOOS4.360413551330566CO50.85496961129594CSCOOS4.366357326507568CO50.870910431559416CSCOOS4.372762441635132CO50.8737878663086CSCOOS4.378483593463898CO50.87726932484387CSCOOS4.382551623559721CO50.8766995526891CSCOOS4.40535666521896CO50.88507925886455CSCOOS4.410972094945237CO50.87715581701128CSCOOS4.414527588148189CO50.87811358585396CSCOOS4.4247745359375585CO50.87201586192423CSCOOS4.428498351402595CO50.877833426269994CSCOOS4.436289305086461CO50.87993613098788CSCOOS4.4259368876414555CO50.8924665624374CSCOOS4.4286571022587395CO50.89699823202604CSCOOS4.4275281196014475CO50.897856443136874CSCOOS4.425369168682664CO50.89914769908177CSCOOS4.423547085257269CO50.90027509373836CSCOOS4.423507807322494CO50.900689399267534CSCOOS4.423640190764672CO50.90186151572238CSCOOS4.42321831214133CO50.903123118539725CSCOOS4.421766465256269CO50.903951675228136CSCOOS4.4193923052549735CO50.90445127908849CSCOOS4.418767060740038CO50.90543680639942CSCOOS4.4136786204244345CO50.907071794783654CSCOOS4.414530983262239CO50.910314539619506CSCOOS4.4125879046775935CO50.91301137098286CSCOOS4.4113624988510765CO50.913480299875225CSCOOS4.411100369754422CO50.913417013073214CSCOOS4.410833603626543CO50.91339867085856CSCOOS4.410514648091748CO50.91328081263155CSCOOS4.410220059776293CO50.913207443514835CSCOOS4.4100171212437544CO50.91308776300335CSCOOS4.408881683326172CO50.91284840105716CSCOOS4.407812437129678CO50.91247790726036CSCOOS4.4079055426370815CO50.91249455235424CSCOOS4.407405108144303CO50.912419608851586CSCOOS4.406636269357705CO50.91234675600462CSCOOS4.405695769193926CO50.912382137054976CSCOOS4.404673075751134CO50.9121281967795CSCOOS4.404344302635309CO50.91205325268689CSCOOS4.402685887418102CO50.9119699453015CSCOOS4.401542456331526CO50.91177840260336CSCOOS4.400101552115302CO50.911526347176824CSCOOS4.398120965911403CO50.911428119388844CSCOOS4.397039154698632CO50.911075239334565CSCOOS4.3963006662397675CO50.9107223566049CSCOOS4.392109939807597CO50.910224997880796CSCOOS4.385687615475149CO50.90539783014142CSCOOS4.364946543470296CO50.90635149673378CSCOOS4.358826643112934CO50.90198022643962CSCOOS4.35757317052321CO50.89475232749538CSCOOS4.352543147640517CO50.89217961630181CSCOOS4.3457965109882934CO50.89480424135276CSCOOS4.34146926613721CO50.89496220612052CSCOOS4.339116127121088CO50.89474120972975CSCOOS4.337170840954059CO50.89558961280808CSCOOS4.3357693585858215CO50.894958531201794CSCOOS4.334168023488019CO50.89629492583638CSCOOS4.332424474996515CO50.89793907045868CSCOOS4.329967346275225CO50.89689659121497CSCOOS4.32771384017542CO50.89665219693028CSCOOS4.327412531711161CO50.894593439884154CSCOOS4.330586465075612CO50.89015079715542CSCOOS4.336419347673655CO50.88722070246269CSCOOS4.338300414383411CO50.88330942756016CSCOOS4.343092516064644CO50.87960185810446CSCOOS4.344780296087265CO50.87586881797969CSCOOS4.344035983085632CO50.86905185281248CSCOOS4.353761672973633CO50.8640986663339CSCOOS4.338226318359375CO50.8506076217602CSCSCSCBCOQpropertiesQ:OBQnameQ:QBruxelles VilleQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.378995895385742CO50.8361900650515CSCOOS4.379682540893555CO50.83450966471093CSCOOS4.382686614990234CO50.83385917091617CSCOOS4.379854202270508CO50.830335505302834CSCOOS4.389209747314453CO50.82274516816634CSCOOS4.396934509277344CO50.82626940673862CSCOOS4.399166107177734CO50.82475130581524CSCOOS4.409036636352539CO50.829034392295256CSCOOS4.41375732421875CO50.83120289382679CSCOOS4.413242340087891CO50.8323413168041CSCOOS4.4110107421875CO50.833533920618976CSCOOS4.409208297729492CO50.83448256098385CSCOOS4.407234191894531CO50.836515296838655CSCOOS4.408092498779297CO50.83754518254519CSCOOS4.404337406158447CO50.838520842775765CSCOOS4.404616355895996CO50.83949648260796CSCOOS4.402599334716797CO50.84166449809354CSCOOS4.402470588684082CO50.841772896223674CSCOOS4.402256011962891CO50.84171869719007CSCOOS4.397481679916382CO50.84173902183509CSCOOS4.396312236785889CO50.83812787096965CSCOOS4.380927085876465CO50.83979459071029CSCOOS4.380884170532227CO50.83814142177663CSCSCSCBCOQpropertiesQ:OBQnameQ:QEtterbeekQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.3891239271033555CO50.87855949396769CSCOOS4.396848689066246CO50.881700451207145CSCOOS4.4007110700476915CO50.8830000957196CSCOOS4.405517588602379CO50.884787047731464CSCOOS4.407920847879723CO50.88110476869002CSCOOS4.410924921976402CO50.87688061965273CSCOOS4.413671504007652CO50.87742219862111CSCOOS4.423370371805504CO50.8727644138021CSCOOS4.424657832132652CO50.871843633790554CSCOOS4.4199371442664415CO50.869081184612774CSCOOS4.425601969705895CO50.86209308237621CSCOOS4.425516139017418CO50.85781302972757CSCOOS4.4130706891883165CO50.85266561069751CSCOOS4.41023827646859CO50.85597086082772CSCOOS4.408264170633629CO50.85640431888032CSCOOS4.403715144144371CO50.86046779219417CSCOOS4.398136149393395CO50.869081184612774CSCSCSCBCOQpropertiesQ:OBQnameQ:QEvereQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.300804159138352CO50.81287250858255CSCOOS4.302177450153977CO50.80701502429043CSCOOS4.306983968708664CO50.80050584694989CSCOOS4.310417196247727CO50.79616589159143CSCOOS4.320030233357102CO50.7981189213798CSCOOS4.327240011189133CO50.803326601801594CSCOOS4.338226339314133CO50.80766589214981CSCOOS4.341316244099289CO50.81504176081792CSCOOS4.33753969380632CO50.81721091230364CSCOOS4.343376180622727CO50.818512354835875CSCOOS4.346122762653977CO50.822416464820236CSCOOS4.336853048298508CO50.82610338009102CSCOOS4.331016561482102CO50.82870573322659CSCOOS4.324150106403977CO50.828055158542675CSCOOS4.313507101032883CO50.823500881887526CSCOOS4.306983968708664CO50.82133202256689CSCOOS4.307670614216477CO50.81764473051096CSCOOS4.30732729146257CO50.813740221566775CSCSCSCBCOQpropertiesQ:OBQnameQ:QForestQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.286041280720383CO50.88310503979752CSCOOS4.290161153767258CO50.88635398515839CSCOOS4.289817831013352CO50.888519822859834CSCOOS4.300117513630539CO50.88765349986289CSCOOS4.312133810017258CO50.88462124249497CSCOOS4.319686910603195CO50.88245522353648CSCOOS4.322433492634445CO50.87422343309175CSCOOS4.324150106403977CO50.86880698842444CSCOOS4.326896688435227CO50.86382330340891CSCOOS4.315910360310227CO50.866856914258356CSCOOS4.30732729146257CO50.86967366186897CSCOOS4.301490804646164CO50.87119030162369CSCOOS4.296684286091477CO50.87595656245141CSCSCSCBCOQpropertiesQ:OBQnameQ:QGanshorenQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.367580424295738CO50.84063357853519CSCOOS4.355735789285973CO50.83597211772594CSCOOS4.37152863596566CO50.81840615327347CSCOOS4.373931895243004CO50.81764698114422CSCOOS4.38800812815316CO50.801267549122194CSCOOS4.394359599100426CO50.80181000636037CSCOOS4.395389567362145CO50.80821052619378CSCOOS4.389896403299645CO50.81222396416017CSCOOS4.397106181131676CO50.81428478479119CSCOOS4.394874583231285CO50.81764698114422CSCOOS4.398307810770348CO50.81732161788222CSCOOS4.403114329325035CO50.81786388872623CSCOOS4.402599345194176CO50.82068359561237CSCOOS4.39676285837777CO50.82599719579306CSCOOS4.389209757791832CO50.82252715805841CSCOOS4.379940043436363CO50.83076807657918CSCOOS4.38251496409066CO50.83391225415409CSCOOS4.379425059305504CO50.834454332329436CSCOOS4.378566752420738CO50.83608052907979CSCOOS4.374446879373863CO50.83640576163023CSCOOS4.376506815897301CO50.84030837544905CSCSCSCBCOQpropertiesQ:OBQnameQ:QIxellesQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.290332804666832CO50.88895522551146CSCOOS4.289817820535973CO50.89112094227328CSCOOS4.287414561258629CO50.89220376289377CSCOOS4.28638459299691CO50.895343800338544CSCOOS4.292907725321129CO50.895343800338544CSCOOS4.298057566629723CO50.89631825167229CSCOOS4.311790476785973CO50.89783402433027CSCOOS4.32758332346566CO50.89642652278409CSCOOS4.329814921366051CO50.88992981051529CSCOOS4.336681376444176CO50.88700599433096CSCOOS4.342861186014488CO50.87845007069199CSCOOS4.344234477030113CO50.87585049158174CSCOOS4.34406281565316CO50.86935090935614CSCOOS4.332389842020348CO50.86295876964381CSCOOS4.3292999372351915CO50.86631746079956CSCOOS4.3265533552039415CO50.86404224484108CSCOOS4.319515238748863CO50.88267407746178CSCOOS4.298744212137535CO50.88819720085552CSCSCSCBCOQpropertiesQ:OBQnameQ:QJetteQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.332561503397301CO50.86306711829656CSCOOS4.333248148905113CO50.86024997149339CSCOOS4.33582306955941CO50.85851625808952CSCOOS4.328269968973473CO50.855807201850695CSCOOS4.32209015940316CO50.856565753460856CSCOOS4.322948466287926CO50.86003326084298CSCOOS4.317455302225426CO50.86079174371296CSCOOS4.31110383127816CO50.85970819297899CSCOOS4.3032074079383165CO50.86220032202441CSCOOS4.292907725321129CO50.86523403847693CSCOOS4.293422709451988CO50.86653414224273CSCOOS4.302005778299645CO50.87054256728304CSCOOS4.328269968973473CO50.86306711829656CSCOOS4.329128275858238CO50.86599243674646CSCSCSCBCOQpropertiesQ:OBQnameQ:QKoekelbergQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.292564402567223CO50.86490900687037CSCOOS4.2922210798133165CO50.862091971357344CSCOOS4.294109354959801CO50.856565753460856CSCOOS4.286041270243004CO50.8508221271795CSCOOS4.281749735819176CO50.85179750980167CSCOOS4.273853312479332CO50.85125563308523CSCOOS4.2757415876258165CO50.84681200655282CSCOOS4.2702484235633165CO50.84388548474288CSCOOS4.272136698709801CO50.839657962477354CSCOOS4.282093058573082CO50.83846551514986CSCOOS4.281063090311363CO50.84388548474288CSCOOS4.280548106180504CO50.845836519680155CSCOOS4.283466349588707CO50.84637845934982CSCOOS4.28363801096566CO50.84897968213216CSCOOS4.285526286112145CO50.849304824781505CSCOOS4.28689957712777CO50.84832939003455CSCOOS4.287757884012535CO50.84919644415018CSCOOS4.297027587890625CO50.84941320516098CSCOOS4.299774169921875CO50.85071375007355CSCOOS4.304924011230469CO50.849304824781505CSCOOS4.3114471435546875CO50.85179750980167CSCOOS4.331874847412109CO50.84659523345496CSCOOS4.334449768066406CO50.84865453721651CSCOOS4.3341064453125CO50.84984672416079CSCOOS4.337882995605469CO50.851038880635976CSCOOS4.353847503662109CO50.86404224484108CSCOOS4.3444061279296875CO50.868917571647664CSCOOS4.332389831542969CO50.86285042073926CSCOOS4.332904815673828CO50.8604666811366CSCOOS4.335994720458984CO50.85851625808952CSCOOS4.328098297119141CO50.855698836327775CSCOOS4.321403503417969CO50.856565753460856CSCOOS4.322776794433594CO50.85959983652072CSCOOS4.317283630371094CO50.8609000974015CSCOOS4.311103820800781CO50.85949147981068CSCSCSCBCOQpropertiesQ:OBQnameQ:QMolenbeek Saint JeanQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.340114593505859CO50.84063357853519CSCOOS4.324665069580078CO50.82816583841257CSCOOS4.331188201904297CO50.82903326725307CSCOOS4.346122741699219CO50.82263560064142CSCOOS4.3540191650390625CO50.82643093237622CSCOOS4.3540191650390625CO50.82903326725307CSCOOS4.3567657470703125CO50.830551228939285CSCOOS4.353504180908203CO50.835104817829176CSCOOS4.3485260009765625CO50.8326112408455CSCOOS4.342689514160156CO50.83347858708068CSCSCSCBCOQpropertiesQ:OBQnameQ:QSaint GillesQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.364833831787109CO50.862308672439696CSCOOS4.3814849853515625CO50.85851625808952CSCOOS4.387321472167969CO50.85233938022292CSCOOS4.374446868896484CO50.84887130074542CSCOOS4.373073577880859CO50.85407332326762CSCOOS4.3608856201171875CO50.85504863790236CSCSCSCBCOQpropertiesQ:OBQnameQ:QSaint Josse ten NoodeQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.408435821533203CO50.856134545686615CSCOOS4.409980773925781CO50.855971998448744CSCOOS4.41075325012207CO50.85488833571763CSCOOS4.411354064941406CO50.85423812599249CSCOOS4.412384033203125CO50.85299186534828CSCOOS4.402942657470703CO50.84247860264918CSCOOS4.39753532409668CO50.842532800800086CSCOOS4.387664794921875CO50.852124881781094CSCOOS4.385776519775391CO50.854400679273645CSCOOS4.381828308105469CO50.85803088826721CSCOOS4.37830924987793CO50.859574995978875CSCOOS4.364490509033203CO50.86263597063924CSCOOS4.3677520751953125CO50.87054481536606CSCOOS4.378395080566406CO50.875961058095015CSCOOS4.383544921875CO50.87617769471234CSCOOS4.388608932495117CO50.878398161977145CSCOOS4.398050308227539CO50.8687573171376CSCOOS4.403285980224609CO50.860468929705505CSCSCSCBCOQpropertiesQ:OBQnameQ:QSchaerbeekQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.3100738525390625CO50.79627664705057CSCOOS4.315738677978516CO50.79454055616722CSCOOS4.317455291748047CO50.790200046816615CSCOOS4.321746847126633CO50.779670385278465CSCOOS4.335136434528977CO50.77055195041461CSCOOS4.345436117146164CO50.76686064993688CSCOOS4.361572286579758CO50.76382053672408CSCOOS4.362602254841477CO50.7577397176693CSCOOS4.364662191364914CO50.752744168022836CSCOOS4.383888265583664CO50.757956903384965CSCOOS4.40345766255632CO50.76620921373515CSCOOS4.38697817036882CO50.78531423981058CSCOOS4.396591207478195CO50.79052334705918CSCOOS4.396247884724289CO50.79529785215377CSCOOS4.380455038044602CO50.795948883243476CSCOOS4.356079122517258CO50.83000685539475CSCOOS4.354705831501633CO50.82610338009102CSCOOS4.347152730915695CO50.823500881887526CSCOOS4.343719503376633CO50.818512354835875CSCOOS4.338226339314133CO50.816994001688734CSCOOS4.340972921345383CO50.81569251684228CSCOOS4.338912984821945CO50.807882846087864CSCOOS4.328269979450852CO50.80376054897267CSCOOS4.319686910603195CO50.79746792051896CSCSCSCBCOQpropertiesQ:OBQnameQ:QUccleQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.40345766255632CO50.76620921373515CSCOOS4.444999715778977CO50.77142044937489CSCOOS4.475898763630539CO50.79486382638911CSCOOS4.467315694782883CO50.79508083977527CSCOOS4.457359334919602CO50.79681691058952CSCOOS4.454269430134445CO50.800071869551076CSCOOS4.446029684040695CO50.797033914906976CSCOOS4.427146932575852CO50.80441146217246CSCOOS4.42817690083757CO50.811570908880874CSCOOS4.415817281696945CO50.812655577817736CSCOOS4.407920858357102CO50.812655577817736CSCOOS4.405860921833664CO50.81460791843088CSCOOS4.389038106892258CO50.812221713265544CSCOOS4.394531270954758CO50.809401495442856CSCOOS4.39521791646257CO50.80245869536846CSCOOS4.389381429646164CO50.80137378965632CSCOOS4.395904561970383CO50.7981189213798CSCOOS4.396247884724289CO50.79030631251223CSCOOS4.386634847614914CO50.78531423981058CSCSCSCBCOQpropertiesQ:OBQnameQ:QWatermael BoitsfortQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.438304901123047CO50.83743677459377CSCOOS4.444527626037598CO50.839117069541544CSCOOS4.4510722160339355CO50.84011979737718CSCOOS4.447048902511597CO50.8411631534662CSCOOS4.44847047328949CO50.84255200037409CSCOOS4.4569918513298035CO50.842758630161725CSCOOS4.457390159368515CO50.844867217890716CSCOOS4.456988498568535CO50.8477640418557CSCOOS4.4578176364302635CO50.84815566239478CSCOOS4.462480824440718CO50.848608879682224CSCOOS4.462623735889792CO50.85070503173833CSCOOS4.463574956171215CO50.85278262184256CSCOOS4.463707243558019CO50.85327952898841CSCOOS4.462850707350299CO50.85360925852506CSCOOS4.461629390716553CO50.85413540546701CSCOOS4.460341930389404CO50.85410154005422CSCOOS4.460148811340332CO50.85461629167498CSCOOS4.459569454193115CO50.85483302749988CSCOOS4.455395936965942CO50.85628242243837CSCOOS4.454117864370346CO50.86025278883109CSCOOS4.448033273220062CO50.86173079623987CSCOOS4.44547712802887CO50.85991925719807CSCOOS4.431762993335724CO50.863091943752096CSCOOS4.4255925714969635CO50.86164445345298CSCOOS4.425945281982422CO50.85770468209318CSCOOS4.418907165527344CO50.855103945864485CSCOOS4.4116973876953125CO50.85174444690808CSCOOS4.4072771072387695CO50.84702990325188CSCOOS4.4030070304870605CO50.84239618058472CSCOOS4.404745101928711CO50.83873765339016CSCOOS4.408478736877441CO50.83762648834355CSCOOS4.414551258087158CO50.83701669140328CSCOOS4.427458047866821CO50.83774167131539CSCOOS4.431765675544739CO50.83810415704793CSCOOS4.432803690433502CO50.83909843757042CSCOOS4.435039311647415CO50.839270359567CSCOOS4.434183016419411CO50.83512838770044CSCOOS4.43796057254076CO50.83462930206835CSCOOS4.439849350601435CO50.835626515153194CSCOOS4.437703834846616CO50.836206421977806CSCSCSCBCOQpropertiesQ:OBQnameQ:QWoluwe Saint LambertQCBCB,OBQtypeQ:QFeatureQCOQgeometryQ:OBQtypeQ:QPolygonQCOQcoordinatesQ:OSOSOS4.408349990844727CO50.8375451759285CSCOOS4.4075775146484375CO50.83678631497975CSCOOS4.409294128417969CO50.83440124309093CSCOOS4.41349983215332CO50.83239552011209CSCOOS4.41375732421875CO50.831257098456796CSCOOS4.407320022583008CO50.82827538634159CSCOOS4.412984848022461CO50.825889879517256CSCOOS4.422941207885742CO50.831528153750305CSCOOS4.436588287353516CO50.82567300921603CSCOOS4.446887969970703CO50.824859736614044CSCOOS4.454183578491211CO50.819546006978676CSCOOS4.455385208129883CO50.81862417600304CSCOOS4.477014541625977CO50.82014247614842CSCOOS4.478044509887695CO50.821498059563076CSCOOS4.4680023193359375CO50.83342549673229CSCOOS4.465169906616211CO50.838900254073415CSCOOS4.4659423828125CO50.840797297370806CSCOOS4.463968276977539CO50.843778209591754CSCOOS4.464054107666016CO50.84491632583744CSCOOS4.462680816650391CO50.84838469934956CSCOOS4.45770263671875CO50.847951166762236CSCOOS4.457144737243652CO50.84274846144642CSCOOS4.448540210723877CO50.84247747131504CSCOOS4.447499513626099CO50.84120379661505CSCOOS4.4510990381240845CO50.84002493905046CSCOOS4.444744884967804CO50.83900188334806CSCOOS4.438563734292984CO50.83735207408978CSCOOS4.438219740986824CO50.836364532018955CSCOOS4.4401076808571815CO50.83549131060124CSCOOS4.437961746007204CO50.83451262256304CSCOOS4.433798873797059CO50.83510741832376CSCOOS4.43463568110019CO50.8391991070276CSCOOS4.433165809605271CO50.83913098396684CSCOOS4.432001720415428CO50.83806707093795CSCOOS4.414511030190624CO50.836884653700814CSCSCSCBCOQpropertiesQ:OBQnameQ:QWoluwe Saint PierreQCBCB, 



';
		$str = str_replace('OB','{',$str);
		$str = str_replace('CB','}',$str);
		$str = str_replace('OS','[',$str);
		$str = str_replace('CS',']',$str);
		$str = str_replace('Q','"',$str);
		$str = str_replace('CO',',',$str);
		echo "[    ".trim($str,',')." ]";
	/*
	$i = $i+1;
	}
	echo '
  ]
';
	echo '}';
}
*/
?>