### User
- name
- email
- phone
- address
- password
- admin

### Job Seeker
- user_id (fk)
- notice_period
- year_of_exp

### Education
- jobseeker_id
- title
- institute
- start_year
- pass_year
- result

### Skills 
- title
- jobseeker_id
- level

### Experience
- jobseeker_id
- title
- org_name
- start
- end

### Employer
- user_id
- org_name
- org_details
- org_size
- org_address1
- org_address2
- org_address3
- org_url

### Job
- employer_id
- title
- description
- responsibilities
- requirements
- min_salary
- max_salary
- benefits
- job_type
- location