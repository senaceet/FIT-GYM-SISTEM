-- Insercion de datos 
use Fit_Gym_Sistem;

-- FGS.rol
insert into FGS_rol (id_rol, nombre_rol)
values 
(001, 'Administrador'),
(002, 'Cliente'),
(003, 'Entrenador');

-- FGS.tipo_documento
insert into FGS_tipo_documento (id_tipo_documento, nombre_documento, siglas_documento)
values 
(1, 'Tarjeta de identidad', 'TI'),
(2, 'Cedula de ciudadania', 'C'),
(3, 'Cedula de extranjeria', 'CE');

-- FGS.plan
insert into FGS_planes (id_plan,duracion,precio_plan)
values
(11, '1 mes', 50.000),
(12, '3 meses', 120.000),
(13, '6 meses', 200.000),
(14, '12 meses', 380.000);

-- FGS.dietas
insert into FGS_dietas (id_dietas, nombre_dietas, tipo_dietas, duracion_dietas, descripcion_dietas)
values 
(21, 'Dieta dash','Dietas bajas en hidratos de carbono:','3 Semanas','En la primera posición de los planes nutricionales para perder peso nos encontramos con la dieta Dash. Esta dieta fue realmente elaborada para pacientes que sufrían de hipertensión, limitando el sodio a 2.300 mg,'),
(22, 'Dieta Flexitariana','Dietas bajas en calorías','5 semanas','Este plan nutricional se puede considerar como una dieta vegetariana flexible, ya que está basada en frutas, vegetales, cereales integrales, huevos, lácteos y proteínas vegetales.'),
(23, 'Dieta Mediterránea','Dietas bajas en calorías','2 meses','En este prestigioso ranking no podía faltar la dieta mediterránea. Ha sido votada como la más fácil de realizar y es la base de la Dash. '),
(24, 'Dieta Mind','Dietas bajas en hidratos de carbono','5 meses','Como su propio nombre indica, esta dieta está pensada para proteger el cerebro y ayuda a prevenir el Alzheimer, es una mezcla de la dieta Dash y la Mediterránea.'),
(25, 'Dieta TLC','Dietas proteicas, bajas en hidratos de carbono','3 meses','La dieta TLC fue creada por el Instituto Nacional de Salud estadounidense para ayudar a reducir el colesterol, aunque los expertos afirman que es válida para cualquier persona, puesto que es saludable, completa y segura.'),
(26, 'Dieta de las 18 horas','Dietas bajas en calorías','18 horas','Se trata de una dieta que nos ha sorprendido gratamente, porque es bastante sencilla, efectiva y te permite comer todo lo que quieras. La idea es que, durante tres días, solo comas dentro de un periodo de 8 horas.'),
(27, 'Dieta de Montignac','Dietas proteicas, bajas en hidratos de carbono','12 meses','Esta dieta, concebida por el francés Michel Montignac en 1944, está indicada para personas que no llevan bien la restricción de las cantidades de alimentos. '),
(28, 'La dieta Dukan','Dietas proteicas, bajas en hidratos de carbono','12 meses','La dieta del famosísimo doctor Dukan es una de las más populares del mundo. Más de 15 millones de personas ya han probado su método para perder peso. Aunque se le ha acusado prácticamente de todo, esta dieta baja en hidratos de carbono ha demostrado a muchas personas su eficacia'),
(29, 'La dieta de la Zona','Dietas bajas en calorías','5 meses','Ideada por Barry Sears, está indicada para personas que necesiten controlar los niveles de glucosa e insulina, previniendo enfermedades metabólicas como la diabetes o el sobrepeso. Cada comida de la dieta de la Zona debe aportar un 40% de hidratos de carbono, un 30% de grasas y otro 30% de proteínas. '),
(30, 'Tipo 0', 'La dieta del tipo de sangre', '2 meses', 'Deben consumir carnes magras, aves, pescados y mariscos, acompañados siempre de verduras. Deben evitar la carne de cerdo y los embutidos, y limitar el consumo de lácteos, huevos y cereales. Lograrán perder peso con pescados y mariscos, vísceras, espinacas, brócoli y con ejercicio intenso o deportes de gran esfuerzo físico'),
(31, 'Tipo A', 'La dieta del tipo de sangre', '1 mes', 'Una dieta vegetariana es perfecta para este grupo. Deben evitar la harina de trigo, los lácteos y las carnes. Adelgazarán con la piña, las verduras, el aceite de oliva y la soja. Las actividades físicas más adecuadas para el tipo A son las moderadas o relajantes como el yoga, el tai-chi y la natación'),
(32, 'Tipo B', 'La dieta del tipo de sangre', '2 semanas', 'La dieta más equilibrada para este grupo debe incluir variedad de alimentos, como carnes magras, pescados, lácteos, frutas y verduras de hoja verde. Tienen poca tolerancia al pollo, al cerdo, a los embutidos, a los mariscos, a las semillas, a los frutos secos y a los cereales. La actividad física debe ser moderada y equilibrada'),
(33, 'Tipo AB', 'La dieta del tipo de sangre', '2 meses', 'La mayoría de los alimentos indicados y contraindicados para los grupos A y B son aplicables a éste. Es beneficioso para ellos el aceite de oliva y las frutas cítricas. Deben evitar los crustáceos, las carnes rojas, el maíz, el trigo, las alubias y las semillas. Adelgazarán con verduras, pescados, lácteos y piña,Una actividad física relajante es la adecuada para este tipo sanguíneo.'), 
(34, 'Dieta vegetariana', '', '25 dias', 'Las dietas vegetarianas son aquellas en las que se eliminan por completo los alimentos de origen animal y se consumen únicamente productos de origen vegetal. Esta dieta, por tanto, está basada principalmente en legumbres, frutas, verduras, hortalizas, semillas, granos y soja'),
(35, 'Dietas hipocalóricas', '', '3 semanas', 'Se tratad más estricta y restrictiva. De ella no solamente se eliminan los alimentos de origen animal, sino también los derivados de ellos. Es decir, las personas veganas no consumen carne, pero tampoco lácteos, huevos o miel, por ejemplo.');

