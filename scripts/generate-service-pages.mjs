/**
 * Generates all Caretaz service detail pages from structured content.
 * Run: node scripts/generate-service-pages.mjs
 */
import fs from "fs";
import path from "path";
import { fileURLToPath } from "url";

const __dirname = path.dirname(fileURLToPath(import.meta.url));
const outDir = path.join(__dirname, "..", "services");

const SERVICES = [
  {
    file: "hourly-care.html",
    slug: "hourly-care",
    navLabel: "Hourly Care",
    title: "Hourly Home Care in Nottingham | Caretaz Healthcare",
    meta: "Flexible hourly visiting care in Nottingham from Caretaz Healthcare — personal care, meals, medication prompts and companionship, scheduled around your life.",
    keywords: "hourly care Nottingham, visiting care, domiciliary care hours, home care visits, flexible home care",
    brandEyebrow: "Hourly Visiting Care",
    h1: "Care that visits when <em>you</em> need it.",
    lead: "From a few hours a week to several calls a day — CQC-regulated support that protects independence without taking over the home.",
    heroImg: "service-hourly.jpg",
    contentImg: "hero.jpg",
    floatStat: "Flexible",
    floatLabel: "Visit lengths & schedules",
    trust: [
      { value: "Flexible", label: "Hours that fit life" },
      { value: "CQC", label: "Fully regulated" },
      { value: "50+", label: "Trained carers" },
      { value: "Adapt", label: "Change as needs evolve" },
    ],
    introTitle: "Visiting care, built around real routines.",
    intro: [
      "Hourly home care from Caretaz Healthcare is for people who want reliable help with daily living — without a live-in arrangement. Visits can be as light as a couple of hours a week or as frequent as several calls each day.",
      "Our carers assist with personal care, meals, medication prompts, mobility and companionship. As needs change, we increase, reduce or reshuffle visits so support always feels proportionate.",
      "It’s the ideal entry point for families balancing work and care, and for adults who value staying independent at home with the right help at the right time.",
    ],
    pills: ["Personal care", "Meals & prompts", "Companionship", "Light household help"],
    includes: [
      { label: "Daily living", title: "Personal care & dressing", text: "Wash, dress and present yourself with dignity — at a pace that feels comfortable." },
      { label: "Nutrition", title: "Meals & kitchen support", text: "Preparation, prompting and companionship at mealtimes so nutrition stays on track." },
      { label: "Wellbeing", title: "Medication reminders", text: "Timely prompts that support compliance without removing control." },
      { label: "Mobility", title: "Moving with confidence", text: "Steadying assistance around the home and for short outings when needed." },
      { label: "Connection", title: "Companionship visits", text: "Conversation, shared activities and the reassurance of a familiar face." },
      { label: "Home", title: "Light household help", text: "Tidying, laundry and small tasks that keep the home manageable." },
    ],
    why: [
      { title: "Flexible visits", text: "Choose frequency and length that match mornings, evenings or weekends." },
      { title: "Independence first", text: "Support only where it is needed — never more than feels right." },
      { title: "Clear estimates", text: "Transparent visiting care pricing discussed before you commit." },
      { title: "Easy to adapt", text: "Scale up after hospital, or ease back when confidence returns." },
    ],
    faqs: [
      { q: "How many hours of care can I book?", a: "Packages range from a few hours a week to multiple visits each day. We design the schedule after assessment so it fits routines, not the other way around." },
      { q: "Can hourly care include personal care?", a: "Yes. Personal care, dressing, meals, medication prompts, mobility help and companionship can all form part of a visiting package." },
      { q: "What if our needs change?", a: "We review regularly and can increase, reduce or rearrange visits — including stepping into overnight or 24-hour care if required." },
      { q: "Is hourly care regulated?", a: "Yes. All Caretaz visiting care is delivered under our CQC registration with trained, vetted carers." },
    ],
    related: [
      { href: "overnight-care.html", img: "service-overnight.jpg", cat: "Visiting", title: "Overnight Care" },
      { href: "urgent-care.html", img: "homecare.jpg", cat: "Rapid", title: "Urgent Care" },
      { href: "companionship-care.html", img: "team-1.jpg", cat: "Wellbeing", title: "Companionship Care" },
    ],
    finaleTitle: "Ready for visiting care that fits?",
    finaleText: "Tell us what a typical week looks like — we’ll propose a clear hourly package that protects independence at home.",
    formDefault: "Hourly Care",
    schemaName: "Hourly Care",
    schemaDesc: "Flexible hourly visiting domiciliary care in Nottingham including personal care, meals, medication prompts and companionship.",
  },
  {
    file: "dementia-care.html",
    slug: "dementia-care",
    navLabel: "Dementia Care",
    title: "Dementia Care at Home in Nottingham | Caretaz Healthcare",
    meta: "Compassionate, CQC-regulated dementia home care in Nottingham. Familiar routines, dignity and specialist-trained carers supporting people living with dementia.",
    keywords: "dementia care Nottingham, dementia home care, Alzheimer's care at home, specialist dementia carers",
    brandEyebrow: "Specialist Dementia Care",
    h1: "Familiar home. Calm routines. <em>Dignity</em> intact.",
    lead: "Person-centred dementia care that treats identity as sacred — delivered in the place memories live.",
    heroImg: "service-dementia.jpg",
    contentImg: "service-dementia.jpg",
    floatStat: "Specialist",
    floatLabel: "Dementia-aware carers",
    trust: [
      { value: "Home", label: "Familiar surroundings" },
      { value: "Trained", label: "Dementia approaches" },
      { value: "Plans", label: "Individual care maps" },
      { value: "CQC", label: "Independently regulated" },
    ],
    introTitle: "Dementia care that starts with who someone is.",
    intro: [
      "Symptoms of dementia vary widely. That is why Caretaz takes a personalised, sympathetic approach — never a one-size-fits-all checklist.",
      "Familiar rooms, routines and memories are powerful anchors. Our dementia-trained carers learn hobbies, preferences and how each person likes things organised, so care feels recognisable rather than clinical.",
      "Every client has an individualised care plan detailing unique characteristics and preferences. The goal is simple: comfort, safety and respect — every visit.",
    ],
    pills: ["Routine-led support", "Patience & dignity", "Meaningful activity", "Family guidance"],
    includes: [
      { label: "Care", title: "Personal care with patience", text: "Unhurried washing, dressing and continence support that preserves dignity." },
      { label: "Mind", title: "Companionship & activity", text: "Music, reminiscence, hobbies and gentle stimulation tailored to interest." },
      { label: "Health", title: "Medication prompts", text: "Reliable reminders coordinated with family and healthcare professionals." },
      { label: "Daily life", title: "Meals & routines", text: "Familiar mealtimes and day structure that reduce anxiety." },
      { label: "Safety", title: "Orientation & reassurance", text: "Calm communication when confusion rises — including evenings and nights." },
      { label: "Review", title: "Care plan updates", text: "Regular reviews as symptoms change, with clear family updates." },
    ],
    why: [
      { title: "Familiar surroundings", text: "Support at home where memories and routines still matter most." },
      { title: "Personalised routines", text: "Plans designed to reduce distress and promote calm." },
      { title: "Specialist training", text: "Carers skilled in dementia-aware, person-centred approaches." },
      { title: "Family guidance", text: "Practical advice and honest updates for relatives." },
    ],
    faqs: [
      { q: "Do your carers have dementia training?", a: "Yes. Carers supporting dementia packages receive specialist training and use person-centred approaches focused on dignity, routine and calm communication." },
      { q: "Can you support someone with sundowning?", a: "We can structure visits and overnight support around times of day that feel hardest, helping reduce evening distress and keep nights safer." },
      { q: "Will the same carers visit?", a: "We aim for continuity so familiar faces build trust — especially important for people living with dementia." },
      { q: "Can dementia care combine with 24-hour support?", a: "Yes. Many families begin with visiting care and step up to overnight or continuous 24-hour packages as needs increase." },
    ],
    related: [
      { href: "overnight-care.html", img: "service-overnight.jpg", cat: "Nights", title: "Overnight Care" },
      { href: "24-hour-care.html", img: "service-24hour.jpg", cat: "Continuous", title: "24-Hour Care" },
      { href: "carer-respite.html", img: "carer.jpg", cat: "Family", title: "Carer Respite" },
    ],
    finaleTitle: "Let’s build a dementia plan that feels human.",
    finaleText: "Share what a good day looks like for your loved one — we’ll design care that protects identity at home.",
    formDefault: "Dementia Care",
    schemaName: "Dementia Care",
    schemaDesc: "Person-centred dementia home care in Nottingham focused on familiar routines, dignity and specialist-trained support.",
  },
  {
    file: "overnight-care.html",
    slug: "overnight-care",
    navLabel: "Overnight Care",
    title: "Overnight Home Care in Nottingham | Caretaz Healthcare",
    meta: "Overnight care in Nottingham that keeps people safe and comfortable through the night — sleeping or waking cover from CQC-regulated Caretaz carers.",
    keywords: "overnight care Nottingham, night carer, waking nights, sleeping nights home care",
    brandEyebrow: "Overnight Home Care",
    h1: "Safer nights. <em>Quieter</em> minds.",
    lead: "Night-time presence that protects sleep, safety and family peace of mind — without leaving home.",
    heroImg: "service-overnight.jpg",
    contentImg: "service-overnight.jpg",
    floatStat: "Night",
    floatLabel: "Sleeping or waking cover",
    trust: [
      { value: "Nights", label: "Sleeping or waking" },
      { value: "Safe", label: "Checks & reassurance" },
      { value: "Meds", label: "Night-time prompts" },
      { value: "CQC", label: "Regulated support" },
    ],
    introTitle: "When darkness arrives, support stays.",
    intro: [
      "Overnight care from Caretaz means a trained carer is present through the night so your loved one can remain at home with autonomy intact.",
      "Carers typically arrive before bedtime and support short-term challenges or ongoing night needs — from bathroom visits and repositioning to night medication prompts.",
      "Whether you need a sleeping night with response on call, or a waking night with active monitoring, we design cover that matches risk and preference.",
    ],
    pills: ["Bedtime routines", "Night checks", "Toileting support", "Family reassurance"],
    includes: [
      { label: "Evening", title: "Bedtime & morning routines", text: "Settling for sleep and a calm start to the day." },
      { label: "Safety", title: "Night checks & response", text: "Monitoring and prompt help if someone wakes unsettled." },
      { label: "Comfort", title: "Toileting & repositioning", text: "Support that protects skin integrity and dignity overnight." },
      { label: "Health", title: "Medication prompts", text: "Night-time doses given or prompted as prescribed." },
      { label: "Calm", title: "Reassurance & company", text: "A steady presence when anxiety spikes after dark." },
      { label: "Flex", title: "Short or ongoing cover", text: "Temporary nights after illness, or regular overnight packages." },
    ],
    why: [
      { title: "Sleeping or waking nights", text: "Choose the level of overnight alertness that matches need." },
      { title: "Safer nights", text: "Reduce fall risk and night-time distress at home." },
      { title: "Medication support", text: "Prompts and assistance when night doses matter." },
      { title: "Family reassurance", text: "Rest knowing someone trusted is present." },
    ],
    faqs: [
      { q: "What is the difference between sleeping and waking nights?", a: "A sleeping night means the carer can rest but responds when needed. A waking night means the carer stays alert throughout for higher dependency or frequent support." },
      { q: "Can overnight care be temporary?", a: "Yes. Many families book nights after hospital discharge, during illness, or while arranging longer-term packages." },
      { q: "Will overnight care disrupt the household?", a: "We work around your home’s layout and routines, with clear handovers so mornings feel settled, not chaotic." },
      { q: "Can overnight link with daytime visits?", a: "Absolutely. Overnight cover often sits alongside hourly daytime care for a fuller safety net." },
    ],
    related: [
      { href: "24-hour-care.html", img: "service-24hour.jpg", cat: "Continuous", title: "24-Hour Care" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Daytime", title: "Hourly Care" },
      { href: "dementia-care.html", img: "service-dementia.jpg", cat: "Specialist", title: "Dementia Care" },
    ],
    finaleTitle: "Sleep easier knowing nights are covered.",
    finaleText: "Tell us what nights feel hardest — we’ll recommend sleeping or waking cover that fits.",
    formDefault: "Overnight Care",
    schemaName: "Overnight Care",
    schemaDesc: "Overnight home care in Nottingham including sleeping and waking night support for safety, medication and reassurance.",
  },
  {
    file: "palliative-care.html",
    slug: "palliative-care",
    navLabel: "Palliative / End-of-Life Care",
    title: "Palliative & End-of-Life Care at Home | Caretaz Healthcare",
    meta: "Gentle, respectful palliative and end-of-life home care in Nottingham — comfort, dignity and family reassurance from CQC-regulated Caretaz carers.",
    keywords: "palliative care Nottingham, end of life care at home, hospice at home support, comfort care",
    brandEyebrow: "Palliative & End-of-Life Care",
    h1: "Comfort first. Presence that <em>honours</em>.",
    lead: "Sensitive home support focused on dignity, calm routines and family reassurance in life’s most meaningful moments.",
    heroImg: "specialist.jpg",
    contentImg: "cta-bg.jpg",
    floatStat: "Dignity",
    floatLabel: "Comfort-led care",
    trust: [
      { value: "Comfort", label: "Symptom-aware support" },
      { value: "Family", label: "Liaison & guidance" },
      { value: "Flex", label: "Presence as needed" },
      { value: "CQC", label: "Regulated care" },
    ],
    introTitle: "Care that protects comfort and humanity.",
    intro: [
      "Palliative and end-of-life care from Caretaz centres on comfort, dignity and emotional support — for the person and for the family around them.",
      "We deliver calm personal care, comfort routines and sensitive communication, coordinating with healthcare professionals so wishes guide every decision.",
      "The aim is quality of life: making each day as comfortable, peaceful and person-centred as possible at home.",
    ],
    pills: ["Comfort care", "Family support", "Quiet presence", "Team coordination"],
    includes: [
      { label: "Comfort", title: "Gentle personal care", text: "Unhurried support that prioritises ease and dignity." },
      { label: "Daily", title: "Comfort routines", text: "Positioning, mouth care, hydration and settling rituals." },
      { label: "Heart", title: "Companionship", text: "Quiet company, listening and presence without rush." },
      { label: "Family", title: "Relative liaison", text: "Clear updates and space for families to be involved." },
      { label: "Team", title: "Wider coordination", text: "Working alongside nurses, GPs and specialist teams." },
      { label: "Flex", title: "Adaptive presence", text: "Increase visits or overnight cover as needs intensify." },
    ],
    why: [
      { title: "Comfort-focused", text: "Every visit prioritises ease, calm and dignity." },
      { title: "Family support", text: "Guidance and reassurance for those closest." },
      { title: "Flexible presence", text: "Scale support as circumstances change." },
      { title: "Respectful care", text: "Wishes, culture and identity always honoured." },
    ],
    faqs: [
      { q: "Is palliative care only for the final days?", a: "No. Palliative support can begin earlier to improve comfort and quality of life, then intensify as needs change." },
      { q: "Do you work with hospice or district nurses?", a: "Yes. We coordinate with clinical teams so home care complements medical support." },
      { q: "Can care include overnight presence?", a: "Yes. Many families add overnight or continuous cover so someone trusted is always near." },
      { q: "How do you support families emotionally?", a: "With honest communication, space to be present, and practical help that lifts the load of daily care tasks." },
    ],
    related: [
      { href: "cancer-care.html", img: "carer.jpg", cat: "Specialist", title: "Cancer Care" },
      { href: "overnight-care.html", img: "service-overnight.jpg", cat: "Nights", title: "Overnight Care" },
      { href: "24-hour-care.html", img: "service-24hour.jpg", cat: "Continuous", title: "24-Hour Care" },
    ],
    finaleTitle: "When comfort matters most, we’re here.",
    finaleText: "Speak with our team discreetly — we’ll listen first, then shape gentle support at home.",
    formDefault: "Palliative / End-of-Life Care",
    schemaName: "Palliative and End-of-Life Care",
    schemaDesc: "Gentle palliative and end-of-life home care in Nottingham focused on comfort, dignity and family reassurance.",
  },
  {
    file: "parkinsons-disease.html",
    slug: "parkinsons-disease",
    navLabel: "Parkinson’s Disease",
    title: "Parkinson’s Disease Care at Home | Caretaz Healthcare",
    meta: "Thoughtful Parkinson’s disease home care in Nottingham — mobility help, medication timing, routines and quality of life with CQC-regulated support.",
    keywords: "Parkinson's care Nottingham, Parkinson's home care, mobility support, medication prompts",
    brandEyebrow: "Parkinson’s Disease Care",
    h1: "Steady support for a <em>fluctuating</em> day.",
    lead: "Patient, consistent home care that adapts as Parkinson’s symptoms shift — protecting routine, mobility and pride.",
    heroImg: "elderly.jpg",
    contentImg: "specialist.jpg",
    floatStat: "Adaptive",
    floatLabel: "Symptom-aware support",
    trust: [
      { value: "Routine", label: "Familiar structure" },
      { value: "Mobility", label: "Confident movement" },
      { value: "Meds", label: "Timing that matters" },
      { value: "CQC", label: "Regulated carers" },
    ],
    introTitle: "Care that moves with Parkinson’s — not against it.",
    intro: [
      "Parkinson’s symptoms can fluctuate through the day. Caretaz provides patient, consistent support that adapts rather than forcing a rigid script.",
      "We build routines that reduce frustration and protect quality of life, reviewing plans regularly as needs evolve.",
      "Support can include mobility assistance, carefully timed medication prompts, personal care and preferred activities that keep life feeling like life.",
    ],
    pills: ["Mobility help", "Med timing", "Personal care", "Reviewed plans"],
    includes: [
      { label: "Movement", title: "Mobility assistance", text: "Steadying help transfers, walking and safer navigation at home." },
      { label: "Timing", title: "Medication prompts", text: "Prompts aligned to prescribed schedules that shape symptom control." },
      { label: "Care", title: "Personal care support", text: "Dressing and hygiene with extra time when stiffness or tremor peaks." },
      { label: "Fuel", title: "Meals & nutrition", text: "Support with eating, drinking and meal preparation." },
      { label: "Life", title: "Companionship & activity", text: "Encouragement to stay engaged with interests and community." },
      { label: "Review", title: "Adaptive care plans", text: "Regular updates as on/off periods and needs change." },
    ],
    why: [
      { title: "Adaptive support", text: "Carers who understand fluctuating energy and movement." },
      { title: "Mobility help", text: "Practical assistance that protects confidence and safety." },
      { title: "Routine-focused", text: "Structure that reduces frustration day to day." },
      { title: "Reviewed plans", text: "Care that evolves with the condition." },
    ],
    faqs: [
      { q: "Can carers help with medication timing?", a: "Yes. Prompts and support around Parkinson’s medication schedules are a core part of many packages." },
      { q: "What if mornings are the hardest time?", a: "We can concentrate visits when symptoms are most challenging — often mornings — and adjust as patterns change." },
      { q: "Do you support advanced Parkinson’s?", a: "Yes. Support can scale from short visiting care to overnight or continuous packages." },
      { q: "Will carers rush personal care?", a: "No. We build in time for stiffness, tremor and the dignity of going at your pace." },
    ],
    related: [
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "stroke-care.html", img: "service-24hour.jpg", cat: "Recovery", title: "Stroke Care" },
      { href: "supported-living.html", img: "service-supported.jpg", cat: "Independence", title: "Supported Living" },
    ],
    finaleTitle: "Build a Parkinson’s plan that respects the day.",
    finaleText: "Tell us when symptoms peak — we’ll design visits that meet those moments with skill and patience.",
    formDefault: "Parkinson's Care",
    schemaName: "Parkinson's Disease Care",
    schemaDesc: "Home care for people living with Parkinson's in Nottingham, focused on mobility, medication timing and quality of life.",
  },
  {
    file: "supported-living.html",
    slug: "supported-living",
    navLabel: "Supported Living",
    title: "Supported Living in Nottingham | Caretaz Healthcare",
    meta: "Supported living in Nottingham that promotes independence, choice and everyday confidence — practical help with daily life from Caretaz Healthcare.",
    keywords: "supported living Nottingham, independent living support, domiciliary supported living",
    brandEyebrow: "Supported Living",
    h1: "Independence with the <em>right</em> scaffolding.",
    lead: "Choice-led support that helps adults live safely and confidently — deciding the life, while we support the how.",
    heroImg: "service-supported.jpg",
    contentImg: "service-supported.jpg",
    floatStat: "Choice",
    floatLabel: "Client-led living",
    trust: [
      { value: "Choice", label: "You decide" },
      { value: "Daily", label: "Practical help" },
      { value: "Community", label: "Life beyond four walls" },
      { value: "CQC", label: "Regulated support" },
    ],
    introTitle: "Support that never steals the steering wheel.",
    intro: [
      "Supported living from Caretaz helps people live independently with the right level of daily-life support for safety, comfort and wellbeing.",
      "Choice, dignity and control sit at the centre: clients decide; carers enable. That can mean help with daily living, community involvement, health and medication.",
      "Whether someone needs light scaffolding or more structured support, plans are personalised to living goals — not institutional routines.",
    ],
    pills: ["Independence first", "Community access", "Daily living", "Health support"],
    includes: [
      { label: "Living", title: "Daily care & routines", text: "Help with personal care, home routines and staying organised." },
      { label: "World", title: "Community involvement", text: "Support to access local activities, appointments and social life." },
      { label: "Health", title: "Health & medication help", text: "Prompts and accompaniment that protect wellbeing." },
      { label: "Money", title: "Budget & planning support", text: "Where needed, help keeping everyday admin manageable." },
      { label: "Home", title: "Household confidence", text: "Cooking, cleaning and home skills that build self-reliance." },
      { label: "Plan", title: "Personalised living plans", text: "Goals reviewed regularly as confidence grows." },
    ],
    why: [
      { title: "Independence first", text: "Support strengthens choice — it never replaces it." },
      { title: "Community life", text: "Help staying connected beyond the home." },
      { title: "Practical daily help", text: "Real assistance with the tasks that unlock freedom." },
      { title: "Health support", text: "Medication and wellbeing woven into the plan." },
    ],
    faqs: [
      { q: "Is supported living the same as a care home?", a: "No. Supported living helps people remain in their own home or tenancy with tailored support, maximising independence." },
      { q: "Who is supported living for?", a: "Adults who want to live independently with some practical, social or health-related support." },
      { q: "Can support increase over time?", a: "Yes. Packages are flexible and can grow or reduce as confidence and needs change." },
      { q: "Do you help with community access?", a: "Yes. Companionship to appointments, activities and local opportunities is a common part of plans." },
    ],
    related: [
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "companionship-care.html", img: "team-1.jpg", cat: "Wellbeing", title: "Companionship Care" },
      { href: "live-in-care-for-couples.html", img: "team-2.jpg", cat: "Live-In", title: "Live-In Care For Couples" },
    ],
    finaleTitle: "Design living support around your goals.",
    finaleText: "Tell us what independence looks like for you — we’ll build the scaffolding, not the cage.",
    formDefault: "Supported Living",
    schemaName: "Supported Living",
    schemaDesc: "Supported living services in Nottingham promoting independence, choice and everyday confidence.",
  },
  {
    file: "holiday-companionship.html",
    slug: "holiday-companionship",
    navLabel: "Holiday Companionship Care Breaks",
    title: "Holiday Companionship Care Breaks | Caretaz Healthcare",
    meta: "Holiday companionship care breaks from Caretaz Healthcare — travel and leisure support so people can enjoy time away with confidence.",
    keywords: "holiday care, companionship holiday, care break, travel companion carer Nottingham",
    brandEyebrow: "Holiday Companionship",
    h1: "Time away, with <em>confidence</em> built in.",
    lead: "Companionship and practical care so holidays and short breaks feel possible again — not out of reach.",
    heroImg: "cta-bg.jpg",
    contentImg: "cta-bg.jpg",
    floatStat: "Breaks",
    floatLabel: "Travel-ready support",
    trust: [
      { value: "Travel", label: "Companionship away" },
      { value: "Care", label: "Personal support continues" },
      { value: "Plan", label: "Trip-tailored packages" },
      { value: "CQC", label: "Trusted carers" },
    ],
    introTitle: "Because rest and joy still matter.",
    intro: [
      "Holiday companionship care breaks help people enjoy time away with daily-needs support and trusted company.",
      "Whether a short break or longer holiday, we make travel and leisure safer and more enjoyable — planned around destination, mobility and preferred routines.",
      "Families gain peace of mind knowing care standards travel with their loved one, not stay behind at home.",
    ],
    pills: ["Trip planning", "Travel company", "Care away from home", "Flexible packages"],
    includes: [
      { label: "Travel", title: "Trip companionship", text: "A trusted carer alongside for journeys and stays." },
      { label: "Care", title: "Personal care away from home", text: "Familiar standards of support in a new setting." },
      { label: "Routine", title: "Meds & daily rhythms", text: "Keep medication and routines steady on the move." },
      { label: "Leisure", title: "Enjoying the break", text: "Help joining activities and making the most of time away." },
      { label: "Flex", title: "Short-break packages", text: "Weekend covers through to longer holiday support." },
      { label: "Family", title: "Reassurance for relatives", text: "Clear communication so everyone can relax." },
    ],
    why: [
      { title: "Travel with confidence", text: "Support that makes getting away feel achievable." },
      { title: "Companionship", text: "Company that turns a trip into a pleasure." },
      { title: "Flexible planning", text: "Packages shaped around destination and needs." },
      { title: "Family reassurance", text: "Care continues — even away from home." },
    ],
    faqs: [
      { q: "Can a carer travel with us on holiday?", a: "Yes. Holiday companionship packages can include a carer travelling and staying to provide support throughout the break." },
      { q: "How far ahead should we book?", a: "As early as possible so we can match the right carer and plan logistics around your destination." },
      { q: "Does support include personal care away from home?", a: "Yes. Personal care, medication prompts and routines can continue during the break." },
      { q: "Is this only for long holidays?", a: "No. Short breaks and weekend covers are equally welcome." },
    ],
    related: [
      { href: "companionship-care.html", img: "team-1.jpg", cat: "Wellbeing", title: "Companionship Care" },
      { href: "carer-respite.html", img: "carer.jpg", cat: "Family", title: "Carer Respite" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
    ],
    finaleTitle: "Plan a break that still feels like care.",
    finaleText: "Share where you’re going and what support is needed — we’ll help make it happen.",
    formDefault: "Holiday Companionship",
    schemaName: "Holiday Companionship Care Breaks",
    schemaDesc: "Companionship and practical care support for holidays and short breaks so people can travel with confidence.",
  },
  {
    file: "carer-respite.html",
    slug: "carer-respite",
    navLabel: "Carer Respite Break Cover",
    title: "Carer Respite Break Cover | Caretaz Healthcare",
    meta: "Reliable carer respite break cover in Nottingham — restorative rest for family carers while loved ones remain safely supported by Caretaz.",
    keywords: "carer respite Nottingham, respite care at home, family carer break, temporary care cover",
    brandEyebrow: "Carer Respite Cover",
    h1: "You can’t pour from an <em>empty</em> cup.",
    lead: "Trusted temporary cover so family carers can rest, recover and return — while care continues without disruption.",
    heroImg: "carer.jpg",
    contentImg: "carer.jpg",
    floatStat: "Respite",
    floatLabel: "Cover you can trust",
    trust: [
      { value: "Rest", label: "For family carers" },
      { value: "Continuity", label: "Routines maintained" },
      { value: "Flex", label: "Hours to live-in" },
      { value: "CQC", label: "Regulated cover" },
    ],
    introTitle: "Respite that protects everyone involved.",
    intro: [
      "Family carers give extraordinary energy every day. Respite cover from Caretaz creates space to rest while loved ones remain supported safely and consistently.",
      "We offer multiple respite types and schedules — from planned visiting cover to temporary live-in support — with clear handover and monitoring.",
      "Booking is straightforward: we learn existing routines, match carers carefully, and keep communication open so you can truly switch off.",
    ],
    pills: ["Planned breaks", "Temporary live-in", "Routine matching", "Clear handovers"],
    includes: [
      { label: "Plan", title: "Scheduled respite visits", text: "Regular or one-off visiting cover while you recharge." },
      { label: "Stay", title: "Temporary live-in cover", text: "Round-the-clock presence for longer breaks away." },
      { label: "Match", title: "Existing routine fidelity", text: "We follow what already works for your loved one." },
      { label: "Handover", title: "Family briefings", text: "Detailed handover before you leave, updates while you’re away." },
      { label: "Care", title: "Full personal support", text: "Personal care, meals, meds and companionship as needed." },
      { label: "Return", title: "Smooth hand-back", text: "Clear notes so you step back in with confidence." },
    ],
    why: [
      { title: "Rest for family carers", text: "Permission and practical cover to recover properly." },
      { title: "Continuity of care", text: "Loved ones stay supported without upheaval." },
      { title: "Flexible length", text: "A few hours, a weekend, or longer breaks." },
      { title: "Clear handover", text: "Nothing important gets lost between carers." },
    ],
    faqs: [
      { q: "How much notice do you need for respite?", a: "We prefer advance booking for planned breaks, but can sometimes help at shorter notice depending on capacity — call to check." },
      { q: "Will the carer follow our usual routine?", a: "Yes. A thorough handover captures preferences, risks and rhythms so cover feels familiar." },
      { q: "Can respite be recurring?", a: "Absolutely. Many families book regular respite slots to protect long-term wellbeing." },
      { q: "Is live-in respite available?", a: "Yes. Temporary live-in or intensive visiting packages can cover longer absences." },
    ],
    related: [
      { href: "24-hour-care.html", img: "service-24hour.jpg", cat: "Continuous", title: "24-Hour Care" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "holiday-companionship.html", img: "cta-bg.jpg", cat: "Breaks", title: "Holiday Companionship" },
    ],
    finaleTitle: "Book the break you’ve been postponing.",
    finaleText: "You deserve rest. We’ll keep care steady while you take it.",
    formDefault: "Carer Respite",
    schemaName: "Carer Respite Break Cover",
    schemaDesc: "Respite cover for family carers in Nottingham so loved ones remain supported during restorative breaks.",
  },
  {
    file: "stroke-care.html",
    slug: "stroke-care",
    navLabel: "Stroke Care",
    title: "Stroke Care & Recovery at Home | Caretaz Healthcare",
    meta: "Home-based stroke care and recovery support in Nottingham — rebuilding confidence, mobility and daily living with Caretaz Healthcare.",
    keywords: "stroke care Nottingham, stroke recovery at home, post stroke care, rehabilitation support home",
    brandEyebrow: "Stroke Care & Recovery",
    h1: "Recovery belongs at <em>home</em>.",
    lead: "Practical encouragement and daily-living support that helps rebuild confidence after stroke — in familiar surroundings.",
    heroImg: "service-24hour.jpg",
    contentImg: "elderly.jpg",
    floatStat: "Recovery",
    floatLabel: "Confidence-led support",
    trust: [
      { value: "Home", label: "Familiar recovery space" },
      { value: "Goals", label: "Personal milestones" },
      { value: "Flex", label: "Short or longer packages" },
      { value: "CQC", label: "Regulated carers" },
    ],
    introTitle: "Support that celebrates every small win.",
    intro: [
      "Recovering at home after a stroke can feel safer and more motivating. Caretaz provides practical task support and encouragement in familiar surroundings.",
      "Care adapts to mobility, communication and personal goals — always encouraging independence rather than creating dependence.",
      "Packages can be short-term after discharge or longer-term as recovery continues, working alongside therapy goals where appropriate.",
    ],
    pills: ["Mobility support", "Daily living", "Confidence building", "Post-discharge"],
    includes: [
      { label: "Body", title: "Personal care & mobility", text: "Assistance that protects safety while encouraging movement." },
      { label: "Fuel", title: "Meals & nutrition", text: "Support with eating, drinking and meal preparation." },
      { label: "Rhythm", title: "Rebuilding routines", text: "Day structure that restores a sense of normal life." },
      { label: "Mind", title: "Companionship", text: "Patient company that lifts mood and motivation." },
      { label: "Home", title: "Post-discharge packages", text: "Immediate support bridging hospital to home." },
      { label: "Family", title: "Partnership with relatives", text: "Guidance so families feel confident helping recovery." },
    ],
    why: [
      { title: "Recovery at home", text: "Familiar surroundings that support progress." },
      { title: "Confidence building", text: "Encouragement focused on what someone can do." },
      { title: "Flexible intensity", text: "Step support up or down through recovery." },
      { title: "Family partnership", text: "Clear communication and shared goals." },
    ],
    faqs: [
      { q: "When should stroke care at home start?", a: "Often immediately after discharge. Early support helps routines, safety and confidence settle quickly." },
      { q: "Do you work with physiotherapists?", a: "We can support therapy goals in daily life — practising recommended activities between formal sessions." },
      { q: "Can care help with communication difficulties?", a: "Carers use patient, respectful communication and adapt to aphasia or other challenges with guidance from the care plan." },
      { q: "Is support only short-term?", a: "No. Some people need a few weeks; others benefit from longer packages as recovery continues." },
    ],
    related: [
      { href: "hospital-to-home.html", img: "homecare.jpg", cat: "Transition", title: "Hospital to Home" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "24-hour-care.html", img: "service-24hour.jpg", cat: "Continuous", title: "24-Hour Care" },
    ],
    finaleTitle: "Start recovery support that feels encouraging.",
    finaleText: "Share discharge plans or current goals — we’ll shape a package that builds confidence at home.",
    formDefault: "Stroke Care",
    schemaName: "Stroke Care",
    schemaDesc: "Home-based stroke recovery support in Nottingham focused on confidence, mobility and daily living.",
  },
  {
    file: "cancer-care.html",
    slug: "cancer-care",
    navLabel: "Cancer Care",
    title: "Cancer Care Support at Home | Caretaz Healthcare",
    meta: "Sensitive, practical cancer care support at home in Nottingham — help through treatment and recovery from CQC-regulated Caretaz carers.",
    keywords: "cancer care at home Nottingham, home support during chemotherapy, cancer recovery care",
    brandEyebrow: "Cancer Care Support",
    h1: "Save energy for what <em>matters</em>.",
    lead: "Practical home support during treatment and recovery — so strength goes to healing, not household strain.",
    heroImg: "specialist.jpg",
    contentImg: "carer.jpg",
    floatStat: "Gentle",
    floatLabel: "Treatment-aware care",
    trust: [
      { value: "Flex", label: "Around appointments" },
      { value: "Energy", label: "Practical relief" },
      { value: "Heart", label: "Sensitive company" },
      { value: "CQC", label: "Trusted carers" },
    ],
    introTitle: "Support that softens the load of treatment days.",
    intro: [
      "Cancer care support from Caretaz eases daily pressures so energy can go where it’s needed most. We adapt around appointments, fluctuating energy and personal preferences.",
      "Help can be practical — personal care, meals, household tasks — and emotional, with sensitive companionship that never forces conversation.",
      "Packages flex up around intensive treatment periods and ease when strength returns.",
    ],
    pills: ["Treatment days", "Personal care", "Meals & home", "Emotional support"],
    includes: [
      { label: "Care", title: "Personal care support", text: "Gentle help on low-energy days without rush." },
      { label: "Kitchen", title: "Meals when appetite dips", text: "Nourishing, manageable food support." },
      { label: "Home", title: "Household relief", text: "Light cleaning and organisation that lifts mental load." },
      { label: "Company", title: "Sensitive companionship", text: "Presence that respects quiet days and tough days alike." },
      { label: "Diary", title: "Flexible visit schedules", text: "Care timed around clinics, treatment and rest." },
      { label: "Family", title: "Relative support", text: "Updates and practical help that supports the wider circle." },
    ],
    why: [
      { title: "Energy-saving help", text: "We take the tasks so strength stays for recovery." },
      { title: "Flexible around treatment", text: "Schedules that bend with clinic days." },
      { title: "Emotional support", text: "Company without pressure or pity." },
      { title: "Practical reliability", text: "Consistent carers who show up when it counts." },
    ],
    faqs: [
      { q: "Can care change week to week with treatment?", a: "Yes. We design flexible schedules that intensify around treatment and reduce when energy returns." },
      { q: "Do carers understand fatigue and side effects?", a: "Carers supporting cancer packages work gently, pacing tasks and prioritising comfort." },
      { q: "Is this clinical nursing care?", a: "We provide domiciliary and personal support at home, coordinating with your clinical team rather than replacing medical care." },
      { q: "Can family stay involved?", a: "Always. We work alongside families, never around them." },
    ],
    related: [
      { href: "palliative-care.html", img: "cta-bg.jpg", cat: "Comfort", title: "Palliative Care" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "companionship-care.html", img: "team-1.jpg", cat: "Wellbeing", title: "Companionship Care" },
    ],
    finaleTitle: "Lighten the load during treatment.",
    finaleText: "Tell us what days feel hardest — we’ll build support that protects energy and dignity.",
    formDefault: "Cancer Care",
    schemaName: "Cancer Care",
    schemaDesc: "Sensitive practical home support during cancer treatment and recovery in Nottingham.",
  },
  {
    file: "live-in-care-for-couples.html",
    slug: "live-in-care-for-couples",
    navLabel: "Live-In Care For Couples",
    title: "Live-In Care For Couples | Caretaz Healthcare",
    meta: "Live-in care for couples in Nottingham — stay together at home with personalised support for one or both partners from Caretaz Healthcare.",
    keywords: "live-in care for couples, couples home care Nottingham, stay together care",
    brandEyebrow: "Live-In Care For Couples",
    h1: "Stay together. Stay <em>home</em>.",
    lead: "Personalised live-in support designed around both of you — so partnership doesn’t end when care begins.",
    heroImg: "team-1.jpg",
    contentImg: "team-2.jpg",
    floatStat: "Together",
    floatLabel: "Dual care planning",
    trust: [
      { value: "Together", label: "Partners stay home" },
      { value: "Dual", label: "Two care plans" },
      { value: "Live-in", label: "Dedicated presence" },
      { value: "CQC", label: "Regulated care" },
    ],
    introTitle: "One home. Two people. Care that respects both.",
    intro: [
      "Live-in care for couples helps partners remain together in familiar surroundings with a carer living in to provide support.",
      "Personal care, meals, mobility, companionship and household help can cover one or both partners — with dual personalised care plans so neither person is overlooked.",
      "It’s an alternative to separating into residential care, protecting shared routines and the life you’ve built together.",
    ],
    pills: ["Stay together", "Dual plans", "Shared home", "Dedicated carers"],
    includes: [
      { label: "Presence", title: "Live-in support", text: "A carer living in the home with agreed rest and relief patterns." },
      { label: "Care", title: "Support for one or both", text: "Personal care scaled to each partner’s needs." },
      { label: "Home", title: "Meals & household", text: "Cooking, laundry and keeping the shared home running." },
      { label: "Heart", title: "Companionship", text: "Company that respects your relationship and routines." },
      { label: "Plans", title: "Dual care planning", text: "Separate preferences documented and reviewed." },
      { label: "Relief", title: "Continuity cover", text: "Relief carers so support never drops when breaks are due." },
    ],
    why: [
      { title: "Stay together", text: "Avoid the heartbreak of being separated." },
      { title: "Shared home support", text: "One setting, comprehensive help." },
      { title: "Familiar routines", text: "Life continues in the home you know." },
      { title: "Dedicated carers", text: "Consistent faces who know you both." },
    ],
    faqs: [
      { q: "Can live-in care support both partners?", a: "Yes. We create dual care plans so each person’s needs and preferences are met." },
      { q: "What if only one partner needs care?", a: "Support can focus on one person while still respecting household routines that involve both." },
      { q: "Does the carer get time off?", a: "Yes. Live-in arrangements include statutory rest and relief cover so care stays sustainable and high quality." },
      { q: "Is this different from 24-hour shift care?", a: "Live-in usually involves one carer residing in the home with rest breaks; 24-hour shift care uses a rotating team. We’ll recommend the best fit." },
    ],
    related: [
      { href: "24-hour-care.html", img: "service-24hour.jpg", cat: "Continuous", title: "24-Hour Care" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "companionship-care.html", img: "elderly.jpg", cat: "Wellbeing", title: "Companionship Care" },
    ],
    finaleTitle: "Keep your shared life at the centre.",
    finaleText: "Talk us through both of your needs — we’ll design live-in support that honours your partnership.",
    formDefault: "Live-In Care For Couples",
    schemaName: "Live-In Care For Couples",
    schemaDesc: "Live-in home care for couples in Nottingham so partners can remain together with personalised support.",
  },
  {
    file: "hospital-to-home.html",
    slug: "hospital-to-home",
    navLabel: "Hospital to Home Care",
    title: "Hospital to Home Care in Nottingham | Caretaz Healthcare",
    meta: "Hospital to home care in Nottingham — smooth, reassuring discharge support with personal care, meals, medication prompts and safety routines from Caretaz.",
    keywords: "hospital to home care, hospital discharge care Nottingham, post discharge home care",
    brandEyebrow: "Hospital to Home",
    h1: "From ward to front door — <em>supported</em>.",
    lead: "Reassuring transition care that bridges discharge gaps so recovery continues safely where it belongs: home.",
    heroImg: "homecare.jpg",
    contentImg: "elderly.jpg",
    floatStat: "Discharge",
    floatLabel: "Ready when you are",
    trust: [
      { value: "Fast", label: "Post-discharge start" },
      { value: "Safe", label: "Home risk awareness" },
      { value: "Flex", label: "Days to weeks" },
      { value: "CQC", label: "Regulated bridge" },
    ],
    introTitle: "The most vulnerable hours deserve the strongest bridge.",
    intro: [
      "Leaving hospital can feel abrupt. Caretaz hospital-to-home care bridges that gap with practical support, safety routines and clear communication.",
      "Support can start immediately after discharge — a few intensive days or a longer recovery package — covering personal care, meals, medication prompts, mobility and settling into routines.",
      "Families gain a coordinated partner so nobody is left guessing what happens next.",
    ],
    pills: ["Immediate visits", "Meds & meals", "Mobility", "Home safety"],
    includes: [
      { label: "Start", title: "Immediate post-discharge visits", text: "Support timed to when you arrive home." },
      { label: "Care", title: "Personal care & mobility", text: "Help moving safely while strength returns." },
      { label: "Health", title: "Meal & medication support", text: "Prompts and preparation that protect recovery." },
      { label: "Home", title: "Safety settling-in", text: "Practical checks and routines that reduce risk." },
      { label: "Family", title: "Coordination updates", text: "Clear communication with relatives and professionals." },
      { label: "Next", title: "Ongoing review", text: "Step down — or step up — as recovery progresses." },
    ],
    why: [
      { title: "Safer discharge", text: "A planned soft landing instead of a cliff edge." },
      { title: "Recovery focus", text: "Support that protects progress made in hospital." },
      { title: "Short or longer packages", text: "Days of intensive help or extended recovery cover." },
      { title: "Family coordination", text: "Everyone knows the plan." },
    ],
    faqs: [
      { q: "How quickly can hospital-to-home care start?", a: "We aim to align with discharge timing. Contact us as soon as a discharge date is likely so we can prepare." },
      { q: "Do you need a full assessment first?", a: "We complete a focused assessment — often rapidly — so care can begin safely without unnecessary delay." },
      { q: "Can this become ongoing care?", a: "Yes. Many packages continue as hourly, overnight or specialist support once the transition settles." },
      { q: "What if discharge moves forward suddenly?", a: "Call our urgent pathway — we hold capacity for short-notice needs wherever possible." },
    ],
    related: [
      { href: "urgent-care.html", img: "homecare.jpg", cat: "Rapid", title: "Urgent Care" },
      { href: "stroke-care.html", img: "service-24hour.jpg", cat: "Recovery", title: "Stroke Care" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
    ],
    finaleTitle: "Make discharge day feel held.",
    finaleText: "Share the planned discharge date — we’ll ready support for the journey home.",
    formDefault: "Hospital to Home Care",
    schemaName: "Hospital to Home Care",
    schemaDesc: "Post-discharge home care in Nottingham bridging hospital to home with practical recovery support.",
  },
  {
    file: "companionship-care.html",
    slug: "companionship-care",
    navLabel: "Companionship Care",
    title: "Companionship Care in Nottingham | Caretaz Healthcare",
    meta: "Friendly companionship care in Nottingham that reduces loneliness and supports wellbeing — conversation, outings and light practical help from Caretaz.",
    keywords: "companionship care Nottingham, loneliness support, social home care, befriending care",
    brandEyebrow: "Companionship Care",
    h1: "Company that makes days <em>brighter</em>.",
    lead: "Reliable, friendly presence that eases loneliness and keeps everyday wellbeing front and centre.",
    heroImg: "elderly.jpg",
    contentImg: "team-1.jpg",
    floatStat: "Connect",
    floatLabel: "Trusted company",
    trust: [
      { value: "Social", label: "Less loneliness" },
      { value: "Outings", label: "Stay engaged" },
      { value: "Light", label: "Practical help" },
      { value: "CQC", label: "Vetted carers" },
    ],
    introTitle: "Independence thrives with connection.",
    intro: [
      "Companionship care blends social connection with light practical help — hobbies, conversation and community.",
      "Carers can accompany walks and appointments, share interests, and offer gentle home help. It’s ideal for people who are mostly independent but need trusted company.",
      "The result: days that feel fuller, safer and more human.",
    ],
    pills: ["Conversation", "Outings", "Hobbies", "Wellbeing checks"],
    includes: [
      { label: "Social", title: "Social visits", text: "Warm, consistent company that brightens the week." },
      { label: "Interest", title: "Hobby & outing support", text: "Help enjoying the activities that matter." },
      { label: "Appointments", title: "Accompanied visits", text: "A calm companion to clinics and community trips." },
      { label: "Home", title: "Light household help", text: "Small tasks that keep life ticking over." },
      { label: "Check-in", title: "Wellbeing check-ins", text: "A trusted pair of eyes noticing changes early." },
      { label: "Flex", title: "Visit frequency you choose", text: "From weekly chats to more frequent company." },
    ],
    why: [
      { title: "Less loneliness", text: "Regular company that genuinely connects." },
      { title: "Stay engaged", text: "Support to keep hobbies and community alive." },
      { title: "Light practical help", text: "Company plus useful hands around the home." },
      { title: "Trusted company", text: "Vetted carers families can rely on." },
    ],
    faqs: [
      { q: "Is companionship care only social?", a: "It’s primarily social, but can include light practical help, appointment companionship and wellbeing check-ins." },
      { q: "Who is it best for?", a: "People who remain largely independent but would benefit from trusted company and gentle support." },
      { q: "Can it include personal care?", a: "If personal care is needed, we can blend companionship with hourly care in one coherent plan." },
      { q: "How often do visits happen?", a: "As often as you choose — weekly, several times a week, or more." },
    ],
    related: [
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "holiday-companionship.html", img: "cta-bg.jpg", cat: "Breaks", title: "Holiday Companionship" },
      { href: "housekeeping-services.html", img: "service-cleaning.jpg", cat: "Practical", title: "Housekeeping" },
    ],
    finaleTitle: "Bring trusted company into the week.",
    finaleText: "Tell us what a good visit looks like — conversation, outings, or both — and we’ll match the right carer.",
    formDefault: "Companionship Care",
    schemaName: "Companionship Care",
    schemaDesc: "Companionship home care in Nottingham that reduces loneliness and supports everyday wellbeing.",
  },
  {
    file: "housekeeping-services.html",
    slug: "housekeeping-services",
    navLabel: "Housekeeping Services",
    title: "Housekeeping & Home Help in Nottingham | Caretaz Healthcare",
    meta: "Housekeeping and home help in Nottingham — cleaning, laundry, shopping and organisation that keep households manageable, alone or alongside personal care.",
    keywords: "housekeeping services Nottingham, home help, domestic care, cleaning for elderly",
    brandEyebrow: "Housekeeping & Home Help",
    h1: "A home that feels <em>manageable</em> again.",
    lead: "Essential domestic help that keeps households clean, organised and liveable — on its own or paired with personal care.",
    heroImg: "service-cleaning.jpg",
    contentImg: "service-cleaning.jpg",
    floatStat: "Home",
    floatLabel: "Clean & organised",
    trust: [
      { value: "Clean", label: "Safer living spaces" },
      { value: "Combine", label: "With personal care" },
      { value: "Reliable", label: "Regular routines" },
      { value: "CQC", label: "Trusted provider" },
    ],
    introTitle: "Domestic calm is part of good care.",
    intro: [
      "A comfortable home environment supports wellbeing. Caretaz housekeeping services provide essential home help — alone or alongside personal care packages.",
      "From cleaning and laundry to shopping and light organisation, we keep households manageable with reliable, regulated support families trust.",
      "When personal care is also needed, we can combine domestic help into one coherent plan so nothing falls through the gaps.",
    ],
    pills: ["Cleaning", "Laundry", "Shopping", "Organisation"],
    includes: [
      { label: "Clean", title: "Cleaning & tidy-ups", text: "Regular cleans that keep rooms fresh and safer underfoot." },
      { label: "Laundry", title: "Washing & changing", text: "Laundry cycles and bed changes handled with care." },
      { label: "Shop", title: "Shopping support", text: "Help with lists, groceries and putting items away." },
      { label: "Meals", title: "Meal-related help", text: "Kitchen support linked to nutrition and daily living." },
      { label: "Order", title: "Light organisation", text: "Decluttering touches that reduce overwhelm." },
      { label: "Combine", title: "Care + domestic packages", text: "Housekeeping woven into wider home care when needed." },
    ],
    why: [
      { title: "Cleaner, safer home", text: "Reduce trip hazards and daily domestic stress." },
      { title: "Combined packages", text: "Domestic help alongside personal care if required." },
      { title: "Reliable routines", text: "Visits you can set your week by." },
      { title: "Family relief", text: "Less weekend catch-up cleaning for relatives." },
    ],
    faqs: [
      { q: "Is housekeeping available without personal care?", a: "Yes. You can book domestic help on its own, or combine it with personal care in one package." },
      { q: "What tasks are included?", a: "Typically cleaning, tidy-ups, laundry, shopping support, meal-related help and light organisation — confirmed in your plan." },
      { q: "How often can someone visit?", a: "Weekly, fortnightly or more frequent visits depending on the size of the home and level of help needed." },
      { q: "Are carers DBS checked?", a: "Yes. Housekeeping is delivered by vetted team members under our CQC-regulated service standards." },
    ],
    related: [
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Visiting", title: "Hourly Care" },
      { href: "companionship-care.html", img: "team-1.jpg", cat: "Wellbeing", title: "Companionship Care" },
      { href: "supported-living.html", img: "service-supported.jpg", cat: "Independence", title: "Supported Living" },
    ],
    finaleTitle: "Restore calm to the household.",
    finaleText: "Tell us what feels hardest to keep on top of — we’ll design practical home help that sticks.",
    formDefault: "Housekeeping Services",
    schemaName: "Housekeeping Services",
    schemaDesc: "Housekeeping and home help in Nottingham including cleaning, laundry, shopping and organisation.",
  },
  {
    file: "24-hour-care.html",
    slug: "24-hour-care",
    navLabel: "24-Hour Care",
    title: "24-Hour Home Care in Nottingham | Caretaz Healthcare",
    meta: "Round-the-clock home care in Nottingham with a rotating or live-in team, always regulated by the CQC. Continuous support without leaving home.",
    keywords: "24 hour care Nottingham, round the clock home care, continuous care at home, 24/7 home care",
    brandEyebrow: "24-Hour Home Care",
    h1: "Care that never sleeps — from carers who <em>rest</em>.",
    lead: "Continuous, CQC-regulated support with a rotating team or live-in presence — so home stays home, day and night.",
    heroImg: "service-24hour.jpg",
    contentImg: "carer.jpg",
    floatStat: "24/7",
    floatLabel: "Continuous cover",
    trust: [
      { value: "2–3", label: "Carers on rota" },
      { value: "0", label: "Coverage gaps" },
      { value: "98%", label: "Homecare score" },
      { value: "CQC", label: "Fully regulated" },
    ],
    introTitle: "Round-the-clock presence without institutional walls.",
    intro: [
      "24-hour care from Caretaz provides continuous support for people with higher dependency needs who wish to remain at home.",
      "Most packages use a small rotating team — usually two to three carers on shifts — so each carer is rested and alert, with proper handovers. Live-in arrangements are also available where appropriate.",
      "It’s a powerful alternative to a care home: full personal and medical-prompt support, meals, household help and night cover, reviewed regularly as needs change.",
    ],
    pills: ["Shift rota", "Night cover", "Handovers", "Care home alternative"],
    includes: [
      { label: "Team", title: "Rotating shift cover", text: "Rested carers day and night with structured handovers." },
      { label: "Night", title: "Always-present nights", text: "Immediate response to falls, distress or medication needs." },
      { label: "Care", title: "Personal & clinical prompts", text: "Full personal care plus medication and health routines." },
      { label: "Home", title: "Meals & household", text: "Cooking, laundry and keeping the home running." },
      { label: "Review", title: "Regular package reviews", text: "Adjust intensity, specialties or patterns over time." },
      { label: "Specialist", title: "Dementia-capable nights", text: "Support for sundowning, wandering and night disorientation." },
    ],
    why: [
      { title: "Alert carers, always", text: "Shift patterns protect quality through the night." },
      { title: "Home not hospital", text: "Continuous care without leaving familiar surroundings." },
      { title: "Seamless handovers", text: "Nothing important is lost between carers." },
      { title: "Scalable specialty", text: "Add dementia, stroke or other expertise as needed." },
    ],
    faqs: [
      { q: "What's the difference between 24-hour care and live-in care?", a: "24-hour care typically uses a rotating team on shifts so carers stay rested. Live-in places one carer in the home with statutory rest and relief cover. We’ll recommend the best fit." },
      { q: "How many carers will be involved?", a: "Most packages use two to three carers on a rota so someone alert is always present." },
      { q: "Can the team change over time?", a: "Yes. We review regularly and can adjust patterns or add specialist experience such as dementia support." },
      { q: "Is 24-hour care suitable for dementia?", a: "Yes. Many continuous packages support dementia, including night-time disorientation and sundowning." },
    ],
    related: [
      { href: "live-in-care-for-couples.html", img: "team-2.jpg", cat: "Live-In", title: "Live-In Care For Couples" },
      { href: "overnight-care.html", img: "service-overnight.jpg", cat: "Nights", title: "Overnight Care" },
      { href: "dementia-care.html", img: "service-dementia.jpg", cat: "Specialist", title: "Dementia Care" },
    ],
    finaleTitle: "Explore continuous care that keeps home sacred.",
    finaleText: "We’ll talk honestly about rotas, costs and whether 24-hour or live-in is the stronger fit.",
    formDefault: "24-Hour Care",
    schemaName: "24-Hour Care",
    schemaDesc: "Continuous round-the-clock home care in Nottingham delivered by a rotating team or live-in carer, regulated by the CQC.",
  },
  {
    file: "urgent-care.html",
    slug: "urgent-care",
    navLabel: "Urgent Care",
    title: "Urgent Care at Home in Nottingham | Same-Day Care | Caretaz Healthcare",
    meta: "Need care arranged quickly? Caretaz Healthcare provides urgent, same-day home care in Nottingham — CQC-regulated carers when plans change suddenly.",
    keywords: "urgent care Nottingham, same day care, emergency home care, short notice carer, hospital discharge care",
    brandEyebrow: "Urgent & Same-Day Care",
    h1: "When plans change, we don’t make you <em>wait</em>.",
    lead: "Short-notice, CQC-regulated home care for sudden discharges, missing cover, falls and moments that can’t wait for a waiting list.",
    heroImg: "homecare.jpg",
    contentImg: "specialist.jpg",
    floatStat: "24–48h",
    floatLabel: "Typical first visit",
    trust: [
      { value: "24–48h", label: "Typical first visit" },
      { value: "50+", label: "Carer network" },
      { value: "7 days", label: "Responsive cover" },
      { value: "CQC", label: "Same standards" },
    ],
    introTitle: "Rapid response — without cutting corners.",
    intro: [
      "Urgent care from Caretaz is for moments when support must start quickly: hospital discharge at short notice, a regular carer unavailable, a fall or health scare, or cover needed before family can travel.",
      "We hold capacity for urgent requests where possible, complete a condensed risk and needs assessment, and confirm a visit window honestly — safeguarding is compressed, never skipped.",
      "Many families begin here and move into ongoing hourly, overnight or live-in care once the immediate situation stabilises.",
    ],
    pills: ["Same-day intent", "Rapid assessment", "Confirmed window", "Path to ongoing"],
    includes: [
      { label: "Speed", title: "Rapid assessment", text: "Phone or in-person briefing so the carer arrives prepared." },
      { label: "People", title: "Vetted, briefed carer", text: "The same recruitment and training standards as planned care." },
      { label: "Time", title: "Confirmed start window", text: "Clear expectations — not vague promises." },
      { label: "Family", title: "Fast communication", text: "Updates so everyone knows what happens next." },
      { label: "Bridge", title: "Gap-fill cover", text: "Personal care, meals, meds and safety checks as needed." },
      { label: "Next", title: "Handover to ongoing care", text: "A smooth path into a longer package if required." },
    ],
    why: [
      { title: "Capacity for urgency", text: "We plan for short-notice demand, not only diaries weeks ahead." },
      { title: "Safeguarding intact", text: "Checks are faster — not weaker." },
      { title: "Honest timelines", text: "We’ll tell you what is achievable today." },
      { title: "Continuity after crisis", text: "Urgent cover can become stable ongoing care." },
    ],
    faqs: [
      { q: "How quickly can urgent care start?", a: "In many cases within 24–48 hours, and sooner where a carer is available nearby. Call us and we’ll be honest about your situation." },
      { q: "Do you assess before the first visit?", a: "Yes — a condensed risk and needs assessment by phone or in person so care begins safely." },
      { q: "Can urgent care become ongoing?", a: "Yes. Many families transition to regular hourly, overnight or live-in support once things stabilise." },
      { q: "Is urgent care CQC regulated?", a: "Yes. Every visit, however quickly arranged, sits under our CQC registration." },
    ],
    related: [
      { href: "hospital-to-home.html", img: "homecare.jpg", cat: "Transition", title: "Hospital to Home" },
      { href: "hourly-care.html", img: "service-hourly.jpg", cat: "Ongoing", title: "Hourly Care" },
      { href: "overnight-care.html", img: "service-overnight.jpg", cat: "Nights", title: "Overnight Care" },
    ],
    finaleTitle: "Need care arranged quickly? Call now.",
    finaleText: "Tell us what’s changed today — we’ll confirm what we can put in place and how soon.",
    formDefault: "Urgent Care",
    schemaName: "Urgent Care",
    schemaDesc: "Same-day and short-notice home care in Nottingham for sudden changes including discharge, carer gaps and health scares.",
  },
];

