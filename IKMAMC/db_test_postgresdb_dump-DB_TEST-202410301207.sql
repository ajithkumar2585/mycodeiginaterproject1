--
-- PostgreSQL database dump
--

-- Dumped from database version 14.5
-- Dumped by pg_dump version 14.5

-- Started on 2024-10-30 12:07:30

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

--
-- TOC entry 3 (class 2615 OID 2200)
-- Name: public; Type: SCHEMA; Schema: -; Owner: postgres
--

CREATE SCHEMA public;


ALTER SCHEMA public OWNER TO postgres;

--
-- TOC entry 3380 (class 0 OID 0)
-- Dependencies: 3
-- Name: SCHEMA public; Type: COMMENT; Schema: -; Owner: postgres
--

COMMENT ON SCHEMA public IS 'standard public schema';


SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 214 (class 1259 OID 16418)
-- Name: employee_address; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.employee_address (
    id integer NOT NULL,
    address1 character varying(100),
    address2 character varying(100),
    location character varying(100),
    landmark character varying(100),
    postoffice character varying(100),
    pincode numeric(6,0),
    district character varying(100),
    state character varying(100)
);


ALTER TABLE public.employee_address OWNER TO postgres;

--
-- TOC entry 213 (class 1259 OID 16417)
-- Name: employee_address_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.employee_address_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.employee_address_id_seq OWNER TO postgres;

--
-- TOC entry 3381 (class 0 OID 0)
-- Dependencies: 213
-- Name: employee_address_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.employee_address_id_seq OWNED BY public.employee_address.id;


--
-- TOC entry 212 (class 1259 OID 16413)
-- Name: sampleform; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.sampleform (
    id integer NOT NULL,
    customer_name character varying(100),
    email character varying(100),
    mobile_no character varying(100),
    remarks character varying(100)
);


ALTER TABLE public.sampleform OWNER TO postgres;

--
-- TOC entry 211 (class 1259 OID 16412)
-- Name: sampleform_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.sampleform_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.sampleform_id_seq OWNER TO postgres;

--
-- TOC entry 3382 (class 0 OID 0)
-- Dependencies: 211
-- Name: sampleform_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.sampleform_id_seq OWNED BY public.sampleform.id;


--
-- TOC entry 216 (class 1259 OID 16425)
-- Name: tr_amc_details; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tr_amc_details (
    id integer NOT NULL,
    machine_name character varying(100),
    machinetype smallint,
    model smallint,
    warranty_date date,
    amc_date date,
    machine_slno integer,
    officesection character varying(100),
    remarks character varying(200)
);


ALTER TABLE public.tr_amc_details OWNER TO postgres;

--
-- TOC entry 215 (class 1259 OID 16424)
-- Name: tr_amc_details_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tr_amc_details_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tr_amc_details_id_seq OWNER TO postgres;

--
-- TOC entry 3383 (class 0 OID 0)
-- Dependencies: 215
-- Name: tr_amc_details_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tr_amc_details_id_seq OWNED BY public.tr_amc_details.id;


--
-- TOC entry 210 (class 1259 OID 16396)
-- Name: tr_employee_details; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tr_employee_details (
    id integer NOT NULL,
    employee_name character varying(100),
    empid character varying(100),
    empwebaddr character varying(100),
    email_official character varying(100),
    mobile_no character varying(100)
);


ALTER TABLE public.tr_employee_details OWNER TO postgres;

--
-- TOC entry 209 (class 1259 OID 16395)
-- Name: tr_contact_details_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tr_contact_details_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tr_contact_details_id_seq OWNER TO postgres;

--
-- TOC entry 3384 (class 0 OID 0)
-- Dependencies: 209
-- Name: tr_contact_details_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tr_contact_details_id_seq OWNED BY public.tr_employee_details.id;