-- FGS.rutinas
insert into FGS_rutinas (id_rutinas, nombre_rutinas, repeticiones_rutinas, descripcion_rutinas)
values 
(41, 'Jalones al pecho', 'De 3 a 5 series de 15 repeticiones cada una.', 'Este es el clásico ejercicio de gimnasio, por lo que necesitarás una máquina para llevarlo a cabo. En un principio debes comenzar con poco peso, y luego si tú y tú cuerpo lo resiste, ir agregando de a poco. Que cargues mucho peso no te asegurará un buen trabajo, así que ten cuidado con él, Deberás coger el mazo de la máquina y con un movimiento recto atraerla hasta tu pecho para que las barras de peso suban.'),
(42, 'Remo a un brazo', 'De 3 a 5 serie con un mínimo de 12 repeticiones en cada una.', 'Este es un ejercicio un poco más profesional que los anteriores, necesitarás un banco firme que soporte tu peso y una mancuerna. Con él lo más importante será la posición, ya que si no es la correcta puedes ocasionarte una lesión, Asegúrate de tener la espalda completamente extendida en paralelo al banco y coge la mancuerna con el bazo libre hasta alzarla a la altura de tu espalda.'),
(43, 'Pullover', 'De 3 a 5 series con 12 re6lgfrhjknjblknhgdrkneiubghjbghjbbdfpeticiones.', 'Este ejercicio hará que tu espada se ensanche indiscutiblemente y será fácil de realizar dependiendo de con cuanto cuidado lo hagas. Para ello, necesitarás un banco lo suficientemente resistente ancho para soportar tu cuerpo y una mancuerna, Solo deberás recostar tu cuerpo en el banco, asegurándote de apoyar desde la cabeza hasta el principio de tus muslos, dejando por fuera las rodillas, es decir, una pierna apoyada a cada lado. Luego, coge la mancuerna, alzala un poco y llévala a la parte de atrás de tu cabeza.'),
(44, 'Extensión de tríceps en polea', 'Deberás hacer de 3 a 4 series con 12 repeticiones.', 'Para este necesitarás una polea, así que debes hacerlo en el gimnasio. Lo más difícil será tomar la posición indicada. Ubícate frente la polea con la mitad del peso que puedes cargar, abre tus piernas a la altura de los hombros, extiende tus bazos y toma el mango. Tus manos deberán estar rectos hasta la muñeca, con los pulgares hacia a dentro. Haz una extensión de codos (moviendo solo los antebrazos) hasta llevar el mango a tus muslos y vuele la posición inicial.'),
(45, 'Extensión vertical con mancuerna', 'Deberás hacer de 3 a 4 series con 12 repeticiones.', 'Para este ejercicio solo necesitarás una mancuerna. Con mucho cuidado prestarle atención a la posición que vas a realizar. Párate completamente erguido con las piernas a la altura de tus hombros y coge una mancuerna con una de tus manos. Extiende dicho brazo, luego dobla el codo dejando que la mancuerna llegue hasta atrás y extiéndelo de nuevo.'),
(46, 'Rutina de bíceps con mancuernas', 'Realiza de 3 a 5 series con 12 repeticiones en cada una.', 'Es uno de los ejercicios más básicos que te darán resultados de forma rápida, solo necesitarás dos mancuernas y disposición para trabajar. La posición inicial será de pie completamente recto con las rodillas semi flexionadas y brazos extendidos. Deberás coger ambas mancuernas y elevarlas hasta el pecho, moviendo solo los antebrazos, dejando los codos en la misma posición y haciendo un pequeño movimiento de muñecas. Si deseas, puedes elevar ambas mancuernas al mismo tiempo o alternando brazos, según tu capacidad.'),
(47, 'Rutina para bíceps martillo', 'Realiza de 3 a 5 series con 12 repeticiones en cada una.', 'Es una variación del ejercicio anterior, en el que también necesitarás dos mancuernas solamente y podrás realizarlo en casa si deseas. Debes pararte completamente recto con las piernas a la altura de los hombros y los brazos a los lados. Toma una mancuerna con cada mano, dejando los pulgares en la parte interna. Luego, procede a realizar el levantamiento con el movimiento de los antebrazos, intentando mantener los codos sin movimiento cerca del torso. Si deseas, puedes elevar ambas mancuernas al mismo tiempo o alternando brazos, según tu capacidad.'),
(48, 'Dominada supina', 'Realiza de 2 a 4 series con 8 repeticiones en cada una.', 'Para las dominadas supinas necesitarás una barra fija únicamente. Deberás tener cuidado al momento de bajar y subir. De esta manera haces movimientos bruscos y lesionarte. Ponte de pie bajo la barra, tómala con ambas manos dejando los pulgares hacia la parte exterior y sube cuidadosamente hasta que tu cabeza esté por encima de la barra. Luego baja cuidadosamente, volviendo a la posición inicial y repitiendo el procedimiento.'),
(49, 'Press sentado', 'Realiza de 3 a 4 series con 10 repeticiones en cada una.', 'Deberás sentarte en una silla, preferiblemente de ejercicio, que te permita apoyarte en tus pies aun cuando estés sentado. Siéntate en una postura completamente recta, ubica tus pies y hombros a la altura de los hombros y coge una mancuerna en cada mano. Asegúrate de subir tus brazos hasta un poco más arriba de tu boca, sin que los codos dejen de apuntar el suelo.'),
(50, 'Elevación lateral', 'Realiza de 3 a 4 series con 11 repeticiones en cada una.', 'Para las elevaciones laterales solo necesitarás dos mancuernas, incluso podrás hacer este ejercicio en casa o un parque con facilidad.  Párate completamente recto y alinea tus pies a la altura de tus hombros con los brazos a los lado. Coge una mancuerna con cada mano, dejando el pulgar en la parte exterior y eleva los brazos a la altura de tus hombros. Si deseas puedes hacer otros ejercicios, como sentadillas, en conjunto a este ejercicio.'),
(51, 'pájaro inclinado', 'Realiza de 2 a 3 series con 8 repeticiones en cada una.', 'Este es una versión un poco más complicada de la elevación lateral, que ayuda muchísimo los deltoides posteriores. Podrás hacerlo con tres posiciones, para el primero párate recto con los pies a la altura de tus hombros e inclínate hacia adelante dejando tu espalda recta en paralelo al suelo. Luego toma una mancuerna con cada mano y elévalos a la altura de tus hombros. Para la segunda posición necesitas sentarte y apoyar tus pies al piso y baja tu espalda recta hasta que el pecho toque tus piernas. Coge dos mancuernas y elévalas a la altura de tus hombros.'),
(52, 'Sentadillas', 'Realiza de 3 a 5 series con 12 repeticiones en cada una.', 'Para iniciar debes posicionarte completamente recto con las piernas y los brazos extendidos a la altura de los hombros. Luego, mirando al frente debes inclinarte hacia atrás doblando las rodillas, que no deberán sobresalir de la punta de tus pies. Si deseas, puedes ayudarte uniendo tus manos mientras haces la sentadilla, o trabajar tus brazos al mismo tiempo con una barra.'),
(53, 'Zancadas', 'Realiza de 3 a 5 series con 12 repeticiones en cada una.', 'Las zancadas en una rutinas piernas también son relativamente fáciles, pero debes tener mucho cuidado con la posición que tomes para no lesionarte. Párate completamente recto con las piernas a la altura de tus hombros y los bazos alineados a los lados. Luego, coloca una pierna atrás, dobla tu rodilla mirando hacia el piso, la otra como si estuvieses haciendo una sentadilla, viendo al frente. Luego, vuelve a la posición inicial e invierte las posiciones (la que estaba viendo al piso deberá ver al frente).'),
(54, 'Peso muerto', 'Realiza de 3 a 5 series con 15 repeticiones en cada una.', 'Este ejercicio compuesto no solo te ayudará a tonificar las piernas, sino también espalda y brazos, así que indudablemente debes implementarlo en cualquiera de las rutinas de piernas. Ubícate en el centro de las barras, con pesas a tus pies y las piernas a la altura de los hombros. Con la espalda muy recta, baja doblando un poco las rodillas y poniendo la espalda en paralelo al piso, hasta tomar el mazo con las manos. Luego, súbela a la altura de tus rodillas, volviendo a la posición recta inicial.'),
(55, 'Puente', 'Realiza de 3 a 5 series con 20 repeticiones en cada una.', 'Este es uno de los ejercicios más fáciles que te ayudarán a mantenerte el trabajo que realices. Para llevarlo a cabo no necesitarás ningún equipo o elemento especial, así que podrás hacerlo en casa. Debes acostarte boca arriba en una superficie plana con las rodillas dobladas y las piernas apoyadas. Luego, levanta la cadera lo suficiente para que tus muslos y abdomen formen una línea recta. Permanece en esa posición durante 20 segundos y baja a la posición inicial. Los brazos deberán estar apoyados al piso para brindarte estabilidad.');

