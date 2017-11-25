Entity
+ Client ✔
	+ Name
		- firstname
		- lastname
		- maiden name
	+ Home address
		- street
		- town/province
		- city
		- post code
	+ Contact
		- home
		- mobile
	- EMAIL(unique)
	- contract_duration
	- service_day
	- start_time
	- hour(s)
	- payment_plan
	- active
	- start_date
	- end_date

+ Services ✔
	- service_id(unique)
	- title
	- desc

+ Client_service ✔
	- EMAIL(foreign)
	- service_id(foreign)
	- date requested

+ Client_janitor ✔
	- client(foreign)
	- janitor(foreign)

+ Serviced ✔
	- client(foreign)
	- janitor(foreign)
	- hour(s)
	- date

+ Charges ✔
	- title
	- service/hour

+ Supervisor ✔ (>>users<<)
	+ Name
		- firstname
		- lastname
	+ Home address
		- street
		- town/province
		- city
		- post code
	+ Contact
		- home
		- mobile
	- nationality
	- EMAIL(unique)
	- salt
	- password
	- created_at
	- updated_at

+ Janitors ✔
	+ Name
		- firstname
		- lastname
		- maiden name
	+ Home address
		- street
		- town/province
		- city
		- post code
	+ Contact
		- home
		- mobile
	- nationality
	- EMAIL(unique)
	- salt
	- password
	- SSN
	- Work permit expiry date
	- registered_on
	- updated_at

+ supervisor_janitor ✔
	- supervisor(foreign)
	- janitor(foreign)
	- approval
	- approved_at
	- disabled_at

+ Documents ✔
	- id
	- title
	- desc
	- location

+ FAQs ✔
	- id
	- question
	- answer