--
-- TOC entry 220 (class 1259 OID 16459)
-- Name: tr_feedback; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tr_feedback (
    id integer NOT NULL,
    feedname character varying(100),
    feedemail character varying(100),
    feedmobile_no numeric(10,0),
    visit_status integer,
    fedneed integer,
    fq integer,
    remarks character varying(200),
    remarks1 character varying(200)
);


ALTER TABLE public.tr_feedback OWNER TO postgres;

--
-- TOC entry 219 (class 1259 OID 16458)
-- Name: tr_feedback_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tr_feedback_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tr_feedback_id_seq OWNER TO postgres;

--
-- TOC entry 3385 (class 0 OID 0)
-- Dependencies: 219
-- Name: tr_feedback_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tr_feedback_id_seq OWNED BY public.tr_feedback.id;


--
-- TOC entry 218 (class 1259 OID 16432)
-- Name: tr_personal_details; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tr_personal_details (
    id integer NOT NULL,
    pname character varying(100),
    pemail character varying(100),
    address1 character varying(200),
    city_name character varying(100),
    state character varying(100),
    pincode integer,
    mobile_no numeric(10,0),
    dob date,
    gender smallint,
    marital_status smallint,
    eq numeric
);


ALTER TABLE public.tr_personal_details OWNER TO postgres;

--
-- TOC entry 217 (class 1259 OID 16431)
-- Name: tr_personal_details_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tr_personal_details_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tr_personal_details_id_seq OWNER TO postgres;

--
-- TOC entry 3386 (class 0 OID 0)
-- Dependencies: 217
-- Name: tr_personal_details_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tr_personal_details_id_seq OWNED BY public.tr_personal_details.id;


--
-- TOC entry 222 (class 1259 OID 16492)
-- Name: tr_registration; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.tr_registration (
    id integer NOT NULL,
    chvname character varying(100),
    chvdesignation smallint,
    intage integer,
    doj date,
    intstatus integer
);


ALTER TABLE public.tr_registration OWNER TO postgres;

--
-- TOC entry 221 (class 1259 OID 16491)
-- Name: tr_registration_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.tr_registration_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.tr_registration_id_seq OWNER TO postgres;

--
-- TOC entry 3387 (class 0 OID 0)
-- Dependencies: 221
-- Name: tr_registration_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.tr_registration_id_seq OWNED BY public.tr_registration.id;


--
-- TOC entry 224 (class 1259 OID 16499)
-- Name: users; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.users (
    id integer NOT NULL,
    username character varying(255),
    email character varying(255),
    password character varying(255),
    created_at timestamp without time zone DEFAULT now() NOT NULL,
    updated_at timestamp without time zone
);


ALTER TABLE public.users OWNER TO postgres;

--
-- TOC entry 223 (class 1259 OID 16498)
-- Name: users_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.users_id_seq OWNER TO postgres;

--
-- TOC entry 3388 (class 0 OID 0)
-- Dependencies: 223
-- Name: users_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;


--
-- TOC entry 3201 (class 2604 OID 16421)
-- Name: employee_address id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.employee_address ALTER COLUMN id SET DEFAULT nextval('public.employee_address_id_seq'::regclass);


--
-- TOC entry 3200 (class 2604 OID 16416)
-- Name: sampleform id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sampleform ALTER COLUMN id SET DEFAULT nextval('public.sampleform_id_seq'::regclass);


--
-- TOC entry 3202 (class 2604 OID 16428)
-- Name: tr_amc_details id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_amc_details ALTER COLUMN id SET DEFAULT nextval('public.tr_amc_details_id_seq'::regclass);


--
-- TOC entry 3199 (class 2604 OID 16399)
-- Name: tr_employee_details id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_employee_details ALTER COLUMN id SET DEFAULT nextval('public.tr_contact_details_id_seq'::regclass);


--
-- TOC entry 3204 (class 2604 OID 16462)
-- Name: tr_feedback id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_feedback ALTER COLUMN id SET DEFAULT nextval('public.tr_feedback_id_seq'::regclass);