-- FGS.proveedor
insert into FGS_proveedor (id_proveedor, primer_nombre_proveedor, segundo_nombre_proveedor, primer_apellido_proveedor, segundo_apellido_proveedor, numero_telefono_proveerdor)
values 
(01, 'juan', 'Carlos', 'Colorado', 'Oriz', 3184378066),
(02, 'Alvaro', 'Jesus', 'Rodirguez', 'Torres', 3224557485),
(03, 'Paula', 'Nayibe', 'Garcia', 'Guascas', 3013517777);


-- FGS.producto
insert into FGS_producto (id_producto, nombre_producto, imagen_producto, fecha_vencimiento_producto, precio, marca, id_proveedor)
values
(61, 'GOLD STANDARD', null, '2023/09/25', 55.000, 'Optimun Nutrition', 01),
(62, 'ISO100', null, '2022/06/22', 150.000, 'Dimatize', 03),
(63, 'NITRO-TECH', null, '2005/12/8', 75.000, 'Muscletech', 02),
(64, 'SERIOUS MASS', null, '2020/01/16', 80.900, 'Optimun Nutrition',01),
(65, 'SUPER MASS GAINER', null, '2023/12/12', 145.000, 'Dimatize', 02),
(66, 'NITRO-TECH RIPPED', null, '2025/05/18', 165.000, 'Muscletech', 03),
(67, 'MEGA LITE', null, '2024/04/06', 75.999, 'UPN', 02),
(68, 'SYNTHA', null, '2026/01/15', 55.000, 'Finish First', 03),
(69, 'MASS-TECH EXTREME 2000', null, '2022/04/14', 60.000, 'Muscletech', 03),
(70, 'WHEY-HD', null, '2023/10/02', 44.000, 'Bpi Sports', 01),
(71, 'MEGAPLEX CREATINE POWER', null, '2028/08/28', 100.900, 'Muscletech', 02),
(72, 'ELITE 100% WHEY', null, '2026/12/31', 72.000, 'Dimatize', 01),
(73, 'ISO CLEAN', null, '2022/08/17', 65.000, 'Nutramerican', 02),
(74, 'ISOPURE ZERO/LOW CARB ISOPURE', null, '2025/11/02', 50.000, 'Low Carb', 03),
(75, 'BI-PRO',null, '2022/01/19', 55.000, 'Bai Pro',02),
(76, 'GAINZ 1100 HMB & BCAA', null, '2023/05/25', 65.000, 'Nutramerican', 01),
(77, 'CARNIVOR MASS', null, '2023/12/05', 74.999, 'Muscle Meds', 03),
(78, 'ISOLATE',null, '2022/11/13', 55.000, 'Sascha', 02),
(79, 'AMINOX', null, '2022/09/14', 120.000, 'Finish First', 01),
(80, 'MR HYDE NITROX', null, '2021/06/24', 130.000, 'Candy Shop', 03);