const ALL_NAV = [
  ["urgent-care.html", "Urgent Care"],
  ["dementia-care.html", "Dementia Care"],
  ["overnight-care.html", "Overnight Care"],
  ["24-hour-care.html", "24-Hour Care"],
  ["hourly-care.html", "Hourly Care"],
  ["palliative-care.html", "Palliative / End-of-Life Care"],
  ["parkinsons-disease.html", "Parkinson’s Disease"],
  ["supported-living.html", "Supported Living"],
  ["holiday-companionship.html", "Holiday Companionship Care Breaks"],
  ["carer-respite.html", "Carer Respite Break Cover"],
  ["stroke-care.html", "Stroke Care"],
  ["cancer-care.html", "Cancer Care"],
  ["live-in-care-for-couples.html", "Live-In Care For Couples"],
  ["hospital-to-home.html", "Hospital to Home Care"],
  ["companionship-care.html", "Companionship Care"],
  ["housekeeping-services.html", "Housekeeping Services"],
];

const FORM_OPTIONS = [
  "Urgent Care", "Hourly Care", "Overnight Care", "24-Hour Care", "Dementia Care",
  "Parkinson's Care", "Stroke Care", "Cancer Care", "Palliative / End-of-Life Care",
  "Supported Living", "Live-In Care For Couples", "Hospital to Home Care",
  "Companionship Care", "Carer Respite", "Holiday Companionship", "Housekeeping Services", "Other",
];