--
-- TOC entry 3203 (class 2604 OID 16435)
-- Name: tr_personal_details id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_personal_details ALTER COLUMN id SET DEFAULT nextval('public.tr_personal_details_id_seq'::regclass);


--
-- TOC entry 3205 (class 2604 OID 16495)
-- Name: tr_registration id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_registration ALTER COLUMN id SET DEFAULT nextval('public.tr_registration_id_seq'::regclass);


--
-- TOC entry 3206 (class 2604 OID 16502)
-- Name: users id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);


--
-- TOC entry 3364 (class 0 OID 16418)
-- Dependencies: 214
-- Data for Name: employee_address; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.employee_address (id, address1, address2, location, landmark, postoffice, pincode, district, state) FROM stdin;
\.


--
-- TOC entry 3362 (class 0 OID 16413)
-- Dependencies: 212
-- Data for Name: sampleform; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.sampleform (id, customer_name, email, mobile_no, remarks) FROM stdin;
17	Ragi	ragi@mail.com	9495391144	Welcome
21	priya	priya@mail.com	9995879308	hello baby
29	vipin	vipi@mail.com	9895382698	hello
18	Vidhya	vidhya@mail.com	9589348934	Welcome to ooty
16	Sunil	sunil@mail.com	9484949494	Excuse Me
28	Saveen	Savi@mail.com	9894948310	Jai Chunk
26	Saritha	saru@mail.com	9489347832	Hathi Mera Sathi...
19	Ajith	ajith@mail.com	9995892735	Evaluthe Akarelu..
20	Arun	arun@mail.com	9823738832	Moda Pidichavan
24	IKM	ikm@mail.com	9489584388	Code Study Group
22	Akhila	akhila@mail.com	9633499755	Padachone egalu Katholeene
15	Samuel	sam@gmail.com	9498932343	Nice to Meet you
23	Priya	priya@mail.com	9995879308	Njan Mathram alla avarum undu..
27	Shine	shin@mail.com	9494203934	Egalu enthu Verupikal aanu..
25	Cini	cini@mail.com	9898323486	Welcome
\.


--
-- TOC entry 3366 (class 0 OID 16425)
-- Dependencies: 216
-- Data for Name: tr_amc_details; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tr_amc_details (id, machine_name, machinetype, model, warranty_date, amc_date, machine_slno, officesection, remarks) FROM stdin;
8	dfadsf	1	1	2022-10-23	2022-10-23	45234	sdfsf	sadad
9	dfadsf	1	1	2022-10-23	2022-10-23	45234	sdfsf	sadad
10	dfadsf	1	1	2022-10-23	2022-10-23	45234	sdfsf	sadad
11	dfadsf	1	1	2022-10-23	2022-10-23	45234	sdfsf	sadad
12	sdds	1	2	2022-10-23	2022-10-23	3333	asdsad	asdasd
14	IKM/PRN/008	3	3	2022-10-21	2022-10-21	67676767	ACCOUNTS	SSSDDD
15	a	1	1	1970-01-01	1970-01-01	11111	aa	aa
13	IKM/LAP/005	1	\N	1970-01-01	1970-01-11	3333	ssss	ssss
18	IKM/PRN/004	3	2	2002-01-01	2004-01-01	1223	Software	Expired
6	IKM/PRN/001	3	3	2022-10-23	2022-10-23	677576	GHJJH	eeeee
16	wwww	1	3	2022-11-10	2022-11-09	222	sss	sss
2	IKM/34/23/01	3	4	2022-11-09	2022-11-10	2222222	Support	New PRn
5	IKM/LAP/002	2	3	2022-10-23	2022-10-23	1234567	accounts	Updated
17	IKM/PC/005	1	2	2002-01-01	2002-01-01	231010011	HR	Check
1	IKM	1	1	2022-10-20	2022-10-20	1000	Finance	checked
4	IKM/PC/007	1	1	2000-01-01	2001-01-01	2111	TSIM	Checked
7	IKM/PRN/001	3	4	2022-10-23	2022-10-23	677576	GHJJH	good
3	IKM/LAP/001	1	1	2022-10-21	2022-10-21	1000001	TSIM	amc
\.