-- FGS.Tipo de pago
 insert into FGS_tipo_de_pago(id_tipo_de_pago, nombre_tipo_pago)
 values
(81, 'Tarjeta de credito'), 
(82, 'Tarjeta de debito');

 -- Carro de Compras
 insert into FGS_carro_compras(id_carro_compras, id_producto, id_tipo_de_pago)
 values
(90, 61, 81),
(91, 62, 82),
(92, 63, 81),
(93, 64, 82),
(94, 65, 81),
(95, 66, 82),
(96, 67, 82),
(97, 68, 81),
(98, 69, 82),
(99, 70, 81),
(100, 71, 81),
(101, 72, 81),
(102, 73, 82),
(103, 74, 82),
(104, 75, 81),
(105, 76, 82),
(106, 77, 81),
(107, 78, 82),
(108, 79, 81),
(109, 80, 81);

-- Usuario
insert into FGS_usuario(numero_documento, primer_nombre_usuario, segundo_nombre_usuario, primer_apellido_usuario, segundo_apellido_usuario, correo_usuario, fecha_nacimiento, peso_usuario, estatura_usuario, tipo_sangre_usuario, numero_telefono_usuario, id_rol, id_tipo_documento)
values
(1001327645, 'Diego', 'Armando', 'Colorado', 'Ortiz', 'diegocolorado253@gmail.com', '2002/02/06', 45.4, 1.70, 'B+', 3115886085, 001, 1),
(1008657421, 'Andres', 'Felipe', 'Jaime', 'Riaño', 'andresfel555@gmail.com', '2001/12/25', 50.3, 1.50, 'A+', 3213053939, 002, 2),
(1000584758, 'Daniel', 'Felipe', 'Corredor', 'Hernandez', 'corredor15@gmail.com', '2000/05/15', 60.4, 1.60, 'AB', 3213712754, 003, 3),
(1001547745, 'Paula', 'Andrea', 'Tinico', 'Bonilla', 'bonillatinoco788@gmail.com', '2001/10/12', 35.4, 1.40, 'B-', 3215874587, 003, 1),
(1000265357, 'Juan', '', 'Perez', '', 'jp233@gmail.com', '2002/03/22', 40.4, 1.60, 'O+', 3119886524, 002, 3),
(1000148756, 'Juan', 'Pablo', 'Ramirez', '', 'ramirezjp@gmail.com', '2001/08/01', 50.4, 1.69, 'AB', 3215525258, 002, 2),
(1000852854, 'Oscar', '', 'Perez', '', 'oscarperez@gmail.com', '2001/09/13', 45.4, 1.75, 'A-', 3213698568, 003, 3),
(1005785825, 'Harold', 'Camilo', 'Paez', '', 'hcpaez@gmail.com', '2000/12/15', 46.4, 1.80, 'B+', 3216988547, 002, 1),
(1000255401, 'Camila', '', 'Quijano', '', 'camiq@gmail.com', '2001/03/25', 35.6, 1.50, 'O-', 3213085410, 002, 3),
(1001545656, 'Jose', 'Alberto', 'Perez', 'Ramirez', 'ramirez542@gmail.com', '2000/01/19', 50.4, 1.75, 'AB', 3215488765, 002, 3),
(1001331591, 'Cristhian', 'Camilo', 'Mendez', 'Mora', 'mendez-mora2011@gmail.com', '2001/09/20', 54.4, 1.65, 'B+', 3184378066,002, 1),
(1005487874, 'Andres', '', 'Rosa', '', 'AR545@gmail.com', '2006/02/26', 55.2, 1.60, 'O+', 3115478576, 002, 3),
(1000585252, 'Paula', 'Nayibe', 'Garcia', 'Mora', 'paulamor2011@gmail.com', '2000/04/16', 65.4, 1.69, 'B+', 3014758586, 002, 2),
(1002584785, 'Andres', 'Mateo', 'Ayala', 'Rodriguez', 'mateoaayala@gmail.com', '2002/12/17', 69.1, 1.80, 'A+', 3124297845, 002, 3),
(1001779587, 'Stefany', '', 'Angarita', 'Paez', 'carameelito17@gmail.com', '2006/12/18', 69.4, 1.70, 'B+', 3115886085, 003, 1),
(7984441510, 'Brandon', 'Andrey', 'Moreno', 'Reinoso', 'andreymoreno@gmail.com', '2000/07/12', 65.4, 1.75, 'A+', 3102361296, 003, 3),
(1001557454, 'Kevin', 'Sebastian', 'Diaz', 'Reyes', 'kevindiaz22@gmail.com', '2006/02/17', 40.4, 1.72, 'B+', 3128962314, 002, 2),
(1003547895, 'Vanesa', 'Nicol', 'Mendez', 'Mora', 'vanesitanmora@gmail.com', '1999/10/29', 40.4, 1.74, 'A+', 3219657832, 002, 2),
(1002145879, 'Vladimir', 'Armando', 'Yepes', 'Ortiz', 'yepetoortiz@gmail.com', '2001/02/26', 40.4, 1.69, 'AB+', 3156329710, 002, 2),
(1085987410, 'Nicol', '', 'Arias', 'Rodriguez', 'hjarias17@gmail.com', '2002/09/01', 45.6, 1.54, 'O+', 3115886085, 003, 3);