function esc(s) {
  return String(s)
    .replace(/&/g, "&amp;")
    .replace(/</g, "&lt;")
    .replace(/>/g, "&gt;")
    .replace(/"/g, "&quot;");
}

function renderPage(s) {
  const canonical = `https://www.caretazhealthcare.co.uk/services/${s.file}`;
  const navLinks = ALL_NAV.map(
    ([href, label]) => `            <a href="../services/${href}">${esc(label)}</a>`
  ).join("\n");

  const formOpts = FORM_OPTIONS.map((o) => {
    const sel = o === s.formDefault ? " selected" : "";
    return `                <option${sel}>${esc(o)}</option>`;
  }).join("\n");

  const trust = s.trust
    .map(
      (t) => `          <div class="sd-trust__card reveal">
            <strong>${esc(t.value)}</strong>
            <span class="sd-trust__label">${esc(t.label)}</span>
          </div>`
    )
    .join("\n");

  const introParas = s.intro.map((p) => `            <p>${esc(p)}</p>`).join("\n");
  const pills = s.pills
    .map((p) => `              <span class="sd-pill"><i></i> ${esc(p)}</span>`)
    .join("\n");

  const includes = s.includes
    .map(
      (inc, i) => `          <article class="sd-include reveal" style="transition-delay:${(i * 0.05).toFixed(2)}s">
            <span class="sd-include__label">${esc(inc.label)}</span>
            <h3>${esc(inc.title)}</h3>
            <p>${esc(inc.text)}</p>
          </article>`
    )
    .join("\n");

  const why = s.why
    .map(
      (w, i) => `          <article class="sd-value reveal">
            <div class="sd-value__num">0${i + 1}</div>
            <h3>${esc(w.title)}</h3>
            <p>${esc(w.text)}</p>
          </article>`
    )
    .join("\n");

  const faqs = s.faqs
    .map(
      (f) => `          <details class="reveal">
            <summary>${esc(f.q)}</summary>
            <div class="sd-faq__body">${esc(f.a)}</div>
          </details>`
    )
    .join("\n");

  const faqSchema = s.faqs.map((f) => ({
    "@type": "Question",
    name: f.q,
    acceptedAnswer: { "@type": "Answer", text: f.a },
  }));

  const related = s.related
    .map(
      (r) => `          <a class="reveal" href="${esc(r.href)}">
            <div class="sd-related__media"><img src="../assets/images/${esc(r.img)}" alt="${esc(r.title)}" width="640" height="360" loading="lazy"></div>
            <div class="sd-related__body">
              <span class="sd-related__cat">${esc(r.cat)}</span>
              <h3>${esc(r.title)}</h3>
            </div>
          </a>`
    )
    .join("\n");

  return `<!DOCTYPE html>
<html lang="en-GB">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>${esc(s.title)}</title>
  <meta name="description" content="${esc(s.meta)}">
  <meta name="keywords" content="${esc(s.keywords)}">
  <link rel="canonical" href="${canonical}">
  <meta property="og:type" content="website">
  <meta property="og:title" content="${esc(s.title)}">
  <meta property="og:description" content="${esc(s.meta)}">
  <meta property="og:url" content="${canonical}">
  <meta property="og:image" content="https://www.caretazhealthcare.co.uk/assets/images/${esc(s.heroImg)}">
  <meta name="twitter:card" content="summary_large_image">
  <link rel="icon" href="../assets/images/favicon.png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Figtree:wght@400;500;600;700&family=Oswald:wght@500;600;700&family=Poppins:wght@400;500;600&family=Syne:wght@600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="stylesheet" href="../css/service-detail.css">
  <script type="application/ld+json">
  ${JSON.stringify({
    "@context": "https://schema.org",
    "@graph": [
      {
        "@type": "Service",
        name: s.schemaName,
        description: s.schemaDesc,
        provider: {
          "@type": "MedicalBusiness",
          name: "Caretaz Healthcare",
          telephone: "03330344121",
          email: "info@caretazhealthcare.co.uk",
          url: "https://www.caretazhealthcare.co.uk/",
          address: {
            "@type": "PostalAddress",
            streetAddress: "Suite B/105, Blenheim Court, 86-88 Mansfield Road",
            addressLocality: "Nottingham",
            postalCode: "NG1 3HD",
            addressCountry: "GB",
          },
          areaServed: "Nottingham",
        },
        areaServed: "Nottingham",
        url: canonical,
      },
      { "@type": "FAQPage", mainEntity: faqSchema },
      {
        "@type": "BreadcrumbList",
        itemListElement: [
          { "@type": "ListItem", position: 1, name: "Home", item: "https://www.caretazhealthcare.co.uk/" },
          { "@type": "ListItem", position: 2, name: "Services", item: "https://www.caretazhealthcare.co.uk/services/" },
          { "@type": "ListItem", position: 3, name: s.navLabel, item: canonical },
        ],
      },
    ],
  })}
  </script>
</head>
<body class="sd">
  <div class="topbar">
    <div class="container topbar__inner">
      <div class="topbar__contacts">
        <a href="tel:03330344121">0333 034 4121</a>
        <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a>
      </div>
      <div class="topbar__social">
        <span>Follow Us :</span>
        <a class="social-dot" href="#" aria-label="Facebook">f</a>
        <a class="social-dot" href="#" aria-label="LinkedIn">in</a>
        <a class="social-dot" href="#" aria-label="YouTube">yt</a>
      </div>
    </div>
  </div>
  <header class="site-header">
    <div class="container site-header__inner">
      <a class="logo" href="../index.html" aria-label="Caretaz Healthcare Ltd. home">
        <img src="../assets/images/logo.png" alt="Caretaz Healthcare Ltd.">
      </a>
      <button class="nav-toggle" type="button" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
      <nav class="nav" aria-label="Primary">
        <a href="../index.html">Home</a>
        <a href="../about-us.html">About Us</a>
        <div class="nav__dropdown">
          <a class="is-active" href="../services/index.html">Services</a>
          <div class="nav__menu">
${navLinks}
          </div>
        </div>
        <a href="../blog/index.html">Blog</a>
        <a href="../pricing.html">Pricing</a>
        <a href="../faqs.html">FAQs</a>
        <div class="nav__dropdown">
          <a href="../contact-us.html">Contact Us</a>
          <div class="nav__menu">
            <a href="../appointment.html">Appointment</a>
          </div>
        </div>
      </nav>
      <div class="header-cta"><a class="btn btn--teal" href="../appointment.html">Make an Appointment</a></div>
    </div>
  </header>

  <main>
    <section class="sd-hero" aria-labelledby="sd-hero-heading">
      <div class="sd-hero__bg" style="background-image:url('../assets/images/${esc(s.heroImg)}')" aria-hidden="true"></div>
      <div class="sd-hero__inner">
        <nav class="breadcrumbs" aria-label="Breadcrumb">
          <a href="../index.html">Home</a> <span>/</span>
          <a href="index.html">Services</a> <span>/</span>
          <span>${esc(s.navLabel)}</span>
        </nav>
        <p class="sd-brand">Caretaz Healthcare · ${esc(s.brandEyebrow)}</p>
        <h1 id="sd-hero-heading">${s.h1}</h1>
        <p class="sd-hero__lead">${esc(s.lead)}</p>
        <div class="btn-row">
          <a class="btn btn--teal" href="#appointment">Book Assessment</a>
          <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
        </div>
      </div>
    </section>

    <section class="sd-trust">
      <div class="container">
        <div class="sd-trust__grid">
${trust}
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="about-service">
      <div class="container">
        <div class="sd-split">
          <div class="sd-split__media reveal-left">
            <img src="../assets/images/${esc(s.contentImg)}" alt="${esc(s.schemaName)} at home with Caretaz Healthcare" width="720" height="540" loading="eager">
            <div class="sd-split__float">
              <strong>${esc(s.floatStat)}</strong>
              <span>${esc(s.floatLabel)}</span>
            </div>
          </div>
          <div class="sd-split__copy reveal-right">
            <p class="eyebrow">About this service</p>
            <h2 id="about-service">${esc(s.introTitle)}</h2>
${introParas}
            <div class="sd-pill-row">
${pills}
            </div>
            <div class="btn-row">
              <a class="btn btn--navy" href="../appointment.html">Make Appointment</a>
              <a class="btn btn--outline-teal" href="index.html">All Services</a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog" aria-labelledby="includes-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">What’s included</p>
          <h2 id="includes-heading">Support shaped around real life</h2>
          <p>Every package is personalised after assessment — these are the building blocks families ask for most.</p>
        </div>
        <div class="sd-includes">
${includes}
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--ink" aria-labelledby="why-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow" style="color:var(--teal);">Why families choose this</p>
          <h2 id="why-heading">Impact you can feel at home</h2>
          <p>More than a service label — a standard of how we show up.</p>
        </div>
        <div class="sd-values">
${why}
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="process-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">How it starts</p>
          <h2 id="process-heading">Three clear steps to care</h2>
          <p>No jargon. No pressure — just a path that feels human.</p>
        </div>
        <div class="sd-process">
          <article class="sd-step reveal">
            <div class="sd-step__num">01</div>
            <h3>Make contact</h3>
            <p>Call, email or book online. Tell us what you need and how soon.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">02</div>
            <h3>Assessment</h3>
            <p>We meet at home (or virtually) to understand routines, risks and goals.</p>
          </article>
          <article class="sd-step reveal">
            <div class="sd-step__num">03</div>
            <h3>Care begins</h3>
            <p>Agree the plan, meet your carers, and start support that feels settled.</p>
          </article>
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog" aria-labelledby="faq-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">Good to know</p>
          <h2 id="faq-heading">Questions families ask first</h2>
          <p>Straight answers before you book.</p>
        </div>
        <div class="sd-faq">
${faqs}
        </div>
      </div>
    </section>

    <section class="sd-section" aria-labelledby="related-heading">
      <div class="container">
        <div class="sd-head reveal">
          <p class="eyebrow">Explore further</p>
          <h2 id="related-heading">Related care pathways</h2>
          <p>Many families combine services as needs evolve.</p>
        </div>
        <div class="sd-related">
${related}
        </div>
      </div>
    </section>

    <section class="sd-section sd-section--fog">
      <div class="container">
        <div class="cqc-banner reveal-zoom">
          <img src="../assets/images/cqc.png" alt="Care Quality Commission">
          <div>
            <h3>Fully regulated by the Care Quality Commission (CQC)</h3>
            <p><strong>What this means for you:</strong> Independent oversight of quality and safety. Caretaz care meets national expectations — and your information is protected through our ICO registration.</p>
          </div>
          <div class="badge-row"><img src="../assets/images/ico.png" alt="ICO registered"></div>
        </div>
      </div>
    </section>

    <section class="sd-section">
      <div class="container">
        <div class="sd-finale reveal">
          <div>
            <p class="eyebrow" style="color:var(--teal);">Ready when you are</p>
            <h2>${esc(s.finaleTitle)}</h2>
            <p>${esc(s.finaleText)}</p>
            <div class="btn-row">
              <a class="btn btn--teal" href="../appointment.html">Make an Appointment</a>
              <a class="btn btn--outline" href="tel:03330344121">Call 0333 034 4121</a>
            </div>
          </div>
          <div class="sd-finale__media">
            <img src="../assets/images/carer.jpg" alt="Caretaz caregiver" width="560" height="360" loading="lazy">
          </div>
        </div>
      </div>
    </section>

    <section class="section section--mist" id="appointment">
      <div class="container appoint-grid">
        <div class="reveal">
          <p class="eyebrow">Make appointment</p>
          <h2>Book an assessment</h2>
          <p>Share a few details and we’ll arrange a conversation as soon as possible. For urgent needs, please telephone.</p>
          <p><strong>Phone:</strong> <a href="tel:03330344121">0333 034 4121</a><br>
             <strong>Email:</strong> <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a><br>
             <strong>Address:</strong> Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</p>
        </div>
        <form class="form-card reveal" data-appointment-form>
          <div class="form-grid">
            <div class="form-field"><label for="name">Name</label><input id="name" name="name" required autocomplete="name"></div>
            <div class="form-field"><label for="email">Email</label><input id="email" name="email" type="email" required autocomplete="email"></div>
            <div class="form-field"><label for="phone">Phone</label><input id="phone" name="phone" required autocomplete="tel"></div>
            <div class="form-field"><label for="service">Select Services</label>
              <select id="service" name="service" required>
${formOpts}
              </select>
            </div>
            <div class="form-field form-field--full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Tell us a little about the support you need…"></textarea></div>
          </div>
          <button class="btn btn--teal" type="submit" style="margin-top:.75rem;">Make Appointment</button>
          <p class="form-note">For urgent needs, please telephone 0333 034 4121.</p>
        </form>
      </div>
    </section>
  </main>

  <a class="sd-float" href="tel:03330344121" aria-label="Call Caretaz Healthcare"><span></span> Call now</a>

  <footer class="site-footer">
    <div class="container">
      <div class="footer-grid">
        <div>
          <a class="logo" href="../index.html"><img src="../assets/images/logo-on-dark.png" alt="Caretaz Healthcare Ltd."></a>
          <p style="margin-top:.75rem;">Compassion is the basis of our care. We support independence, privacy and flexibility with reliable, person-centred home care.</p>
        </div>
        <div>
          <h4>Quick Links</h4>
          <div class="footer-links">
            <a href="../index.html">Home</a>
            <a href="../about-us.html">About Us</a>
            <a href="../services/index.html">Services</a>
            <a href="../pricing.html">Pricing</a>
            <a href="../faqs.html">FAQs</a>
            <a href="../blog/index.html">Blog</a>
            <a href="../contact-us.html">Contact Us</a>
          </div>
        </div>
        <div>
          <h4>Our Services</h4>
          <div class="footer-links">
            <a href="../services/urgent-care.html">Urgent Care</a>
            <a href="../services/dementia-care.html">Dementia Care</a>
            <a href="../services/overnight-care.html">Overnight Care</a>
            <a href="../services/24-hour-care.html">24-Hour Care</a>
            <a href="../services/hourly-care.html">Hourly Care</a>
            <a href="../services/palliative-care.html">Palliative / End-of-Life Care</a>
            <a href="../services/index.html">View all services</a>
          </div>
        </div>
        <div>
          <h4>Get In Touch</h4>
          <ul class="footer-contact">
            <li><strong>Phone:</strong> <a href="tel:03330344121">0333 034 4121</a></li>
            <li><strong>Email:</strong> <a href="mailto:info@caretazhealthcare.co.uk">info@caretazhealthcare.co.uk</a></li>
            <li><strong>Web:</strong> <a href="https://www.caretazhealthcare.co.uk/">www.caretazhealthcare.co.uk</a></li>
            <li><strong>Address:</strong> Suite B/105, Blenheim Court, 86-88 Mansfield Road, Nottingham NG1 3HD</li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>Copyright © 2026 Caretaz Healthcare. All rights reserved.</span>
        <span>Registered with the CQC &amp; ICO</span>
      </div>
    </div>
  </footer>
  <script src="../js/main.js"></script>
  <script src="../js/service-detail.js"></script>
</body>
</html>
`;
}

let count = 0;
for (const service of SERVICES) {
  const out = path.join(outDir, service.file);
  fs.writeFileSync(out, renderPage(service), "utf8");
  count += 1;
  console.log("Wrote", service.file);
}
console.log(`Generated ${count} service pages.`);
