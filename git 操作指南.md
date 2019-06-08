git remote show origin       从远程分支上查看权限



git 应用场景   ----创建git用户
git config --local user.name '史青'
git config --local user.email '475576181@qq.com'

git 应用场景   -----ssh生产公钥 
$ ssh-keygen -t rsa -C "475576181@qq.com"
一直按回车、如果要输入密码，最好输入个
继续按回车
最后有个生成秘钥的地址  

git 应用场景   ----创建文件夹并使用git作为版本控制
git  init                    初始化文件夹（git初始化）
git  status                  查看当前git状态

git 应用场景   ----提交代码到本地分支
git status                   查看git 的当前状态
git add .                    提交文件到暂存区
git commit -m '版本名称'      提交版本到本地分支

git 应用场景   ----比对版本中代码差异（绿色新增、红色删除）
git diff                     查看当前没有add 的内容修改；
git diff --cached            查看已经add 没有commit 的改动：
git diff HEAD                查看当前没有add和commit的改动：
git diff 版本号码1 版本号码2      查看任意两个版本之间的改动：

git 应用场景   ----代码回滚到上个版本
git log                          查看提交记录，即：历史版本记录 或  git log –pretty=oneline
git reset -- hard 版本串         项目回滚到项目上个版本

git 应用场景   ----刚刚commit的文件发现了错误（误删除），如何回滚。
方式一：						    使用场景----代码回滚到上一个版本的方法
方式二：						 	从新add并commit下问题文件
方式三：git checkout -- filename 撤销某个文件工作区的全部更改 （一定要带 --）
	
git 应用场景   ----下载github上的代码
git clone   github上的地址    从github上克隆代码

git 应用场景   ---- 创建一个空的仓库并和本地仓库进行关联
创建空仓库需要在github、gitlab的个人账户上进行创建。
git remote add origin https://github.com/zhengqilunji/Algorithm.git  进行远程仓库关联
git push -u origin master       把本地仓库分支master的内容推送到元仓库去