-- Factura
insert into FGS_factura (id_factura, fecha_factura, id_carro_compras, numero_documento, id_tipo_documento)
values
(201,'2019/09/05',91, 1008657421, 2),
(202,'2019/10/15',92, 1000584758, 3),
(203,'2019/09/01',93, 1001547745, 1),
(204,'2019/08/10',94, 1000265357, 3),
(205,'2019/12/05',95, 1000148756, 2),
(206,'2019/07/04',96, 1000852854, 3),
(207,'2019/05/03',97, 1005785825, 1),
(208,'2019/11/24',98, 1000255401, 3),
(209,'2019/10/02',99, 1001545656, 3),
(210,'2019/01/18',100, 1001331591, 1),
(211,'2019/02/26',101, 1005487874, 3),
(212,'2019/10/20',102, 1000585252, 2),
(213,'2019/06/14',103, 1002584785, 3),
(214,'2019/11/20',104, 1001779587, 1),
(215,'2019/04/19',105, 7984441510, 3),
(216,'2019/12/29',106, 1001557454, 2),
(217,'2019/03/12',107, 1003547895, 2),
(218,'2019/05/25',108, 1002145879, 2),
(219,'2019/11/12',109, 1085987410, 3);


-- Envío 
insert into FGS_envio(id_envio,fecha_envio,id_factura)
values
(301,'2019/12/31',201),
(302,'2019/10/22',202),
(303,'2019/05/01',203),
(304,'2019/02/28',204),
(305,'2019/10/14',205),
(306,'2019/06/10',206),
(307,'2019/03/20',207),
(308,'2019/01/25',208),
(309,'2019/02/01',209),
(310,'2019/01/19',210),
(311,'2019/10/14',211),
(312,'2019/07/30',212),
(313,'2019/10/19',213),
(314,'2019/06/22',214),
(315,'2019/09/10',215),
(316,'2019/12/07',216),
(317,'2019/11/29',217),
(318,'2019/09/27',218);