--
-- TOC entry 3360 (class 0 OID 16396)
-- Dependencies: 210
-- Data for Name: tr_employee_details; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tr_employee_details (id, employee_name, empid, empwebaddr, email_official, mobile_no) FROM stdin;
15	\N	\N	\N	\N	\N
16	\N	\N	\N	\N	\N
17	\N	\N	\N	\N	\N
18	\N	\N	\N	\N	\N
19	\N	\N	\N	\N	\N
20	\N	\N	\N	\N	\N
21	\N	\N	\N	\N	\N
22	\N	\N	\N	\N	\N
23	\N	\N	\N	\N	\N
24	\N	\N	\N	\N	\N
25	a	\N	\N	\N	\N
26	Ajith	\N	\N	\N	\N
27	Ajith	\N	\N	\N	\N
28	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
29	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
30	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
31	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
32	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
33	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
34	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
35	AjithKumar	294	http://ajith.com	ajith@gmail.com	9995892735
36	\N	\N	\N	\N	\N
37	\N	\N	\N	\N	\N
38	\N	\N	\N	\N	\N
39	\N	\N	\N	\N	\N
40	\N	\N	\N	\N	\N
41	\N	\N	\N	\N	\N
42	\N	\N	\N	\N	\N
43	\N	\N	\N	\N	\N
44	Priya	142	http://priya.com	priya@gmail.com	9995879308
45	Priya	142	http://priya.com	priya@gmail.com	9995879308
46	\N	\N	\N	\N	\N
47	\N	\N	\N	\N	\N
48	\N	\N	\N	\N	\N
49	\N	\N	\N	\N	\N
50	\N	\N	\N	\N	\N
51	\N	\N	\N	\N	\N
52	\N	\N	\N	\N	\N
53	\N	\N	\N	\N	\N
54	\N	\N	\N	\N	\N
55	\N	\N	\N	\N	\N
56	\N	\N	\N	\N	\N
57	\N	\N	\N	\N	\N
58	\N	\N	\N	\N	\N
59	\N	\N	\N	\N	\N
60	\N	\N	\N	\N	\N
61	\N	\N	\N	\N	\N
62	\N	\N	\N	\N	\N
63	\N	\N	\N	\N	\N
\.


--
-- TOC entry 3370 (class 0 OID 16459)
-- Dependencies: 220
-- Data for Name: tr_feedback; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tr_feedback (id, feedname, feedemail, feedmobile_no, visit_status, fedneed, fq, remarks, remarks1) FROM stdin;
10	Shine	shine@mail.com	9895456789	1	1	2	well	done
11	Samuel	sam@gmail.com	9454949432	1	2	3	very good	Awesome
2	ragi	ragi@mail.com	9495391144	1	1	3	Work	cheyunnu
9	Vidhya	vid@mail.com	9549392394	1	1	2	very good	good website
12	Vipin	vipin@mail.com	9895382698	1	2	4	Feedback	very good
13	q	qaa@gmail.com	445454	1	1	1	sdsd	sdsd
7	Saveen	savi@mail.com	9995892735	1	2	2	very	GOOG
6	Saritha	sari@mail.com	9594939334	2	3	4	fdfdf	dfdgdf
8	Sunil	SUNIL@GMAIL.COM	9995879308	1	2	1	very good	good work
3	Ragi M K	ragi@mail.com	9495391144	1	2	2	Work	cheyunnu
4	Priya	priya@mail.com	9995879308	2	3	3	Welcome	Thank you
1	Ajith	ajith@mail.com	999855689	2	3	4	Good	Very
5	Priya	ddd@mail.com	9965262187	1	1	3	Welcome	Thank you
\.


