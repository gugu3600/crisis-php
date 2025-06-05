for noti and app


Category => id name timestamps (All,Fire Alert,Water Float,Earthquake,Avalance,Goverment(esp War),Health,Sucide,emergency)


user_category => id user_id category_id timestamps;

For Location 
Map => id,title,description,latitude,longitude,stage,reported_user_id,verified_user_id,is_verified,timestamps

category_map => id,category_id,map_id


For Communicate
 
Roles => Admin User Guests
Users => id username email password like report timestamp role_id region_id 

Chat_Room => id name timestamp (default => Main)
user_chatrooms => id user_id chatroom_id
Messages => id Messages user_id chatroom_id timestamp

For Resourses 
items => id name timestamps (water-bottle,masks,body-bag,food,clothes,coffee,band-aid,medicine)
donation_items => id,user_id,item_counts,item_id,location_id,item_id,timestamp

Optional
Messages => id Messages timestamp 
user_messages = id user_id Messages_id
chatroom_messages = id Messages_id chatroom_id
