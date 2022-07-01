echo "Project Name: demostore";
echo $(git init);
echo $(git add .);
echo $(git commit -m "first commit");
echo $(git branch -M master);
echo $(git remote add origin https://github.com/farazhashmi21/demostore.git);
echo $(git remote -v);
echo $(git push -u origin master);