--
-- TOC entry 3368 (class 0 OID 16432)
-- Dependencies: 218
-- Data for Name: tr_personal_details; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tr_personal_details (id, pname, pemail, address1, city_name, state, pincode, mobile_no, dob, gender, marital_status, eq) FROM stdin;
19	priya j m	priya@mail.com	tvpm	kerala	kerala	698584	9995879308	2022-11-03	2	1	3
12	Samuel	sam@mail.com	Tiny Bhavan	Karunagapally	Kerala	6900232	9439292392	2005-02-01	1	1	2
1	Saveen	savi@mail.com	Savitvpm	TVPm	Kerala	695034	9496343221	1980-01-01	1	1	3
2	Saritha	sari@gmail.com	Nemom	punjab	INDIA	695003	9445634839	1979-01-01	2	1	4
3	VIPIN	vipi@gmail.com	klm	andra	punjab	685943	9844393422	1987-01-01	1	2	3
4	Shine	shine@mail.com	vellayani	kannur	mumbai	689403	9995879308	1986-01-01	1	2	2
7	priya j m nair	priya@mail.com	ssad	sadad	asdasd	3424	1234	1990-01-01	2	2	3
20	Vidhya	vidhya@mail.com	Vidhya Nivas	Aruvikara	Kerala	695003	9447673478	1991-01-01	2	1	3
9	Vidhya	vidhya@gmail.com	AspinWall	TVPM	Kerala	695034	9995879308	1983-01-01	2	1	4
10	Saritha B S	saritha@gmail.com	Aspinwall	TVPM	KERALA	695035	9495391144	1983-12-20	2	1	3
15	Ajith	ajith@mail.com	tvpm	kerala	kerala	993	9439933939	2015-02-05	1	1	1
14	Ajith	ajith@mail.com	tvpm	kerala	kerala	993	9439933939	2015-02-05	1	1	2
17	Ajith	ajith@mail.com	tvpm	kerala	kerala	993	9439933939	2015-02-05	1	1	3
6	Ragi	rag@mail.com	place	tvpm	kerala	69	1	1991-01-01	2	1	3
11	Samuel	sam@mail.com	Tiny Bhavan	Karunagapally	Kerala	6900232	9439292392	2005-02-01	1	1	4
8	akhila	ak@mail.com	kaka	kaka	kakaka	39393	9992223243	2000-01-01	2	1	2
13	Ajith	ajith@mail.com	tvpm	kerala	kerala	993	9439933939	2015-02-05	1	1	4
16	Ajith	ajith@mail.com	tvpm	kerala	kerala	993	9439933939	2015-02-05	1	1	3
5	Ajith	abc@gamil.com	Place	Tvpm	Kerala	695001	1111	1990-01-01	1	1	4
18	Ragi mk	ragi@gmail.com	IKM	TVPM	Kerala	695001	9495381144	2022-11-10	2	2	2
\.


--
-- TOC entry 3372 (class 0 OID 16492)
-- Dependencies: 222
-- Data for Name: tr_registration; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.tr_registration (id, chvname, chvdesignation, intage, doj, intstatus) FROM stdin;
43	Samuel	3	89	1999-01-01	1
12	ee	4	32	2023-01-06	1
13	ee	3	32	2023-01-06	1
2	Priya	1	38	2023-01-26	1
22	rrrr	2	78	2023-01-05	0
45	Vidhya	4	23	2023-02-01	0
20	hhh	2	56	2023-01-04	0
19	hhh	3	56	2023-01-04	0
16	ee	2	3	2023-01-06	0
3	Ajith	2	45	2000-01-01	1
6	Ragi	3	34	2000-01-01	1
11	ee	4	32	2023-01-06	1
14	ee	2	3	2023-01-06	1
15	ee	4	3	2023-01-06	1
42	Akhila	3	38	2010-01-01	1
44	Bhumika	1	25	2011-01-01	1
25	sunil	3	78	2023-01-01	1
26	samuel	2	55	2023-01-05	1
27	priya	1	55	2023-01-05	1
28	Ragi	1	40	2023-01-05	1
41	Shine	3	45	2023-02-04	1
29	vipin	4	23	2000-01-12	1
30	vidya	3	34	2000-01-12	1
40	sunil s	2	46	2023-02-02	1
31	Sudha	4	34	2023-01-14	1
32	priyajm	2	25	2023-01-01	1
39	bhumika	1	25	2023-02-02	1
38	Samuel p	2	56	2023-02-02	1
35	jeeja	3	34	2023-01-06	1
33	Narayanan	1	54	2023-01-05	1
37	Naveen	2	45	2023-02-02	1
36	Arun	3	36	2023-01-01	1
34	Jasmin	1	35	2023-01-05	1
7	Anju	4	25	2023-01-01	1
1	Ragi	1	40	2000-01-01	1
\.