-- Usuario-Dietas
insert into FGS_usuario_dietas(numero_documento, id_tipo_documento, id_dietas)
values
(1008657421, 2, 21),
(1000584758, 3, 22),
(1001547745, 1, 23),
(1000265357, 3, 24),
(1000148756, 2, 25),
(1000852854, 3, 26),
(1005785825, 1, 27),
(1000255401, 3, 28),
(1001545656, 3, 29),
(1001331591, 1, 30),
(1005487874, 3, 31),
(1000585252, 2, 32),
(1002584785, 3, 33),
(1001779587, 1, 34),
(7984441510, 3, 35),
(1001557454, 2, 36),
(1003547895, 2, 37),
(1002145879, 2, 38),
(1085987410, 3, 39);

-- Usuario-Rutinas
insert into FGS_usuario_rutinas(numero_documento, id_tipo_documento, id_rutinas)
values
(1008657421, 2, 41),
(1000584758, 3, 42),
(1001547745, 1, 43),
(1000265357, 3, 44),
(1000148756, 2, 45),
(1000852854, 3, 46),
(1005785825, 1, 47),
(1000255401, 3, 48),
(1001545656, 3, 49),
(1001331591, 1, 50),
(1005487874, 3, 51),
(1000585252, 2, 52),
(1002584785, 3, 53),
(1001779587, 1, 54),
(7984441510, 3, 55),
(1001557454, 2, 46),
(1003547895, 2, 41),
(1002145879, 2, 50),
(1085987410, 3, 43);

