--
-- PostgreSQL database dump
--

-- Dumped from database version 9.6.10
-- Dumped by pg_dump version 9.6.10

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET client_min_messages = warning;
SET row_security = off;

--
-- Name: plpgsql; Type: EXTENSION; Schema: -; Owner: 
--

CREATE EXTENSION IF NOT EXISTS plpgsql WITH SCHEMA pg_catalog;


--
-- Name: EXTENSION plpgsql; Type: COMMENT; Schema: -; Owner: 
--

COMMENT ON EXTENSION plpgsql IS 'PL/pgSQL procedural language';


SET default_tablespace = '';

SET default_with_oids = false;

--
-- Name: _about; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._about (
    id smallint,
    first_name character varying(5) DEFAULT NULL::character varying,
    last_name character varying(6) DEFAULT NULL::character varying,
    occupation character varying(14) DEFAULT NULL::character varying,
    description character varying(419) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying,
    activated smallint
);


ALTER TABLE public._about OWNER TO rebasedata;

--
-- Name: _blogs; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._blogs (
    id smallint,
    title character varying(15) DEFAULT NULL::character varying,
    description character varying(198) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._blogs OWNER TO rebasedata;

--
-- Name: _done_projects; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._done_projects (
    id smallint,
    name character varying(17) DEFAULT NULL::character varying,
    image character varying(8) DEFAULT NULL::character varying,
    short_desc character varying(74) DEFAULT NULL::character varying,
    long_desc character varying(400) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._done_projects OWNER TO rebasedata;

--
-- Name: _failed_jobs; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._failed_jobs (
    id character varying(1) DEFAULT NULL::character varying,
    uuid character varying(1) DEFAULT NULL::character varying,
    connection character varying(1) DEFAULT NULL::character varying,
    queue character varying(1) DEFAULT NULL::character varying,
    payload character varying(1) DEFAULT NULL::character varying,
    exception character varying(1) DEFAULT NULL::character varying,
    failed_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._failed_jobs OWNER TO rebasedata;

--
-- Name: _goals; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._goals (
    id character varying(1) DEFAULT NULL::character varying,
    name character varying(1) DEFAULT NULL::character varying,
    description character varying(1) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._goals OWNER TO rebasedata;

--
-- Name: _migrations; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._migrations (
    id smallint,
    migration character varying(46) DEFAULT NULL::character varying,
    batch smallint
);


ALTER TABLE public._migrations OWNER TO rebasedata;

--
-- Name: _password_resets; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._password_resets (
    email character varying(1) DEFAULT NULL::character varying,
    token character varying(1) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._password_resets OWNER TO rebasedata;

--
-- Name: _skill_details; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._skill_details (
    id smallint,
    skill_id smallint,
    detail character varying(40) DEFAULT NULL::character varying,
    percent_achievement smallint,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._skill_details OWNER TO rebasedata;

--
-- Name: _skills; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._skills (
    id smallint,
    name character varying(18) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._skills OWNER TO rebasedata;

--
-- Name: _sqlite_sequence; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._sqlite_sequence (
    name character varying(13) DEFAULT NULL::character varying,
    seq smallint
);


ALTER TABLE public._sqlite_sequence OWNER TO rebasedata;

--
-- Name: _stories; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._stories (
    id character varying(1) DEFAULT NULL::character varying,
    content character varying(1) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._stories OWNER TO rebasedata;

--
-- Name: _testimonies; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._testimonies (
    id smallint,
    content character varying(168) DEFAULT NULL::character varying,
    reference character varying(12) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._testimonies OWNER TO rebasedata;

--
-- Name: _uploads; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._uploads (
    id smallint,
    name character varying(22) DEFAULT NULL::character varying,
    uri character varying(46) DEFAULT NULL::character varying,
    type character varying(1) DEFAULT NULL::character varying,
    belongs_to_table character varying(13) DEFAULT NULL::character varying,
    belongs_to_id smallint,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying,
    deleted_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._uploads OWNER TO rebasedata;

--
-- Name: _users; Type: TABLE; Schema: public; Owner: rebasedata
--

CREATE TABLE public._users (
    id smallint,
    name character varying(5) DEFAULT NULL::character varying,
    email character varying(15) DEFAULT NULL::character varying,
    email_verified_at character varying(1) DEFAULT NULL::character varying,
    password character varying(60) DEFAULT NULL::character varying,
    remember_token character varying(1) DEFAULT NULL::character varying,
    created_at character varying(1) DEFAULT NULL::character varying,
    updated_at character varying(1) DEFAULT NULL::character varying
);


ALTER TABLE public._users OWNER TO rebasedata;

--
-- Data for Name: _about; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._about (id, first_name, last_name, occupation, description, created_at, updated_at, deleted_at, activated) FROM stdin;
28	Tùng	Nguyễn	Kĩ sư phần mềm	Niềm đam mê lập trình nở muộn nên tôi đã phải từ bỏ công việc quản lý vận tải đã gắn bó nhiều năm để theo đuổi mục tiêu nghề nghiệp ở cái tuổi lẽ ra đã ổn định cuộc sống.  Không chấp nhận thất bại và sẵn sàng đương đầu với mọi thử thách.  Không sợ bug, chỉ sợ cấp trên vô tâm.  Nhiệt tình, cởi mở, quan tâm và tháo vát.  Tôi lạc quan, có khiếu hài hước và dễ dàng hòa đồng với mọi người ở mọi lứa tuổi và mọi hoàn cảnh.				1
29	adasd	ddd	asdad	234				0
\.


--
-- Data for Name: _blogs; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._blogs (id, title, description, created_at, updated_at, deleted_at) FROM stdin;
1	Vehicle manager	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
2	Tattoo Artist	To populate the default model with attributes, you may pass an array or closure to the withDefault method:			
3	Employee	However, this relationship indicates that the declaring model can be matched with one instance of another model by proceeding through a third model.			
4	Vehicle manager	those fucking shoes			
5	Vehicle manager	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
6	Employee	those fucking shoes			
7	Vehicle manager	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
8	Vehicle manager	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
9	Vehicle manager	those fucking shoes			
10	Employee	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
11	Tattoo Artist	asdads			
12	Vehicle manager	those fucking shoes			
13	Employee	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
14	Tattoo Artist	asdads			
15	Vehicle manager	those fucking shoes			
16	Employee	I have a one to many relationship between Device and Command models (each Device has many commands). Now I want to update a collection of commands using save() method. So, I used the following code:			
17	Tattoo Artist	asdads			
18	asdasd	sdadasd			
19	sdgfdfsgdf	dfgdgdfgdgfd			
20	fsdasdfASdf	adasdadqwqd			
21	dasfasdfa	asdfasfasdf			
\.


--
-- Data for Name: _done_projects; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._done_projects (id, name, image, short_desc, long_desc, created_at, updated_at, deleted_at) FROM stdin;
1	alternative	sdfasdf	gfhjfghjfghjfjtfjtfyj	aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa			
2	current	aradadsd	The current alternative for pluck() is value().	Eloquent determines the default foreign key name by examining the name of the relationship method and suffixing the method name with a _ followed by the name of the parent model's primary key column. So, in this example, Eloquent will assume the Post model's foreign key on the comments table is post_id.			
3	However	adsasd	if the foreign key for your relationship does not follow these conventions	The belongsTo, hasOne, hasOneThrough, and morphOne relationships allow you to define a default model that will be returned if the given relationship is null. This pattern is often referred to as the Null Object pattern and can help remove conditional checks in your code. In the following example, the user relation will return an empty App\\Models\\User model if no user is attached to the Post model:			
4	Donald H. Dump		The current alternative for pluck() is value().	The belongsTo, hasOne, hasOneThrough, and morphOne relationships allow you to define a default model that will be returned if the given relationship is null. This pattern is often referred to as the Null Object pattern and can help remove conditional checks in your code. In the following example, the user relation will return an empty App\\Models\\User model if no user is attached to the Post model:			
5	techcombank		The current alternative for pluck() is value().	The belongsTo, hasOne, hasOneThrough, and morphOne relationships allow you to define a default model that will be returned if the given relationship is null. This pattern is often referred to as the Null Object pattern and can help remove conditional checks in your code. In the following example, the user relation will return an empty App\\Models\\User model if no user is attached to the Post model:			
6	John Doe Jr.		if the foreign key for your relationship does not follow these conventions	Eloquent determines the default foreign key name by examining the name of the relationship method and suffixing the method name with a _ followed by the name of the parent model's primary key column. So, in this example, Eloquent will assume the Post model's foreign key on the comments table is post_id.			
7	John Doe Jr.		The current alternative for pluck() is value().	The belongsTo, hasOne, hasOneThrough, and morphOne relationships allow you to define a default model that will be returned if the given relationship is null. This pattern is often referred to as the Null Object pattern and can help remove conditional checks in your code. In the following example, the user relation will return an empty App\\Models\\User model if no user is attached to the Post model:			
8	Donald H. Dump		if the foreign key for your relationship does not follow these conventions	Eloquent determines the default foreign key name by examining the name of the relationship method and suffixing the method name with a _ followed by the name of the parent model's primary key column. So, in this example, Eloquent will assume the Post model's foreign key on the comments table is post_id.			
9	Naughty civilians		gfhjfghjfghjfjtfjtfyj	aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa			
10	Admin		The current alternative for pluck() is value().	The belongsTo, hasOne, hasOneThrough, and morphOne relationships allow you to define a default model that will be returned if the given relationship is null. This pattern is often referred to as the Null Object pattern and can help remove conditional checks in your code. In the following example, the user relation will return an empty App\\Models\\User model if no user is attached to the Post model:			
\.


--
-- Data for Name: _failed_jobs; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._failed_jobs (id, uuid, connection, queue, payload, exception, failed_at) FROM stdin;
\.


--
-- Data for Name: _goals; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._goals (id, name, description, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: _migrations; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._migrations (id, migration, batch) FROM stdin;
1	2014_10_12_000000_create_users_table	1
2	2014_10_12_100000_create_password_resets_table	1
3	2019_08_19_000000_create_failed_jobs_table	1
4	2021_04_08_043220_create_about_table	2
5	2021_04_08_043239_create_stories_table	2
6	2021_04_08_043258_create_goals_table	2
7	2021_04_08_043312_create_testimonies_table	2
8	2021_04_08_043325_create_skills_table	2
9	2021_04_08_043337_create_skill_details_table	2
10	2021_04_08_043404_create_done_projects_table	2
11	2021_04_08_043418_create_blogs_table	2
12	2021_04_09_020433_create_images_table	3
\.


--
-- Data for Name: _password_resets; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._password_resets (email, token, created_at) FROM stdin;
\.


--
-- Data for Name: _skill_details; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._skill_details (id, skill_id, detail, percent_achievement, created_at, updated_at, deleted_at) FROM stdin;
1	1	sdfasdfasdf	54			
2	2	jjjjjjjjjjjjjjjjj	66			
3	3	xxxxxxxxxxxxxx	44			
4	1	cccccccccccc	55			
5	3	jkkkkkkkkkkkkkkkkkk	77			
6	4	PHP	80			
7	4	JavaScript	60			
8	4	AJAX jQuery, CSS, HTML5, Bootstrap,...	70			
9	4	RESTful API	66			
10	5	Laravel	33			
11	5	Yii2	55			
12	5	purePHP	44			
13	5	Metasploit	66			
14	6	MySQL	33			
15	6	sqlite	55			
16	6	MongoDB	66			
17	6	Redis	55			
18	7	PHPStorm, WebStorm, Visual Studio,...	55			
19	7	Docker	55			
20	7	phpMyAdmin, navicat, MongoDB Compass,...	67			
21	7	Linux CLI, Postman,...	66			
22	8	Tiếng Anh (TOEIC 804 2014)	99			
23	8	tiếng Trung phổ thông (HSK 4级 2012)	66			
\.


--
-- Data for Name: _skills; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._skills (id, name, created_at, updated_at, deleted_at) FROM stdin;
1	Wreaking Havoc			
2	Creating Chaos			
3	Make Evolution			
4	Ngôn ngữ lập trình			
5	Framework			
6	Cơ sở dữ liệu			
7	Công cụ			
8	Ngoại ngữ			
\.


--
-- Data for Name: _sqlite_sequence; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._sqlite_sequence (name, seq) FROM stdin;
migrations	12
users	1
skills	8
skill_details	23
blogs	21
testimonies	3
about	29
uploads	76
done_projects	10
\.


--
-- Data for Name: _stories; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._stories (id, content, created_at, updated_at, deleted_at) FROM stdin;
\.


--
-- Data for Name: _testimonies; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._testimonies (id, content, reference, created_at, updated_at, deleted_at) FROM stdin;
1	For example, in a vehicle repair shop application, each Mechanic model may be associated with one Car model, and each Car model may be associated with one Owner model.	id - integer			
2	Now that we have examined the table structure for the relationship, let's define the relationship on the Mechanic model:	Models			
3	The first argument passed to the hasOneThrough method is the name of the final model we wish to access, while the second argument is the name of the intermediate model.	Eloquent			
\.


--
-- Data for Name: _uploads; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._uploads (id, name, uri, type, belongs_to_table, belongs_to_id, created_at, updated_at, deleted_at) FROM stdin;
28	about_me_24_01.jpg	/storage/uploads/images/about_me_24_01.jpg		about	24			
29	about_me_25_00.jpg	/storage/uploads/images/about_me_25_00.jpg		about	25			
30	about_me_25_01.jpg	/storage/uploads/images/about_me_25_01.jpg		about	25			
31	about_me_26_00.jpg	/storage/uploads/images/about_me_26_00.jpg		about	26			
32	about_me_26_01.jpg	/storage/uploads/images/about_me_26_01.jpg		about	26			
39	done_project_7_00.jpg	/storage/uploads/images/done_project_7_00.jpg		done_projects	7			
40	done_project_7_01.jpg	/storage/uploads/images/done_project_7_01.jpg		done_projects	7			
41	done_project_8_00.jpg	/storage/uploads/images/done_project_8_00.jpg		done_projects	8			
42	done_project_8_01.jpg	/storage/uploads/images/done_project_8_01.jpg		done_projects	8			
43	done_project_9_00.jpg	/storage/uploads/images/done_project_9_00.jpg		done_projects	9			
44	done_project_9_01.jpg	/storage/uploads/images/done_project_9_01.jpg		done_projects	9			
45	done_project_10_00.jpg	/storage/uploads/images/done_project_10_00.jpg		done_projects	10			
46	done_project_10_01.jpg	/storage/uploads/images/done_project_10_01.jpg		done_projects	10			
47	done_project_10_00.jpg	/storage/uploads/images/done_project_10_00.jpg		done_projects	10			
48	done_project_10_01.jpg	/storage/uploads/images/done_project_10_01.jpg		done_projects	10			
49	blog_9_00.jpg	/storage/uploads/images/blog_9_00.jpg		blogs	9			
50	blog_9_01.jpg	/storage/uploads/images/blog_9_01.jpg		blogs	9			
51	blog_10_00.jpg	/storage/uploads/images/blog_10_00.jpg		blogs	10			
52	blog_10_01.jpg	/storage/uploads/images/blog_10_01.jpg		blogs	10			
53	blog_11_00.jpg	/storage/uploads/images/blog_11_00.jpg		blogs	11			
54	blog_11_01.jpg	/storage/uploads/images/blog_11_01.jpg		blogs	11			
55	about_me_27_00.jpg	/storage/uploads/images/about_me_27_00.jpg		about	27			
56	about_me_27_01.jpg	/storage/uploads/images/about_me_27_01.jpg		about	27			
57	blog_9_00.jpg	/storage/uploads/images/blog_9_00.jpg		blogs	9			
58	blog_9_01.jpg	/storage/uploads/images/blog_9_01.jpg		blogs	9			
59	blog_10_00.jpg	/storage/uploads/images/blog_10_00.jpg		blogs	10			
60	blog_10_01.jpg	/storage/uploads/images/blog_10_01.jpg		blogs	10			
61	blog_11_00.jpg	/storage/uploads/images/blog_11_00.jpg		blogs	11			
62	blog_11_01.jpg	/storage/uploads/images/blog_11_01.jpg		blogs	11			
63	blog_18_00.jpg	/storage/uploads/images/blog_18_00.jpg		blogs	18			
64	blog_18_01.jpg	/storage/uploads/images/blog_18_01.jpg		blogs	18			
65	blog_19_00.jpg	/storage/uploads/images/blog_19_00.jpg		blogs	19			
66	blog_19_01.jpg	/storage/uploads/images/blog_19_01.jpg		blogs	19			
67	blog_20_00.jpg	/storage/uploads/images/blog_20_00.jpg		blogs	20			
68	blog_20_01.jpg	/storage/uploads/images/blog_20_01.jpg		blogs	20			
69	blog_21_00.jpg	/storage/uploads/images/blog_21_00.jpg		blogs	21			
70	blog_21_01.jpg	/storage/uploads/images/blog_21_01.jpg		blogs	21			
73	about_me_29_00.jpg	/storage/uploads/images/about_me_29_00.jpg		about	29			
74	about_me_29_01.jpg	/storage/uploads/images/about_me_29_01.jpg		about	29			
75	about_me__28_00.jpg	/storage/uploads/images/about_me__28_00.jpg		about	28			
76	about_me__28_01.jpg	/storage/uploads/images/about_me__28_01.jpg		about	28			
\.


--
-- Data for Name: _users; Type: TABLE DATA; Schema: public; Owner: rebasedata
--

COPY public._users (id, name, email, email_verified_at, password, remember_token, created_at, updated_at) FROM stdin;
1	Admin	admin@admin.com		$2y$10$.VO4bXwE7topUpMYdA6oWupdknGIbTEkO4Z1qTCu7AD2yrWY19W2y			
\.


--
-- PostgreSQL database dump complete
--