--
-- TOC entry 3374 (class 0 OID 16499)
-- Dependencies: 224
-- Data for Name: users; Type: TABLE DATA; Schema: public; Owner: postgres
--

COPY public.users (id, username, email, password, created_at, updated_at) FROM stdin;
2	\N	abc@gmail.com	123	2023-02-26 22:33:32.250885	\N
3	\N	def@gmail.com	123	2023-02-26 22:35:07.598514	\N
4	jay	ak@gmail.com	123	2023-02-26 22:36:22.486852	\N
\.


--
-- TOC entry 3389 (class 0 OID 0)
-- Dependencies: 213
-- Name: employee_address_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.employee_address_id_seq', 1, false);


--
-- TOC entry 3390 (class 0 OID 0)
-- Dependencies: 211
-- Name: sampleform_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.sampleform_id_seq', 29, true);


--
-- TOC entry 3391 (class 0 OID 0)
-- Dependencies: 215
-- Name: tr_amc_details_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tr_amc_details_id_seq', 18, true);


--
-- TOC entry 3392 (class 0 OID 0)
-- Dependencies: 209
-- Name: tr_contact_details_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tr_contact_details_id_seq', 63, true);


--
-- TOC entry 3393 (class 0 OID 0)
-- Dependencies: 219
-- Name: tr_feedback_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tr_feedback_id_seq', 13, true);


--
-- TOC entry 3394 (class 0 OID 0)
-- Dependencies: 217
-- Name: tr_personal_details_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tr_personal_details_id_seq', 20, true);


--
-- TOC entry 3395 (class 0 OID 0)
-- Dependencies: 221
-- Name: tr_registration_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.tr_registration_id_seq', 49, true);


--
-- TOC entry 3396 (class 0 OID 0)
-- Dependencies: 223
-- Name: users_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.users_id_seq', 4, true);


--
-- TOC entry 3209 (class 2606 OID 16456)
-- Name: sampleform sampleform_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.sampleform
    ADD CONSTRAINT sampleform_pk PRIMARY KEY (id);


--
-- TOC entry 3211 (class 2606 OID 16430)
-- Name: tr_amc_details tr_amc_details_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_amc_details
    ADD CONSTRAINT tr_amc_details_pk PRIMARY KEY (id);


--
-- TOC entry 3215 (class 2606 OID 16466)
-- Name: tr_feedback tr_feedback_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_feedback
    ADD CONSTRAINT tr_feedback_pk PRIMARY KEY (id);


--
-- TOC entry 3213 (class 2606 OID 16439)
-- Name: tr_personal_details tr_personal_details_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_personal_details
    ADD CONSTRAINT tr_personal_details_pk PRIMARY KEY (id);


--
-- TOC entry 3217 (class 2606 OID 16497)
-- Name: tr_registration tr_registration_pk; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.tr_registration
    ADD CONSTRAINT tr_registration_pk PRIMARY KEY (id);


--
-- TOC entry 3219 (class 2606 OID 16507)
-- Name: users users_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);


-- Completed on 2024-10-30 12:07:30

--
-- PostgreSQL database dump complete
--