-- Usuario-Producto
insert into FGS_usuario_producto(numero_documento, id_tipo_documento, id_producto)
values
(1008657421, 2, 61),
(1000584758, 3, 62),
(1001547745, 1, 63),
(1000265357, 3, 64),
(1000148756, 2, 65),
(1000852854, 3, 66),
(1005785825, 1, 67),
(1000255401, 3, 68),
(1001545656, 3, 69),
(1001331591, 1, 70),
(1005487874, 3, 71),
(1000585252, 2, 72),
(1002584785, 3, 73),
(1001779587, 1, 74),
(7984441510, 3, 75),
(1001557454, 2, 76),
(1003547895, 2, 77),
(1002145879, 2, 78),
(1085987410, 3, 79);

-- Usuario-Plan
insert into FGS_usuario_plan(numero_documento, id_tipo_documento, id_plan)
values
(1008657421, 2, 11),
(1000584758, 3, 12),
(1001547745, 1, 13),
(1000265357, 3, 14),
(1000148756, 2, 11),
(1000852854, 3, 12),
(1005785825, 1, 13),
(1000255401, 3, 14),
(1001545656, 3, 11),
(1001331591, 1, 12),
(1005487874, 3, 13),
(1000585252, 2, 14),
(1002584785, 3, 11),
(1001779587, 1, 12),
(7984441510, 3, 13),
(1001557454, 2, 14),
(1003547895, 2, 11),
(1002145879, 2, 12),
(1085987410, 3, 13);

-- Plan-Tipo de pago
insert into FGS_plan_tipo_de_pago(id_plan, id_tipo_de_pago)
values
(11, 81),
(11, 82),
(12, 81),
(12, 82),
(13, 81),
(13, 82),
(14, 81),
(14, 82);