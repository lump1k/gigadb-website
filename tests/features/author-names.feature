Feature: Standardizing the display of names of a paper's authors
	As a Gigascience editor,
	I want the name of the authors of papers to be the same between Gigascience Journal and GigaDB.org
	So that web visitors and researchers have a consistent experience navigating between the journal and the datasets



Scenario Outline: 
	Given author has surname "<surname>"
	And author has first name "<first_name>"
	And author has middle name "<middle_name>"
	When I am on "<dataset>"
	Then I should see "<display_name>"

Examples:
    | surname| first_name | middle_name | dataset | display_name |
	| Teo | Audrey | SM | /dataset/100182 | Teo ASM |
	| Gilbert | M.Thomas | P | /dataset/101031 | Gilbert MTP | 
	| Muñoz | Ángel | GG | /dataset/100243 | Muñoz ÁGG | 
	| Martinez-Cruzado | Juan | Carlos | /dataset/100039 | Martinez-Cruzado JC |
	| Shen | Yong-Yi |  | /dataset/100027 | Shen Y | 
	| Tong | Steve | KwanHok | /dataset/100245 |  Tong SK |
	| Schiøtt, | Morten | | /dataset/100011 | Schiøtt M |
	| Hekkert| Bas | te Lintel | /dataset/100016 | Hekkert BtL |
	| Potato Genome Sequencing Consortium| | | /dataset/100016 | Potato Genome Sequencing Consortium |



# Feature: Adjusting how an author's name is displayed on a dataset page
# As a paper author,
# I want to be able to set up how my name appears on gigadb paper's page. 
# So that it appears correctly on the dataset page.


